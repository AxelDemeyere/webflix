<<<<<<< HEAD
@extends('layouts/app')

@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}">
        <button>Sauvegarder</button>
    </form>
@endsection
=======
@extends('layouts.app')

@section('content')
    @foreach ($errors->all() as $error)
        <p class="text-red-500">{{ $error }}</p>
    @endforeach

    <form action="" method="post">
        @csrf
        <div>
            <input type="text" name="name" value="{{ old('name') }}" class="rounded shadow">
        </div>
        <button>Sauvegarder</button>
    </form>
@endsection
>>>>>>> b337dd46bf856f49d0a7ba5dcb0396c4a06fa887
