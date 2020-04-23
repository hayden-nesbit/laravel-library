<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        factory(App\Book::class, 100)->create();
        factory(App\Author::class, 12)->create();
        
        //loop
        $numBooks = 100;
        for ($i = 1; $i < $numBooks; $i++) {
            DB::table('author_book')->insert([
                'book_id' => $i,
                'author_id' => rand(1, 12),
            ]);
        }

        //loop
        $numChecks = 20;
        for ($i = 0; $i < $numChecks; $i++) {
            DB::table('checks')->insert([
                'book_id' => rand(1, 100),
                'user_id' => rand(1, 50),
            ]);
        }
    }
}
