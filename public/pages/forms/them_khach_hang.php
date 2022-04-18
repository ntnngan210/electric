<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quản lý khách hàng sử dụng điện sinh hoạt</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <script src="../../js/jquery-3.6.0.min.js"></script>
  <script>
   function ThemKhachHang(){
		  $.ajax({
		  type: "POST",
		  url: "xu_ly_khach_hang.php",
		  data: { // Danh sách các thuộc tính sẽ gửi đi
			     task : "adduser",
			     username : $('#username').val(),
			     address : $('#address').val(),
			     phone : $('#phone').val(),
			     cmnd : $('#cmnd').val()
			},
		  success: function (response) {
			  alert(response);
			},
		  error: function() {
			   alert('Máy chủ không phản hồi');
			}  
		  });
  }
  </script>
</head>
  <?php require '../../header.php'?>
  <?php require '../../leftbody.php'?>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mẫu thêm khách hàng</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Tên khách hàng</label>
                      <input type="text" class="form-control" id="username" placeholder="Tên khách hàng" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Địa chỉ</label>
                      <input type="textarea" class="form-control" id="address" placeholder="Địa chỉ" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Số điện thoại</label>
                      <input type="tel" class="form-control" id="phone" placeholder="Số điện thoại" maxlength="12" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Chứng minh nhân dân/Căn cước công dân</label>
                      <input type="tel" class="form-control" id="cmnd" placeholder="Chứng minh nhân dân/Căn cước công dân" maxlength="9" required>
                    </div>
                    <!--<div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                      </label>
                    </div>-->
                    <button type="button" id="InputThem" class="btn btn-primary mr-2" onclick="ThemKhachHang();">Thêm</button>
                    <!--<button class="btn btn-light">Cancel</button>-->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php require '../../footer.php'?>
  <!-- End custom js for this page-->
</body>

</html>
