<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Player, Nationality, PlayerPosition};
use Validator;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $players = Player::with('nationality_player')
            ->with('position_player')
            ->get();

        return view ('website.pages.player.player_index', compact([
            'players',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nations = Nationality::all();

        $positions = PlayerPosition::All();

        return view('website.pages.player.player_create', compact([
            'nations',
            'positions'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validatorPlayer($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dataPlayer = $request->all();

        Player::create([
            'name' => $dataPlayer['name'],
            'overall' => $dataPlayer['overall'],
            'position_id' => $dataPlayer['position_id'],
            'nation_id' => $dataPlayer['nation_id'],
        ]);

        return redirect()->route('admin.player.index')->with('message', 'Jogador criado com sucesso...');
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

    protected function validatorPlayer($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'overall' => 'required|min:0|max:95',
            'position_id' => 'required',
            'nation_id' => 'required',
        ]);

        $validator->setAttributeNames([
            'name' => 'Nome',
            'overall' => 'Overall',
            'position_id' => 'Posição',
            'nation_id' => 'Nacionalidade',
        ]);

        return $validator;
    }
}
