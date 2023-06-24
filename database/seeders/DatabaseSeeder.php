<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        
        User::create ([
            'name' => 'Muhammad Syaifull',
            'username' => 'muhammadiful',
            'role' => 'admin',
            'email' => 'muhammadiful@gmail.com',
            'password' => bcrypt('muhammadiful123')
        ]);


        // User::create ([
        //     'name' => 'Adnan Rohmat',
        //     'email' => 'adnanrohmat@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::factory(3)->create();

        // Category::create ([
        //     'name' => 'Web Programing',
        //     'slug' => 'web-programing'
        // ]);
        // Category::create ([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);
        // Category::create ([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::factory(20)->create();

        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi
        //     aliquam eos fugiat repellendus ea illum explicabo, eveniet
        //     odit! Tempora reprehenderit cum repellat quae totam corporis
        //     rerum, eveniet voluptatibus ex rem quibusdam omnis explicabo!
        //     Modi rerum quaerat fugit velit dolorem tenetur praesentium,
        //     quibusdam perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi
        //     aliquam eos fugiat repellendus ea illum explicabo, eveniet
        //     odit! Tempora reprehenderit cum repellat quae totam corporis
        //     rerum, eveniet voluptatibus ex rem quibusdam omnis explicabo!
        //     Modi rerum quaerat fugit velit dolorem tenetur praesentium,
        //     quibusdam perspiciatis!',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        //     Repudiandae similique officia repellat at dolorem sint nisi
        //     aliquam eos fugiat repellendus ea illum explicabo, eveniet
        //     odit! Tempora reprehenderit cum repellat quae totam corporis
        //     rerum, eveniet voluptatibus ex rem quibusdam omnis explicabo!
        //     Modi rerum quaerat fugit velit dolorem tenetur praesentium,
        //     quibusdam perspiciatis!',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);
    }
}
