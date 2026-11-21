<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Timetable;

class TimetableController extends Controller
{
    public function index()
    {
        $timetables = Timetable::all();
        return view('timetables.index', compact('timetables'));
    }

    public function create()
    {
        // Dropdown ku data thevai na
        $batches = \App\Models\Batch::all();
        $rooms = \App\Models\Room::all();
        $courses = \App\Models\Course::all();
        return view('timetables.create', compact('batches','rooms','courses'));
    }

    public function store(Request $request)
    {
        Timetable::create($request->all());
        return redirect()->route('timetables.index');
    }
}
