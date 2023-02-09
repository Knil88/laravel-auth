@extends('layouts')
@section('content')
<div class="row flex-lg-row-reverse align-items-center g-5 py-5 w-75 m-auto">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src={{$project->main_image}} class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">{{$project->name}}</h1>
      <p class="lead">{{$project->description}}</p>
      <div class="d-grid gap-2 d-md-block justify-content-md-start">
        <div>
            Create:{{$project->release_date}}
            
        </div>
        <div>
            Repo Link: <a href="{{$project->repo_link}}">{{$project->name}}</a>
        </div>
      </div>
    </div>
  </div>
@endsection