@extends('layouts.app')

@section('content')
<div class="container">
    @include('included.messages')
    <div class="row">
        <div class="col-md-7">

            @if(count($data) > 0)
                @foreach($data as $item)
                    <div class="instagram-card">
                        <div class="instagram-card-header">
                            <img src="http://www.mulierchile.com/cool-cat-backgrounds/cool-cat-backgrounds-005.jpg" class="instagram-card-user-image"/>
                            <a class="instagram-card-user-name" href="https://www.instagram.com/followmeto/">{{$item[1]}}</a>
                            <div class="instagram-card-time">{{$item[2]}}</div>
                        </div>
                        <br><br>
                      
                        <div class="instagram-card-image">
                            <img src="{{$item[4]}}" height="600px"/>
                        </div>
                      
                        <div class="instagram-card-content">
                            <div>
                                <a class="footer-action-icons" href=""><i class="fa fa-heart-o fa-lg"></i></a>
                                <a class="footer-action-icons" href=""><i class="fa fa-comments-o fa-lg" aria-hidden="true"></i></a>
                                
                            </div>
                            <br>
                            <p class="likes">0 Likes</p>
                            <p><a class="instagram-card-content-user" href="">{{$item[1]}} </a>{{$item[5]}}</p>
                            
                            <br><a class="user-comment" href="">cat243</a> wow so cool</br>
                            <br><a class="user-comment" href="">alexbary</a> 😍</br>
                            <br><a class="user-comment" href="">usernametest</a> cool ❄️</br>
                            <!-- <hr> -->
                        </div>
                        
                        <div class="instagram-card-footer">
                            <input class="comments-input" type="text" placeholder="Add a comment..."/>
                            <a class="footer-action-icons" href=""><i class="fa fa-ellipsis-h"></i></a>
                        </div>
                    </div>
                    <br>

                @endforeach
            @else
                <p>No posts found in the database.</p>
            @endif

        </div>
        <div class="col-md-5">
            <!-- Blank -->
        </div>
    </div>
</div>
@endsection
