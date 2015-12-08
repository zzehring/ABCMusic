<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = DB::table('albums')
            ->select(DB::raw('count(id) as albumsInYear'))
            ->where('copyright_date', 'like', '%2005%')
            ->get();

        var_dump($count);

        $albums=Album::all();
        return view('albums.index',compact('albums', 'count'));
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
        $songs = DB::table('songs')
                    ->select('songs.*')
                    ->join('albums', 'albums.id', '=', 'songs.album_id')
                    ->where('albums.id', '=', $id)
                    ->get();
        $album = DB::table('albums')
                    ->select('title')
                    ->where('albums.id', '=', $id)
                    ->first();

        return view('albums.show', compact('album', 'songs'));

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

    public function albumsInDate() {
        //select count(id) as 'albums in year' from albums where copyright_date like '%2005%';

        $count = DB::table('albums')
            ->select(DB::raw('count(id) as albumsInYear'))
            ->where('copyright_date', 'like', '%2005%')
            ->get();

        return view('albums.album_date', compact('count'));
    }
}
