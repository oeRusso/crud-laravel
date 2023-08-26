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
        $productos = ['YERBA', 'CARNE', 'LACTEOS', 'LEGUNBRES'];
        $precios  = [2, 4, 5, 6];



        for ($i = 0; $i < count($productos); $i++) {
            DB::table('productos')->insert([
                'nombre' => $productos[$i],
                'precio' => $precios[$i]
            ]);  //aqui itero hasta que el contador $i sea menos a la cantidad de elementos del array de productosy son los mismos que el del array de precio. entonces luego voy asignando cada campo de mi bd con los arrays en el indice $i ey eso ira cargando a medida que vaya recorriendo el arreglo al campo correspondiente los datos
        }
    }
}
