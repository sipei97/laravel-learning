@extends('layouts.todo')

@section('title', $title)

@section('content')
    <form action="{{url('todolist/index/update', $todo->id)}}" method="post">
        {{csrf_field()}}
        <input type="text" name="content" value="{{$todo->content}}" />
        <button type="submit">提交</button>
    </form>
@endsection