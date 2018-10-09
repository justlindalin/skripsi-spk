<?php

namespace App\Http\Controllers;

use App\Tujuan;
use Illuminate\Http\Request;


class TujuanContoller extends Controller
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
      $peternakan = Tujuan::where('alamat','like','%'.$serach.'%')->paginate(10);

      return view('distribusi.tujuanview', compact('peternakan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distribusi.tambahtujuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $tujuan = Tujuan::create($request->all());
      return redirect()->action('TujuanContoller@index');
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
      $tujuan = Tujuan::find($id);

      return view('distribusi.edit_D')->with(compact('tujuan'));
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
      $tujuan = Tujuan::find($id);
      $tujuan->update($request->all());
      return redirect()->action('TujuanContoller@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tujuan::destroy($id);
        return redirect()->action('TujuanContoller@index');

    }
}
