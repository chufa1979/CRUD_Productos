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
    }
}
