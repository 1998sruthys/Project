<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        DB::table('designations')->insert([
            [
                'name' => 'marketting manager',
                'created_at' => $currentTimestamp,
            ],
            [
                'name' => 'Mobile Application dev',
                'created_at' => $currentTimestamp,
            ],
        ]);
    }
}
