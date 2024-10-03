<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    <link href="css/main.css" rel="stylesheet">
    </head>
</head>
<body class="bg-gray-100 text-gray-800">


    @include('partials.navbar')


    <div class="container">
        @yield('content')
    </div>

   
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 My Website. All Rights Reserved.</p>
    </footer>

</body>
</html>
