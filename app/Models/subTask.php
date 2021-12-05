<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
class subTask extends Model
{
    use HasFactory;
    protected $fillable=['name', 'description', 'price', 'hours', 'startDate', 'endDate', 'state', 'priority', 'taskId'];

    public function task(){
        return  $this->belongsTo(Task::class,'taskId');
    }
}
