<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function view()
    {
        return view('career');
    }

 public function store(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120', // max 5MB
            'message' => 'nullable|string',
        ]);

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $filename = \Str::slug($request->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('resumes', $filename, 'public');
        }

        \DB::table('career_applications')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'resume' => $path ?? null,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['status' => 'success', 'message' => 'Başvurunuz başarıyla gönderildi!']);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => 'Başvuru gönderilirken hata oluştu!',
            'error' => $e->getMessage()
        ], 500);
    }
}

}
