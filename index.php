<?php 

ob_start();
require_once('./classes/DBConnection.php');
$db = new DBConnection();

$page = isset($_GET['p']) ? $_GET['p'] : "forms";
ob_end_flush();

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <style>
    /* canvas {
        height: 250px !important
    } */
    
    table th,
    table td {
        padding: 3px !important
    }

</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phaxad form builder</title>

       <!-- Vendor CSS Files -->
   <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/remixicon/remixicon.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/quill/quill.snow.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/quill/quill.bubble.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/vendor/simple-datatables/style.css">
  <link rel="stylesheet" type="text/css" href="../admin/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/phaxadproject/css/nojs.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/phaxadproject/css/dash.css">


    

  <link rel="stylesheet" type="text/css" href="css/fontawesome.css"/>
   
  
</head>

<body class='' style=' font-family:  -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
 font-weight: 100;'>
<link rel="stylesheet" type="text/css" href="css/saucytoppings.css"/>
<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>    

<input type="checkbox" name="" id="menu-toggle">
<div class="overlay">
    <label for="menu-toggle">
        <span class="bi bi-backspace"></span>
    </label>
</div>
<div class="sidebarn sidebar">
    <div class="sidebar-container">
        <div class="brand">
            <h3>
                 &nbsp;<img src="../images/loading.png" width="20px" height="20px" class="not-img logo">
                Phaxad
            </h3>
        </div>
        <div class="sidebar-avartar">
            <div>
                <img src="../images/bar-chart.png" alt=""/>
            </div>
            <div class="avartar-info">
                <div class="avartar-text">
                    <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="javascript:void(0)" data-bs-toggle="dropdown">
           
            <span class="d-none d-md-block dropdown-toggle ps-2">Nnamchi Israel</span>
           
          </a><!-- End Profile Iamge Icon -->


          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nnamchi Israel</h6>
               <small><img src="../images/repost.png" class="small-img">&nbsp; starter</small>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           <div class="user-div">
            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>WorkSpace</span>
              </a>
            </li>
             <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>Tracks & insights</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span>Your Technologies</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-question-circle"></i>
                <span>Licenses</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

           </div>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../dashboard.php" >
                        <span class="fab fa-adn"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-box-open"></span>
                        <span>Project</span>
                    </a>
                </li>
                 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="javascript:void(0)">
          <i class="fas fa-tools"></i><span> Tools & Plugins</span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-attachment-fill"></i> <span>APIs</span>
            </a>
          </li>
           <li>
            <a href="javascript:void(0)">
              <i class="bi bi-window-sidebar"></i> <span>Web Builder</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)" class="disabled">
              <i class="bx bxs-layout"></i> <span>Form Builder</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-mickey-line"></i> <span>Plugins</span>
            </a>
          </li>
         
          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-meteor-line"></i> <span>Web Tester</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-recycle-line"></i><span>Others</span>
            </a>
          </li>
          
          
        </ul>
      </li>
                
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-satellite-dish"></span>
                        <span>Deploy</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-dice-three"></span>
                        <span>Pocket</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-arrow-circle-down"></span>
                        <span>Installations</span>
                    </a>
                </li>
                <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="javascript:void(0)">
          <i class="fas fa-globe-africa"></i><span> Domains </span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="javascript:void(0)">
              <i class="bi bi-brightness-alt-high"></i><span> Free Domain & Hosting</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="bi bi-brightness-high"></i><span> Custom Domain & Hosting</span>
            </a>
          </li>
         
        </ul>
      </li>
                
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-layer-group"></span>
                        <span>Team</span>
                    </a>
                </li>
                <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forum-nav" data-bs-toggle="collapse" href="javascript:void(0)">
          <i class="fas fas fa-users"></i><span> Forum </span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forum-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="javascript:void(0)">
              <i class="bx bxs-badge"></i><span> Blog</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-account-pin-circle-line"></i><span> Medium</span>
            </a>
          </li>
         
        </ul>
      </li>
                
                <li>
                    <a href="javascript:void(0)">
                        <span class="fas fa-dolly"></span>
                        <span>Activity Logs</span>
                    </a>
                </li>
                <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="javascript:void(0)">
          <i class="fas fa-cog"></i><span> Settings </span> <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="setting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="javascript:void(0)">
              <i class="bx bxs-analyse"></i><span> Account Settings</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="bx bxs-layer-plus"></i><span> Team Settings</span>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="bx bx-cast"></i><span> Deploy Settings</span>
            </a>
          </li>

          <li>
            <a href="javascript:void(0)">
              <i class="ri ri-refund-2-fill"></i><span> Plan Settings</span>
            </a>
          </li>
         
        </ul>
      </li>
                
            </ul>
        </div>


        <!-- notifications from Phaxad -->
        <div class="sidebar-card">
            <div class="side-card-icon">
                <span class="fas fa-ad"></span>
            </div>
            <div>
                <h4>Make Ads</h4>
                <p>Phaxad has launched a free service for it's users! Design and create nice looking and perfect ads....</p>
            </div>
            <button class="btn btn-main btn-block">Create Now</button>
        </div>

        <!-- end of notifications from Phaxad-->
    </div>
</div>

<div class="main-content" id="#top">
    <header> 
        <div class="header-title-wrapper">
            <label for="menu-toggle">
                <span class="fas fa-th-list"></span>
                
            </label>
            <div class="header-title">
              
            </div>
        </div>
        <style type="text/css">
            .pad-left-twenty{
                padding-left: 30rem;
            }
        </style>
        <div class="header-action pad-left-twenty">
           something else
        </div>
        <hr> 
       </header>
   <main>
     
    <div class="container-fluid">
        <?php include("./".$page.".php") ?>
    </div>



   </main>

</div>
 

 <a href="#top" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-caret-up"></i></a>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script type="text/javascript" src="../js/all.min.js"></script>
 <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../admin/assets/vendor/php-email-form/validate.js"></script>
  <script src="../admin/assets/vendor/quill/quill.min.js"></script>
  <script src="../admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="../admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="../admin/assets/js/main.js"></script>

</body>
<script>
    $(function(){
        var page = "<?php echo $page ?>";

        $('#nav-menu').find(".nav-item.nav-"+page).addClass("active")
    })
</script>
</html>