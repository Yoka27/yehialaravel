@extends("layouts/app")
@section("content")
    <div class="card text-center">
        <div class="card-header">Course Details</div>
        <div class="card-body">
            <h5>Course name : {{$course->name}}</h5>
            <h6>Course description : {{$course->desc}} </h6>
            <p>Max Grade : {{$course->maxGrade}} </p>
            <p>created at : {{$course->created_at}} </p>
            <p>updated at : {{$course->updated_at}} </p>
        </div>
    </div>
@endsection
