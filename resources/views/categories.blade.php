@extends("layouts.layout")

@section("title","products")

@section("content")
<div class="w-100">

    <div class="container py-2" style="font-weight: 700;">
        product Management > categories
    </div>

    <div class="container py-2 text-right text-xs-left " style="font-weight: 700;">
        <button class="btn btn-secondary">
            <img src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
            <a class="text-dark text-decoration-none" href="/newCategory">Add new Categories</a>
        </button>
        <br>
    </div>

    <section class="w-100 container my-4 p-md-5 p-xs-0 ">
        <div class="container m-auto  ">
            <div class="row mb-4" style="color: #333;font-weight: 700;font-size: 14px;">
                <div class="col-5 ">
                    Categories Image
                </div>
                <div class="col-7 ">Categories Name</div>
            </div>
            @foreach ($categories as $category)
            @include('layouts.category', ['data'=> $category])
            @endforeach
        </div>
    </section>

</div>
@endsection