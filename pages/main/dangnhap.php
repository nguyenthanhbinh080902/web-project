<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='$email' AND matkhau='$matkhau' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p style="color: red; ">Mật khẩu hoặc Email sai vui lòng nhập lại.</p>';
        }
    }
?>

<form action="" autocomplete="off" method="POST">
    <table border="1" class="table-login">
        <tr>
            <td colspan="2"><h3>Đăng nhập khách hàng</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input size="50" type="text" name="email" placeholder="Email..."></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input size="50" type="password" name="password" placeholder="Mật khẩu..."></td>
        </tr>
        <tr>
            <td><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            <td>
                <a href="index.php?quanly=doimatkhau" style="float: right">
                    <input type="button" name="doimatkhau" value="Đổi mật khẩu">
                </a>
            </td>
        </tr>
    </table>
</form>