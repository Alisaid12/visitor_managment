<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadImageController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function updateProfile(Request $request)
{
    
   
    $user = Auth::user();

    if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
        $fileName = time() . '_' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move(public_path('imgs'), $fileName);
        $imgUrl = asset('imgs/' . $fileName);

        // Store the photo URL in the user's profile_image column
        $user->profile_image = $fileName;
        $user->save();

        return response()->json(['imgUrl' => $imgUrl]);
    } else {
        return response()->json(['error' => 'Invalid file upload']);
    }

    return redirect('dashboard');
}
}

 // $data = $request->validate([
    //     'photo' => 'file|image|max:2048',
    // ]);

    // $user = Auth::user();

    // if (array_key_exists('photo', $data)) {
    //     $image = $request->file('photo')->getClientOriginalName();
    //     $path = $request->file('photo')->storeAs('users' , $image , 'photo');
    //     $user->update([
    //         'profile_image' => $path,
    //     ]);
    // }