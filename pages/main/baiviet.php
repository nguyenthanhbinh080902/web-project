<?php
    $sql_chitiet_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id = '$_GET[id]' LIMIT 1 ";
    $query_chitiet_bv = mysqli_query($mysqli, $sql_chitiet_bv);
    while ($row_chitiet_bv = mysqli_fetch_array($query_chitiet_bv)){
?>
<div class="wrapper_chitiet_baiviet">
    <h3 class="title_post"><?php echo $row_chitiet_bv['tenbaiviet'] ?></h3>
</div>
<?php
    }
?>