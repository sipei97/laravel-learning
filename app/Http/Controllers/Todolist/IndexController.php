<?php

namespace App\Http\Controllers\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todolist;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '任务清单';
        // $data = $todolist->getAll();
        $data = Todolist::withTrashed()
            ->orderBy('id', 'desc')
            ->get();
        // dd(123, $data);

        return view('todo.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = '新增任务';
        return view('todo.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Todolist $todolist)
    {
        // $data = [
        //     'content' => '123'
        // ];
        $data = $request->except('_token');
        $res = $todolist->create($data);
        // dump($res);

        return redirect('todolist/index/index');
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
        $title = '编辑任务';
        $todo = Todolist::find($id);

        return view('todo.show', compact('title', 'todo'));
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
        // $data = [
        //     'content' => 456
        // ];
        $data = $request->except('_token');
        $res = Todolist::where('id', $id)->update($data);
        // dump($res);

        return redirect('todolist/index/index');
    }

    /**
     * 展示删除？
     */
    public function delete()
    {
        # code...
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Todolist::destroy($id);
        // dump($res);

        return redirect()->back();
    }

    public function restore($id)
    {
        $res = Todolist::where('id', $id)->restore();

        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $res = Todolist::where('id', $id)->forceDelete();

        return redirect()->back();
    }
}
