<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $validated['user_id'] = auth()->id();

        Story::create($validated);

        return redirect()->route('dashboard')->with('success', 'Story shared successfully!');
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }

    public function edit(Story $story)
    {
        $editing = true;
        return view('stories.show', compact('story', 'editing'));
    }

    public function update(Story $story)
    {
        $validated = request()->validate([
            'content' => 'required|min:5|max:240'
        ]);

        $story->update($validated);

        return redirect()->route('stories.show', $story->id)->with('success', 'Story updated successfully!');
    }

    public function destroy(Story $story)
    {
        $story->delete();

        return redirect()->route('dashboard')->with('success', 'Story deleted successfully!');
    }
}
