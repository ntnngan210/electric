<?php
include '../../db/conn.php';
 if(isset($_POST['task']))
 {
	if ($_POST['task'] == "adduser")
	{
		if (isset($_POST['username']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['cmnd']) && $_POST['username'] != '' && $_POST['address'] != '' && $_POST['phone'] != '' && $_POST['cmnd'] != '')
		{
			$tenkhachhang=$_POST['username'];
			$diachi=$_POST['address'];
			$phone=$_POST['phone'];
			$cmnd=$_POST['cmnd'];
			//$res = $conn->query("select * from khachhang where cmnd='$cmnd' or dt='$phone'");
			//$count = $res->rowCount();
			//if ($count > 0)
			//{
			//	echo 'Chứng minh dân nhân hoặc số điện thoại này đã đăng ký';
			//	return;
			//}
			$sql = "INSERT INTO khachhang(tenkh,diachi,dt,cmnd) VALUES ('$tenkhachhang','$diachi','$phone','$cmnd');";
			if ($stm = $o->query($sql)!=null)
				echo'Thêm khách hàng thành công';
			else
				echo 'Dữ liệu không hợp lệ xin kiểm tra lại';
		}
		else
		{
			echo "Dữ liệu không đầy đủ";
		}
	}
	if ($_POST['task'] == "deluser")
	{
		if (isset($_POST['username']) && $_POST['username'] != '')
		{
			$tenkhachhang=$_POST['username'];
			$sql = "delete from khachhang where makh='$tenkhachhang'";
			if ($stm = $o->query($sql)!=null)
				echo'Xóa khách hàng thành công';
			else
				echo 'Không thể xóa khách hàng này';
		}
		else
		{
			echo "Dữ liệu không đầy đủ";
		}
	}
 }