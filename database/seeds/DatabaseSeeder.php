<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'afifalfiano',
            'email' => 'afif@gmail.com',
            'password' => Hash::make('Bismillah')
        ]);
    }
}
