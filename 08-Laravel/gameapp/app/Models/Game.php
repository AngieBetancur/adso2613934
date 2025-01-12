<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'developer',
        'releasedate',
        'category_id',
        'user_id',
        'price',
        'genre',
        'slider',
        'description'
    ];

    // Relationship: Game belongs to user
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Relationship: Game belongs to Category
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    // Relationship: Game belongs to collection
    public function collection() {
        return $this->belongsTo('App\Models\Collection');
    }

    //Scope
    public function scopeNames($games, $q){
        if (trim($q)){
            $games->where('title', 'LIKE', "%$q%")
                ->orWhere('developer', 'LIKE', "%$q%");
        }
    }
}
