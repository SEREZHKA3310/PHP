<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Антон',
            'email' => 'vikanikottin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'user'
        ]);

        User::factory()->create([
            'name' => 'Это я',
            'email' => 'bargansergei333@mail.ru',
            'password' => Hash::make('12345678'),
            'role' => 'admin'
        ]);

        $this->call([
            PlaceSeeder::class,
            UsageSeeder::class
        ]);
    }
}
