<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        User::create(['nom' => 'Fabre', 'prenom' => 'Laurent', 'email' => 'laurenzolamasse@gmailmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre',  'password' => bcrypt('123456')]);
        User::create(['nom' => 'Fabre', 'prenom' => 'Véronique', 'email' => 'veroniquefabre974@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('123456')]);
        User::create(['nom' => 'Fabre', 'prenom' => 'Flore', 'email' => 'florefabre974@gmail.com', 'profil' => 'admin', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('123456')]);
     
      

        User::create(['nom' => 'Adras', 'prenom' => 'Sophie', 'email' => 'sophie@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
        User::create(['nom' => 'Fontaine', 'prenom' => 'Gérard', 'email' => 'gegard@gmail.com', 'profil' => 'abonne', 'address' => 'mon adresse', 'zipCode' => '97410', 'numero_telephone' => '0601020304', 'city' => 'Saint-Pierre', 'password' => bcrypt('azerty')]);
        
        
    }
}
