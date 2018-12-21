<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCategorias;
use App\Http\Requests\UpdateCategorias;
use App\Categorias;

class CategoriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = Categorias::where('categoria', '<>', '')
        ->search($request->q)
        ->orderBy('categoria', 'desc')
        ->paginate(5);

        return view('admin.categorias.index', ['categorias' => $categorias]);
    }

    public function store(StoreCategorias $request)
    {
        $categorias = Categorias::create($request->except('role'));

        if ($request->has('role'))
        {
            $categorias->assignRole($request->role);
        }

        return json_encode(['success' => true, 'categorias_id' => $categorias->id]);
    }

    public function create()
    {
        return view('admin.categorias.create');
    }    

    public function destroy($id)
    {
        $categorias = Categorias::find(\Hashids::decode($id)[0])->delete();

        return json_encode(['success' => true]);
    }    

    public function autocomplete(Request $request)
    {
        return Categorias::search($request->q)->take(10)->get();
    }

    public function edit($id)
    {
        $categorias = Categorias::find(\Hashids::decode($id)[0]);

        return view('admin.categorias.edit', ['categorias' => $categorias]);
    }

    public function show($id)
    {
        $categorias = Categorias::find(($id));

        return view('admin.categorias.show', ['categorias' => $categorias]);
    }


    public function update(UpdateCategorias $request, $id)
    {
        $categorias = Categorias::find(\Hashids::decode($id)[0]);
        $categorias->update($request->except('role'));

        if ($request->has('role'))
        {
            $categorias->syncRoles($request->role);
        }

        return json_encode(['success' => true]);
    }    
}
