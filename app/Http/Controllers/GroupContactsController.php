<?php

namespace App\Http\Controllers;

use App\Models\GroupContacts;
use Illuminate\Http\Request;

class GroupContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return GroupContacts::all();
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
    public function show($groupId, GroupContacts $groupContacts)
    {
        return $groupContacts->find($groupId);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupContacts $groupContacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupContacts $groupContacts)
    {
        //
    }
}
