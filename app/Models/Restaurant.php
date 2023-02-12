<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Restaurant_Category;
use App\Models\Comment;
use App\Models\Evaluation;
use App\Models\Food;

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
    public function comments(){
        return $this->hasMany(Comment::class,'ruc_fk');
    }
    public function evaluations(){
        return $this->hasMany(Evaluation::class,'ruc_fk');
    }
    public function foods(){
        return $this->hasMany(Food::class,'ruc_fk');
    }

    //---------------------------------------------
    public function image()
    {
        return $this->MorphOne(Image::class, 'imageable');
    }
}
