<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribusi;
use App\Tujuan;
use App\Farm;
// use App\Distribusi;

class perhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVam()
    {

      $datadistribusi = Distribusi::pluck('biaya_pengiriman');

      $distribusi = Distribusi::where('farm_id', 3)->orderBy('biaya_pengiriman','asc')->pluck('biaya_pengiriman')->take(2);
      $distribusiFarm2 = Distribusi::where('farm_id', 4)->orderBy('biaya_pengiriman','asc')->pluck('biaya_pengiriman')->take(2);

      $dataTerendahPertama = $distribusi[0];
      $dataTerendahKedua = $distribusi[1];

      $dataTerendahFarm2Pertama = $distribusiFarm2[0];
      $dataTerendahFarm2Kedua = $distribusiFarm2[1];

      $selisihBarisPertama = $dataTerendahKedua - $dataTerendahPertama;
      $selisihBarisKedua = $dataTerendahFarm2Kedua - $dataTerendahFarm2Pertama;


      //selisih kolom
      function tujuan($tujuan_id){
        $tujuan = Distribusi::where('jenis_hewan', 'kambing')->where('tujuan_id', $tujuan_id)->orderBy('biaya_pengiriman', 'asc')->pluck('biaya_pengiriman');
        return [$tujuan];
      };

      //Selisih Kolom
      function selisihKolom($callback){

        if($callback[0][0]>$callback[0][1]){
          return $callback[0][0] - $callback[0][1];
        }else{
          return $callback[0][1] - $callback[0][0];
        }

      };

      $kolom_m1 = tujuan(2);
      $kolom_m2 = tujuan(3);
      $kolom_m3 = tujuan(5);
      $kolom_m4 = tujuan(7);
      $kolom_m5 = tujuan(6);
      $kolom_m6= tujuan(9);

      $selisihkolompertama = [];
      $selisihkolompertama['selisih'] = selisihKolom($kolom_m1);
      $selisihkolompertama['tujuan'] = $kolom_m2[0];
      //cari permintaan masukkan dalam array nya.


      $selisihkolomkedua = [];
      $selisihkolomkedua['selisih'] = selisihkolom($kolom_m2);
      $selisihkolomkedua['tujuan'] = $kolom_m3[0];
      //////cari permintaan

      $selisihkolomketiga = [];
      $selisihkolomketiga['selisih'] = selisihkolom($kolom_m3);
      $selisihkolomketiga['tujuan'] = $kolom_m3[0];
  //////cari permintaan

      $selisihkolomkeempat = [];
      $selisihkolomkeempat['selisih'] = selisihkolom($kolom_m4);
      $selisihkolomkeempat['tujuan'] = $kolom_m4[0];
  //////cari permintaan

      $selisihkolomkelima=[];
      $selisihkolomkelima['selisih'] =selisihkolom($kolom_m5);
      $selisihkolomkelima['tujuan'] = $kolom_m5[0];
  //////cari permintaan

      $selisihkolomkeenam = [];
      $selisihkolomkeenam['selisih'] = selisihkolom($kolom_m6);
      $selisihkolomkeenam['tujuan'] = $kolom_m6[0];
  //////cari permintaan

      $arrayMencariTerbesar =  array(
        $selisihBarisKedua, $selisihBarisPertama, $selisihkolompertama['selisih'], $selisihkolomkedua['selisih'], $selisihkolomketiga['selisih'], $selisihkolomkeempat['selisih'], $selisihkolomkelima['selisih'], $selisihkolomkeenam['selisih']
      );

dd($selisihBarisKedua);end();
      rsort($arrayMencariTerbesar);
dd('Selisih Baris Dan Kolom : ' , $arrayMencariTerbesar);end();

      $array_permintaan = Distribusi::where('jenis_hewan', 'kambing')->where('farm_id', 3)->pluck('berat_permintaan');

      $array_persediaan = Farm::all()->pluck('jumlah_kambing');


      // for($i=0; $i< count($arrayMencariTerbesar); $i++){
      //     // echo "<script>console.log($arrayMencariTerbesar[$i])</script>";
      //     for($j=0; $j<count()){
      //
      //     }
      // };

      // for(){
      //
      // }

      // for($i=0;$i<count($arrayMencariTerbesar);$i++){
      //   echo $i .'<br/>';
      //     for($j=0; $j<count($array_persediaan); $j++){
      //       echo $j . '<br/>';
      //       if($array_persediaan[$j] >0){
      //           for($k=0; $k<count($kolom_m2); $k++){
      //             for($l=0; $l<count($kolom_m2[$k]); $l++){
      //               echo $l.'. '. $kolom_m2[$k][$l] . '<br/>';
      //
      //             };
      //           }
      //       }
      //     }
      //
      // };

      // dd($arrayMencariTerbesar);end();
      // dd(
      //   array(
      //   'datas biaya pengiriman'=>$datadistribusi,
      //   // 'data terendah pertama dan kedua' => $distribusi,
      //   'data terendah sumber 1 pertama' => $dataTerendahPertama,
      //   'data terendah sumber 1 kedua' => $dataTerendahKedua,
      //   'selisih baris sumber 1'=> $selisihBarisPertama,
      //   'data terendah sumber 2 pertama' => $dataTerendahFarm2Pertama,
      //   'data terendah sumber 2 kedua' => $dataTerendahFarm2Kedua,
      //   'selisih baris sumber 2' => $selisihBarisKedua,
      //
      //   'kolom m1' => $kolom_m1,
      //   'kolom m2' => $kolom_m2,
      //   'kolom m3' => $kolom_m3,
      //   'kolom m4' => $kolom_m4,
      //   'kolom m5' => $kolom_m5,
      //   'kolom m6' => $kolom_m6,
      //   'selisih kolom pertama '=> $selisihkolompertama,
      //   'selisih kolom kedua '=> $selisihkolomkedua,
      //   'selisih kolom ketiga '=> $selisihkolomketiga,
      //   'selisih kolom keempat '=> $selisihkolomkeempat,
      //   'selisih kolom kelima '=> $selisihkolomkelima,
      //   'selisih kolom keenam '=> $selisihkolomkeenam,
      //
      //   // 'data terbesar' =>
      // ));


      // $farm = Distribusi::all()->pluck('biaya_pengiriman');
      // $data = $farm->orderBy('biaya_pengiriman', 'asc');
      //
      // // $array_terpecah = array_chunk($farm,2);
      // do{
      //
      //   $distribusi = Distribusi::orderBy('biaya_pengiriman','asc')->limit(2)->where('farm_id',$x)->get();
      //   $x++;
      //
      // }while ($x <= $farm);


      //
      // return view('distribusi.perhitunganView', compact('distribusi'));

    }
}
