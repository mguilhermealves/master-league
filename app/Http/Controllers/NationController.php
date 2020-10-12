<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationality;
use Validator;

class NationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nations = Nationality::all();

        return view('website.pages.nation.nation_index', compact([
            'nations'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.pages.nation.nation_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validatorNations($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dataClients = $request->all();

        Nationality::create([
            'name' => $dataClients['name'],
            'initials'=> $dataClients['initials'],
        ]);

        return redirect()->route('nation.index')->with('message','Nação criada com sucesso...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validatorNations($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'initials' => 'required',
        ]);

        $validator->setAttributeNames([
            'name' => 'Nome',
            'initials' => 'Sigla',
        ]);

        return $validator;
    }
}
