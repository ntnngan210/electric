<?php
include '../../db/conn.php';
$sql = "select * from khachhang";
                                    $stmsp = $o->query($sql);
                                    $data = $stmsp->fetchAll();
				    ?>
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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <script src="../../js/jquery-3.6.0.min.js"></script>
  <script>
   function XoaKhachHang(makh){
		  $.ajax({
		  type: "POST",
		  url: "xu_ly_khach_hang.php",
		  data: { // Danh sách các thuộc tính sẽ gửi đi
			     task : "deluser",
			     username : makh
			},
		  success: function (response) {
			  alert(response);
			  location.reload();
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

        

          <!--

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Expenses</p>
                      <h1 class="mb-0">8742</h1>
                    </div>
                    <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
                  </div>
                  <canvas id="expense-chart" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Budget</p>
                      <h1 class="mb-0">47,840</h1>
                    </div>
                    <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
                  </div>
                  <canvas id="budget-chart" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Balance</p>
                      <h1 class="mb-0">$7,243</h1>
                    </div>
                    <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
                  </div>
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
              </div>
            </div>
          </div>
-->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">Mã khách hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
			<th>Số điện thoại</th>
                        <th>CMND/CCCD</th>
                      </tr>
                    </thead>
                    <tbody>
		<?php    foreach ($data as $key => $value)
{?>
                      <tr>
                        <td><?php echo $value['makh']?></td>
                        <td><?php echo $value['tenkh']?> </td>
                        <td><?php echo $value['diachi']?></td>
                        <td><?php echo $value['dt']?></td>
                        <td><?php echo $value['cmnd']?></td>
                        <td>
                          <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Sửa
                              <i class="typcn typcn-edit btn-icon-append"></i>                          
                            </button>
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text" onclick="XoaKhachHang('<?php echo $value['makh']?>')">
                              Xóa
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                            </button>
                          </div>
                        </td>
                      </tr>
		      <?php }?>                                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       <?php require '../../footer.php'?>
  <!-- End custom js for this page-->
</body>

</html>
