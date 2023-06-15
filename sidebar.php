  <button class="btn btn-secondary rounded-0 d-md-none position-fixed top-0 left-0" style="z-index: 1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
      <i class="fas fa-bars menu-icon"></i>
  </button>
  <!-- sidebar -->
  <div class="offcanvas offcanvas-start sidebar" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
          <div class="offcanvas-header-head">
              <h5 class="offcanvas-title text-dark" style="font-size: 24px" id="profileMenuToggleBtn">
                  <i class="fas fa-bars menu-icon"></i>
              </h5>
              <button type="button" class="btn-close text-reset d-md-none btn-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="text-center">
              <div class="user-icon-div">
                  <img src="../images/eflorist_logo.png" width="100%" alt="">
              </div>
              <h3 class="mt-3 mb-0 fs-5"><?php echo $rider['name']; ?></h3>

          </div>
      </div>
      <div class="offcanvas-body text-light">
          <div class="menu-1 h-100">
              <ul class="offcanvas-menu">
                  <li><a href="orders.php"> <i class="fas fa-biking"></i> Your Orders</a></li>

              </ul>
              <ul class="offcanvas-menu">
                  <li>
                  <li><a href="logout.php">Logout</a></li>
                  <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  </li>
              </ul>
          </div>
          <!-- <div class="offcanvas offcanvas-start menu-2 text-dark" tabindex="-1" id="profileMenu" data-bs-backdrop="false" aria-labelledby="offcanvasWithBackdropLabel">
              <ul class="offcanvas-menu">
                  <li><a href="change-password.php">Change Password</a></li>
                  <li><a href="logout.php">Logout</a></li>
              </ul>
              <ul class="offcanvas-menu">
                  <li>
                      <a href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  </li>
              </ul>
          </div> -->
      </div>
  </div>