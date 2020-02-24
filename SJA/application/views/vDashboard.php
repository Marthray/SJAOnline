<?php 
    include("layouts/header.php")
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php 
      include("layouts/sidebar.php")
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        <?php 
          include("layouts/topbar.php")
        ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Bienvenido/a, <?php echo $this->session->userdata(Constants::SESSION_NAME) ?></h1>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php include("layouts/footer.php")?>