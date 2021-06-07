<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $timeSlots = [
        1 => '8pm to 10pm',
        2 => '5pm to 7pm',
        3 => '7:30am to 8:30am',
    ];

    public function getTimePreference()
    {
        return $this->timeSlots[$this->time_preference];
    }
}
