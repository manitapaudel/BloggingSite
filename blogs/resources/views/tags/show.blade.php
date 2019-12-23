@extends('layouts.app')
@section('title','|Show tags')
@section('content')
    <div class="row">    
        <div class="col-md-8">
        <p><h1>{{$tag -> name}} Tag </h1> {{$tag ->posts() -> count()}} Posts</p>
        </div>
        @if(!Auth::guest())
          @if(Auth::user() -> id == $tag -> user_id)  
            
            <div class="col-md-2">
                <a href="{{route('tags.edit' , $tag-> id)}}" class="btn btn-warning" style="margin-top: 20px;">Edit</a>
            </div>
            <div class="col-md-2">
                {{Form::open(['route' => ['tags.destroy', $tag -> id],'method' => 'DELETE'])}}
                    {{Form::submit('Delete' , ['class' => "btn btn-danger", 'style' => "margin-top: 20px;"])}}
                {{Form::close()}}
            </div>
         @endif   
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($tag ->posts as $post)

                    <tr>
                        <td>{{$post -> id}}</td>
                        <td>{{$post -> title}}</td>
                        <td>
                        @foreach($post -> tags as $tag)
                            <span class="badge badge-pill badge-success">{{$tag -> name}}</span>
                        @endforeach
                        </td>
                    <td> <a href="{{route('posts.show' , $post -> id)}}" class="btn btn-dark">View</a></td>
                    
                    
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection