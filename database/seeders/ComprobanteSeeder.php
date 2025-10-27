<?php

namespace Database\Seeders;

use App\Models\Comprobante;
use Illuminate\Database\Seeder;

class ComprobanteSeeder extends Seeder
{
    public function run()
    {
        // Limpia la tabla antes de insertar
        Comprobante::truncate();

        // Inserta de nuevo los registros
        Comprobante::insert([
            ['nombre' => 'Factura'],
            ['nombre' => 'Factura Electronica'],
        ]);
    }
}
