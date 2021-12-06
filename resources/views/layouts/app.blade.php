<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    @yield("linksblock")
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yehia-ITI</title>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('books')}}" class="nav-link " aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{route('books.list')}}" class="nav-link " aria-current="page">Book List</a></li>
            <li class="nav-item"><a href="{{route('books.add')}}" class="nav-link " aria-current="page">ADD Book</a>
            </li>
        </ul>
    </header>
</div>
@yield("contenctblock")
<div class="card-footer text-center">
    CopyRights@Yehia-Mohammed-Rashad-2022
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield("scriptsblock")
</body>
</html>
