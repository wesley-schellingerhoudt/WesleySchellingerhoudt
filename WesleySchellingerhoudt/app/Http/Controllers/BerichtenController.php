<?php

namespace App\Http\Controllers;
use App\Http\Requests\Artikel\StoreRequest;
use App\Http\Requests\Artikel\UpdateRequest;
use App\Models\Bericht;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Throwable;


class BerichtenController extends Controller
{
    public $table = 'berichten';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berichten = Bericht::orderBy('id', 'DESC')->paginate(5);
        return view('berichten.index',compact('berichten'));
    }

    /**
     * Display the form for new article creation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create form voor artikelen
        return view('berichten.create');
    }

    /**
     * Validate the submitted data via the form and create a new article.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required',
            'content' => 'required',
        ]);
        $insert['titel'] = $request->get('titel');
        $insert['content'] = $request->get('content');
        Bericht::insert(request()->except(['_token']));
        return Redirect::to('berichten')
            ->with('success','Bericht aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param Bericht  $bericht
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bericht = Bericht::findOrFail($id);
        return view('berichten.show',compact('bericht'));
    }

    /**
     * Show the form for editing the specified resource.
     *php
     * @param Bericht $bericht
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $bericht = Bericht::findOrFail($id);
        return view('berichten.edit', compact('bericht'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Bericht $bericht
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'titel' => 'required',
            'content' => 'required',
        ]);

        Bericht::whereId($id)->update($data);

        return redirect()->route('berichten.index')
            ->with('success','Bericht bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bericht $bericht
     * @return RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        Bericht::find($id)->delete();
        return redirect()->route('berichten.index')
            ->with('success','Bericht verwijderd');
    }
}
