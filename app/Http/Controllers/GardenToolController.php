<?php

namespace App\Http\Controllers;

use App\Models\GardenTool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GardenToolController extends Controller
{
    public function index()
    {
        $gardenTools = GardenTool::all(); // Retrieve all garden tools from the database

        return view('welcome', ['gardenTools' => $gardenTools]);

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand' => 'required|string|max:255',
            'image' => 'nullable|url',
        ]);

        GardenTool::create($validatedData);

        // Redirect the user back to the create form with a success message
        return redirect('/')->with('success', 'Garden tool added successfully!');

    }

    public function getGardenTools(Request $request)
    {
        $limit = $request->input('limit', 10); // Default limit if not provided

        $gardenTools = GardenTool::orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();

        return response()->json($gardenTools);
    }

    public function showThemes()
    {
        // Fetch data from the API endpoint
        $response = Http::get('https://hajusrakendus.ta22maarma.itmajakas.ee/api/records');

        // Decode the JSON response
        $themes = $response->json();

        return view('karelapi', ['themes' => $themes]);
    }
}
