@extends('layouts.app')

@section('content')
<div class="container">
    @include('included.messages')
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>




            <div class="instagram-card">
                <div class="instagram-card-header">
                    <img src="http://www.mulierchile.com/cool-cat-backgrounds/cool-cat-backgrounds-005.jpg" class="instagram-card-user-image"/>
                    <a class="instagram-card-user-name" href="https://www.instagram.com/followmeto/">mitra</a>
                    <div class="instagram-card-time">31 min</div>
                </div>
                <br><br>
              
                <div class="instagram-card-image">
                    <img src="https://storage.googleapis.com/material-design/publish/material_v_12/assets/0BybB4JO78tNpaEZJZ0E2ODQ1blE/04-choreography.png" height="600px"/>
                </div>
              
                <div class="instagram-card-content">
                    <div>
                        <a class="footer-action-icons" href=""><i class="fa fa-heart-o fa-lg"></i></a>
                    </div>
                    <br>
                    <p class="likes">42 Likes</p>
                    <p><a class="instagram-card-content-user" href="">mitra</a> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.  😜❄️ <a class="hashtag" href="">#worksgreat</a></p>
                    <p class="comments">ver los 48 comentarios</p>
                    <br><a class="user-comment" href="">cat243</a> wowwwwww</br>
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




        </div>
        <div class="col-md-5">
            <!-- Blank -->
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
        </div>
    </div> -->

</div>
@endsection
