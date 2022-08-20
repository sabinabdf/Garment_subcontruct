<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::insert(
        ['name' => 'Fabrics inspection machine'],
        ['name' => 'Plotter printing machine'],
        ['name' => 'Cutting machine'],
        ['name' => 'Fusing machine'],
        ['name' => 'Embroidery machine'],
        ['name' => 'Sewing machine'],
        ['name' => 'Thread Trimmer machine'],
        ['name' => 'Thread sucking machine'],
        ['name' => 'Iron machine'],
        ['name' => 'Pull test machine'],
        ['name' => 'Metal detector machine'],
        ['name' => 'Bar-code scanning machine'],
        ['name' => 'Case label printing machine'],
        ['name' => 'Moisture checking machine'],
        ['name' => 'Digital Hygrometer'],
        ['name' => 'Air compressor machine'],
        ['name' => 'Boiler machine'],
        ['name' => 'Generator'],
        ['name' => 'Water pump']
       
       );
    }
}
