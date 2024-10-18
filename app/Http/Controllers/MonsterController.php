<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Monster;
use Carbon\Carbon;
// use App\Enums\{ MonsterClass, Element, Ailment };

class MonsterController extends Controller
{
    // Views
    public function index()
    {
        $monsters = Monster::all();
        return view("monsters.index", compact("monsters"));
    }

    public function show()
    {
        return $this->index();
    }

    public function create()
    {
        return view("monsters.create");
    }

    public function edit(Monster $monster)
    {
        // $elements = 
        return view("monsters.edit", compact("monster"));
    }


    // DB operations
    public function store(Request $request)
    {
        $monster = new Monster;
        $monster->name      = $request->name;
        $monster->class     = $request->class;
        $monster->element   = $request->element;
        $monster->ailment   = $request->ailment;
        $monster->weakness  = $request->weakness;
        $monster->info      = $request->info;
        $monster->save();

        return redirect()->route("monsters.index");
    }

    public function update(Request $request, int $id)
    {
        $monster = Monster::find($id);
        $monster->name       = $request->name;
        $monster->class      = $request->class;
        $monster->element    = $request->element;
        $monster->ailment    = $request->ailment;
        $monster->weakness   = $request->weakness;
        $monster->info       = $request->info;
        $monster->updated_at = Carbon::now();
        $monster->save();

        return redirect()->route("monsters.index");
    }

    public function destroy(int $id)
    {
        // $monster = Monster::find($id);
        // $monster->delete();
        Monster::destroy( $id );

        return redirect()->route("monsters.index");
    }
}
