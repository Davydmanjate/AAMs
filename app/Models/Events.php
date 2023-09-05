<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'avances';
    protected $primaryKey = 'id';
    protected $fillable = ['layer_id', 'case_id'];
    
    
    public function layer(){
        return $this->belongsTo(Layer::class, 'layer_id');
}

public function case(){
    return $this->belongsTo(Cases::class, 'case_id');
}

}
