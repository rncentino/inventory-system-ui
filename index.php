<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code."
    />
    <meta
      name="keywords"
      content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard"
    />
    <meta name="author" content="ThemeSelect" />
    <title>
      Dashboard - Store Inventory System
    </title>
    <link
      rel="apple-touch-icon"
      href="assets/images/ico/apple-icon-120.png"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/ico/favicon.ico"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
      rel="stylesheet"
    />
    <!-- BEGIN VENDOR CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/vendors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/vendors/css/charts/chartist.css"
    />
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/app-lite.css"
    />
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/core/menu/menu-types/vertical-menu.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/core/colors/palette-gradient.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/css/pages/dashboard-ecommerce.css"
    />
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body
    class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
    data-open="click"
    data-menu="vertical-menu"
    data-color="bg-chartbg"
    data-col="2-columns"
  >

    <!-- fixed-top-->
    <?php
include("include/dashboard/header.php");
    ?>
    <!-- fixed-top-->

    <!-- Sidebar -->
    <?php
include("include/dashboard/sidebar.php");
    ?>
    <!-- Sidebar -->

    <!-- Main -->
    <div class="app-content content mt-3">
      <div class="content-wrapper">
        <div class="content-body">
          <!-- eCommerce statistic -->
          <div class="row gy-4">
            <div class="col-md-12 col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-1">Congrats <span class="text-primary">Wilfredo!</span> 🎉</h4>
                  <p class="pb-0">Best user of the month</p>
                  <h4 class="text-success mb-1">$70.69k</h4>
                  <p class="mb-1 pb-1">76% of target 🚀</p>
                  <a href="javascript:;" class="btn btn-sm btn-success">View Sales</a>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h1 class="card-title mb-1">Transactions</h1>
                  <p class="pb-0 mb-0 lead"><strong>Total 48.5% growth</strong> 😎 this month</p>
                </div>
                <div class="card-body">
                  <div class="row g-3">
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="mr-1">
                          <a href="javascript:;" class="btn btn-primary fs-1"><i class="ft-trending-up"></i></a>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Sales</div>
                          <h5 class="mb-0">245k</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="mr-1">
                          <a href="javascript:;" class="btn btn-success fs-1"><i class="ft-user"></i></a>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Customers</div>
                          <h5 class="mb-0">13.5k</h5>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="mr-1">
                          <a href="javascript:;" class="btn btn-warning fs-1"><i class="ft-package"></i></a>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Product</div>
                          <h5 class="mb-0">1.54k</h5>
                          </div>
                        </div>
                      </div>
                    <div class="col-md-3 col-6">
                      <div class="d-flex align-items-center">
                        <div class="mr-1">
                          <a href="javascript:;" class="btn btn-info fs-1"><i class="ft-tag"></i></a>
                        </div>
                        <div class="ms-3">
                          <div class="small mb-1">Reveneu</div>
                          <h5 class="mb-0">$88k</h5>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <!--/ eCommerce statistic -->

          <!-- Statistics -->
          <div class="row match-height">
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="heading-multiple-thumbnails">
                    Multiple Thumbnail
                  </h4>
                  <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                    <span class="avatar">
                      <img
                        src="theme-assets/images/portrait/small/avatar-s-2.png"
                        alt="avatar"
                      />
                    </span>
                    <span class="avatar">
                      <img
                        src="theme-assets/images/portrait/small/avatar-s-3.png"
                        alt="avatar"
                      />
                    </span>
                    <span class="avatar">
                      <img
                        src="theme-assets/images/portrait/small/avatar-s-4.png"
                        alt="avatar"
                      />
                    </span>
                  </div>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Content title</h4>
                    <p class="card-text">
                      Jelly beans sugar plum cheesecake cookie oat cake
                      soufflé.Tootsie roll bonbon liquorice tiramisu pie
                      powder.Donut sweet roll marzipan pastry cookie cake
                      tootsie roll oat cake cookie.Jelly beans sugar plum
                      cheesecake cookie oat cake soufflé. Tart lollipop carrot
                      cake sugar plum.
                    </p>
                    <p class="card-text">
                      Sweet roll marzipan pastry halvah. Cake bear claw sweet.
                      Tootsie roll pie marshmallow lollipop chupa chups donut
                      fruitcake cake.Jelly beans sugar plum cheesecake cookie
                      oat cake soufflé. Tart lollipop carrot cake sugar plum.
                      Marshmallow wafer tiramisu jelly beans.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <h4 class="card-title">Recent products</h4>
                    <h6 class="card-subtitle text-muted">
                      Carousel Card With Header & Footer
                    </h6>
                  </div>
                  <div
                    id="carousel-area"
                    class="carousel slide"
                    data-ride="carousel"
                  >
                    <ol class="carousel-indicators">
                      <li
                        data-target="#carousel-area"
                        data-slide-to="0"
                        class="active"
                      ></li>
                      <li data-target="#carousel-area" data-slide-to="1"></li>
                      <li data-target="#carousel-area" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img
                          src="theme-assets/images/carousel/08.jpg"
                          class="d-block w-100"
                          alt="First slide"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="theme-assets/images/carousel/03.jpg"
                          class="d-block w-100"
                          alt="Second slide"
                        />
                      </div>
                      <div class="carousel-item">
                        <img
                          src="theme-assets/images/carousel/01.jpg"
                          class="d-block w-100"
                          alt="Third slide"
                        />
                      </div>
                    </div>
                    <a
                      class="carousel-control-prev"
                      href="#carousel-area"
                      role="button"
                      data-slide="prev"
                    >
                      <span class="la la-angle-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a
                      class="carousel-control-next"
                      href="#carousel-area"
                      role="button"
                      data-slide="next"
                    >
                      <span
                        class="la la-angle-right icon-next"
                        aria-hidden="true"
                      ></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                  </div>
                </div>
                <div
                  class="card-footer border-top-blue-grey border-top-lighten-5 text-muted"
                >
                  <span class="float-left">2 days ago</span>
                  <span class="tags float-right">
                    <span class="badge badge-pill badge-primary">Branding</span>
                    <span class="badge badge-pill badge-danger">Design</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Recent Buyers</h4>
                  <a class="heading-elements-toggle">
                    <i class="fa fa-ellipsis-v font-medium-3"></i>
                  </a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="reload">
                          <i class="ft-rotate-cw"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content">
                  <div id="recent-buyers" class="media-list">
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <span class="avatar avatar-md avatar-online">
                          <img
                            class="media-object rounded-circle"
                            src="theme-assets/images/portrait/small/avatar-s-7.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body w-100">
                        <span class="list-group-item-heading"
                          >Kristopher Candy
                        </span>
                        <ul class="list-unstyled users-list m-0 float-right">
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 1"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar"
                            />
                          </li>
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 2"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar"
                            />
                          </li>
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 3"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-4.jpg"
                              alt="Avatar"
                            />
                          </li>
                        </ul>
                        <p class="list-group-item-text mb-0">
                          <span class="blue-grey lighten-2 font-small-3">
                            #INV-12332
                          </span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <span class="avatar avatar-md avatar-away">
                          <img
                            class="media-object rounded-circle"
                            src="theme-assets/images/portrait/small/avatar-s-8.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body w-100">
                        <span class="list-group-item-heading"
                          >Lawrence Fowler
                        </span>
                        <ul class="list-unstyled users-list m-0 float-right">
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 1"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar"
                            />
                          </li>
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 2"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar"
                            />
                          </li>
                        </ul>
                        <p class="list-group-item-text mb-0">
                          <span class="blue-grey lighten-2 font-small-3">
                            #INV-12333
                          </span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <span class="avatar avatar-md avatar-busy">
                          <img
                            class="media-object rounded-circle"
                            src="theme-assets/images/portrait/small/avatar-s-9.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body w-100">
                        <span class="list-group-item-heading"
                          >Linda Olson
                        </span>
                        <ul class="list-unstyled users-list m-0 float-right">
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 1"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-2.jpg"
                              alt="Avatar"
                            />
                          </li>
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 2"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar"
                            />
                          </li>
                        </ul>
                        <p class="list-group-item-text mb-0">
                          <span class="blue-grey lighten-2 font-small-3">
                            #INV-12334
                          </span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <span class="avatar avatar-md avatar-online">
                          <img
                            class="media-object rounded-circle"
                            src="theme-assets/images/portrait/small/avatar-s-10.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body w-100">
                        <span class="list-group-item-heading">Roy Clark </span>
                        <ul class="list-unstyled users-list m-0 float-right">
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 1"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-6.jpg"
                              alt="Avatar"
                            />
                          </li>
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 2"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-1.jpg"
                              alt="Avatar"
                            />
                          </li>
                        </ul>
                        <p class="list-group-item-text mb-0">
                          <span class="blue-grey lighten-2 font-small-3">
                            #INV-12335
                          </span>
                        </p>
                      </div>
                    </a>
                    <a href="#" class="media border-0">
                      <div class="media-left pr-1">
                        <span class="avatar avatar-md avatar-online">
                          <img
                            class="media-object rounded-circle"
                            src="theme-assets/images/portrait/small/avatar-s-11.png"
                            alt="Generic placeholder image"
                          />
                          <i></i>
                        </span>
                      </div>
                      <div class="media-body w-100">
                        <span class="list-group-item-heading"
                          >Kristopher Candy
                        </span>
                        <ul class="list-unstyled users-list m-0 float-right">
                          <li
                            data-toggle="tooltip"
                            data-popup="tooltip-custom"
                            data-original-title="Product 1"
                            class="avatar avatar-sm pull-up"
                          >
                            <img
                              class="media-object rounded-circle no-border-top-radius no-border-bottom-radius"
                              src="theme-assets/images/portfolio/portfolio-5.jpg"
                              alt="Avatar"
                            />
                          </li>
                        </ul>
                        <p class="list-group-item-text mb-0">
                          <span class="blue-grey lighten-2 font-small-3">
                            #INV-12336
                          </span>
                        </p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--/ Statistics -->
        </div>
      </div>
    </div>
    
    <!-- Main -->

    <!-- Footer -->
    <?php 
include("include/dashboard/footer.php");
    ?>
    <!-- Footer -->

    <!-- BEGIN VENDOR JS-->
    <script
      src="assets/vendors/js/vendors.min.js"
      type="text/javascript"
    ></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script
      src="assets/vendors/js/charts/chartist.min.js"
      type="text/javascript"
    ></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script
      src="assets/js/core/app-menu-lite.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/js/core/app-lite.js"
      type="text/javascript"
    ></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script
      src="assets/js/scripts/pages/dashboard-lite.js"
      type="text/javascript"
    ></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
