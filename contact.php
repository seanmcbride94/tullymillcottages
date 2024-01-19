<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tully Mill Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <style>
        body {
          display: flex;
          flex-direction: column;
          min-height: 100vh;
          margin: 0;
        }
    
        main {
          flex: 1;
        }
    
        .footer {
          background-color: rgb(22, 41, 55); 
          padding: 20px;
          margin-top: auto;
        }
      </style>
</head>
<body style="background-color: rgba(22, 41, 55, 0.1);">


  <header>
    <!-- Off-canvas wrapper Navbar -->
    <div class="offcanvas offcanvas-start p-4" tabindex="-1" id="navbarOffcanvas"
        aria-labelledby="navbarOffcanvasLabel" style="background-color: rgb(22, 41, 55);">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="navbarOffcanvasLabel">Menu</h5> -->
            <img src="/images/TullyMillCottagesLogo.png" alt="logo"
                style="height: 80px;" />
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item pt-2">
                    <a class="nav-link" href="/index.html">Home</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="/things-to-do.html">Things to Do</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                  <a class="nav-link" href="/cottages.html">Our Cottages</a>
              </li>
              <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="/friend.html">Become Our Friend</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="/location.html">Find Us</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="http://www.tullymill.com">Restaurant</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="http://www.lillyannes.com/index.php">Lillyannes</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="https://giveavoucher.co.uk/tullymill">Vouchers</a>
                </li>
                <hr>
                <li class="nav-item pt-2">
                    <a class="nav-link" href="/contact.html">Contact Us</a>
                </li>
                <hr>
            </ul>
        </div>
    </div>

    
<!-- Navbar -->
<nav class="navbar text-sm-center"> <!--justify-content-center text-sm-center -->
  <div class="container">
      <div class="col-12 col-md-3">
          <a href="/index.html"><img src="images/TullyMillCottagesLogo.png" alt="logo" style="height: 80px;"/></a>
      </div>
      <div class="col-12 col-md-3">
          <a class="nav-link bordered-link" href="/cottages.html">OUR COTTAGES</a>
      </div>
      <div class="col-12 col-md-3">
          <a class="nav-link" href="https://hotels.cloudbeds.com/en/reservation/AGLiSm">MAKE A BOOKING</a>
      </div>
      <div class="col-12 col-md-3">
          <!-- Navbar toggler button for off-canvas -->
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
              <span class="navbar-toggler-icon"></span>
              <!-- <span class="material-symbols-outlined">menu</span> -->
          </button>
      </div>
  </div>
</nav>

</header>
<!--End of navbar-->

      <img src="/images/Tully_Mill-22.JPG" class="img-fluid image"
          alt="Tapas at Tully Mill" />  

      <div class="container mt-5 p-5 mb-4" style="background-color: rgba(22, 41, 55, 0.8);">
        <h2 class="secondary-text-colour pb-3">Contact Us</h2>
        <form action="send_email.php" method="post" class="pb-4">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name*</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email*</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message*</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              <!-- <button type="submit" class="text-decoration-none"> -->
                    <button type="submit" class="card text-center secondary-colour p-2 border border-light rounded-0 align-items-center">
                      
                        <span class="material-symbols-outlined">
                            mail
                        </span> SEND ENQUIRY
                      </button>
                <!-- </button> -->
            </div>
        </form>
      </div>

    <div class="container">
        <div class="mt-5 pb-5">
            <h5 class="pb-4">Contact Information</h5>
            <p class="black"><strong>Phone:</strong> +44 (0) 28 6634 9847</p>
            <p class="black"><strong>Email:</strong> info@tullymillcottages.com</p>
            <p class="black"><strong>Address:</strong>  Mill Road, Florence Court, Co. Fermanagh, BT92, 1DB</p>
        </div>
    </div>


    <!--Start of booking footer-->
    <!-- <div style="background-color: rgb(22, 41, 55)">
      <div class="container p-2 mb-3 mt-3 align-items-center text-center mx-auto">
          <form action="https://hotels.cloudbeds.com/en/reservation/AGLiSm" target="_blank" method="post" autocomplete="off" class="row text-center">
              <input type="hidden" name="date_format" value="d/m/Y">
              
              <div class="col-12 col-md-6 p-2">
                  <label class="control-label" for="widget_date_3697" title="Check In">Check In</label>
                  <div class="input-group">
                      <input type="date" class="form-control date rounded-0" name="widget_date" id="widget_date_3697" value="">
                      <input type="date" name="start_date_mobile" class="form-control date_mobile widget_hide rounded-0" id="widget_date_mobile">
                  </div>
              </div>
              
              <div class="col-12 col-md-6 p-2">
                  <label class="control-label" for="widget_date_to365" title="Check Out">Check Out</label>
                  <div class="input-group">
                      <input type="date" class="form-control date rounded-0" name="widget_date_to" id="widget_date_to365" value="">
                      <input type="date" name="end_date_mobile" class="form-control date_mobile widget_hide rounded-0" id="end_date_mobile">
                  </div>
              </div>
              
              <div class="col-12 col-md-12 p-2">
                  <button type="submit_link" class="card mx-auto align-items-center secondary-colour px-5 border border-light rounded-0" target="_blank" href="https://hotels.cloudbeds.com/en/reservation/AGLiSm#checkin=2024-01-24&amp;checkout=2024-01-31">                       
                      <span class="material-symbols-outlined">
                          calendar_month
                          </span> SEARCH
                  </button>
              </div>
          </form>
      </div>
      </div> -->
      <div class="container p-2 mb-3 mt-3 align-items-center text-center mx-auto" style="background-color: rgb(22, 41, 55);">
        <div class="row">
            <h3 class="secondary-text-colour">CHECK AVAILABILITY</h3>
            <script src="https://hotels.cloudbeds.com/widget/load/AGLiSm/horiz?newWindow=1">
                <form method="post" action="https://hotels.cloudbeds.com/reservas/dEF4YR">
                    <input type="hidden" name="date_format" value="d/m/Y"/>
                    <input type="text" name="widget_date" class="form-control date rounded-0" value="24/08/2015" />
                    <input type="text" name="widget_date_to" value="25/08/2015" />
                </form>
            </script>
        </div>
    </div>
      <!--End of booking footer-->
    

    <!-- Footer -->
<footer class="footer">
  <div class="container">
      <div class="row border-top">
          <!-- Section 1 start -->
          <div class="col-12 col-md-3 mt-4">
              <div class="d-flex flex-column align-items-center">
                  <img src="/images/TullyMillCottagesLogo.png" alt="logo" style="height: 80px; width: auto; max-width: 100%;" />
                  <p class="mt-3 text-center">© 2024 Company, Inc. All rights reserved.</p>
              </div>
          </div>
          <!-- Section 1 End -->

          <!-- Section 2 start -->
          <div class="col-12 col-md-3 mb-4 mt-5">
              <div class="d-flex flex-column align-items-center">
                  <p><b>Contact Info</b></p>
                  <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg> +44 (0) 28 6634 9847</p>
                  <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                  </svg> info@tullymillcottages.com</p>
              </div>
          </div>
          <!-- Section 2 End -->

          <!-- Section 3 start -->
          <div class="col-12 col-md-3 mb-4 mt-3">
              <div class="d-flex flex-column align-items-center">
                  <a href="http://www.tullymill.com"><img src="https://seanmcbride94.github.io/tullymill2/images/LogoDark-01-012.png" alt="Image 1" style="height: 80px; width: auto; max-width: 100%; margin-bottom: 10px;"></a>
                  <a href="http://www.lillyannes.com/index.php"><img src="/images/extracopy.png" alt="Image 2" style="height: 150px; width: auto; max-width: 100%;"></a>
              </div>
          </div>
          <!--Section 3 End-->

          <!-- Section 4 start -->
          <div class="col-12 col-md-3 mb-4 mt-5">
              <ul class="list-unstyled d-flex justify-content-center justify-content-md-end">
                  <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/tullymillcottages/"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="color: azure;">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                  </svg></a></li>
                  <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/tullymillcottages/"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="color: azure;">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                  </svg></a></li>
              </ul>
          </div>
          <!-- Section 4 End -->
      </div>
  </div>
</footer>
<!--End Footer-->
    
      <!-- Bootstrap JS and Popper.js -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
</body>
</html>
