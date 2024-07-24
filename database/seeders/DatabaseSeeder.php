<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    protected static $defaultPassword = 'admin123';
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        User::reguard();

        $password = Hash::make(self::$defaultPassword);

        User::factory()->create([
            'name' => 'Spritzer',
            'email' => 'test@example.com',
            'password' => $password,
        ]);
        

        Tag::firstOrCreate(
            ['tag_name' => 'Ayam', 'tag_type' => 'recipe']
        );

        Ingredient::insert(
            [
                ['id' => (string) Str::uuid(), 'name' => 'Ayam', 'slug' => 'ayam'],
                ['id' => (string) Str::uuid(), 'name' => 'Bawang Putih', 'slug' => 'bawang-putih']
            ],
        );
    }
}
