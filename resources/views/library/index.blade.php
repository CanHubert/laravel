@extends('layouts.app')
@section('title','Biblioteka')
@section('content')



    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>AUTHOR</th>
            <th>TITLE</th>
            <th>OPTIONS</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->author}} </td>
                <td>{{$book->title}}</td>
                    <td><a href="{{route('library.edit',$book->id)}}" class="btn btn-info">Edytuj</a> <a href="{{route('library.delete',$book->id)}}" class="btn btn-danger">Usuń</a></td>
            </tr>
            @endforeach

    </table>"
    <a href="{{route('library.add')}}" type="button" class="btn btn-success">Dodaj nową książkę</a>
    <br>
    {{$books->links()}}



@endsection
