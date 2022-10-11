<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UseresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'aloisio ferrreira',
            'email'=>'aloisiobhmg@gmail.com',
            'password'=>bcrypt('123456'),

        ]);
    }
}
