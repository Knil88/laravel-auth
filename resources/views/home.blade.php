@extends('layouts')

   @section('content-section')
  
  <section class="my-2 ">
   
  
  <div>
    <h2 class="text-center text-white my-3  w-75 m-auto" >
      Hi , i'm Yari and i'm a: <span class="element my-3"></span> 
    </h2>
  </div>
 
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-3 w-75 m-auto" >
      @foreach ($projects as $project)
      <div class="col">
         <div class="card shadow-sm">
          <img class="project-img" src="{{ asset('storage/' . $project -> main_image) }}" alt="">
          <div class="card-body">
             <h5 class="card-text text-center">{{$project->name}}</h5>
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