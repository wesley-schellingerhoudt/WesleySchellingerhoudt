<?php

namespace Database\Seeders;

use App\Models\Gebruiker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GebruikerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gebruiker::create([
            'gebruiker'    => 'admin',
            'email'    => 'admin@admin.com',
            'wachtwoord'   =>  Hash::make('password'),
        ]);
    }
}
