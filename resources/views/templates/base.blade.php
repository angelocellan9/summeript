<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/htmx.org@1.9.12/dist/htmx.min.js"></script>
</head>
<body class="flex">
    <div class="w-64 h-screen bg-blue-700 text-white flex flex-col fixed">
  
        <nav id="main-nav" class="flex flex-col">
            <a href="/" class="p-3 hover:bg-blue-600">Home</a>
            <a href="/about" class="p-3 hover:bg-blue-600">About</a>
            <a href="/product" class="p-3 hover:bg-blue-600">Products</a>
            <a href="/contact" class="p-3 hover:bg-blue-600">Contact Us</a>
        </nav>
    </div>

    <div class="flex-1 ml-64 p-5">
        <article id="content" class="min-h-[35rem]">
            @yield('content')
        </article>
    </div>
</body>
</html>
