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
                      <div class="col">
                        <div class="card shadow-sm">
                          <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              
                          <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn border"><a href="" class="text-decoration-none text-black">View</a></button>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                    </div>
              </section>
            </main>
        @endsection
        </section>
    </main>    
@endsection