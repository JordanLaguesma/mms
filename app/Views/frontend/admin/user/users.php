<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('frontend/_components/admin/sidebar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('frontend/_components/admin/navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row grid-margin">
                        <div class="col text-end">
                            <button class="btn btn-sm text-right  btn-outline-success" data-bs-toggle="modal" data-bs-target="#modal_add_users" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Add user"> <i class="mdi mdi-account-plus"></i>New</button>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">User Account Management</h4>
                                    <div class="table-responsive">
                                        <table id="table_users" class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="form-check form-check-muted m-0">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input">
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th> User Name </th>
                                                    <th> Position</th>
                                                    <th> Role </th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?= $this->include('frontend/_components/basic/footer.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?= $this->include('frontend/_components/basic/script.php') ?>
    <?= $this->include('frontend/admin/product/modals/add_product.php') ?>
    <?= $this->include('frontend/admin/user/modals/add_users.php') ?>
    <?= $this->include('frontend/admin/user/modals/edit_users.php') ?>
    <?= $this->include('frontend/admin/user/modals/view_users.php') ?>
    <!-- End custom js for this page -->

</body>

<script>
    $('#table_users').DataTable({
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [0, 1]
        }],
        "order": [],
        "serverSide": true,
        "ajax": {
            url: "<?= base_url('home/fullTable') ?>",
            type: 'POST'
        }
    });
    $(document).ready(function() {
        $('#add_user').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= site_url('admin/user/account/add'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'JSON',
                success: function(data) {
                    if (data.error == 0) {
                        alert('New user created!');
                        $('#modal_add_users').modal('hide');
                    } else {
                        console.log(data.fullname_error);
                        console.log(data.role_error);
                        console.log(data.username_error);
                        console.log(data.email_error);
                        console.log(data.password_error);

                    }
                }
            })
        })
    })
</script>

</html>