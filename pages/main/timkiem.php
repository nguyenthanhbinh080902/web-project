<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }else{
        $tukhoa = '';
    }
    $sql_product = "SELECT * FROM tbl_sanpham, tbl_danhmuc
    WHERE tbl_sanpham.tensanpham LIKE '%$tukhoa%'
    AND tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc";
    $query_product = mysqli_query($mysqli, $sql_product);

?>
<h3>Từ khoá tìm kiếm : <?php echo $tukhoa ?></h3>
<ul class="product_list">
    <?php
        while ($row_product = mysqli_fetch_array($query_product)) {
    ?>
    <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_product['id_sanpham']?>">
            <img src="admincp/modules/quanlysp/uploads/<?php echo $row_product['hinhanh'] ?>" alt="">
            <p style="text-align: center; " class="cate_product">Danh mục : <?php echo $row_product['tendanhmuc'] ?></p>
            <p class="title_product"><?php echo $row_product['tensanpham'] ?></p>
            <p class="price_product">Giá : <?php echo number_format($row_product['giasp'],0,',','.').'vnđ' ?></p>
        </a>
    </li>
    <?php
        }
    ?>
</ul>