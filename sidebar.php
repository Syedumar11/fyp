  <button class="btn btn-secondary rounded-0 d-md-none position-fixed top-0 left-0" style="z-index: 1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
      <i class="fas fa-bars menu-icon"></i>
  </button>
  <!-- sidebar -->
  <div class="offcanvas offcanvas-top sidebar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
          <div class="offcanvas-header-head">
              <h5 class="offcanvas-title text-dark" style="font-size: 24px" id="profileMenuToggleBtn">
                  <i class="fas fa-bars menu-icon"></i>
              </h5>
              <button type="button" class="btn-close text-reset d-md-none btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="text-center">
              <a href="/admin" class="d-block user-icon-div">
                  <!--    <h3 STYLE="color:black;">E Florist</h3>-->
                  <img class="rounded-circle mt-1"  src="images/<?php echo $admin['file1']; ?>" width="100%" alt="">
              </a><br>
              <h3 class="mt-3 mb-0 fs-5"><?php echo $admin['name']; ?></h3>

          </div>
      </div>
      <div class="offcanvas-body text-light">
          <div class="menu-1 h-100">
              <ul class="offcanvas-menu">
        
             <center> <li><a href="admin.php"style="background-color:#4cbfa6; color:white;"> <i class=""></i>Admin</a></li>
             
                  <li><a href="users.php"> <i class=""></i>+Add Students</a></li>

                  <li><a href="parent.php"> <i class=""></i>+Add Parents</a></li>


                  <li><a href="rooms.php"> <i class=""></i>+Add Classes</a></li>

                  <li><a href="notices.php"> <i class=""></i>+Add Notices</a></li>

                  <li><a href="results.php"> <i class=""></i>+Add Result</a></li>

                  <li><a href="attandances.php"> <i class=""></i>+Add Attandace</a></li>

                  <li><a href="staffs.php"> <i class=""></i>+Add Teacher & Other Staff</a></li>

              </ul>
              <ul class="offcanvas-menu">
                  <li>
                      <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  </li>
              </ul>
          </div>
          <div class="offcanvas offcanvas-start menu-2 text-dark" tabindex="-1" id="profileMenu" data-bs-backdrop="false" aria-labelledby="offcanvasWithBackdropLabel">
              <ul class="offcanvas-menu">
                  <li><a href="change-password.php">Change Password</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
              <ul class="offcanvas-menu">
                  <li>
                      <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  </li>
              </ul>
          </div>
      </div>
  </div>


  <script>
      const request = new XMLHttpRequest();

      request.addEventListener('load', function(e) {
          document.querySelector(".badge.orders").innerHTML = request.response;
      });
      request.open('GET', '/admin/run-time/orders/status.php');

      request.send();


      setInterval(() => {
          request.open('GET', '/admin/run-time/orders/status.php');
          request.send();
      }, 3000);
  </script>