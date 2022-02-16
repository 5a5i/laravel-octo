<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Shows;
use App\Models\Rating;
use App\Models\Genre;
use App\Models\MovieGenres;
use App\Models\Language;
use App\Models\MovieLanguages;
use App\Models\Performer;
use App\Models\MoviePerformers;
use App\Models\Director;
use App\Models\MovieDirectors;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function genre(Request $request)
    {
        $search = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('genre') && $request->genre !== null){

            $search = Movie::join('movie_genres', 'movies.id', '=', 'movie_genres.movie_id')
            ->join('genres', 'movie_genres.genre_id', '=', 'genres.id')
            ->select('movies.id AS Movie_ID','movies.title AS Title','genres.genre AS Genre','movies.description AS Description')
            ->where('genres.genre',$request->genre)->nowshowing()->get();

        }

        return json_encode($search);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function timeslot(Request $request)
    {
        $search = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('theater_name') && $request->theater_name !== null && $request->has('time_start') && $request->time_start !== null && $request->has('time_end') && $request->time_end !== null){

            $search = Movie::join('shows', 'movies.id', '=', 'shows.movie_id')
            ->join('theaters', 'shows.theater_id', '=', 'theaters.id')
            ->select('movies.id AS Movie_ID','movies.title AS Title','theaters.name AS Theater_name',DB::raw('DATE_FORMAT(shows.start_time,"%Y-%m-%dT%H:%i%:%s") AS Start_time'),DB::raw('DATE_FORMAT(shows.end_time,"%Y-%m-%dT%H:%i%:%s") AS End_time'),'movies.description AS Description','shows.theater_room_no AS Theater_room_no')
            ->where('theaters.name',$request->theater_name)->where('shows.start_time','>=',$request->time_start)->where('shows.end_time','<=',$request->time_end)->get();

        }

        return json_encode($search);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function specific_movie_theater(Request $request)
    {
        $search = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('theater_name') && $request->theater_name !== null && $request->has('d_date') && $request->d_date !== null){

            // echo $request->d_date;
            // exit;
            $search = Movie::join('shows', 'movies.id', '=', 'shows.movie_id')
            ->join('theaters', 'shows.theater_id', '=', 'theaters.id')
            ->select('movies.id AS Movie_ID','movies.title AS Title','theaters.name AS Theater_name',DB::raw('DATE_FORMAT(shows.start_time,"%Y-%m-%dT%H:%i%:%s") AS Start_time'),DB::raw('DATE_FORMAT(shows.end_time,"%Y-%m-%dT%H:%i%:%s") AS End_time'),'movies.description AS Description','shows.theater_room_no AS Theater_room_no')
            ->where('theaters.name',$request->theater_name)->where(DB::raw('DATE_FORMAT(shows.start_time,"%Y-%m-%d")'),$request->d_date)->get();

        }

            // echo $search->toSql();
            // exit;

        return json_encode($search);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search_performer(Request $request)
    {
        $search = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('performer_name') && $request->performer_name !== null){

            $search = Movie::join('movie_performers', 'movies.id', '=', 'movie_performers.movie_id')
            ->join('performers', 'movie_performers.performer_id', '=', 'performers.id')
            ->join('ratings', 'movies.id', '=', 'ratings.movie_id')
            ->select('movies.id AS Movie_ID',DB::raw('ROUND(AVG(ratings.rating),1) AS Overall_rating'),'movies.title AS Title','movies.description AS Description')
            ->where('performers.name',$request->performer_name) ->groupBy('movies.id','movies.title','movies.description')->get();

        }

        return json_encode($search);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function give_rating(Request $request)
    {
        $response = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('movie_title') && $request->movie_title !== null && $request->has('username') && $request->username !== null
         && $request->has('rating') && $request->rating !== null && $request->has('r_description') && $request->r_description !== null){

            $movie = Movie::where('movies.title','=',$request->movie_title)->first();

            if(!empty($movie) && isset($movie->id)){

                $rating = Rating::updateOrCreate(
                    ['movie_id' => $movie->id, 'username' => $request->username],
                    ['rating' => $request->rating, 'description' => $request->r_description]
                );

                $response['massage'] = 'Successfully added review for the '.$movie->title.' by user: '.$rating->username;
                $response['success'] = true;

            } else {

                $response['massage'] = 'Movie Not Found..!';
                $response['success'] = false;

            }

        }

        return json_encode($response);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function new_movies(Request $request)
    {
        $search = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('r_date') && $request->r_date !== null){

            $search = Movie::join('ratings', 'movies.id', '=', 'ratings.movie_id')
            ->select('movies.id AS Movie_ID',DB::raw('ROUND(AVG(ratings.rating),1) AS Overall_rating'),'movies.title AS Title','movies.description AS Description')
            ->where('movies.release','<=',$request->r_date)->groupBy('movies.id','movies.title','movies.description')->orderBy('movies.release','desc')->get();

        }

        return json_encode($search);
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_movie(Request $request)
    {
        $response = ['massage' => 'Missing or empty required parameter..!','success' => false];

        if($request->has('title') && $request->title !== null && $request->has('release') && $request->release !== null && $request->has('length') && $request->length !== null && $request->has('description') && $request->description !== null && $request->has('mpaa_rating') && $request->mpaa_rating !== null && $request->has('genre') && $request->genre !== null && $request->has('language') && $request->language !== null && $request->has('performer') && $request->performer !== null && $request->has('director') && $request->director !== null){

            $movie = Movie::updateOrCreate(
                ['title' => $request->title],
                ['release' => $request->release, 'length' => $request->length, 'description' => $request->description, 'mpaa_rating' => $request->mpaa_rating]
            );


            if(!empty($movie) && isset($movie->id)){

                foreach ($request->genre as $genre) {
                    $creategenre = Genre::firstOrCreate(['genre' => $genre]);
                    MovieGenres::create(['movie_id' => $movie->id,'genre_id' => $creategenre->id]);
                }

                foreach ($request->language as $language) {
                    $createlanguage = Language::firstOrCreate(['language' => $language]);
                    MovieLanguages::create(['movie_id' => $movie->id,'language_id' => $createlanguage->id]);
                }

                foreach ($request->performer as $performer) {
                    $createperformer = Performer::firstOrCreate(['name' => $performer]);
                    MoviePerformers::create(['movie_id' => $movie->id,'performer_id' => $createperformer->id]);
                }

                foreach ($request->director as $director) {
                    $createdirector = Director::firstOrCreate(['name' => $director]);
                    MovieDirectors::create(['movie_id' => $movie->id,'director_id' => $createdirector->id]);
                }

                $response['massage'] = 'Successfully added movie '.$movie->title.' with Movie_ID '.$movie->id;
                $response['success'] = true;

            } else {

                $response['massage'] = 'Unable to add movie, please try again..!';
                $response['success'] = false;

            }

        }

        return json_encode($response);
    }

}
