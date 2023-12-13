<p>Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><textarea style="resize: none" name="tensanpham" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Mã sản phẩm</td>
            <td><textarea style="resize: none" name="masp" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea style="resize: none" name="tensanpham" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea style="resize: none" name="tensanpham" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang" id="">
                    <option value="1" selected>Kích hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Danh mục</td>
            <td>
                <select name="danhmuc">
                <?php
                    $sql_tendanhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query = mysqli_query($mysqli, $sql_tendanhmuc);
                    while ($row = mysqli_fetch_array($query)){
                ?>
                <option value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></option>
                <?php
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
        </tr>
    </form>
</table>