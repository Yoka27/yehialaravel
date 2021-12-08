@extends("layouts/app")
@section("content")
    <div class="card text-center">
        <table id="myTable" class="table-active text-center align-center ">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Descriptiopn</th>
                <th scope="col">price</th>
                <th scope="col">Stock</th>
                <th scope="col">Image-path</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td><a href="{{route('books.book',$book->id)}}">{{$book->name}}</td>
                    @if (filter_var($book->description, FILTER_VALIDATE_URL))
                    <td><a href="{{$book->description}}">{{$book->description}}</td>
                   @else
                    <td>{{$book->description}}</td>
                    @endif
                    <td>{{$book->price}}</td>
                    @if( $book->instock == true)
                        <td>IN Stock</td>
                    @else
                        <td class="text-center text-danger">Out-Of-Stock</td>
                    @endif
                    <td>{{$book->img}}</td>
                    <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form method="post" action="{{route('books.delete',$book->id)}}">
                            @csrf
                            @method("delete")
                            <input type="submit" value="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
            </thead>
        </table>
    </div>
@endsection

