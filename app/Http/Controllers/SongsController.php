<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Song;

use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
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
    public function destroy($song_id)
    {
        Song::find($song_id)->delete();

        return redirect('songs');
    }

    public function songCount(){

//        SELECT musicians.name, COUNT(Musician_has_Song.song_id) AS count
//        FROM musicians LEFT JOIN Musician_has_Song On musicians.id = Musician_has_Song.musician_id
//        Group By musicians.name;
        $artists = DB::table('musicians')
                        ->select(DB::raw('musicians.name, COUNT(Musician_has_Song.song_id) AS count'))
                        ->leftJoin('Musician_has_Song', 'musicians.id', '=', 'Musician_has_Song.musician_id')
                        ->groupBy('musicians.name')
                        ->get();

        return view('songs.song_count', compact('artists'));

    }
}
