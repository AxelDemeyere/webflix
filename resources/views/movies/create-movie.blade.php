@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('title') }}">
        <input type="textarea" name="synopsys" value="{{ old('synopsys') }}">
        <input type="text" name="duration" value="{{ old('duration') }}">
        <input type="date" name="released_at">
        <select name="categories" id="categories">
        <option value="action">Action</option></select>

        <button>Sauvegarder</button>
    </form>
@endsection