@extends("layouts/app")
@section("content")
    <form class=" text-center" action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Add Book</h1>
        <div class="form-group   text-center">
        <input    class=" mb-xl-4 text-center " style="width: 20%"  type="text"   name="bookname" placeholder="book name"
                required/></br>
        <input  class=" mb-xl-4 text-center "  style="width: 20%" type="text"   name="bookdescription"
               placeholder="book description" required></br>
        <input   class=" mb-xl-4 text-center " style="width: 20%" type="number"   name="bookprice" placeholder="book price"
               required></br>
        <label  class=" mb-xl-4 text-center "   for="flexSwitchCheckDefault">In-Stock</label>
        <input  class=" mb-xl-4 text-center "    type="checkbox" id="flexSwitchCheckDefault" name="bookinstock"></br>
        <input   class=" mb-xl-4 text-center " style="width: 20%"  type="file" id="img" name="bookimg"></br>
        <input  type="submit" name="submit" value="ADD Book" class="btn btn-primary text-center">
        </div>

    </form>
@endsection
