<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersQuestionsAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->delete();
        DB::table('questions')->delete();
        DB::table('users')->delete();

        factory(User::class, 3)->create()->each(function($u) {
            $u->questions()
              ->saveMany(
                  factory(Question::class, rand(1, 5))->make()
              )
              ->each(function ($q) {
                $q->answers()->saveMany(factory(Answer::class, rand(1, 5))->make());
              });
        });  
    }
}
