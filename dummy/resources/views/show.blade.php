<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{route('users.index')}}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($show->state) }}</h1>
                <h1 class="display-one">{{ ucfirst($show->capital) }}</h1>
            </div>
        </div>
    </div>
</body>
    
</html>
