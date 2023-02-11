<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Restaurant_Category;

class Restaurant extends Model
{
    use HasFactory;
    protected $table='restaurants';
    protected $primaryKey = 'ruc';

    public function user(){
        return $this->belongsTo(User::class,'user_id_fk','user_id');
    }
    
    public function category(){
        return $this->belongsTo(Restaurant_Category::class,'category_id_fk','category_id');
    }
}
