<?php
use App\Hewan;
use Illuminate\Database\Seeder;

class HewansS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pp=[
          [
            'jenis'=>'kambing',
            'jumlah'=>625,
            'total_berat'=>625
          ],
          [
            'jenis'=>'sapi',
            'jumlaj'=>350,
            'total_berat'=>350
          ]
        ];
        DB::table('hewans')->insert($pp);
    }
}
