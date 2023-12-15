<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <header>
        <div class="container">
            <h1>>Create Post</h1>
        </div>
        

    </header>
    <main>
        <div class="container">
            <form action="{{ route('forum.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="subject">subject:</label>
                    <input type="text" name="subject">
                </div>
                <div class="form-group">
                    <label for="content">content:</label>
                    <textarea name="content"  cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="submit">
            </form>
        </div>
        
    </main>
</body>
</html>