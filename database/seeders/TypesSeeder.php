<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Types;


class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeOfProject = [
            [
            "nome" => "FrontEnd",
            "colore" => "#003cff",
        ],
        [
            "nome" => "BackEnd",
            "colore" => "#ff0000",
        ],
        [
            "nome" => "FullStack",
            "colore" => "#000000",
        ],
    ];

    foreach ($typeOfProject as $singleType) {
        $newType = new Types();
        $newType->nome = $singleType["nome"];
        $newType->colore = $singleType["colore"];
        $newType->save();
    }

    }
}
