<div class="sidebar">
    <h4>Danh mục sản phẩm</h4>
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

    <h4>Danh mục tin tức bài viết</h4>
    <ul class="list_sidebar">
        <?php
            $sql_baiviet = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
            $query_baiviet = mysqli_query($mysqli, $sql_baiviet);
            while ($row_baiviet = mysqli_fetch_array($query_baiviet)) {
        ?>
        <li><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row_baiviet['id_baiviet'] ?>"><?php echo $row_baiviet['tendanhmuc_baiviet'] ?></a></li>
        <?php
            }
        ?>
    </ul>
</div>