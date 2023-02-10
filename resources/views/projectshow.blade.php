@extends('layouts')
@section('content-section')
<section>
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5 w-75 m-auto">
    <div class="col-10 col-sm-8 col-lg-6 animate__animated animate__fadeInRight">
      <img src={{ asset('storage/' . $project -> main_image) }} class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" loading="lazy" width="700" height="500">
    </div>
    <div class="col-lg-6 animate__animated animate__fadeInLeft">
      <h1 class="display-5 fw-bold lh-1 mb-3 text-white">{{$project->name}}</h1>
      <p class="lead text-white">{{$project->description}}</p>
      <div class="d-grid gap-2 d-md-block justify-content-md-start">
        <div class="text-white my-2">
            Create:{{$project->release_date}}
            
        </div>
        <div class="text-white">
            Repo Link: <a  class="text-white p-1 rounded-2 bg-primary" href="{{$project->repo_link}}">Github Link</a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection