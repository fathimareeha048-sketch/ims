<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Batch;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index', compact('batches'));
    }

    public function create()
    {
        return view('batches.create');
    }

    public function store(Request $request)
    {
        Batch::create($request->all());
        return redirect()->route('batches.index');
    }
}
