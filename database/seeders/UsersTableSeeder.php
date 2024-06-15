<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'user_id' => Str::uuid(),
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'google_id' => null,
                'tanggal_lahir' => $faker->optional()->date,
                'gender' => $faker->optional()->randomElement(['Laki-Laki', 'Perempuan']),
                'telp' => $faker->optional()->phoneNumber,
                'foto' => $faker->optional()->imageUrl(),
                'status' => 'verified',
                'role' => 'User',
                'email_verified_at' => $faker->optional()->dateTime,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}