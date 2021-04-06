<?php
namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // public $table = 'table_name';
    use HasFactory;
public $timestamps=false;

    public function findId(){
       // return $this->id;
    }

}
