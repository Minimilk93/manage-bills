<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
     * Display the index page of the web application.
	 * @return Response
	 */
	public function index()
	{



		return view('pages.index', compact('name'));
	}

	/**
	 * Show advice page.
     *
	 *
	 * @return Response
	 */
	public function advice()
	{
        return view('pages.advice');
	}

	/**
	 * Store a newly created resource in storage.
     *
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
