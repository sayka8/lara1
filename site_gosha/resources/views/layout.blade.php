<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
</head>
<body class="bg-dark text-white">
<header
    class="d-flex justify-content-between align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom box-shadow"
>
    <h5 class="d-flex align-self-end font-weight-normal">Sayka</h5>
    <nav class="d-flex align-items-center gap-3">
        <a class="text-white" href="/">Main</a>
        <a class="text-white" href="/about">About us</a>
        <a class="btn btn-warning" href="/review">Review</a>
    </nav>
</header>
<div class="container">@yield('main_content')</div>
</body>
</html>
