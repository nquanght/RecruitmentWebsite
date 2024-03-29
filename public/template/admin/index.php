<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $this->_metaHTTP; ?>
  <?php echo $this->_metaName; ?>
  <?php echo $this->_title; ?>
  <link href="<?= UPLOAD_URL . 'favicon-bg-remove.png' ?>" rel="icon" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- select2 library - replace select box -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

  <!-- jQueryUI -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <?php echo $this->_cssFiles; ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <?php require_once "html/navbar.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once "html/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
          </div>
        </div>
      </div> -->
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <?php
          require_once APPLICATION_PATH . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
          ?>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php require_once "html/footer.php" ?>
  </div>
  <!-- ./wrapper -->

  <!-- Load jQuery Javascript -->
  <?php echo $this->_jsFiles; ?>

  <!-- Select2 v4.1.0 -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <!-- jQueryUI v1.12.1 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- jQuery Validation v1.19.3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>

  <!-- Toast message when edit or add form -->
  <?php
  if (@$_SESSION['add_success'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Thêm tin đăng tuyển thành công")
          </script>';
    unset($_SESSION['add_success']);
  } elseif (@$_SESSION['edit_success'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Chỉnh sửa tin đăng tuyển thành công")
          </script>';
    unset($_SESSION['edit_success']);
  } elseif (@$_SESSION['updateApplyProfile'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Cập nhật trạng thái thành công !")
          </script>';
    unset($_SESSION['updateApplyProfile']);
  }elseif (@$_SESSION['loginAdminSuccess'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Đăng nhập thành công !")
          </script>';
    unset($_SESSION['loginAdminSuccess']);
  }elseif (@$_SESSION['sendMailSuccess'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Gửi email đến ứng viên thành công !")
          </script>';
    unset($_SESSION['sendMailSuccess']);
  }elseif (@$_SESSION['addNews'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Thêm tin tức thành công !")
          </script>';
    unset($_SESSION['addNews']);
  }elseif (@$_SESSION['updateNews'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Cập nhật tin tức thành công !")
          </script>';
    unset($_SESSION['updateNews']);
  }elseif (@$_SESSION['unsaveProfile'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Bỏ lưu hồ sơ thành công !")
          </script>';
    unset($_SESSION['unsaveProfile']);
  }elseif (@$_SESSION['registerSuccess'] == true) {
    echo '<script type="text/javascript">
            toastr.options = {
              "timeOut": "2500",
              "positionClass": "toast-top-center"
            };
            toastr["success"]("Đăng ký tài khoản thành công !")
          </script>';
    unset($_SESSION['registerSuccess']);
  }
  ?>

</body>

</html>