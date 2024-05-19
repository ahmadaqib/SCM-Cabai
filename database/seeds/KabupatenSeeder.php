<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daerah = array("KABUPATEN GOWA","KABUPATEN MAROS","KABUPATEN PANGKEP","KABUPATEN BARRU","KABUPATEN BONE","KABUPATEN SINJAI","KABUPATEN BULUKUMBA","KABUPATEN WAJO","KABUPATEN SIDENRENG RAPPANG","KABUPATEN PINRANG","KABUPATEN ENREKANG","KABUPATEN LUWU","KABUPATEN TANA TORAJA","KABUPATEN LUWU UTARA","KABUPATEN LUWU TIMUR","KABUPATEN TORAJA UTARA","KABUPATEN KEPULAUAN SELAYAR","KOTA MAKASSAR","KOTA PAREPARE","KOTA PALOPO");

        for ($i=0;$i<count($daerah);$i++){
            DB::table('kabupaten')->insert([
                'id' => $i+1,
                'name' => $daerah[$i]
            ]);
        }
    }
}
    