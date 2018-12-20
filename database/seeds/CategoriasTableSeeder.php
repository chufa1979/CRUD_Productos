<?php

use Illuminate\Database\Seeder;
use App\Categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Categorias;
        $user->categoria = 'Electonicos';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Pcs';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Regalos';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Electonicos 1';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Pcs 1';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Regalos 1';
        $user->save();
        
        $user = new Categorias;
        $user->categoria = 'Electonicos 2';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Pcs 2';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Regalos 2';
        $user->save();
        
        $user = new Categorias;
        $user->categoria = 'Electonicos 3';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Pcs 3';
        $user->save();

        $user = new Categorias;
        $user->categoria = 'Regalos 3';
        $user->save();        
    }
}
