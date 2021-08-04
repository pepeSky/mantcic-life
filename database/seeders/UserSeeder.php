<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Jose Fernando Riquelme Vergara',
            'email' => 'jose.riquelme@mantcic-life.cl',
            'password' => bcrypt('ukeire2021')
        ]);
        $user->assignRole('Admin');

        User::create([
            'name' => 'Oscar Daniel Riquelme Vergara',
            'email' => 'oscar.riquelme@mantcic-life.cl',
            'password' => bcrypt('oscar2021')
        ]);
        $user->assignRole('Worker');

        User::create([
            'name' => 'Jaime Daniel Muñoz Leiva',
            'email' => 'jaime.munoz@mantcic-life.cl',
            'password' => bcrypt('jaime2021')
        ]);
        $user->assignRole('Jobs');

        User::create([
            'name' => 'Mauricio Jose Farias Abarca',
            'email' => 'mauricio.farias@mantcic-life.cl',
            'password' => bcrypt('mauricio2021')
        ]);

        User::create([
            'name' => 'Luis Osvaldo Moya Abarca',
            'email' => 'luis.moya@mantcic-life.cl',
            'password' => bcrypt('luis2021')
        ]);

        User::create([
            'name' => 'Efren Amaro Rivas Brana',
            'email' => 'efren.rivas@mantcic-life.cl',
            'password' => bcrypt('efren2021')
        ]);

        User::factory(40)->create();
    }
}
