<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<body>
    <header>
        <div class="container">
            <h1>>Forum</h1>
        </div>
    </header>
    <main>
    <div class="container">
        <a href="{{ route('forum.create') }}"><button>make a new post</button></a>
        @foreach($posts as $post)
            
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>{{ $post->subject }}</h4>
                            <h5>{{ $post->user->name }}</h5>
                        </div>
                        <p class="card-text" >{{ $post->content }}</p>
                        <div class="card-comments">
                            @foreach($post->comments as $comment)
                                <div class="comment">
                                    <div class="user-comment">
                                        <p>{{ $comment->user->name }} </p>
                                    </div>
                                    <div class="comment-text">
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            
        @endforeach
    </div>
    </main>
</body>
</html>