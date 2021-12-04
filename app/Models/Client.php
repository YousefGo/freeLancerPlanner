<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;


class Client extends Model
{
    use HasFactory;
    protected $fillable=['name', 'email', 'phone', 'by', 'submissonMethod', 'notes', 'userId'];
    // get clients of user 
    public function user(){
        $this->belongsTo(User::class,'userId');
    }

    public function projects(){
        $this->hasMany(Project::class,'clientId');
    }


}
