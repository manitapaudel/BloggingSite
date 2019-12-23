@extends('layouts.app')
@section('title','|Home')
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@section('content')
<div class="jumbotron">
 @if(Auth::guest())
    <h1>Welcome to BLOG</h1>
    <p>A blogging site where you can show your creative side.</p>
    
        <div class="container mt-3">
            You can <button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Start your own blog</button>.<br/>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
        
            <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">But,hey there!</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
            
            <!-- Modal body -->
                        <div class="modal-body">
                            You have to login first, so that you can claim your works. 
                            Cheers!
                        </div>
            
            <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Sure</button>
                        </div>
            
                    </div>
                </div>
            </div>

        </div>
            <h3> OR </h3>You could read other writers' blogs while you're visiting. <a href="/posts" class="btn btn-success">Get some inspiration.</a>
    
    @else
        <h1>Welcome blogger!</h1>
    @endif       
</div>
@endsection