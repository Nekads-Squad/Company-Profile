<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Consulting;
use App\Mail\ConsultingMail;
use App\Models\Header;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Partner;
use App\Models\Technologie;
use App\Models\Artikel;
use App\Models\Contact;

class ConsultingController extends Controller
{

    // public function create()
    // {
    //     return view('consulting.index');
    // }

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
}
