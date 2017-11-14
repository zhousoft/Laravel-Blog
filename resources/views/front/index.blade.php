@extends('layouts.front')
@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>
          @foreach($articles as $article)
            <!-- Blog Post -->
          <div class="card mb-4">
            {{--  <img class="card-img-right" src="http://placehold.it/750x300" alt="Card image cap">  --}}
            <div class="card-body">
              <h2 class="card-title">{{ $article->title }}</h2>
              
              <p class="card-text">{!! $article->summary !!}</p>
              <a href="article/{{$article->id}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on {{$article->created_at}}
            </div>
          </div>  
          @endforeach
          <!-- Blog Post -->
          <div class="card mb-4">
            {{--  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">  --}}
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            {{--  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">  --}}
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            {{--  <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">  --}}
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

    @include('front.right')
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection