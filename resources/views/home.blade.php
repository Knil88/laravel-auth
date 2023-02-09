@extends('layouts')
@section('content')
    <main>
        <section>
            @section('content')
            <main>
              <section>
                <h1 class="text-center my-3">
                    My Portfolio
                </h2>
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-3 w-75 m-auto" >
                     @foreach ($projects as $project)
                     <div class="col">
                        <div class="card shadow-sm">
                          <img src={{$project->main_image}} alt="">
              
                          <div class="card-body">
                            <p class="card-text">{{$project->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn border"><a href="{{route('project.show',$project)}}" class="text-decoration-none text-black">View</a></button>
                                @auth
                                <button type="button" class="btn border"><a href="{{route('project.destroy')}}" class="text-decoration-none text-black">delete</a></button>
                                @endauth
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     @endforeach
                     
                    </div>
              </section>
            </main>
        @endsection
        </section>
    </main>    
@endsection