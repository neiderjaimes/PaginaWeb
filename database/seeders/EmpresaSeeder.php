<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresa::insert([
            'nombre' => 'Gestion de Inventarios',
            'propietario' => 'UTS',
            'ruc' => '1089674538',
            'porcentaje_impuesto' => '19',
            'abreviatura_impuesto' => 'IVA',
            'direccion' => 'Calle 123 #45-67',
            'moneda_id' => 1
        ]);
    }
}
