@extends("layouts.layout")

@section("title","products")

@section("content")
<div class="w-100">
    <div class="container py-2" style="font-weight: 700;">
        product Management
    </div>

    <div class="container py-2 text-right text-xs-left " style="font-weight: 700;">
        <button class="btn btn-secondary">
            <a class="text-dark text-decoration-none" href="/newProduct">Add new product</a>
        </button>
        <br>
        <button class="btn btn-outline-secondary mt-3">
            <a class="text-dark text-decoration-none" href="/categories">Category Management</a>
        </button>
    </div>

    <section class="w-100 ">
        <div class="container m-auto row  gap-3">
            @foreach ($products as $product)
            @include('layouts.product', ['data'=> $product])
            @endforeach
        </div>
    </section>

    <div class="container  mt-5 row m-auto">

        <nav class="m-auto text-center">
            <ul class="pagination  ">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li> -->
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>



</div>
@endsection