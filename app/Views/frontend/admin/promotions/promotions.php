<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>
<style>
     .ribbon {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #f00; /* Ribbon background color */
            color: #fff; /* Ribbon text color */
            padding: 5px 10px;
            transform: rotate(45deg);
            transform-origin: 0 0;
        }
</style>
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
                    <div class="row mt-0">
                        <div class="col-8 grid-margin"></div>
                        <div class="col grid-margin text-end"><button type="button" data-bs-toggle="modal" data-bs-target="#modal_add_promotions" class="btn btn-outline-success" aria-haspopup="true" aria-expanded="false">New</button></div>
                    </div>
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Promotion Management</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Name </th>
                                                    <th> Description</th>
                                                    <th> Start Date</th>
                                                    <th> End Date</th>
                                                    <th> Discount Type</th>
                                                    <th>Discount Value</th>
                                                    <th>Minimum Purchase Amount (if applicable) </th>
                                                    <th>Active</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="ps-2">Holiday Sale</span>
                                                    </td>
                                                    <td>
                                                        Lorem, ipsum dolor.
                                                    </td>
                                                    <td> 10-24-2023 </td>
                                                    <td> 10-31-2023 </td>
                                                    <td> -20% </td>
                                                    <td>340.00</td>

                                                    <td class="text-center">50</td>
                                                    <td>Yes</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Update</a>
                                                                <a href="#" class="dropdown-item set_to_active"><i class="mdi mdi-pen"></i> Set</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="ps-2">Summer Sale</span>
                                                    </td>
                                                    <td>
                                                        Lorem, ipsum dolor.
                                                    </td>
                                                    <td> 10-24-2023 </td>
                                                    <td> 10-31-2023 </td>
                                                    <td> -20% </td>
                                                    <td>340.00</td>

                                                    <td class="text-center">50</td>
                                                    <td>Yes</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Update</a>
                                                                <a href="#" class="dropdown-item set_to_active"><i class="mdi mdi-pen"></i> Set</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="ps-2">Henry Klein</span>
                                                    </td>
                                                    <td>
                                                        Lorem, ipsum dolor.
                                                    </td>
                                                    <td> 10-24-2023 </td>
                                                    <td> 10-31-2023 </td>
                                                    <td> -20% </td>
                                                    <td>340.00</td>

                                                    <td class="text-center">50</td>
                                                    <td>No</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Update</a>
                                                                <a class="dropdown-item set_to_active" href="#"><i class="mdi mdi-pen"></i> Set</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="ps-2">Henry Klein</span>
                                                    </td>
                                                    <td>
                                                        Lorem, ipsum dolor.
                                                    </td>
                                                    <td> 10-24-2023 </td>
                                                    <td> 10-31-2023 </td>
                                                    <td> -20% </td>
                                                    <td>340.00</td>

                                                    <td class="text-center">50</td>
                                                    <td>No</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Update</a>
                                                                <a class="dropdown-item set_to_active" href="#"><i class="mdi mdi-pen"> </i> Set</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="ps-2">Henry Klein</span>
                                                    </td>
                                                    <td>
                                                        Lorem, ipsum dolor.
                                                    </td>
                                                    <td> 10-24-2023 </td>
                                                    <td> 10-31-2023 </td>
                                                    <td> -20% </td>
                                                    <td>340.00</td>

                                                    <td class="text-center">50</td>
                                                    <td>Yes</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item view" href="#"><i class="mdi mdi-eye"></i> View</a>
                                                                <a class="dropdown-item edit" href="#"><i class="mdi mdi-pen"></i> Update</a>
                                                                <a class="dropdown-item set_to_active" href="#"><i class="mdi mdi-pen"></i> Set</a>
                                                                <div role="separator" class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
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
    <?= $this->include('frontend/admin/promotions/modals/edit_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/set_active_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/add_promotions.php') ?>
    <?= $this->include('frontend/admin/promotions/modals/view_promotions.php') ?>

</body>
<script>
    $(document).ready(function() {
        $(".set_to_active").click(function(){
            $("#modal_set_active_promotions").modal("show")
        })
        $(".edit").click(function(){
            $("#modal_edit_promotions").modal("show")
        })
        $(".view").click(function(){
            $("#modal_view_promotions").modal("show")
        })
    })
</script>

</html>