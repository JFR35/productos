<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MasProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['nombre_producto' => 'Café Caribeño', 'descripcion' => 'Café de Colombia', 'precio' => 6.00, 'categoria_id' => 1, 'imagen' => 'img/cafecolombia.webp'],
            ['nombre_producto' => 'Café Africano', 'descripcion' => 'Café de Guatemala', 'precio' => 7.00, 'categoria_id' => 1, 'imagen' => 'img/cafecolombia.webp'],
            ['nombre_producto' => 'Café DoBrasil', 'descripcion' => 'Café de Etiopía', 'precio' => 5.00, 'categoria_id' => 1, 'imagen' => 'img/cafecolombia.webp'],
        ]);
    }
}
