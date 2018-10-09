<?php

namespace App\Http\Controllers;

use App\Farm;
use Illuminate\Http\Request;

class distribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       $this->middleware('auth');
     }
    public function index()
    {
      $serach =\Request::get('search');
      $peternakan = Farm::where('nama','like','%'.$serach.'%')->paginate(5);

      return view('peternakan.farmsView', compact('peternakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peternakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peternakan = Farm::create($request->all());
        return redirect()->action('distribusiController@index');
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
        $peternakan = Farm::find($id);

        return view('peternakan.edit')->with(compact('peternakan'));
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
        $peternakan = Farm::find($id);
        $peternakan->update($request->all());
        return redirect()->action('distribusiController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Farm::destroy($id);
      return redirect()->action('distribusiController@index');
    }
}
