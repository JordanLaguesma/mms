<div class="modal fade" id="modal_add_promotions" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Promotions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Promo Name</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Horizontal glass smoke">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="product_description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-8">
                            <label for="exampleFormControlTextarea1" class="form-label">Discount Type</label>
                            <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>~Choose~</option>
                                <option value="1">Percentage</option>
                                <option value="2">Fixed</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Discount Value</label>
                            <input type="text" class="form-control" id="product_size" placeholder="45.00">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Minimum Purchase</label>
                            <input type="text" class="form-control" id="product_price" placeholder="500" aria-label="500">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>