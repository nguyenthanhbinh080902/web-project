<p>Liệt kê danh mục bài viết</p>
<?php
  $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu ASC";
  $query_lietke_danhmucbv = mysqli_query($mysqli, $sql_lietke_danhmucbv);
?>

<table border="1" width="50%" style="border-collapse: collapse;">
    <tr>
        <th>STT</th>
        <th>Tên danh mục bài viết</th>
        <th>Thứ tự</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td><?php echo $row['thutu'] ?></td>
        <td>
            <a  href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a> | 
            <a  href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
