<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class frontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mwanzo()
    {
        return view('nyumbani.mwanzo');
    }

    public function movies(){
        $movies = Movie::orderBy('created_at', 'DESC')->get();
        
        return view('nyumbani.movies', compact('movies'));
    }

    public function adminDashboard(){
        $movies = Movie::all(); //Get all available movies stored inthe database
        $movie_count = $movies->count();
        
        return view('admin.dashboard', compact('movie_count'));
    }

    public function movie_details($id){
        $movie_details = Movie::find($id);

        return view('nyumbani.movie-details', compact('movie_details'));
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
