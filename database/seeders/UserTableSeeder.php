<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        DB::table('users')->insert([
            [
                'name' => 'Alice Johnson',
                'department_id' => 1, 
                'designation_id' => 1, 
                'created_at' => $currentTimestamp,
           
            ],
            [
                'name' => 'Bob Smith',
                'department_id' => 2, 
                'designation_id' => 2, 
                'created_at' => $currentTimestamp,
                
            ],
            [
                'name' => 'Charlie Brown',
                'department_id' => 3, 
                'designation_id' => 3, 
                'created_at' => $currentTimestamp,
                
            ],
        ]);
    }
}
