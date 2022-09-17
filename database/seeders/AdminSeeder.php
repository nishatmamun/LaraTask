<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admins = [
        //     ['username'=>'mamun','password'=>'mamun123'],
        //     ['username'=>'rafid','password'=>'rafid123'],
        //     ['username'=>'tasin','password'=>'tasin123'],
        // ];
        // Admin::insert($admins);

        DB::table('admins')->insert([
            'username' => Str::random(10),
            'password' => Hash::make('12345678'),
        ]);
    }
}