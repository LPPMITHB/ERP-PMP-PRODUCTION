<?php

use Illuminate\Database\Seeder;
use App\Models\Material; 

class BOMDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $index = 1;
        $quantity = rand(1,1000);
        $material = Material::findOrFail($index++);
        DB::table('mst_bom_detail')->insert([
            'bom_id' => 1,
            'material_id' => $material->id,
            'quantity' => $quantity,
        ]);
        
        $quantity = rand(1,1000);
        $material = Material::findOrFail($index++);
        DB::table('mst_bom_detail')->insert([
            'bom_id' => 1,
            'material_id' => $material->id,
            'quantity' => $quantity,
        ]);  

        $quantity = rand(1,1000);
        $material = Material::findOrFail($index++);
        DB::table('mst_bom_detail')->insert([
            'bom_id' => 2,
            'material_id' => $material->id,
            'quantity' => $quantity,
        ]);  

        $quantity = rand(1,1000);
        $material = Material::findOrFail($index++);
        DB::table('mst_bom_detail')->insert([
            'bom_id' => 2,
            'material_id' => $material->id,
            'quantity' => $quantity,
        ]);  

        $quantity = rand(1,1000);
        $material = Material::findOrFail($index++);
        DB::table('mst_bom_detail')->insert([
            'bom_id' => 3,
            'material_id' => $material->id,
            'quantity' => $quantity,
        ]);

    }
}
