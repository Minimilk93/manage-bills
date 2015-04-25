<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\House;

class ProfileController extends Controller
{
    protected $house_id;
    /**
     * Display the specified resource.
     *
     * Has try catch block incase gibberish is entered in to URL. Redirects back to home page.
     *
     * @param  int $id
     * @return Response
     */

    public function __construct(House $house_id)
    {
        $this->house_id = $house_id;
    }

    public function show($name, House $house_id)
    {

        $query = User::with('house')->where($house_id)->first();
        $users = User::where('house_id', 'LIKE', "%$query%")->get();

        try {
            $user = User::with('house')->whereName($name)->first();
        } catch (ModelNotFoundException $e) {
            return redirect::home();
        }
        return view('user.show')->withUser($user)->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($name)
    {
        $user = User::whereName($name)->first();

        return view('user.edit')->withUser($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($name, Request $request)
    {
        $user = User::whereName($name)->first();

        $user->house->first_line_address = $request->get('first_line_address');
        $user->house->city = $request->get('city');
        $user->house->postcode = $request->get('postcode');

        $user->house->save();

        return redirect('/');
    }
}