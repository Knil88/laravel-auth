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
    <form class="d-flex flex-column bg-secondary text-white p-3 rounded-2" method="POST" action="{{ route('project.update',$project) }}">
        @csrf
        <h1>New 
            Project</h1>
        <label for="name">Name</label>
        <input type="text" name="name" value={{$project->name}}>
        <br>
        <label for="description">Description</label>
        <input type="textarea" name="description"  value={{$project->name}}>
        <br>
        <label for="main_image">Image url</label>
        <input type="text" name="main_image"  value={{$project->main_image}}>
        <br>
        <label for="release_date">Date released</label>
        <input type="date" name="release_date"  value={{$project->release_date}}>
        <br>
        <label for="repo_link">link github</label>
        <input type="text" name="repo_link"  value={{$project->repo_link}}>
        
        
        <input type="submit" value="EDIT  PROJECT">
    </form>
</section>
@endsection