<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
        {$request->validate([
            'user_id' => ['required']
        ]);

        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->back()->with('success', 'cập nhật thông tin cá nhân thành công');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function showUpdateImage(Request $request) {
        $user = Auth::user();
        $user_image = $user->image;
        return view('frontend.dashboard.page.avatar', compact('user_image'));
    } 
    public function updateImage(Request $request) {
        // Validate the request to ensure an image is provided
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        
        // Retrieve the authenticated user
        $user = Auth::user();

        // Handle the image file if it is present in the request
        if ($request->hasFile('image')) {
            // Check if the user already has an image and delete it if it exists
            if (File::exists(public_path('uploads/users' . $user->image))) {
                File::delete(public_path('uploads/users' . $user->image));
            }

            // Get the uploaded image file
            $image = $request->file('image');
            
            // Generate a unique name for the image file
            $imageName = rand() . '_' . $image->getClientOriginalName();
            
            // Move the image file to the 'uploads' directory
            $image->move(public_path('uploads/users'), $imageName);

            // Update the user's image path
            $user->image = $imageName;
        }
    
        // Save the user's information
        $user->save();
        // Return success response
        return redirect()->back()->with('success', 'Cập nhật ảnh đại diện thành công');
    }
    
}
