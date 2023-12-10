<p>Liệt kê danh mục sản phẩm</p>
<?php
    $sql_lietke = "SELECT * FROM tbl_sanpham, tbl_danhmuc
    WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc
    ORDER BY id_sanpham DESC";
    $query = mysqli_query($mysqli, $sql_lietke);
?>
<table border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <td>STT</td>
        <td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Giá</td>
        <td>Số lượng</td>
        <td>Danh mục</td>
        <td>Mã sản phẩm</td>
        <td>Tóm tắt</td>
        <td>Trạng thái</td>
        <td>Danh mục sp</td>
        <td>Quản lý</td>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['hinhanh'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td>
            <?php
            if ($row['tinhtrang'] == 1)
            echo "Còn hàng"; 
            else
            echo "Hết hàng";
            ?>
        </td>
        <td><?php echo $row['id_danhmuc'] ?></td>
        <td style="text-align: center">
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | 
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>  
</table>