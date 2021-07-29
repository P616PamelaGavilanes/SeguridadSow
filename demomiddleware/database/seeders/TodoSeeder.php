<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;//incriptar
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin = User::create([
            'name' => 'Sergio Admin',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin'),
            'tipo' =>Hash::make('134533'),
        ]);
        $user1= User::create([
            'name' => 'Tiago Villalobos',
            'email'=> 'tiago@gmail.com',
            'password'=> Hash::make('tiago'),
            'tipo' =>'2'
        ]);
    }
}
