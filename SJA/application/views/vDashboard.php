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
          <h1 class="h3 mb-4 text-gray-800">Hola, <?php echo $this->session->userdata(Constants::SESSION_NAME) ?>
            <?php echo $this->session->userdata(Constants::SESSION_SURNAME) ?>
          </h1>

          <div class="container-fluid" style="display:flex; justify-content:center; align-items:center; height:300px;">
            <img src="<?php echo base_url('assets/images/logo_sja.jpg'); ?>" style="width: 15%;" class="center"/>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php include("layouts/footer.php")?>