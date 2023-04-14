<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    public function index()
    {
        $options = Option::all();
        return view('options.index', compact('options'));
    }

    public function create()
    {
        return view('options.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'key' => 'required|unique:options|max:255',
            'value' => 'required',
        ]);

        $option = Option::create($validatedData);

        return redirect()->route('options.index')->with('success', 'Opción creada con éxito');
    }

    public function edit(Option $option)
    {
        return view('options.edit', compact('option'));
    }

    public function update(Request $request, Option $option)
    {
        $validatedData = $request->validate([
            'key' => 'required|unique:options,key,' . $option->id . '|max:255',
            'value' => 'required',
        ]);

        $option->update($validatedData);

        return redirect()->route('options.index')->with('success', 'Opción actualizada con éxito');
    }

    public function destroy(Option $option)
    {
        $option->delete();
        return redirect()->route('options.index')->with('success', 'Opción eliminada con éxito');
    }
}
