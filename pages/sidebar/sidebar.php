<div class="sidebar">
    <ul class="list_sidebar">
        <?php
            $sql_category = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_category = mysqli_query($mysqli, $sql_category);
            while ($row_category = mysqli_fetch_array($query_category)) {
        ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_category['id_danhmuc'] ?>"><?php echo $row_category['tendanhmuc'] ?></a></li>
        <?php
            }
        ?>
    </ul>
</div>