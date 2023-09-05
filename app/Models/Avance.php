<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avance extends Model
{
    use HasFactory;
    protected $table = 'avances';
    protected $primaryKey = 'id';
    protected $fillable = ['layer_id','custum_id', 'case_id', 'status'];
    
    
    public function layer(){
        return $this->belongsTo(Layer::class, 'layer_id');
}

public function custum(){
    return $this->belongsTo(Custums::class, 'custum_id');
}

public function case(){
    return $this->belongsTo(Cases::class, 'case_id');
}

}
