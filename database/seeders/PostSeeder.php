<?php

//The fucking namespace indicates where the fuck to find the fucking seeders...
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder {
    public function run(): void {
        DB::table('posts')->insert([
            "titulo"=>"Primer post",
            "texto"=>"Este es el texto del primer post",
            "publicado"=>true,
            "created_at"=>now(),
        ]);
    }
}
