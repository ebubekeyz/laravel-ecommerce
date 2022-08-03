<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    public function scopeFilter($query, array $filters){
        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orwhere('category', 'like', '%' . request('search') . '%')
            ->orwhere('description', 'like', '%' . request('search') . '%');
            
        }
    }
    public function user(){
        return $this->belongsTo(User::class. 'user_id');
    }
    
}
