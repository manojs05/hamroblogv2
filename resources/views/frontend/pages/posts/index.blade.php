@extends('frontend.template.app')

@section('content')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('img/post-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Hamro Blog</h1>
            <span class="subheading">Hamro Blog is great!!!</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <p class="post-subtitle">
              {{$post->description}}
            </p>
          </a>
           <p class="post-meta">Posted by
            <a href="#">{{ $post->user->name }}</a>
            {{ $post->created_at->diffForHumans() }}</p>
        </div>  
      </div>
    </div>
  </div>
@endsection
