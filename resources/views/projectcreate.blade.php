@extends('layouts-main')

@section('form')

<section class="d-flex justify-content-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section>

    </section>

    {{-- Impostiamo la route su project.store --}}

    <form class="d-flex flex-column bg-secondary text-white p-3 rounded-2" method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
        @csrf
        <h1  >New 
            Project</h1>
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="textarea" name="description">
        <br>
        <label for="main_image">Image url</label>
        <input type="file" name="main_image">
        <br>
        <label for="release_date">Date released</label>
        <input type="date" name="release_date">
        <br>
        <label for="repo_link">link github</label>
        <input type="text" name="repo_link">
        
        {{-- Il submit immetterĂ  tutti i dati del form in un nuovo progetto e ci reindirizzerĂ  alla home --}}
        
        <input type="submit" value="CREATE NEW  PROJECT">
    </form>
</section>
@endsection
