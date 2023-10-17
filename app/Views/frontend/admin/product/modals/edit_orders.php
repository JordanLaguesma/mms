<div class="modal fade" id="modal_edit_orders" tabindex="-1" aria-labelledby="modalProductLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Horizontal glass smoke">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="product_description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-8">
                            <label for="exampleFormControlTextarea1" class="form-label">Product Type</label>
                            <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>~Choose~</option>
                                <option value="1">Horizontal</option>
                                <option value="2">Smoke</option>
                                <option value="3">Plain</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Size</label>
                            <input type="text" class="form-control" id="product_size" placeholder="27 x 50">

                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">₱</span>
                                <input type="text" class="form-control" id="product_price" placeholder="500" aria-label="500" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="product_quantity" placeholder="100">
                        </div>

                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>