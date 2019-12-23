@extends('layouts.app')
@section('title','|Edit posts')
@section('stylesheets')
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'SUBMIT']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title', ) }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
        </div>
        <div class="form-group">
                {{ Form::label('category_id', 'Categories' ) }}
                {{ Form::select('category_id', $category, $post -> category_id, ['class'=>'form-control']) }}
        </div>
        <div class="form-group">
                {{ Form::label('tags', 'Tags' ) }}
                {{ Form::select('tags[]', $tags, $post -> tag_id, ['class'=>'form-control select2-multi' , 'multiple' => 'multiple']) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('content', 'Content') }}
            {{ Form::textarea('content', $post->content, ['class' => 'form-control', 'placeholder' => 'Content']) }}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}

@endsection
@section('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
    selector:'textarea'
    });
</script>
<script src="{{ asset('js/select2.min.js') }}" ></script>
<script >
        $(document).ready(function() {
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post -> tags() -> allRelatedIds()) !!}).trigger('change');//to keep the existing tags intact
        });

</script>

@endsection