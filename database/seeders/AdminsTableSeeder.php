<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('admins')->insert([
                'admin_id' => Str::uuid(),
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'nama' => $faker->name,
                'telp' => $faker->phoneNumber,
                'role' => 'Admin',
                'foto' => $faker->optional()->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
}