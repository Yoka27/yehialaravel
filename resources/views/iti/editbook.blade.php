@extends("layouts/app")
@section("contenctblock")
    <form class="form text-center" action="{{route('books.update',$book->id)}}" method="post"
          enctype="multipart/form-data">
        @method('put')
        @csrf
        <h1>Edit Book</h1>
        <input type="text" class=" mb-xl-4 text-center " style="width: 20%" name="bookname" value="{{$book->name}}"/></br>
        <input type="text" class=" mb-xl-4 text-center " style="width: 20%" name="bookdescription"
               value="{{$book->description}}"/></br>
        <input type="number" class=" mb-xl-4 text-center " style="width: 20%" name="bookprice"
               value="{{$book->price}}"/></br>
        <label class="form-check-label" for="flexSwitchCheckDefault">In-Stock</label>
        @if( $book->instock == true)
            <input class="form-check-input mb-xl-4" type="checkbox" id="flexSwitchCheckDefault" name="bookinstock" checked></br>
        @else
            <input class="form-check-input mb-xl-4" type="checkbox" id="flexSwitchCheckDefault" name="bookinstock"></br>
        @endif
        <input hidden name="path" value="{{$book->img}}">
        <input class=" mb-xl-4 text-center " style="width: 20%" type="file" name="bookimg"></br>
        <input type="submit" name="submit" value="Edit Book" class="btn btn-primary text-center">
    </form>
@endsection
