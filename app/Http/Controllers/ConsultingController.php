<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultingMail;
use App\Models\Consulting;

class ConsultingController extends Controller
{

    // public function create()
    // {
    //     return view('consulting.index');
    // }

    public function index()
    {
        $consultings = Consulting::all();
        
        return view('consulting.data', compact('consultings'));
    }

    public function store(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan data ke database
            Consulting::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'date' => now()
        ]);

        // Redirect ke halaman sukses
        return redirect('/');
    }

    // public function destroy(Consulting $consulting)
    // {
    //     $consulting->delete();

    //     return redirect('/consultings')->with('message', 'Data Berhasil Dihapus');
    // }
}
