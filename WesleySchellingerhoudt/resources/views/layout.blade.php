<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="d-flex container-fluid flex-column w-100">
    <div class="d-flex justify-content-center" style="margin-top: 72px">
        <h1>@yield('webTitle')</h1>
    </div>

    <section class="col-12 d-flex justify-content-center align-items-center flex-wrap" >
        <article class="col-11"><p>@yield('content')</p></article>
    </section>
</body>
</html>
