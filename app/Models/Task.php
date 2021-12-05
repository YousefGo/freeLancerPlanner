<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Task extends Model
{
    use HasFactory;
    //fillabe
    protected $fillable=['name', 'description', 'totalPriceOfTask', 'totolHoursOfTask', 'startDate', 'endDate', 'state', 'priority', 'projectId',];

    public function project(){
        return   $this->belongsTo(Project::class,'projectId');
    }
}
