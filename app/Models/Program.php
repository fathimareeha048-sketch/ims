<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['name', 'code', 'description', 'is_active'];

    public function courses() { return $this->hasMany(Course::class); }
    public function batches() { return $this->hasMany(Batch::class); }
}
