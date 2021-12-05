<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Client;
use App\Models\Task;


class Project extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'totalPriceOfProject', 'totalHoursOfProject', 'startDate', 'endDate', 'state', 'clientId', 'userId'];

    //user 
    public function user(){
        return   $this->belongsTo(User::class,'userId');
    }
    //client
    public function client(){
        return    $this->belongsTo(Client::class,'clientId');
    }
    //Task
    public function tasks(){
        return   $this->hasMany(Task::class,'projectId');
    }
}
