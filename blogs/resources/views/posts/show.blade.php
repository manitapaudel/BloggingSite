@extends('layouts.app')
@section('title','|Show posts')
@section('content')
<div class="row" style="margin-top:50px;">

    <div class="col-md-8 ">
    <div class=""><h1>{{$post -> title }}</h1></div>
    <div class="">{!!$post['content'] !!}</div>
    <hr>
</div>

<div class="c0l-md-2">
        <a href="\posts" class="btn btn-primary">Go Back</a><br/>
        <small>Written on {{$post -> created_at  }} <br/> Author:{{$post['user']-> name }} 
        <br/>Category:{{$post -> category -> name  }}</small>
        <div class="tags">Tags:
            @foreach($post ->tags as $tag )
                <a href="{{route('tags.show' , $tag -> id )}}" class="btn btn-sm btn-info">{{$tag ->name}} </a></span>
            @endforeach
        </div>
    </div>


</div>

<small>Last updated:{{$post->updated_at }}</small>
@if(!Auth::guest())
@if(Auth::user()->id == $post -> user_id)
<a href="/posts/{{$post->id }}/edit" class="btn btn-primary">Edit</a>

{!! Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
@endif
@endif





@endsection