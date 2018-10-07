<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
      protected $table = 'types';
}

class TypesTableSeed extends Seeder {

    public function run()
    {
          Types::create(array('id' => 1,'name' => 'Default','is_default' => 1 ));

    }

}
