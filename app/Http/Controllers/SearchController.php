<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index(){
    return view('search');
    }

    public function redirect(){
    		return redirect('/dvds/search');
    }

    public function results(){
    	$search = request ('title');

    	// If user goes to /dvds without query, show all dvds
    	if (!$search){
    		//Show all DVDs
    		$dvds = DB::table('dvds')
    		-> select('title','rating_name','genre_name')
    		-> join('ratings','dvds.rating_id','=','ratings.id')
    		-> join('genres','dvds.genre_id','=','genres.id')
    		-> orderBy('title')
    		-> get();
    	// dd($dvds);

    	return view('search-results',[
    		'dvds' => $dvds,
    		'search' => $search
    	]);
    	}

    	/*
		SELECT title, rating, genre
		FROM dvds
		INNER JOIN ratings
		ON dvds.rating_id = ratings.id
		INNER JOIN genres
		ON dvds.genre_id = genres.id
		WHERE title LIKE '%search%'
		ORDER BY title
    	*/

		else {
    	$dvds = DB::table('dvds')
    		-> select('title','rating_name','genre_name')
    		-> join('ratings','dvds.rating_id','=','ratings.id')
    		-> join('genres','dvds.genre_id','=','genres.id')
    		-> where('title','LIKE',"%$search%")
    		-> orderBy('title')
    		-> get();
    	// dd($dvds);

    	return view('search-results',[
    		'dvds' => $dvds,
    		'search' => $search
    	]);
    }
    }
}
