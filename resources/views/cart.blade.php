@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container" style="padding-top: 2%">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Ref</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
                <tr >
                    <th scope="row">{{ $item->book->ref }}</th>
                    <td><img src="{{ $item->book->image }}" style="height:60px ; weight:60px"></td>
                    <td>{{ $item->book->name }}</td>
                    <td>{{ $item->book->price }} TND  </td>
                    <td>
                        <form action="{{ route('carts.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="book-btn"><i class="fa-solid fa-x"></i> Remove</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan=2>
                    <p>Total price</p>
                </th>
                <td >
                    <h4>
                        {{ $total}} TND
                    </h4>
                </td>
                <td>
                    <form action="#" method="">
                        @csrf
                        <button class="btn">Order</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
    {!! $cartItems->links() !!}
</div>

@endsection
