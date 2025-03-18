<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $tags = ["Nuovo","Usato","Ricondizionato","Come nuovo","Spedizione Gratuita","Spedizione Espresso","Spedizione Standard","Garanzia","Garanzia 2 anni","Garanzia 3 anni","Garanzia 5 anni","Garanzia 10 anni"];
        foreach ($tags as $tag) {
            Tag::create([
                "name"=> $tag,
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now(),
            ]);
        }
        
        }
    }
