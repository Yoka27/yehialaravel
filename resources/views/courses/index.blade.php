@extends("layouts/app")
@section("contenctblock")
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
                                id="del"  onclick="confirmDelete()" data-toggle="tooltip" title='Delete'>Delete
                            </button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
    </div>
@endsection
@section('scriptsblock')
{{--    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>--}}
{{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
{{--   <script>--}}
{{--    $('#del').on('click',function(e){--}}
{{--    e.preventDefault();--}}
{{--    var form = $(this).parents('form');--}}
{{--    Swal.fire({--}}
{{--    title: 'Are you sure?',--}}
{{--    text: "You won't be able to revert this!",--}}
{{--    type: 'warning',--}}
{{--    showCancelButton: true,--}}
{{--    confirmButtonColor: '#3085d6',--}}
{{--    cancelButtonColor: '#d33',--}}
{{--    confirmButtonText: 'Yes, delete it!'--}}
{{--    }).then((result) => {--}}
{{--    if (result.value) {--}}
{{--    form.submit();--}}
{{--    }--}}
{{--    });--}}
{{--    });--}}
{{--    </script>--}}
@endsection

