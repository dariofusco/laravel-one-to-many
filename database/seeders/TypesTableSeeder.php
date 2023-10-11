<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Html-Css', 'Javascript', 'Vue Js', 'Vite', 'Php', 'Mysql', 'Laravel'];

        foreach ($types as $type) {
            
            $new_type = new Type();

            $new_type->name = $type;

            $new_type->save();

        }
    }
}
