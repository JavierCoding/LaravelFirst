# LaravelFirst
trying first laravel project


gotta do the comentario seeder yet, i was trying smthg like this but smthg to be performed yet

  DB::table('comentario')->insert([
            "post_id"=>1,
            "texto"=>"Este es el texto del primer post",
            "publicado"=>true,
            "created_at"=>now(),
        ]);