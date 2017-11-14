@extends('layouts.front')
@section('content')
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">
            <small>{{ $article->title }}</small>
          </h1>
          {!! $article->content !!}

        </div>

    @include('front.right')
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection