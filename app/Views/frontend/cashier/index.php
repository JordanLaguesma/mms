<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('frontend/_components/basic/header.php') ?>
</head>

<body class="sidebar-fixed sidebar-absolute sidebar-hidden">
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
            <div class="col-12 grid-margin stretch-card">
              <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                  <div class="row align-items-center">
                    <div class="col-4 col-sm-3 col-xl-2">
                      <img src="<?= base_url('assets/images/dashboard/Group126@2x.png') ?>" class="gradient-corona-img img-fluid" alt="">
                    </div>
                    <div class="col-5 col-sm-7 col-xl-8 p-0">
                      <h4 class="mb-1 mb-sm-0">Want even more features?</h4>
                      <p class="mb-0 font-weight-normal d-none d-sm-block">Check out our Pro version with 5 unique layouts!</p>
                    </div>
                    <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                      <span>
                        <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">12</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Number of Orders</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">3</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Pending Orders</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$12.34</h3>
                        <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Daily Income</h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-9">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">$31.53</h3>
                        <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item"></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal">Expense current</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Transaction History</h4>
                  <canvas id="transaction-history" class="transaction-chart"></canvas>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Online Transaction</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$236</h6>
                    </div>
                  </div>
                  <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                    <div class="text-md-center text-xl-left">
                      <h6 class="mb-1">Onsite Transaction</h6>
                      <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                    </div>
                    <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                      <h6 class="font-weight-bold mb-0">$593</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row justify-content-between">
                    <h4 class="card-title mb-1">Recent Orders</h4>
                    <p class="text-muted mb-1">Action</p>

                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="preview-list">
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-primary">
                              <img src="<?= base_url('assets/images/faces/face1.jpg') ?>" alt="image" />
                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Heidi Klein</h6>
                              <p class="text-muted mb-0">Float Glass</p>
                            </div>
                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                              <button class="btn btn-outline-success ">Review</button>
                              <p class="text-muted mb-0 pt-2">500.00 </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                              <img src="<?= base_url('assets/images/faces/face2.jpg') ?>" alt="image" />

                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Teh Yuhng</h6>
                              <p class="text-muted mb-0">Brown Glass</p>
                            </div>
                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                              <button class="btn btn-outline-success ">Review</button>
                              <p class="text-muted mb-0 pt-2">1500.00 </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                              <img src="<?= base_url('assets/images/faces/face3.jpg') ?>" alt="image" />

                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">James Blunt</h6>
                              <p class="text-muted mb-0">Lattered Glass</p>
                            </div>
                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                              <button class="btn btn-outline-success ">Review</button>
                              <p class="text-muted mb-0 pt-2">200.00 </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item border-bottom">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-danger">
                              <img src="<?= base_url('assets/images/faces/face4.jpg') ?>" alt="image" />

                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">Broadcast Mail</h6>
                              <p class="text-muted mb-0">Glass Exp</p>
                            </div>
                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                              <button class="btn btn-outline-success ">Review</button>
                              <p class="text-muted mb-0 pt-2">100.00 </p>
                            </div>
                          </div>
                        </div>
                        <div class="preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                              <img src="<?= base_url('assets/images/faces/face6.jpg') ?>" alt="image" />

                            </div>
                          </div>
                          <div class="preview-item-content d-sm-flex flex-grow">
                            <div class="flex-grow">
                              <h6 class="preview-subject">UI Design</h6>
                              <p class="text-muted mb-0">New Glass</p>
                            </div>
                            <div class="me-auto text-sm-right pt-2 pt-sm-0">
                              <button class="btn btn-outline-success ">Review</button>
                              <p class="text-muted mb-0 pt-2">3500.00 </p>
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

</html>