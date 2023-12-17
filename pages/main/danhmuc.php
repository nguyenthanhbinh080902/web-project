<?php
    $sql_product = "SELECT * FROM tbl_sanpham 
    WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' 
    ORDER BY id_sanpham DESC";
    $query_product = mysqli_query($mysqli, $sql_product);

    $sql_category = "SELECT * FROM tbl_danhmuc 
    WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' LIMIT 1 ";
    $query_category = mysqli_query($mysqli, $sql_category);
    $row_tittle = mysqli_fetch_array($query_category);
?>
<h3>Danh mục sản phẩm :<?php echo $row_tittle['tendanhmuc'] ?></h3>
    <?php
    while ($row_product = mysqli_fetch_array($query_product)){
    ?>
    <ul class="product_list">
        <li >
            <a href="index.php?quanly=sanpham&id=<?php echo $row_product['id_sanpham']?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row_product['hinhanh'] ?>" >
                <p class="title_product">Tên sản phẩm : <?php echo $row_product['tensanpham'] ?></p>
                <p class="price_product">Giá : <?php echo number_format($row_product['giasp'],0,',','.').'vnđ'?></p>
            </a>
        </li>
    </ul>
    <?php
    }
    ?>