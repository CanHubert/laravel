@extends('layouts.app')
@section('title','Dodawanie książki')
@section('content')



    <?= Form::open(array('route' => 'library.save', 'method' => 'post')) ?>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group" style="width: 200px">
        <input type="text" class="form-control" name="author" placeholder="Podaj autora" required>
    </div>
     <div class="form-group" style="width: 200px">
         <input type="text" class="form-control" name="title" placeholder="Podaj tytuł" required>
     </div>
    <div class="form-group" style="width: 200px">
        <input type="submit" class="btn btn-success" value="Dodaj">
    </div>
<?= Form::close() ?>
@endsection