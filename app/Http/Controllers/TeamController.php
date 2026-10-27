<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.team.index', [
            'teams' => Team::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('team_image')) {
            $image = $request->file('team_image');

            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            $validatedData['team_image'] = $image->storeAs(
                'team-images',
                $imageName,
                'public'
            );
        }

        Team::create($validatedData);

        return redirect()->route('team.index')->with('success', 'Berhasil menambahkan kepengurusan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $team)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('team_image')) {

            if ($team->team_image && Storage::disk('public')->exists($team->team_image)) {
                Storage::disk('public')->delete($team->team_image);
            }

            $image = $request->file('team_image');

            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            $validatedData['team_image'] = $image->storeAs(
                'team-images',
                $imageName,
                'public'
            );
        }

        $team->update($validatedData);

        return redirect()->route('team.index')->with('success', 'Berhasil memperbarui kepengurusan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->team_image && Storage::disk('public')->exists($team->team_image)) {
            Storage::disk('public')->delete($team->team_image);
        }

        $team->delete();

        return redirect()->route('team.index')->with('success', 'Berhasil menghapus kepengurusan.');
    }
}
