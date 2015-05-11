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
     * Pull the user data along with the house data through.
     *
     * To get the bills data we use a query on the database to pull fields with the same id as
     * the currently signed in user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $name = Auth::user()->name;
        $user = User::with('house')->whereName($name)->first();
        $id = Auth::id();


            $bills = Bill::where('user_id', $id)->get();


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
     * We take the fields from the user request and set the to fields of a new bill in the Bill eloquent model.
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

        return redirect()->route('bill.index');
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



}
