<div class="modal fade" id="modal_add_users" tabindex="-1" aria-labelledby="modalUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_user">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="new_fullname" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="new_fullname" placeholder="Juan Dela Cruz">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="" class="form-select">
                            <option value="0" selected disabled>--Choose Role--</option>
                            <option value="1">Co-admin</option>
                            <option value="2">Cashier</option>
                            <option value="3">Delivery</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="new_username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="new_username" placeholder="Horizontal glass smoke">

                    </div>
                    <div class="mb-3">
                        <label for="new_email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="new_email" placeholder="juandelacruz@gmail.com">

                    </div>
                    <div class="mb-3">
                        <label for="new_password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="new_password">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>