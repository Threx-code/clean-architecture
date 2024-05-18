<?php declare(strict_types=1);

namespace Database\Seeders;

use Domain\Blogging\Models\Post;
use Domain\Shared\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        if(app()->environment(environment: 'local')) {
//            $this->call(
//                class: DefaultUserSeeder::class
//            );
//        }

        Post::factory(20)->for(
            User::factory()->create([
                'first_name' => 'Oluwatosin',
                'last_name' => 'Amokeodo',
                'email' => 'oluwatosin@gmail.com'
            ])
        )->create();
    }
}
