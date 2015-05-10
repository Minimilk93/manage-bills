<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\House;
use App\Bill;
use App\User;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class BillsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $name = Auth::user()->name;
        $user = User::with('house')->whereName($name)->first();
        $id = Auth::id();

        $query = $request->get('q');

        if ($query) {
            $bills = Bill::where('bill_name', 'LIKE', "%$query%")
                ->orWhere('bill_date', 'LIKE', "%$query%")->get();
        }
        else
        {
            $bills = Bill::where('user_id', $id)->get();

        }

		return view ('bills.show')->withBills($bills)->withUser($user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $name = Auth::user()->name;
        $user = User::with('house')->whereName($name)->first();
        $id = Auth::id();

        $bill = new Bill();

        $bill->bill_name = $request->get('bill_name');
        $bill->user_id = $id;
        $bill->bill_date = $request->get('bill_date');
        $bill->bill_amount = $request->get('bill_amount');
        $bill->bill_comments = $request->get('bill_comments');
        $bill->bill_divide = $request->get('bill_divide');
        $bill->bill_shared = $request->get('bill_shared');

        $bill->save();

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name)
	{
        $user = User::whereName($name)->first();
        $house = $user->house;

        return view ('bills.create')->withUser($user)->withHouse($house);
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
