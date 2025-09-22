<?php

namespace Database\Seeders;

use App\Models\EventoSalud;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        $this->call(TipoUnidadSaludSeeder::class);
        $this->call(DepartamentoMunicipioSeeder::class);
        $this->call(EnfermedadSeeder::class);
        $this->call(SintomaSeeder::class);
        $this->call(EnfermedadSintomaSeeder::class);
        $this->call(UnidadSaludSeeder::class);
        $this->call(PromocionSaludSeeder::class);
        $this->call(EventoSaludSeeder::class);
        $this->call(ConsultaChatbotSeeder::class);
        //Aquí los demás seeders

        User::updateOrCreate(
            ['name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}