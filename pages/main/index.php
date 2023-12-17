<?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = 1;
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*25)-25;
    }

    $sql_product = "SELECT * FROM tbl_sanpham, tbl_danhmuc
    WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc  
    ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,25";
    $query_product = mysqli_query($mysqli, $sql_product);

?>
<h3>Sản phẩm mới nhất</h3>
    <ul class="product_list">
        <?php
            while ($row_product = mysqli_fetch_array($query_product)) {
        ?>
        <li style="width: 19%;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 4px;
            float: left;
            height: 320px;
            background: none;
            ">
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
    <ul style="clear: both"></ul>
    <?php
        $sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
        $row = mysqli_num_rows($sql_trang);
        $trang = ceil($row/25);
    ?>
    <p>Trang </p>
    <ul class="list_trang">
        <?php
            for($i=1; $i<=$trang; $i++){
        ?>
        <li <?php if($i==$page) {echo 'style="background: #1aff8c;"' ;}else{ echo ''; } ?> >
            <a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
        </li>
        <?php
            }
        ?>
    </ul>