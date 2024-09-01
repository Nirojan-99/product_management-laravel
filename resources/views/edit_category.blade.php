@extends("layouts.layout")

@section("title","products")

@section("content")
<div class="m-md-auto m-md-5 p-md-5 p-xs-0 m-xs-0  container w-75">
    <div class=" rounded shadow-lg my-5 p-md-4 p-2">
        <form method="post" action="{{ route('categories.update',['id' => $category->category_id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row ">
                <div class="col-md-5 col-xs-12">
                    <label for="imageInput" type=button class=" border d-flex align-items-center justify-content-center  " style="height: 240px; width: 240px;">
                        <img id="imagePreview" src="{{ asset('images/' . $category->image) }}" alt="" style="width: 100%;width: 100%;">
                        <input name="image" type="file" class="form-control" id="imageInput" accept="image/*" hidden>
                    </label>
                </div>
                <div class="col-md-7 col-xs-12 w-100 col ">
                    <label for="categories">Category name:</label>
                    <input name="name" type="text" class="rounded w-100" id="categoryName" placeholder="Enter category Name" value="{{$category->name}}">
                    <div id='errMsg' style="font-size: 12px;color: red;font-weight: 700;"></div>
                    <input id="submit" class="btn btn-primary w-100 my-4" type="submit" value="Update">
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Alert !</h5>
                </div>
                <div class="modal-body">
                    Category successfully Added!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
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



    const submit = document.getElementById("submit");
    submit.addEventListener('click', function(event) {
        const name = document.getElementById("categoryName");
        const errMsg = document.getElementById("errMsg");

        if (!name.value.trim()) {
            event.preventDefault();
            errMsg.innerHTML = "Enter a valid name";
            name.style.border = "2px solid red"
            name.style.backgroundColor = "#FF00000D"
        } else {
            errMsg.innerHTML = "";
            name.style.border = "2px solid black"
            name.style.backgroundColor = "transparent"

            // const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
            // confirmationModal.show();
        }
    });
</script>
@endsection