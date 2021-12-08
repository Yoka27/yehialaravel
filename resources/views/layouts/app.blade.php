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
            <li class="nav-item"><a href="{{route('books')}}" class="btn btn-outline-primary m-md-2" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{route('books.list')}}" class="btn btn-outline-primary m-md-2 " aria-current="page">Book List</a></li>
            <li class="nav-item"><a href="{{route('books.add')}}" class="btn btn-outline-primary m-md-2 " aria-current="page">ADD Book</a></li>
            <li class="nav-item"><a href="{{route('courses.index')}}" class="btn btn-outline-primary m-md-2 " aria-current="page">Courses List</a></li>
            <li class="nav-item"><a href="{{route('courses.create')}}" class="btn btn-outline-primary m-md-2 " aria-current="page">ADD Course</a></li>
        </ul>
    </header>
</div>
@yield("content")
<div class="card-footer text-center">
    CopyRights@Yehia-Mohammed-Rashad-2022
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@yield("scriptsblock")
</body>
</html>
