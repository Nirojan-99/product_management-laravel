<div>

    <div class="row border-bottom  w-100 ">
        @yield("index")
        <div class="col-5 ">
            <img src="{{URL('images/cate.png')}}" alt="" style="width: 120px;">
        </div>
        <div class="row col-7 align-items-center text-left w-100 ">
            <div class="col-9 " style="font-weight: 700;">Food</div>
            <div class="col-3 ">
                <div class=" row align-items-center justify-content-between ">
                    <button class="col-6" style="outline: 0;border: 0;background-color: transparent;">
                        <a href="/editCategory"><img src="{{URL('images/edit.png')}}" alt="" class="" style="width: 20px;height: 20px;"></a>
                    </button>
                    <button class="col-6" style="outline: 0;border: 0;background-color: transparent;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                        <img src="{{URL('images/delete.png')}}" alt="" class="" style="width: 20px;height: 20px;">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Alert !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to Delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>