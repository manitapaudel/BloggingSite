@extends('layouts.app')
@section('title','|Create posts')
@section('stylesheets')
<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('content')

<h1>Create Posts</h1>
<form method="post" action="{{route('posts.store')}}">
        <div class="form-group">
            @csrf            
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label name="category_id" >Choose a Category
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category ->id}}"> {{$category -> name}} </option>
                        
                    @endforeach
                </select>
            </label>
        </div>

    
    <div class="form-group">
        <label name="tags" >Choose a Tag<br/>
            <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                @foreach($tags as $tag)
                    <option value="{{$tag ->id}}"> {{$tag -> name}} </option>
                        
                @endforeach
            </select>
        </label>
    </div>
        
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" cols="30" rows="10" placeholder="Body Text"></textarea>
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 

@endsection
@section('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
    <script>
        tinymce.init({
         selector:'textarea'
        });
    </script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script >
        $(document).ready(function() {
        $('.select2-multi').select2();
        });

    </script>
@endsection