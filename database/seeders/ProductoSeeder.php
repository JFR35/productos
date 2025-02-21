<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            ['nombre_producto' => 'Café colombiano', 'descripcion' => 'Café de Colombia', 'precio' => 5.00, 'categoria_id' => 1],
            ['nombre_producto' => 'Café guatemalteco', 'descripcion' => 'Café de Guatemala', 'precio' => 5.00, 'categoria_id' => 1],
            ['nombre_producto' => 'Café etíope', 'descripcion' => 'Café de Etiopía', 'precio' => 5.00, 'categoria_id' => 1],
        ]);
    }
}
