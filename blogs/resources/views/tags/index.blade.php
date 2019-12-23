@extends('layouts.app')
@section('title','|Tags')
@section('content')
<div class="row">
    <div class="col-md-8">
<a class="btn btn-primary" href="/posts/create">Create Blog</a>
         <h1>Tags</h1>       
        <table class="table table-striped">
           <thead>
            <tr>
               
                <th>#</th>
                <th>Name</th>

                        
            </tr>
           </thead>
           <tbody>
            @foreach ($tags as $tag)
                <tr>
                <td>{{$tag -> id}}</td>
                <td><a href="{{route('tags.show' , $tag -> id)}}">{{$tag -> name}}</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class = "col-md-3">
        <div class = "well">
        @if(!Auth::guest())
        {!! Form::open (['route' => 'tags.store'])!!}
        <h2>New Tags</h2>
        {{Form::label('name','Name:')}}
        {{Form::text ('name',null,['class'=>'form-control'])}}
        {{Form::submit('Create new tag', ['class' =>'btn btn-primary btn-block'])}}
        
        {!! Form::close()!!}
        @endif
        </div>
    </div>
</div>
@endsection