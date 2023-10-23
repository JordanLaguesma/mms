<!DOCTYPE html>
<html lang="en">

<?= $this->include('frontend/_components/basic/header.php') ?>
<style>
    .img-con {
        position: relative;

    }

    .icon-container {
        background-image: linear-gradient(90deg, rgba(252, 252, 252, 0.8), rgba(252, 252, 252, 0.8));
        position: absolute;
        bottom: 10px;
        right: 0;
        cursor: pointer;

    }

    .icon-bottom:hover {
        color: rgba(89, 88, 88, 0.8) !important;
    }

    .icon-bottom:active {
        color: rgba(89, 88, 187, 0.6) !important;
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
                    <div class="type">
                        <h2 class="text-center display-4">Float Glass</h2>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod1">
                                        <img src="<?= base_url('assets/images/product/g1.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show1 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod2">
                                        <img src="<?= base_url('assets/images/product/g2.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show2 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod3">
                                        <img src="<?= base_url('assets/images/product/g3.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show3 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod4">
                                        <img src="<?= base_url('assets/images/product/g4.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show4 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view  icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod5">
                                        <img src="<?= base_url('assets/images/product/g5.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show5 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="type pt-3">
                        <h2 class="text-center display-4">Obscured Glass</h2>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod6">
                                        <img src="<?= base_url('assets/images/product/g6.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show6 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4 grid-margin">
                                <div class="card">
                                    <div class="img-con prod7">
                                        <img src="<?= base_url('assets/images/product/g7.png') ?>" alt="" class="card-img-top" alt="">
                                        <div class="icon-container prod-show7 text-black text-center py-2 px-2" style="display: none;">
                                            <i class="mdi mdi-square-edit-outline fs-4 edit icon-bottom"></i>
                                            <i class="mdi mdi-monitor text-black fs-4 view icon-bottom"></i>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="mb-0 text-center text-xl">
                                            <div class="ratings text-warning">
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star"></i>
                                                <i class="mdi mdi-star-half"></i>
                                                <i class="mdi mdi-star-outline"></i>
                                            </div>
                                        </div>
                                        <div class="row mt-2">

                                            <div class="col-12 my-auto mb-0 text-center">
                                                <p class="text-lead mb-1">Brown-Side Triple Glass</p>
                                                <h5 class="mb-0 text-center">₱ 1343.00</h5>
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
    <?= $this->include('frontend/admin/product/modals/add_product.php') ?>
    <?= $this->include('frontend/admin/product/modals/edit_product.php') ?>
    <?= $this->include('frontend/admin/product/modals/view_product.php') ?>
</body>
<script>
    $(document).ready(function() {
        $(".edit").click(function(){
            $("#modal_edit_product").modal("show");
        })
        $(".view").click(function(){
            $("#modal_view_product").modal("show");
        })
        $(".prod1").hover(
            function() {
                $(".prod-show1").fadeIn("fast");
            },
            function() {
                $(".prod-show1").fadeOut("fast");
            })

        $(".prod2").hover(
            function() {
                $(".prod-show2").fadeIn("fast");
            },
            function() {
                $(".prod-show2").fadeOut("fast");
            })
        $(".prod3").hover(
            function() {
                $(".prod-show3").fadeIn("fast");
            },
            function() {
                $(".prod-show3").fadeOut("fast");
            })
        $(".prod4").hover(
            function() {
                $(".prod-show4").fadeIn("fast");
            },
            function() {
                $(".prod-show4").fadeOut("fast");
            })
        $(".prod5").hover(
            function() {
                $(".prod-show5").fadeIn("fast");
            },
            function() {
                $(".prod-show5").fadeOut("fast");
            })
        $(".prod6").hover(
            function() {
                $(".prod-show6").fadeIn("fast");
            },
            function() {
                $(".prod-show6").fadeOut("fast");
            })
        $(".prod7").hover(
            function() {
                $(".prod-show7").fadeIn("fast");
            },
            function() {
                $(".prod-show7").fadeOut("fast");
            })
    });
</script>

</html>