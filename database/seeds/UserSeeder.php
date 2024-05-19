<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use App\Lokasi;
use App\Inventaris;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daerah = array("KABUPATEN GOWA","KABUPATEN MAROS","KABUPATEN PANGKEP","KABUPATEN BARRU","KABUPATEN BONE","KABUPATEN SINJAI","KABUPATEN BULUKUMBA","KABUPATEN WAJO","KABUPATEN SIDENRENG RAPPANG","KABUPATEN PINRANG","KABUPATEN ENREKANG","KABUPATEN LUWU","KABUPATEN TANA TORAJA","KABUPATEN LUWU UTARA","KABUPATEN LUWU TIMUR","KABUPATEN TORAJA UTARA","KABUPATEN KEPULAUAN SELAYAR","KOTA MAKASSAR","KOTA PAREPARE","KOTA PALOPO");
        
        $roleName = array("ADMIN", "PRODUSEN", "PENGEPUL", "GROSIR","PENGECER","KONSUMEN");

        for ($i=1;$i<=2;$i++){
            foreach ($daerah as $kab){
                // fetch kab/kot
                $sub1 = substr($kab,0,3);
                //fetch nama kab/kot
                $sub2 = preg_replace('/\s+/', '_', substr($kab, strpos($kab, " ") + 1));
                //ex = kab_bogor
                $nameKab = $sub1."_".$sub2;
                
                for ($r=1; $r<=count($roleName); $r++){
                
            
                
                
                $user = new User;
                // ex = PENGEPUL KAB BOGOR 1
                $user->name = $roleName[$r-1]." ".$kab." ".$i;
                // ex = pengepul_kab_bogor_1@test.com
                $user->email = strtolower($roleName[$r-1])."_".strtolower($nameKab)."_".$i."@test.com";
                $user->password = Hash::make('asd');
                $user->role= $r; // assign role ID based on the index of the roleName array
                $user->status = 1;
                $user->fotosk = Str::random(5);
                $user->name = strtolower($roleName[$r-1])."_".strtolower($nameKab)."_".$i;
                $user->save();
            
                // Lokasi
                    $lokasi = new Lokasi([
                        'kabupaten' => $kab,
                        'kecamatan' => Str::random(8),
                        'kelurahan' => Str::random(8),
                        'user_id'=>$user->id
                    ]);
                    $lokasi->user()->associate($user);
                    $lokasi->save();
                    
                // Inventori
                    $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
                    foreach ($jenis_cabai as $c){
                        $inventori = new Inventaris([
                            'jenis_cabai'=>$c,
                            'jumlah_cabai'=>0,
                            'harga'=>0
                        ]);
                        $inventori->user()->associate($user);
                        $inventori->save();
                    }
                }
            }       
        }
    }
}
