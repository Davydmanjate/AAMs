<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = 'cases';
    protected $primaryKey = 'id';
    protected $fillable = ['layer_id','custum_id','first_name','last_name','province','district','city', 'phone','marital_status', 'age', 'subject','message'];
    
    public function Layer(){
        return $this->belongsTo(Layer::class, 'layer_id');
    }
    public function Custums(){
        return $this->belongsTo(Custums::class, 'custum_id');
    }
}
