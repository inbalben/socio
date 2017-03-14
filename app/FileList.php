<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileList extends Model
{
     protected $fillable = ['branch_id', 'status', 'list'];
     
       public function branch(){
        return $this->belongsTo(Branch::class);
    }
}