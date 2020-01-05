@extends('layouts.todo')

@section('title', $title)

@section('content')
    <form action="{{url('todolist/index/store')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="content" value="" />
        <button type="submit">提交</button>
    </form>
@endsection