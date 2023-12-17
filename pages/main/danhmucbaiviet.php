<?php
    $sql_baiviet = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc = '$_GET[id]' ORDER BY id DESC";
    $query_baiviet = mysqli_query($mysqli, $sql_baiviet);

    $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet = '$_GET[id]' LIMIT 1 ";
    $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
    $row_danhmuc = mysqli_fetch_array($query_danhmuc);
?>
<h3>Danh mục bài viết : <?php echo $row_danhmuc['tendanhmuc_baiviet'] ?></h3>
    <ul class="post_list">
    <?php
    while ($row_baiviet = mysqli_fetch_array($query_baiviet)){
    ?>
        <li>
            <a href="index.php?quanly=baiviet&id=<?php echo $row_baiviet['id'] ?>">
                <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_baiviet['hinhanh'] ?>" alt="">
                <p class="title_post"><?php echo $row_baiviet['tenbaiviet'] ?></p>
                <p class="content_post"><?php echo $row_baiviet['noidung'] ?></p>
                <p class="summary_post"><?php echo $row_baiviet['tomtat'] ?></p>
            </a>
        </li>
    <?php
    }
    ?>  
    </ul>



