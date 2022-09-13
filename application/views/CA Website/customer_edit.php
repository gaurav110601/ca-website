<?php 
$this->load->view('CA Website/admin_css');
$this->load->view('CA Website/admin_header');
 ?>

<?php
if (empty($this->session->userdata('admin_login'))) {
redirect('ca/admin_login');

}

?>


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="admin_dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin_dashboard_slider">
              <i class="bi bi-circle"></i><span>Slider</span>
            </a>
          </li>
          <li>
            <a href="admin_dashboard_why_choose_us">
              <i class="bi bi-circle"></i><span>Why Choose Us ?</span>
            </a>
          </li>
          <li>
            <a href="admin_about">
              <i class="bi bi-circle"></i><span>About Us</span>
            </a>
          </li>
          <li>
            <a href="admin_features">
              <i class="bi bi-circle"></i><span>Special Features</span>
            </a>
          </li>
          <li>
            <a href="admin_services">
              <i class="bi bi-circle"></i><span>Our Services</span>
            </a>
          </li>
          <li>
            <a href="admin_team">
              <i class="bi bi-circle"></i><span>Our Team</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin_dashboard_contacts">
              <i class="bi bi-circle"></i><span>Contact</span>
            </a>
          </li>
          <li>
            <a href="" class="active">
              <i class="bi bi-circle"></i><span>Register</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="icons-bootstrap.html">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Register Table Edit</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item">Register</li>
          <li class="breadcrumb-item active"> Edit </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<section class="section mt-5">
      <div class="row">
        <div class="col-lg-12">
    <form class="user" method="post"  action="<?= base_url() ?>Ca/customer_edit/<?= $user->Id?>">
                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="password-1"  placeholder="Name" name="name" value="<?= $user->Name ?>" ></div>


                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="email" name="email" placeholder="E-mail"  
                              value="<?= $user->Email ?>"></div>
                        </div>

                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="number" name="no" placeholder="Mobile Number" value="<?= $user->Mobile_Number ?>"
                             ></div>


                            <div class="col-sm-6"><input class="form-control form-control-user" type="

                              text" placeholder="City" name="city"

                              value="<?= $user->City ?>" ></div>
                        </div>


                        <div class="row mb-3" style="padding: 5px;">
                            <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="password" name="password" placeholder="Password" value="<?= $user->Password ?>"></div>



                            <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="verifyPassword" name="verifyPassword" placeholder="Repeat Password" value="<?= $user->Confirm_Password ?>" ></div>
                        </div>


                        <div class="row mb-3" style="padding: 5px;">
                            <p id="emailErrorMsg" class="text-danger" style="display:none;">Paragraph</p>
                            <p id="passwordErrorMsg" class="text-danger" style="display:none;">Paragraph</p>

                        </div>
                            <button class="btn btn-primary">Update</button>
                        <hr>
                    </form>

        </div>
      </div>
    </section>
  </main><!-- End #main -->

  
  <?php 
 $this->load->view('CA Website/admin_footer');
 $this->load->view('CA Website/admin_js');
 
 ?>
