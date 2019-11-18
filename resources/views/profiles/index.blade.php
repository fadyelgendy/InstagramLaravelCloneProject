@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3 mt-5">
            <img src="/img/freecodecamp.jpg" class=" w-100 rounded-circle">
        </div>
        <div class="col-9 mt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="mr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="mr-5"><strong>23k</strong> followers</div>
                <div class="mr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div>
                <a href="#">{{$user->profile->url ?? 'N/A'}}</a>
            </div>
        </div>

        <div class="row pt-5">
           @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                   <a href="/p/{{$post->id}}"> 
                        <img src="/storage/{{$post->image}}" class="w-100 "></a>
                </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection
 