<<<<<<< HEAD
@extends('layouts/app')

@section('content')

    <h1>Nos catégories</h1>
    <a href="/categories/creer">Créer une catégorie</a>
    
    <div>
        @foreach ($categories as $category)
            <div>
                <h2>
                    {{ $category->name }}
                </h2>
            </div>
        @endforeach
    </div>
@endsection
=======
@extends('layouts.app')

@section('content')
    <div class="flex items-center gap-10 mb-6">
        <h1 class="text-3xl">Nos catégories</h1>
        <a href="/categories/creer">Créer une catégorie</a>
    </div>

    <div>
        @foreach ($categories as $category)
            <div>
                <h2>{{ $category->name }}</h2>
            </div>
        @endforeach
    </div>
@endsection
>>>>>>> b337dd46bf856f49d0a7ba5dcb0396c4a06fa887
