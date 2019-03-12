<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Document::class, 100)->create();
        //
    }
}
