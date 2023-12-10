<p>Liệt kê danh mục sản phẩm</p>
<?php
    $sql_lietke = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query = mysqli_query($mysqli, $sql_lietke);
?>
<table border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <td>STT</td>
        <td>Tên danh mục</td>
        <td>Thứ tự</td>
        <td>Chức năng</td>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['thutu'] ?></td>
        <td style="text-align: center">
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | 
            <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
        }
    ?>  
</table>