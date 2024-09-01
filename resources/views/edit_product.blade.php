@extends("layouts.layout")

@section("title","products")

@section("content")
<div>

    <div class="container mt-5">
        <form class="w-sm-50 m-auto w-xs-100" method="POST" action="{{ route('products.update',['id' => $product->product_id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="productName">Name:</label>
                <input name="name" type="text" class="form-control" id="productName" placeholder="Enter product name" value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="modelNumber">Model Number:</label>
                <input name="model_number" value="{{$product->model_number}}" type="text" class="form-control" id="modelNumber" placeholder="Enter model number">
            </div>

            <div class="form-group">
                <label for="categories">Categories:</label>
                <select name="category" class="form-control" id="categories">
                    <option value=" ">select</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->name }}"
                        {{ $product->category === $category->name ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="categories">Availability:</label>
                <div class="row ml-4 ">
                    <div class="form-check col-6 row align-items-center">
                        <input class="form-check-input" type="radio" name="availability" id="option1" value="1"
                            {{ $product->availability === 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="option1">
                            In stock
                        </label>
                    </div>
                    <div class="form-check col-6 row align-items-center">
                        <input {{ $product->availability === 0 ? 'checked' : '' }} class="form-check-input" type="radio" name="availability" id="option2" value="0">
                        <label class="form-check-label" for="option2">
                            Out of Stock
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="productDetails">Product Details:</label>
                <textarea name="product_details" class="form-control" id="productDetails" rows="3" placeholder="Enter product details">{{$product->product_details}}</textarea>
            </div>

            <div class="form-group">
                <label for="howToUse">How to Use:</label>
                <textarea name="how_to_use" class="form-control" id="howToUse" rows="3" placeholder="Enter usage instructions">{{$product->how_to_use}}</textarea>
            </div>

            <div class="form-group">
                <label for="howToUse">Shipping Details</label>
                <textarea name="shipping_details" class="form-control" id="shippingDetails" rows="3" placeholder="Enter Shipping Details">{{$product->shipping_details}}</textarea>
            </div>

            <div class="form-group">
                <div class="row mb-2">
                    <div class="col-4">price</div>
                    <div class="col-4">weight</div>
                    <div class="col-4">Quantity of a box</div>
                </div>
                <div id="formContainer">
                    @php
                    $index = 0;
                    @endphp
                    @foreach ($product->pricing as $pricing)
                    <div class="row mb-3">
                        <div class="col-4">
                            <input name="pricing[{{$index}}][price]" value="{{$pricing['price']}}" type="text" class="form-control" id="price" placeholder="Price">
                        </div>
                        <div class="col-4">
                            <input name="pricing[{{$index}}][weight]" value="{{$pricing['weight']}}" type="text" class="form-control" id="weight" placeholder="Weight">
                        </div>
                        <div class="col-4">
                            <input name="pricing[{{$index}}][quantity]" value="{{$pricing['quantity']}}" type="text" class="form-control" id="quantity" placeholder="Quantity of a box">
                        </div>
                    </div>
                    @php
                    $index++;
                    @endphp
                    @endforeach

                </div>

                <button class="w-100 my-4 btn btn-info" id="addRowButton">
                    <img src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                </button>
            </div>

            <div class="m-auto row">
                <div class="row  m-auto gap-3  text-center">
                    <label for="imageInput" type=button class="g-col-6 border d-flex align-items-center justify-content-center mr-2" style="height: 240px; width: 240px;">
                        <img id="imagePreview" name="images[0]"
                            src="{{ count($product->images) >= 1  ? asset('images/' . $product->images[0]) : URL('images/plus.png') }}"
                            alt=""
                            style="{{ count($product->images) >= 1 ?'width: 100%;':'width: 20px;'}}">

                        <input type="file" class="form-control" id="imageInput" accept="image/*" hidden>
                    </label>
                    <div class="gap-3 g-col-6 d-flex flex-column justify-content-between" style="height: 240px;">
                        <label for="imageInput1" type=button class=" g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview" name="images[1]"
                                src="{{ count($product->images) >= 2  ? asset('images/' . $product->images[1]) : URL('images/plus.png') }}"
                                alt=""
                                style="{{ count($product->images) >= 2 ?'width: 100%;':'width: 20px;'}}">
                            <input type="file" class="form-control" id="imageInput1" accept="image/*" hidden>
                        </label>
                        <label for="imageInput2" type=button class="g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview" name="images[2]"
                                src="{{ count($product->images) >= 3  ? asset('images/' . $product->images[2]) : URL('images/plus.png') }}"
                                alt=""
                                style="{{ count($product->images) >= 3 ?'width: 100%;':'width: 20px;'}}">
                            <input type="file" class="form-control" id="imageInput2" accept="image/*" hidden>
                        </label>
                        <label for="imageInput3" type=button class="g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview" name="images[3]"
                                src="{{ count($product->images) >= 4  ? asset('images/' . $product->images[3]) : URL('images/plus.png') }}"
                                alt=""
                                style="{{ count($product->images) >= 4 ?'width: 100%;':'width: 20px;'}}">
                            <input type="file" class="form-control" id="imageInput3" accept="image/*" hidden>
                        </label>
                    </div>
                </div>
            </div>

            <input class="btn btn-primary text-center  w-100 my-4" type="submit" type="button" class="btn btn-primary" value="Save"></input>


            <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmationModalLabel">Alert !</h5>
                        </div>
                        <div class="modal-body">
                            Product successfully Added!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        let index = {{count($product->pricing)}};
        document.getElementById('addRowButton').addEventListener('click', function(event) {
            event.preventDefault();
            var newRow = `
                <div class="row mb-3">
                    <div class="col-4">
                        <input name="pricing[${index}][price]" type="text" class="form-control" placeholder="Price">
                    </div>
                    <div class="col-4">
                        <input name="pricing[${index}][weight]" type="text" class="form-control" placeholder="Weight">
                    </div>
                    <div class="col-4">
                        <input name="pricing[${index}][quantity]" type="text" class="form-control" placeholder="Qty.. box">
                    </div>
                </div>
            `;
            document.getElementById('formContainer').insertAdjacentHTML('beforeend', newRow);
            index++;
        });
    </script>


    <script>
        function previewImage(inputId, previewId) {
            const input = document.getElementById(inputId);
            input.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewImage = document.getElementById(previewId);
                        previewImage.src = e.target.result;
                        previewImage.style.width = "100%";
                        previewImage.style.height = "100%";
                        previewImage.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
        previewImage('imageInput', 'imagePreview');
        previewImage('imageInput1', 'imagePreview1');
        previewImage('imageInput2', 'imagePreview2');
        previewImage('imageInput3', 'imagePreview3');
    </script>

</div>
@endsection