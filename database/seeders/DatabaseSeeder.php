<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $cat = New \App\Models\Category();
        $cat->name='Computer';
        $cat->detail='Learning about basic and advance of computer technology.';
        $cat->status=1;
        $cat->save();

        $cat = New \App\Models\Category();
        $cat->name='Architecture';
        $cat->detail='The process and the product of planning, designing and constructing buildings or any other structures.';
        $cat->status=1;
        $cat->save();
    }
}
