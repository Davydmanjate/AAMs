<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custums extends Model
{
    use HasFactory;

    protected $table = 'custums';
    protected $primaryKey = 'id';
    protected $fillable = ['layer_id','name', 'email','telefone', 'password'];
    
    
    public function layer(){
        return $this->belongsTo(Layer::class, 'layer_id');
}
}
