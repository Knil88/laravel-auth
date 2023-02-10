@extends('layouts')

   @section('content-section')
  
  <section class="my-2 ">
  
    <h1 class="text-center text-white my-3 p-2 border rounded-2 w-25 m-auto" id="portfolio-title">
      My Portfolio
  </h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-3 w-75 m-auto" >
      @foreach ($projects as $project)
      <div class="col">
         <div class="card shadow-sm">
          <img class="project-img" src="{{ asset('storage/' . $project -> main_image) }}" alt="">
          <div class="card-body">
             <p class="card-text">{{$project->description}}</p>
             <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                 <button type="button" class="btn border btn_hover  "><a href="{{route('project.show',$project)}}" class="  btn_hover text-decoration-none ">View</a></button>
                 @auth
                 <button type="button" class="btn border  btn_hover  mx-1"><a href="{{route('project.destroy',$project)}}" class=" btn_hover text-decoration-none ">Delete</a></button>
                 <button type="button" class="btn border btn_hover  mx-1"><a href="{{route('project.create',$project)}}" class="btn_hover text-decoration-none ">Create</a></button>
                 <button type="button" class="btn border  btn_hover  mx-1"><a href="{{route('project.edit',$project)}}" class="btn_hover text-decoration-none ">Edit</a></button>
                 @endauth
                 </div>
             </div>
           </div>
         </div>
       </div>
      @endforeach
  </section>
     
         
        </div>
  
   @endsection