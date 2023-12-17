<?php
    if(isset($_POST['doimatkhau'])){
        $email = $_POST['email'];
        // $matkhau_cu = md5($_POST['password_cu']);
        // $matkhau_moi = md5($_POST['password_moi']);
        $matkhau_cu = ($_POST['password_cu']);
        $matkhau_moi = ($_POST['password_moi']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='$email' AND matkhau='$matkhau_cu' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($query);
        if($count > 0){
            if ($matkhau_cu != $matkhau_moi){
                $sql_doimatkhau = "UPDATE tbl_dangky SET matkhau='$matkhau_moi' WHERE email='$email' ";
                $query_doimatkhau = mysqli_query($mysqli, $sql_doimatkhau);
                echo '<p style="color: green; ">Thay đổi mật khẩu thành công</p>';
            }else{
                echo '<p style="color: red; ">Trùng với mật khẩu ban đầu</p>';
            }
        }else{
            echo '<p style="color: red; ">Mật khẩu hoặc Email sai vui lòng nhập lại.</p>';
        }
    }
?>

<form action="" autocomplete="off" method="POST">
    <table border="1" class="table-login">
        <tr>
            <td colspan="2" style="text-align: center"><h3>Đổi mật khẩu</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input size="50" type="text" name="email" placeholder="Email..."></td>
        </tr>
        <tr>
            <td>Mật khẩu cũ</td>
            <td><input size="50" type="text" name="password_cu" placeholder="Mật khẩu cũ"></td>
        </tr>
        <tr>
            <td>Mật khẩu mới</td>
            <td><input size="50" type="text" name="password_moi" placeholder="Mật khẩu mới"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
        </tr>
    </table>
</form>