@extends("layouts.layout")

@section("title","products")

@section("content")
<div class="w-100">
    <div class="container py-2" style="font-weight: 700;">
        Slider Management
    </div>

    <div class="container py-2 text-right text-xs-left " style="font-weight: 700;">
        <button class="btn btn-secondary">
            <img src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
            <a class="text-dark text-decoration-none" href="/newSlider">Add new Slider</a>
        </button>
        <br>
    </div>


</div>
@endsection