<?php

use Illuminate\Database\Seeder;
use App\Factura;
use App\DetalleFactura;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Factura::class, 1000)->create();
    }
}
