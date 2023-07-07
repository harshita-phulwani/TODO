<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class todo extends Model
{
    public $table= 'todos';
    protected $fillable =[
        'description',
    ];
    use HasFactory;

    public function isCompleted(){
        return $this->completed_at != null;
    }
}
