<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller {

	/**
	 * Display a listing of the resource.
     *
     * Search query takes 'q' and queries it against the database.
     * Otherwise the entire reviews entries are displayed.
	 *
	 * @return Response
	 */
	public function index(Request $request, Review $review)
	{
        $query = $request->get('q');

        if ($query) {
            $reviews = Review::where('utility', 'LIKE', "%$query%")
                ->orWhere('location', 'LIKE', "%$query%")->get();
        }
        else
        {
            $reviews = Review::all();
        }

        return view('reviews.index')->withReviews($reviews);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
     *
     * Stores new review inputs from the request class.
	 *
	 * @return Response
	 */
	public function store(Request $request, Review $review)
	{
		$input = $request->all();

        $review->create($request->all());

        return redirect('/reviews');
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
