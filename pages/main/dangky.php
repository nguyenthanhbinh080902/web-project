<?php
    if(isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];
        
        // $sql_dangky = "INSERT INTO tbl_dangky(tenkhachhang, email, diachi, matkhau, dienthoai) 
        // VALUE('$tenkhachhang', '$email', '$diachi', '$matkhau', '$dienthoai')";
        // $query = mysqli_query($mysqli, $sql_dangky);
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang, email, diachi, matkhau, dienthoai) 
        VALUE('$tenkhachhang', '$email', '$diachi', '$matkhau', '$dienthoai')");

        if($sql_dangky){
            echo '<p style="color: green">Bạn đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['id_khachgang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }

?>
<p>Đăng ký thành viên</p>
<style type="text/css">
    body {
        margin: 0 auto;
    }
    table.dangky tr td {
        padding: 5px
    }
</style>
<form action="" method="post" autocomplete="off">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <td>Họ và tên</td>
        <td><input type="text" size="50" name="hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="50" name="email"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" size="50" name="dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" size="50" name="diachi"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" size="50" name="matkhau"></td>
    </tr>
    <tr>
        <td><input type="submit" name="dangky" value="Đăng ký"></td>
        <td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
    </tr>
</table>
</form>
