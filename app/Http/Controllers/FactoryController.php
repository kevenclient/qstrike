<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFactoryRequest;
use App\Http\Requests\UpdateFactoryRequest;
use App\Models\Factory;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factories = Factory::paginate(10);
        return view('factories.list', ['factories' => $factories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('factories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFactoryRequest $request)
    {
        $data = $request->validated();
        Factory::create($data);
        return redirect()->route('factories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view('factories.show', $factory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $factory = Factory::findOrFail($id);
        return view('factories.edit', $factory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFactoryRequest $request, string $id)
    {
        $data = $request->validated();
        Factory::findOrFail($id)->update($data);
        return redirect()->route('factories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Factory::destroy($id);
        return redirect()->route('factories.index');
    }
}
