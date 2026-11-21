<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['program_id', 'name', 'start_date', 'end_date'];

    public function program() { return $this->belongsTo(Program::class); }
    public function timetables() { return $this->hasMany(Timetable::class); }
}
