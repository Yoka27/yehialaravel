@extends("layouts/app")
@section("content")
    <div class="card text-center">
        <table id="myTable" class="table-active text-center align-center ">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Descriptiopn</th>
                <th scope="col">MaxGrade</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            @foreach($courses as $course)
                <tr>
                    <td>{{$course->name}}</td>
                    <td>{{$course->desc}}</td>
                    <td>{{$course->maxGrade}}</td>
                    <td><a href="{{route('courses.show',$course)}}" class="btn btn-success">Show</a></td>
                    <td><a href="{{route('courses.edit',$course)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form method="POST" action="{{ route('courses.destroy',$course) }}">
                            @csrf
                            @method('delete')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-xs btn-danger btn-flat delete"
                                    data-toggle="confirmation" onclick="deleteFunction()"  data-toggle="tooltip" title='Delete'>Delete
                            </button>
                        </form>
{{--                        onclick="return confirm(`confirm delete course {{$course->name}} ?`)"--}}
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
    </div>
@endsection
@section('scriptsblock')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script>
        function deleteFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
            swal({
                    title: "Are you sure?",
                    text: "The Course will be Deleted permanently ",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Delete it!",
                    cancelButtonText: "No, cancel please!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                    if (isConfirm) {
                        form.submit();          // submitting the form when user press yes
                    } else {
                        swal("Cancelled", "Your Course is safe :)", "error");
                    }
                });
        }
    </script>
@endsection
