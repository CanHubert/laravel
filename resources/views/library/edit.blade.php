@extends('layouts.app')
@section('title','Edytuj')
@section('content')


    <form action="{{route('library.update',$book->id)}}" method="post" >
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="form-group">
            <input type="text" name="author" value="{{$book->author}}">
        </div>

        <div class="form-group">
            <input type="text" name="title" value="{{$book->title}}">
        </div>
        <div class="form-group" style="width: 200px">
            <input type="submit" class="btn btn-success" value="Zapisz">
        </div>


    </form>


@endsection