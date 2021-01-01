@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)

    <div class="card">
     <ul class="list-group list-group-flush" >
          @foreach($posts as $post)
          <li class="list-group-item">
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 100%" src="/storage/cover_imageS/{{$post->cover_image}}" alt="cover_image">
                </div>
                <div class="col-md-8">
                  <h3> <a href="/posts/{{$post->id}}" >{{$post->title}}</a> </h3>
                  <small>written on {{$post-> created_at}}</small>
                </div>
            </div> 

          </li>
         
          @endforeach
     </ul>
    </div>
    @else
    @endif
@endsection 


