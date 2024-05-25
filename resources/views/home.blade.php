@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column">
            <div class=" p-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <select class="form-control" id="category">
                            <option value="" hidden="
                            " selected>Choisir une categorie</option>
                            <option value="">All</option>
                            <option value="History">History</option>

                            <option value="Science">Science</option>
                            <option value="Economics">Economics</option>
                            <option value="Religion">Religion</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Art">Art</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Politics">Politics</option>
                            <option value="Geography">Geography</option>
                            <option value="Physics">Physics</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    @foreach ($books as $book)
                        <div class="col-md-3 cards" data-category="{{ $book->category }}">
                            <!-- Your book card HTML here -->
                            <div class="dog-container">
                                <img src="{{ $book->image }}" class="img-fluid" style="height: 160px">
                                <h4 style="font-weight:bold">{{ $book->name }}</h4>
                                <p>Category : {{ $book->category }}</p>
                                <p>Price : {{ $book->price }} DNT</p>
                                <div class="row">
                                    <div class="col-5">
                                        <form action="{{ route('addToCart', $book->id)}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn">Add to Cart</button>
                                        </form>
                                    </div>
                                    <div class="col-7">
                                        <a href="{{ route('details', $book->id)}}" class="btn">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                var selectedCategory = $(this).val();
                console.log('Selected category:', selectedCategory);

                $('.cards').each(function() {
                    var category = $(this).data('category');
                    console.log('Book category:', category);

                    if (selectedCategory === '' || category === selectedCategory) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none');
                    }
                });
            });
        });
    </script>

