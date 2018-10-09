<?php
use App\Admin;
use Illuminate\Database\Seeder;

class AdminsS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bb=[
          [
            'username'=>'Linda',
            'password'=>'bangkok'
          ],
          [
            'username'=>'dwi',
            'password'=>'12345'
          ]
        ];
          DB::table('admins')->insert($bb);
    }
}
