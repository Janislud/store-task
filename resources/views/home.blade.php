<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @include('Components.navigation')
    @include('landing')
    <h1>Home page</h1>

    @@foreach ($products as $item)
        
    @endforeach
</body>
</html>