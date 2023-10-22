<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>
<style>
    li .active {
        background-color: rgb(81, 81, 81) !important;
        border: none;
    }
    .text-warning:hover{
        color: rgb(252, 215, 151) !important;
    }
    .text-warning:active{
        color: rgb(247, 157, 0) !important;
    }

</style>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        <?= $this->include('frontend/_components/cashier/sidebar.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?= $this->include('frontend/_components/cashier/navbar.php') ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card" id="inv">
                                <div class="card-body">
                                    <h4 class="card-title">Track Inventory</h4>
                                    <div class="table-responsive">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" role="tab" aria-controls="tab1" aria-selected="true" aria-current="page" data-bs-toggle="tab" id="tab1-tab" href="#tab1">Inventory</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" role="tab" aria-controls="tab2" aria-selected="false" aria-current="page" data-bs-toggle="tab" id="tab2-tab" href="#tab2">Filter</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                                <!-- Content for inventory -->
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </th>
                                                            <th> Product Name</th>
                                                            <th> Category</th>
                                                            <th> Stock </th>
                                                            <th>Sold</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <span class="ps-2">HalleJ Glass</span>
                                                            </td>
                                                            <td> Float Glass </td>
                                                            <td> 120 </td>
                                                            <td> 413 </td>
                                                            <td>
                                                                <div class="form-group">

                                                                    <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <span class="ps-2">Grame</span>
                                                            </td>
                                                            <td> Labanette Glass </td>
                                                            <td> 23 </td>
                                                            <td> 1900 </td>
                                                            <td>
                                                                <div class="form-group">

                                                                    <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <span class="ps-2">Granite Glass</span>
                                                            </td>
                                                            <td> Wooden Glass </td>
                                                            <td> 120 </td>
                                                            <td> 41 </td>
                                                            <td>
                                                                <div class="form-group">

                                                                    <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <span class="ps-2">Brownies</span>
                                                            </td>
                                                            <td> Float Glass </td>
                                                            <td> 12 </td>
                                                            <td> 27 </td>
                                                            <td>
                                                                <div class="form-group">

                                                                    <button class="btn btn-sm btn-outline-primary" type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check form-check-muted m-0">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                                <span class="ps-2">Lorem ipsum</span>
                                                            </td>
                                                            <td> Gg Glass </td>
                                                            <td> 7 </td>
                                                            <td> 23 </td>

                                                            <td>
                                                                <div class="form-group">

                                                                    <button class="btn btn-sm btn-outline-primary " type="button" aria-haspopup="true" aria-expanded="false">View</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                                <!-- Content for Filter  -->

                                                <div class="row">
                                                    <div class="col-4"></div>
                                                    <div class="col-4 ">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Search by Category" name="" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group filter-input" style="display: none;">
                                                            <input type="text" placeholder="Search by Product" name="" id="" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                        <i class="text-warning mdi mdi-plus-circle fs-3 icon_add_search btnadd " style="cursor:pointer;"></i>
                                                            <!-- <button class="btn btnadd text-right btn-secondary" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Add search field"> <i class="mdi mdi-plus-circle icon_add"></i></button> -->

                                                        </div>
                                                        <div class="form-group text-end">
                                                  
                                                            <button class="btn btn-sm text-right  btn-outline-success" type="button" aria-haspopup="true" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Search filter product"> <i class="mdi mdi-filter"></i>Filter</button>
                                                        </div>

                                                    </div>
                                                    <div class="col-4">

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
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


</body>

<script>
    $(document).ready(() => {
        $(".filter-input").hide();

        $(".btnadd").click(function() {
            $(".filter-input").toggle(function() {
                //   $(".icon_add").removeClass("mdi-plus").addClass("mdi-minus text-danger");
            });

        })
    })
</script>

</html>