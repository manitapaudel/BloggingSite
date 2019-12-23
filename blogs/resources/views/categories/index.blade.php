@extends('layouts.app')
@section('title','|Categories')
@section('content')
<div class="row">
    <div class="col-md-8">
<a class="btn btn-primary" href="/posts/create">Create Blog</a>
         <h1>Categories</h1>       
        <table class="table table-striped">
           <thead>
            <tr>
               
                <th>#</th>
                <th>Name</th>

                        
            </tr>
           </thead>
           <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category -> id}}</td>
                    <td>{{$category -> name}}</td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class = "col-md-3">
        <div class = "well">
        {!! Form::open (['route' => 'categories.store'])!!}
        <h2>New Category</h2>
        {{Form::label('name','Name:')}}
        {{Form::text ('name',null,['class'=>'form-control'])}}
        {{Form::submit('create new category', ['class' =>'btn btn-primary btn-block'])}}
        
        {!! Form::close()!!}
        </div>
    </div>
</div>
@endsection