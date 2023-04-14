<?php

namespace App\Http\Controllers;

use App\Models\Technologie;
use Illuminate\Http\Request;


class TechnologieController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Illuminate\Http\Respose;
     */
    public function index()
    {
        $technologies = Technologie::all();
        
        return view('technologie.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Illuminate\Http\Respose;
     */
    public function create()
    {
        return view('technologie.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Illuminate\Http\Request;
     * @return Illuminate\Http\Respose
     */
    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required','description' => 'required', 'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Technologie::create($input);

        return redirect('/technologies')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */


    /**
     * Show the form for editing the specified resource.
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Respose
     */
    public function edit(Technologie $technology)
    {
        return view('technologie.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     * @param Illuminate\Http\Request
     * @param App\Models\Technologie;;
     * @return Illuminate\Http\Respose
     */
    public function update(Request $request, Technologie $technology)
    {
        $request->validate([
            'title' => 'required','description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $technology->update($input);

        return redirect('/technologies')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technologie $technology)
    {
        $technology->delete();

        return redirect('/technologies')->with('message', 'Data Berhasil Dihapus');
    }
}
