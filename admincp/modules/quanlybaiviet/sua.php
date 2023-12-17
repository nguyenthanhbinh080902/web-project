<?php
    $id = $_GET['idbaiviet'];
    $sql = "SELECT * FROM tbl_baiviet WHERE id = '$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
?>
<p>Sửa bài viết</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <?php
        while ($row = mysqli_fetch_array($query))
        {
    ?>
    <form action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data" method="post">
        <tr>
            <td>Tên bài viết</td>
            <td><input type="text" name="tenbaiviet" value="<?php echo $row['tenbaiviet'] ?>"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px" >
            </td>
        </tr>
        <tr>
            <td>Tóm tắt</td>
            <td><textarea name="tomtat" style="resize: none" rows="5"><?php echo $row['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea name="noidung" style="resize: none" rows="5"><?php echo $row['noidung'] ?></textarea></td>
        </tr>
        <tr>
            <td>Danh mục bài viết</td>
            <td>
                <select name="danhmuc">
            <?php
                $sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                $query_danhmuc_bv = mysqli_query($mysqli, $sql_danhmuc_bv);
                while ($row_danhmuc_bv = mysqli_fetch_array($query_danhmuc_bv)){
                if ($row_danhmuc_bv['id_baiviet'] == $row['id_danhmuc'] ){
                ?>
                <option selected value="<?php echo $row_danhmuc_bv['id_baiviet'] ?>"><?php echo $row_danhmuc_bv['tendanhmuc_baiviet'] ?></option>
                <?php
                }else{
                    ?>
                    <option value="<?php echo $row_danhmuc_bv['id_baiviet'] ?>"><?php echo $row_danhmuc_bv['tendanhmuc_baiviet'] ?></option>
                    <?php
                }
                }
            ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Tình trạng</td>
            <td>
                <select name="tinhtrang">
                <?php
                    if ($row['tinhtrang'] == 1){
                ?>
                    <option value="1" selected>Đã được duyệt</option>
                    <option value="0">Chưa được duyệt</option>
                <?php
                    }else {
                    ?>
                    <option value="1">Đã được duyệt</option>
                    <option value="0" selected>Chưa được duyệt</option>
                    <?php
                    }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa sản phẩm"></td>
        </tr>
    </form>
    <?php
        }
    ?>
</table>