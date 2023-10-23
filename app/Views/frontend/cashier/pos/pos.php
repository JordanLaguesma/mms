<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

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
                    <div class="row">
                        <div class="col-sm-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product</h4>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                <a href="#" class="text-decoration-none add_cart">
                                                    <div class="img-con prod2">
                                                        <img src="<?= base_url('assets/images/product/g2.png') ?>" alt="" class="card-img-top" alt="">
                                                        <p class="text-secondary text-center">Glass Door</p>


                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="#" class="text-decoration-none add_cart">
                                                        <div class="img-con prod2">
                                                            <img src="<?= base_url('assets/images/product/g3.png') ?>" alt="" class="card-img-top" alt="">
                                                            <p class="text-secondary text-center">Brown Glass</p>

                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                <a href="#" class="text-decoration-none add_cart">
                                                    <div class="img-con prod2">
                                                        <img src="<?= base_url('assets/images/product/g4.png') ?>" alt="" class="card-img-top" alt="">
                                                        <p class="text-secondary text-center">Long Single Door</p>

                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="card">
                                                <div class="card-body">
                                                <a href="#" class="text-decoration-none add_cart">
                                                    <div class="img-con prod2">
                                                        <img src="<?= base_url('assets/images/product/g5.png') ?>" alt="" class="card-img-top" alt="">
                                                        <p class="text-secondary text-center">Simple Window</p>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title text-center">
                                        <h4>Invoice</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Rem</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Glass 2x12</td>
                                                    <td>2</td>
                                                    <td>200</td>
                                                    <td><a href="#"><i class="mdi mdi-close text-danger"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Door Brown 2x12</td>
                                                    <td>2</td>
                                                    <td>200</td>
                                                    <td><a href="#"><i class="mdi mdi-close text-danger"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Flat 2x12</td>
                                                    <td>2</td>
                                                    <td>300</td>
                                                    <td><a href="#"><i class="mdi mdi-close text-danger"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center py-3">
                                        <button class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#modal_cashier_checkout"> Checkout</button>
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
    <?= $this->include('frontend/cashier/pos/modal/checkout.php') ?>
    <?= $this->include('frontend/cashier/pos/modal/product_info_add.php') ?>

</body>
<script>
    $(document).on('click', '.add_cart', function() {
       $("#modal_product_info_add").modal('show');
     
    })
</script>

</html>