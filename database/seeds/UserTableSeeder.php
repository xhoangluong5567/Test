<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 
            [
                'email'=>'xhoangluong@gmail.com',
                'name' => 'Hoang Luong',
                'password'=>bcrypt('xhoangluong'),
                'level'=>1
            ];
            DB::table('users')->insert($data);
        
    }
}
