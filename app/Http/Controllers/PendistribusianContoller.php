<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\Tujuan;

class PendistribusianContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $serach =\Request::get('search');

      $distribusi = Distribusi::where('jenis_hewan','like','%'.$serach.'%')->orderBy('tujuan_id','ASC')->with('tujuan')->paginate(200);

      return view('distribusi.distribusiView', compact('distribusi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distribusi.tambahDistribusi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $distribusi = Distribusi::create($request->all());
      return redirect()->action('PendistribusianContoller@index');

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
      $distribusi = Distribusi::find($id);

      return view('distribusi.edit_D')->with(compact('distribusi'));
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
      $distribusi = Distribusi::find($id);
      $distribusi->update($request->all());
      return redirect()->action('PendistribusianContoller@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Distribusi::destroy($id);
      return redirect()->action('PendistribusianContoller@index');
    }
}
