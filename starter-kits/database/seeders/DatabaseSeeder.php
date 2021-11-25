<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(10)->create();
        // User::create([
        //     'name'=>'Cecep Abu Azhar',
        //     'email'=>'cecep@fathforce.com',
        //     'password'=>bcrypt('123456'),
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Pertama',
        //     'slug' => 'posting-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Kedua',
        //     'slug' => 'posting-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Ketiga',
        //     'slug' => 'posting-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Ke Empat',
        //     'slug' => 'posting-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'tittle' => 'Posting Kelima',
        //     'slug' => 'posting-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, architecto beatae. Distinctio impedit ratione consequuntur quaerat asperiores, quae, qui esse nostrum repudiandae repellat in magnam magni fugiat sapiente architecto quia.',
        // ]);
    }
}
