<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            ['username'=>'mamun','password'=>'mamun123'],
            ['username'=>'rafid','password'=>'rafid123'],
            ['username'=>'tasin','password'=>'tasin123'],
        ];
        Admin::insert($admins);
    }
}