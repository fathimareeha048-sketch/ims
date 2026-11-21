<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LeadController;
use App\Models\Course;
use App\Models\Room;
use App\Models\Batch;
use App\Models\Teacher;
use App\Models\Timetable;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard with Counts
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'coursesCount' => Course::count(),
            'roomsCount' => Room::count(),
            'batchesCount' => Batch::count(),
            'teachersCount' => Teacher::count(),
            'timetablesCount' => Timetable::count(),
            'courses' => Course::latest()->take(5)->get(),
            'rooms' => Room::latest()->take(5)->get(),
            'batches' => Batch::latest()->take(5)->get(),
        ]);
    })->name('dashboard');

    Route::resource('programs', ProgramController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('batches', BatchController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('timetables', TimetableController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('leads', LeadController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');
});

// TEMP - Login aana aprom itha DELETE pannidalam thanga
Route::get('/create-new-user', function(){
    \App\Models\User::where('email','admin@gmail.com')->delete();
    $user = \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('12345678'),
        'email_verified_at' => now()
    ]);
    return "SUCCESS! Email: admin@gmail.com / Pass: 12345678";
});

require __DIR__.'/auth.php';