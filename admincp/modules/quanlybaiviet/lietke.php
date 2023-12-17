<?php
    $sql_baiviet = "SELECT * FROM tbl_baiviet, tbl_danhmucbaiviet 
    WHERE tbl_baiviet.id_danhmuc = tbl_danhmucbaiviet.id_baiviet
    ORDER by id_danhmuc DESC";
    $query_baiviet = mysqli_query($mysqli, $sql_baiviet);

?>
<p>Liệt kê bài viết</p>
<table border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <td>STT</td>
        <td>Tên bài viết</td>
        <td>Hình ảnh</td>
        <td>Danh mục</td>
        <td>Tóm tắt</td>
        <td>Nội dung</td>
        <td>Tình trạng</td>
        <td>Quản lý</td>
    </tr>
    <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_baiviet)){
                $i++;
        ?>
    <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tenbaiviet'] ?></td>
            <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" style="width: 150px"></td>
            <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td>
                <?php
                    if ($row['tinhtrang'] == 1)
                    echo 'Đã được duyệt';
                    else
                    echo 'Chưa được duyệt';
                ?>
            </td>
            <td>
                <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>">Xóa</a> |
                <a href="index.php?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id'] ?>">Sửa</a>
            </td>
    </tr>
    <?php
        }
    ?>
</table>