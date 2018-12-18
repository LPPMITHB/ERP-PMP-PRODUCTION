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

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 21,
            'material_id' => 2,
            'quantity' => 2,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 21,
            'material_id' => 3,
            'quantity' => 5,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 22,
            'material_id' => 5,
            'quantity' => 2,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 22,
            'material_id' => 3,
            'quantity' => 5,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 23,
            'material_id' => 4,
            'quantity' => 2,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 23,
            'material_id' => 1,
            'quantity' => 5,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 24,
            'material_id' => 5,
            'quantity' => 4,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 24,
            'material_id' => 3,
            'quantity' => 3,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 25,
            'material_id' => 4,
            'quantity' => 1,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 25,
            'material_id' => 2,
            'quantity' => 2,
        ]);

        DB::table('mst_bom_detail')->insert([
            'bom_id' => 21,
            'material_id' => 1,
            'quantity' => 5,
        ]);

    }
}
