@extends("layouts.layout")

@section("title","products")

@section("content")
<div>

    <div class="container mt-5">
        <form class="w-sm-50 m-auto w-xs-100">
            <div class="form-group">
                <label for="productName">Name:</label>
                <input type="text" class="form-control" id="productName" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="modelNumber">Model Number:</label>
                <input type="text" class="form-control" id="modelNumber" placeholder="Enter model number">
            </div>

            <div class="form-group">
                <label for="categories">Categories:</label>
                <select class="form-control" id="categories">
                    <option value="">computer</option>
                    <option value="">vegetable</option>
                    <option value="">food</option>
                    <option value="">drink</option>
                </select>
            </div>

            <div class="form-group">
                <label for="categories">Availability:</label>
                <div class="row ml-4 ">
                    <div class="form-check col-6 row align-items-center">
                        <input class="form-check-input" type="radio" name="options" id="option1" value="In stock" checked>
                        <label class="form-check-label" for="option1">
                            In stock
                        </label>
                    </div>
                    <div class="form-check col-6 row align-items-center">
                        <input class="form-check-input" type="radio" name="options" id="option2" value="Out of Stock">
                        <label class="form-check-label" for="option2">
                            Out of Stock
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="productDetails">Product Details:</label>
                <textarea class="form-control" id="productDetails" rows="3" placeholder="Enter product details"></textarea>
            </div>

            <div class="form-group">
                <label for="howToUse">How to Use:</label>
                <textarea class="form-control" id="howToUse" rows="3" placeholder="Enter usage instructions"></textarea>
            </div>

            <div class="form-group">
                <label for="howToUse">Shipping Details</label>
                <textarea class="form-control" id="shippingDetails" rows="3" placeholder="Enter Shipping Details"></textarea>
            </div>

            <div class="form-group">
                <div class="row mb-2">
                    <div class="col-4">price</div>
                    <div class="col-4">weight</div>
                    <div class="col-4">Quantity of a box</div>
                </div>
                <div id="formContainer">
                    <div class="row mb-3">
                        <div class="col-4">
                            <input type="text" class="form-control" id="price" placeholder="Price">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="weight" placeholder="Weight">
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control" id="quantity" placeholder="Quantity of a box">
                        </div>
                    </div>
                </div>

                <button class="w-100 my-4 btn btn-info" id="addRowButton">
                    <img src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                </button>
            </div>

            <div class="m-auto row">
                <div class="row  m-auto gap-3  text-center">
                    <label for="imageInput" type=button class="g-col-6 border d-flex align-items-center justify-content-center mr-2" style="height: 240px; width: 240px;">
                        <img id="imagePreview" src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                        <input type="file" class="form-control" id="imageInput" accept="image/*" hidden>
                    </label>
                    <div class="gap-3 g-col-6 d-flex flex-column justify-content-between" style="height: 240px;">
                        <label for="imageInput1" type=button class=" g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview1" src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                            <input type="file" class="form-control" id="imageInput1" accept="image/*" hidden>
                        </label>
                        <label for="imageInput2" type=button class="g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview2" src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                            <input type="file" class="form-control" id="imageInput2" accept="image/*" hidden>
                        </label>
                        <label for="imageInput3" type=button class="g-col-6 d-flex align-items-center justify-content-center border" style="height: 80px; width: 80px;">
                            <img id="imagePreview3" src="{{URL('images/plus.png')}}" alt="" style="width: 20px;">
                            <input type="file" class="form-control" id="imageInput3" accept="image/*" hidden>
                        </label>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary text-center  w-100 my-4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">Save</button>

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
        document.getElementById('addRowButton').addEventListener('click', function(event) {
            event.preventDefault();
            var newRow = `
                <div class="row mb-3">
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Price">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Weight">
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" placeholder="Qty.. box">
                    </div>
                </div>
            `;
            document.getElementById('formContainer').insertAdjacentHTML('beforeend', newRow);
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