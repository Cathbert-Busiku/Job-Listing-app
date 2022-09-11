<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
       
        $user = User::factory()->create([
            'name' => 'Jonas Mwansa',
            'email' => 'jonas@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'We need a laravel or 
        //     javascript programmer'
            

        // ]);

        // Listing::create([
        //     'title' => 'Django Senior Developer',
        //     'tags' => 'python, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'We need a python or 
        //     javascript programmer'
            

        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
