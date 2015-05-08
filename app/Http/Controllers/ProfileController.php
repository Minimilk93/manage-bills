<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\House;
use App\Http\Requests\CreateProfileRequest;

class ProfileController extends Controller
{
    protected $house_id;
    protected $name;
    /**
     * Display the specified resource.
     *
     * Has try catch block incase gibberish is entered in to URL. Redirects back to home page.
     *
     * @param  int $id
     * @return Response
     */

    public function __construct(Request $request)
    {

    }

    public function show($name)
    {

        try {
            $user = User::with('house')->whereName($name)->first();
        } catch (ModelNotFoundException $e) {
            return redirect::home();
        }
        return view('user.show')->withUser($user);
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
     * Show a form to create a house for a specified user.
     *
     */


    public function store(Request $request)
    {
        $name = Auth::user()->name;
        $user = User::whereName($name)->first();


        $house = new House();
        $house->first_line_address = $request->get('first_line_address');
        $house->city = $request->get('city');
        $house->postcode = $request->get('postcode');

        $user->house()->save($house);

        return redirect('/');

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


        $user ->house = new House();
        $user ->house->first_line_address = $request->get('first_line_address');
        $user ->house->city = $request->get('city');
        $user ->house->postcode = $request->get('postcode');

        $user->house->save();

        return redirect('/');
   }
}