<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            'user' =>'GiaoVien1' ,
            'password'=>'123456' ,
            'hoten'=>'Nguyen Van A',
            'email'=>'hack1@gmail.com',
            'phone'=>'123456789',
            'level'=>1,
        ];
        User::create($data);
        $data=[
            'user' =>'HocSinh1' ,
            'password'=>'123456',
            'hoten'=>'Nguyen Van B',
            'email'=>'hack2@gmail.com',
            'phone'=>'123456789',
            'level'=>0,
        ];
        User::create($data);

    }
}
