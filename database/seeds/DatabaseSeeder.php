<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\User;
use App\Lokasi;
use App\Inventaris;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
$this->call([
    KabupatenSeeder::class,
    UserSeeder::class,
]);

        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('asd'),
            'role' => 1,
            'status' => 1,
            'fotosk' => Str::random(5)

        ]);        
        
        $user = new User;
        $user->name = "Produsen";
        $user->email = "produsen@test.com";
        $user->password = Hash::make('asd');
        $user->role = 2;
        $user->status = 1;
        $user->fotosk = Str::random(5);
        $user->save();
        $lokasi = new Lokasi([
            'kabupaten' => 'Bogor',
            'kecamatan' => 'Bogor Barat',
            'kelurahan' => 'Balumbang Jaya',
            'user_id'=>$user->id
        ]);
        $lokasi->user()->associate($user);
        $lokasi->save();
        $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
        foreach ($jenis_cabai as $i){
            $inventori = new Inventaris([
                'jenis_cabai'=>$i,
                'jumlah_cabai'=>0,
                'harga'=>0
            ]);
            $inventori->user()->associate($user);
            $inventori->save();
        }

        $user = new User;
        $user->name = "Pengepul";
        $user->email = "pengepul@test.com";
        $user->password = Hash::make('asd');
        $user->role = 3;
        $user->status = 1;
        $user->fotosk = Str::random(5);
        $user->save();
        $lokasi = new Lokasi([
            'kabupaten' => 'Bogor',
            'kecamatan' => 'Bogor Barat',
            'kelurahan' => 'Balumbang Jaya',
            'user_id'=>$user->id
        ]);
        $lokasi->user()->associate($user);
        $lokasi->save();
        $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
        foreach ($jenis_cabai as $i){
            $inventori = new Inventaris([
                'jenis_cabai'=>$i,
                'jumlah_cabai'=>0,
                'harga'=>0
            ]);
            $inventori->user()->associate($user);
            $inventori->save();
        }

        $user = new User;
        $user->name = "Grosir";
        $user->email = "grosir@test.com";
        $user->password = Hash::make('asd');
        $user->role = 4;
        $user->status = 1;
        $user->fotosk = Str::random(5);
        $user->save();
        $lokasi = new Lokasi([
            'kabupaten' => 'Bogor',
            'kecamatan' => 'Bogor Barat',
            'kelurahan' => 'Balumbang Jaya',
            'user_id'=>$user->id
        ]);
        $lokasi->user()->associate($user);
        $lokasi->save();
        $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
        foreach ($jenis_cabai as $i){
            $inventori = new Inventaris([
                'jenis_cabai'=>$i,
                'jumlah_cabai'=>0,
                'harga'=>0
            ]);
            $inventori->user()->associate($user);
            $inventori->save();
        }

        $user = new User;
        $user->name = "Pengecer";
        $user->email = "pengecer@test.com";
        $user->password = Hash::make('asd');
        $user->role = 5;
        $user->status = 1;
        $user->fotosk = Str::random(5);
        $user->save();
        $lokasi = new Lokasi([
            'kabupaten' => 'Bogor',
            'kecamatan' => 'Bogor Barat',
            'kelurahan' => 'Balumbang Jaya',
            'user_id'=>$user->id
        ]);
        $lokasi->user()->associate($user);
        $lokasi->save();
        $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
        foreach ($jenis_cabai as $i){
            $inventori = new Inventaris([
                'jenis_cabai'=>$i,
                'jumlah_cabai'=>0,
                'harga'=>0
            ]);
            $inventori->user()->associate($user);
            $inventori->save();
        }

        $user = new User;
        $user->name = "Konsumen";
        $user->email = "konsumen@test.com";
        $user->password = Hash::make('asd');
        $user->role = 6;
        $user->status = 1;
        $user->fotosk = Str::random(5);
        $user->save();
        $lokasi = new Lokasi([
            'kabupaten' => 'Bogor',
            'kecamatan' => 'Bogor Barat',
            'kelurahan' => 'Balumbang Jaya',
            'user_id'=>$user->id
        ]);
        $lokasi->user()->associate($user);
        $lokasi->save();
        $jenis_cabai=array("Cabai besar","Cabai rawit","Cabai keriting");
        foreach ($jenis_cabai as $i){
            $inventori = new Inventaris([
                'jenis_cabai'=>$i,
                'jumlah_cabai'=>0,
                'harga'=>0
            ]);
            $inventori->user()->associate($user);
            $inventori->save();
        }
    }
}
