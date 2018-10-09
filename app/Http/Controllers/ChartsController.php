<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil_Distribusi;

class ChartsController extends Controller
{

  // public function __construct(){
  //   $this->middleware('auth');
  // }

  public function index()
  {
    // $chart = new SampleChart;
    // $chart->dataset('Sample', 'line', [100, 65, 84, 90])
    //   ->color('#ff0000');
    return view('chartView');

  }
}
