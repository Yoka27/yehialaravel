@extends("layouts/app")
@section("content")
    <form class=" text-center" action="{{route('courses.update',$course)}}" method="post" >
        @csrf
        @method('put')
        <h1>Edit Course</h1>
        <div class="form-group   text-center">
            <input class=" mb-xl-4 text-center " type="text" style="width: 20%" name="name" placeholder="name"
                   value="{{$course->name}}" /></br>
            @error('name')
            <div class="alert-danger alert-danger">{{$message}}</div>
            @enderror
            <input class=" mb-xl-4 text-center " style="width: 20%" type="text" name="desc"
                   value="{{$course->desc}}" placeholder="description"></br>
            @error('desc')
            <div class="alert-danger alert-danger">{{$message}}</div>
            @enderror
            <input class=" mb-xl-4 text-center "   value="{{$course->maxGrade}}" type="number" style="width: 20%" name="maxGrade" placeholder="maxGrade"></br>
            @error('maxGrade')
            <div class="alert-danger alert-danger">{{$message}}</div>
            @enderror

            <input type="submit" name="submit" value="Edit Course" class="btn btn-primary text-center">
        </div>
    </form>
@endsection
