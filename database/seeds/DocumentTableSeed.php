<?php
use Illuminate\Database\Seeder;

class Document extends Eloquent {

    protected $table = 'documents';

}

class DocumentTableSeed extends Seeder {

    public function run()
    {
        Document::create(array('id' => 1,'name' => 'Default'));

    }

}
