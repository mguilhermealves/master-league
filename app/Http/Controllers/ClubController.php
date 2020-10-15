<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Club, Nationality};
use Validator;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::with('nationality_club')->get();
        
        return view('website.pages.club.club_index', compact([
            'clubs'
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
        return view('website.pages.club.club_create', compact([
            'nations',
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
        $validator = $this->validatorClubs($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $dataClubs = $request->all();

        Club::create([
            'name' => $dataClubs['name'],
            'initials' => $dataClubs['initials'],
            'nation_id' => $dataClubs['nation_id'],
            'user_id' => 1,
        ]);

        return redirect()->route('admin.club.index')->with('message', 'Clube criado com sucesso...');
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

    protected function validatorClubs($request)
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
