<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(20)->create();
        // Article::factory(50)->create();
        // Gallery::factory(100)->create();

        DB::table('users')->insert([
            'name' => 'Naufal Tsani arrahim',
            'username' => 'NaufalTA',
            'email' => 'naufal@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'admin 1',
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'admin 2',
            'username' => 'admin2',
            'email' => 'admin2@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'fizi',
            'username' => 'fizi',
            'email' => 'fizi@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'ernawan',
            'username' => 'ernawan',
            'email' => 'ernawan@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'iki',
            'username' => 'iki',
            'email' => 'iki@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'firman',
            'username' => 'firman',
            'email' => 'firman@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'ronaldo',
            'username' => 'ronaldo',
            'email' => 'ronaldo@gmail.com',
            'role' => 'user',
            'password' => bcrypt('123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
