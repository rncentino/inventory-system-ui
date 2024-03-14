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
      Register - Store Inventory System
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
  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                  <div class="card-header bg-chartbg">
                    <h1 class="text-center text-white">STORE INVENTORY SYSTEM</h1>
                  </div>
                    <div class="card-body">
                        <h3 class="card-title text-center">Register</h3>
                        <form>
                            <div class="mb-1">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Fullname" required id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-1">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Your email" required id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-1">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Password" required id="password">
                                    <button class="btn btn-outline-secondary" type="button" id="showPasswordBtn">Show</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <p><input type="checkbox"> I agree to the <a class="text-decoration-none" href="#">Terms</a> and <a class="text-decoration-none" href="#">Privacy Policy</a></p>
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Sign Up</button><br><br>
                                <p> Already have an account? <a class="text-primary" href="login.php">Login instead. </a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script>
        document.getElementById("showPasswordBtn").addEventListener("click", function() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                this.textContent = "Show";
            }
        });
    </script>

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
