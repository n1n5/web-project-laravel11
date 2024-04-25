<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(User $user)
    {
        $stories = $user->stories()->paginate(5);
        return view('users.show', compact('user', 'stories'));
    }

    public function edit(User $user)
    {
        $editing = true;
        $stories = $user->stories()->paginate(5);
        return view('users.edit', compact('user', 'editing', 'stories'));
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'bio' => 'nullable|min:1|max:255',
            'image' => 'image'
        ]);

        if (request()->has('image')) {

            $imagePath = request('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
        }

        $user->update($validated);

        return redirect()->route('profile');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
