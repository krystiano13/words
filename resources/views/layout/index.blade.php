<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Words</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Montserrat:wght@400;500&display=swap" 
        rel="stylesheet"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

@if ($errors -> any())
    <div class="errorPopup">
        @foreach ($errors -> all() as $error)   
            <p>{{ $error }}</p>       
        @endforeach
    </div>
@endif

@yield('content')

</body>
</html>