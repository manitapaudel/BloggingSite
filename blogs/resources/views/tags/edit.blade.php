@extends('layouts.app')
@section('title','|Edit tags')
@section('content')
    {{Form::model($tag, ['route' => ['tags.update',$tag -> id],'method' => "PUT"])}}
        {{Form::label('name','Tag name:')}}
        {{Form::text('name',null,['class' => 'form-control'])}}
        {{Form::submit('Save changes',['class' =>'btn btn-success'])}}
    
    {{Form::close()}}
@endsection