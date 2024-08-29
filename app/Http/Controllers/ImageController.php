<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

        return back()->with('success', 'Resim başarıyla yüklendi.')->with('path', $path);
    }

// @if (session('path'))
// <img src="{{ asset('storage/' . session('path')) }}" alt="Yüklenen Resim">
// @endif

// <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
//     @csrf
//     <input type="file" name="image" accept="image/*" required>
//     <button type="submit">Yükle</button>
// </form>


}
