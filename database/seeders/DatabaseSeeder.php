<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Faker\Provider\UserAgent;
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
        $this->call([
            RolSeeder::class,
            PermissionSeeder::class,
            PermissionRolesSeeder::class,
            UserSeeder::class,
            RestaurantCategorySeeder::class,
            RestaurantSeeder::class,
            FoodCategorySeeder::class,
            ProfileSeeder::class
         ]);
    }
}
