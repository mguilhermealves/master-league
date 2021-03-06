<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayerPosition;
use Validator;

class PlayerPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = PlayerPosition::all();

        return view('website.pages.player_position.playerposition_index', compact([
            'positions',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.pages.player_position.playerposition_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validatorPositions($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dataPosition = $request->all();

        PlayerPosition::create([
            'name' => $dataPosition['name'],
            'initials'=> $dataPosition['initials'],
        ]);

        return redirect()->route('admin.playerposition.index')->with('message','Posição criada com sucesso...');
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

    protected function validatorPositions($request)
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
