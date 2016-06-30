<?php

namespace Modules\Http\Controllers;

use Illuminate\Http\Request;use Modules\Http\Requests;
use Modules\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Models\Produtos;
use Notification;

class ProdutosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        Notification::success(trans('You are logged out'));
        //$produtos = Produtos::all();
        $produtos = Produtos::paginate(5);
        return view('produtos.produtos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ProjectRequest\ProdutosRequest $request)
    {
        $input = $request->all();
        Produtos::create($input);

        return redirect('produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.edit', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\ProjectRequest\ProdutosRequest $request, $id)
    {
        Produtos::find($id)->update($request->all());
        return redirect()->route('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Produtos::find($id)->delete();
        return redirect()->route('produtos');
    }
}
