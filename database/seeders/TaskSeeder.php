<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; // lo inniettiamo nel metodo run(Faker $faker)

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            // creo prima un nuova variabile
            $task = new Task(); // se dà questo errore(Undefined type 'Database\Seeders\Task') bisogna aggiungere lo 'use' con il percorso (use App\Models\Task;)

            $task->description = $faker->realText(100);

            $task->save();

        }
    }
}
