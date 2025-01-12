<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'game_id',
        'user_id'                
    ];

    //Relationship: Collection belongs to User
    public function user()
    {
        return $this->belongsTo('App\Models\Game');
    }
    
    //Relationship: Collection belongs to Category
    public function category()
    {
        return $this->belongsTo('App\Models\Game');
    }
}