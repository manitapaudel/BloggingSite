@extends('layouts.app')
@section('title','|Services')
@section('style')
<style>
.learn {
    border: 2px solid;
    padding: 20px; 
    width: 300px;
    resize: both;
    background: #EF3C3C;
    overflow: auto;
  }
</style>
@section('content')
<h1>Here's a few things you can do:</h1><br/>
<div class="learn">
    <ul class="list-group">
        <li class="list-group-item">Write a blog of your choice, edit it and even delete it if you want to.</li>
        <li class="list-group-item">Select a category that best fits your post. And keep in mind that you can always change it.</li>
        <li class="list-group-item">Select multiple tags for your posts so that they can be found easily. You can also remove the tags and select new ones.</li>
        <li class="list-group-item">You can read other people's posts as you can navigate posts through the tags and vice versa.</li>
        <li class="list-group-item">Also a side note:you can drag this box and change its size.Have fun.</li>
    </ul>
</div>


@endsection