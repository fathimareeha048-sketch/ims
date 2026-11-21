<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = ['batch_id', 'course_id', 'room_id', 'teacher_id', 'day_of_week', 'start_time', 'end_time'];

    public function batch() { return $this->belongsTo(Batch::class); }
    public function course() { return $this->belongsTo(Course::class); }
    public function room() { return $this->belongsTo(Room::class); }
    public function teacher() { return $this->belongsTo(User::class, 'teacher_id'); }
}
