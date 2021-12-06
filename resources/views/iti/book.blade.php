@extends("layouts/app")
@section("contenctblock")
    <div class="card text-center">
        <div class="card-header">Book Details</div>
        <div class="card-body">
            <h5>Book name : {{$book->name}}</h5>
            <h6>book description : {{$book->description}} </h6>
            <p>ID : {{$book->id}} </p>
            <p>price : {{$book->price}} </p>
            <p>created at : {{$book->created_at}} </p>
            <p>updated at : {{$book->updated_at}} </p>
            @if( $book->instock == true)
                <p> In-Stock <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    name="bookinstock" checked disabled></p>
            @else
                <p> In-Stock <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                    name="bookinstock" disabled></p>
            @endif
            <img src="{{asset($book->img)}}" alt="book image" title="book image">
        </div>
    </div>
@endsection
