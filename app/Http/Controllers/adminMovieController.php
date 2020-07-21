<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class adminMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return movies homepage
        $datas = Movie::orderBy('created_at')->paginate(6);
        return view('admin.movies-all', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Perform Validations
        $this->validate(
            $request,
            [
                'title'=>'required',
                'duration'=>'required',
                'description'=>'required',
                'year_released'=>'required',
                'classification'=>'required',
                'feature_image'=>'image|nullable|max:1999'
            ]
        );

        //Handle Feature Image Upload
        if($request->hasFile('feature_image')){
            //Get file name with extension
            $fileNameWithExtension = $request->file('feature_image')->getClientOriginalName();

            //Get file name witout extension
            $filename = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            //get extension
            $extension = $request->file('feature_image')->getClientOriginalExtension();

            //Create a eunique filename to store
            $fileNameToStore = time().'.'.$extension;

            //Generating movie name
            $movieNameToStore = time().'.'.'mp4';

            //Upload feature image
            $path = $request->file('feature_image')->storeAs('public/assets/img/movies', $fileNameToStore); 
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        //Initialize new movie
        $movie = new Movie;

        //Assign Request values to database fields
        $movie->title = $request->get('title');
        $movie->feature_image = $fileNameToStore;
        $movie->movie_identifier = $movieNameToStore;
        $movie->duration = $request->get('duration');
        $movie->description = $request->get('description');
        $movie->year_released = $request->get('year_released');
        $movie->classification = $request->get('classification');

        //Save events data in the database
        $movie->save();

        //Redirect Admin
        return redirect()->route('home-movies')->with('success', 'Record Successfully Saved!');


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
