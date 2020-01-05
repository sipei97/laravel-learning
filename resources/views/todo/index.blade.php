@extends('layouts.todo')

@section('title', $title)

@section('content')
    <a href="{{url('todolist/index/create')}}">新增</a>
    <table>
        <tr>
            <th>id</th>
            <th>内容</th>
            <th>操作</th>
        </tr>
        <tbody>
        @foreach ($data as $k => $v)
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->content}}</td>
                <td>
                    <a href="{{url('todolist/index/edit', $v->id)}}">编辑</a> |
                @if ($v->trashed())
                    <a href="{{url('todolist/index/restore', $v->id)}}">恢复</a> |
                    <a href="{{url('todolist/index/forceDelete', $v->id)}}">彻底删除</a>
                @else
                    <a href="{{url('todolist/index/destroy', $v->id)}}">删除</a>
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection