<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instrument;

use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstrumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instruments=Instrument::all();
        return view('instruments.index',compact('instruments'));
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
        $artists = DB::table('Musician_has_Instrument')
                        ->join('musicians', 'Musician_has_Instrument.musician_id', '=', 'musicians.id')
                        ->join('instruments', 'Musician_has_Instrument.instrument_id', '=', 'instruments.id')
                        ->select('musicians.name', 'musicians.id')
                        ->where('instruments.id', '=', $id)
                        ->orderBy('musicians.name')
                        ->get();
        $instrument = DB::table('instruments')->where('id', '=', $id)->first();

        return view('instruments.show', compact('artists', 'instrument'));
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

    public function multipleInstrumentMusicians() {
        //SELECT musicians.name
        //FROM musicians, Musician_has_Instrument
        //WHERE musicians.id = Musician_has_Instrument.musician_id
        //GROUP BY Musician_has_Instrument.musician_id
        //HAVING COUNT(instrument_id) > 1;

        $artists = DB::table('musicians')
                        ->join('Musician_has_Instrument', 'Musician_has_Instrument.musician_id', '=', 'musicians.id')
                        ->groupBy('Musician_has_Instrument.musician_id')
                        ->havingRaw('count(instrument_id) > 1')
                        ->get();

        return view('instruments.multiple', compact('artists'));
    }
}
