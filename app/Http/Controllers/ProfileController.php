<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\House;

class ProfileController extends Controller {

	/**
	 * Display the specified resource.
	 *
     * Has try catch block incase gibberish is entered in to URL. Redirects back to home page.
     *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
        try {
            $user = User::with('house')->whereName($name)->first();
        }
        catch(ModelNotFoundException $e)
        {
            return redirect::home();
        }
        return view('user.show')->withUser($user);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
