<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;

class MainAdminControoler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('AdminPages.dashboard', compact('users'));
    }


    /**
     * Show the organizations page.
     */
    public function organizations()
    {
        $organizations = Organization::all();
        return view('AdminPages.organizations', compact('organizations'));
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        return view('AdminPages.about');
    }

    /**
     * Show the form for editing the specified organization.
     */
    public function editOrganization(string $id)
    {
        $organization = Organization::findOrFail($id);
        
        return response()->json([
            'success' => true,
            'organization' => $organization
        ]);
    }

    /**
     * Update the specified organization in storage.
     */
    public function updateOrganization(Request $request, string $id)
    {
        $validated = $request->validate([
            'org_name' => 'required|string|max:255',
            'pres_name' => 'required|string|max:255',
            'college' => 'required|string|max:255',
        ]);

        $organization = Organization::findOrFail($id);
        $organization->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Organization updated successfully!',
            'organization' => $organization
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
