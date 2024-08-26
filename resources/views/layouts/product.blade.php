<div class="col-md-4 col-xs-12 mt-4">
    <div class="g-col-6 shadow-lg mb-md-5 mb-xs-0 bg-body-tertiary rounded ">
        <div class="row p-3">
            <img src="{{URL('images/prod.png')}}" alt="" class="col-4">
            <div class="col-6 ">
                <div style="font-size: 14px;font-weight: 700;">Laptop</div>
                <div style="font-size: 12px;">Laptops are designed to be portable computers. They are smaller and lighter than desktops.</div>
                <div style="font-size: 14px;font-weight: 700;">RS 100.00</div>
            </div>
            <div class="col-2">
                <button class="mb-3" style="outline: 0;border: 0;background-color: transparent;">
                    <a href="/editProduct"><img src="{{URL('images/edit.png')}}" alt="" class="" style="width: 20px;height: 20px;"></a>
                </button>
                <button class="" style="outline: 0;border: 0;background-color: transparent;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">
                    <img src="{{URL('images/delete.png')}}" alt="" class="" style="width: 20px;height: 20px;">
                </button>
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