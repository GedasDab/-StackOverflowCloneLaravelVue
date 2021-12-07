## What I was using
1. Laravel
2. Vue.js
3. Classes, migrations
4. Authorizing - Gates, Policies, Middleware

## Migration
* Create migration
  ` $ php artisan make:migration create_flights_table `

* Migrate all migrations
  ` $ php artisan migrate `

* Creating at the same time migration and model
  ` $ php artisan make:model Answer -m `

* How to rename it
  ` $ php artisan make:migration rename_answers_in_questions_table --table=questions `

  * When using rename, need install doctrine/dbal
    ` composer require doctrine/dbal `

## Policy 
* Will create with model methods:
  ` $ php artisan make:policy QuestionPolicy --model=Question `

## Factory
* Will create factiry
  ` php artisan make:factory AnswerFactory `

## Seed
* Reset database 
  ` php artisan migrate:fresh --seed `
* Run seeds all
  `php artisan db:seed` 
* Run specific one
  `php artisan db:seed --class=FavoritesTableSeeder`
