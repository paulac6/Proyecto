<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;

/**
 * Class ObraController
 * @package App\Http\Controllers
 */
class ObraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obras = Obra::paginate();

        return view('obra.index', compact('obras'))
            ->with('i', (request()->input('page', 1) - 1) * $obras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obra = new Obra();
        return view('obra.create', compact('obra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Obra::$rules);

        $obra = Obra::create($request->all());

        return redirect()->route('obras.index')
            ->with('success', 'Obra created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obra = Obra::find($id);

        return view('obra.show', compact('obra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obra = Obra::find($id);

        return view('obra.edit', compact('obra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Obra $obra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obra $obra)
    {
        request()->validate(Obra::$rules);

        $obra->update($request->all());

        return redirect()->route('obras.index')
            ->with('success', 'Obra updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $obra = Obra::find($id)->delete();

        return redirect()->route('obras.index')
            ->with('success', 'Obra deleted successfully');
    }
}
