<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Projects')->insert([
        'name' => 'Desktop Development 2',
        'description' => 'School Project',
        'finished' => 'no',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    DB::table('Projects')->insert([
          'name' => 'Laravel 2',
          'description' => 'School Project',
          'finished' => 'no',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
      ]);
      DB::table('Projects')->insert([
            'name' => 'Beer Simulatr',
            'description' => 'Game im working on using Unity',
            'finished' => 'no',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
