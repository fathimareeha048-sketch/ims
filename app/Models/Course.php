<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['program_id', 'name', 'code'];

    public function program() { return $this->belongsTo(Program::class); }
    public function timetables() { return $this->hasMany(Timetable::class); }
}
