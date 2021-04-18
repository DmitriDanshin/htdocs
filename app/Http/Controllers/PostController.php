<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\{Foundation\Application, View\Factory, View\View};
use Illuminate\Http\{Request, Response};

class PostController extends Controller
{

    public function __construct(Request $request)
    {
        dump($request->route()->getName());
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return \view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request): Response
    {
        dd($request);
    }


    public function show(int $id)
    {
        return "POST $id";
    }


    public function edit(int $id)
    {
        return \view('posts.edit', ['id' => $id]);
    }


    public function update(Request $request, int $id): Response
    {
        dump($id);
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        dump(__METHOD__);
        dd($id);
    }
}
