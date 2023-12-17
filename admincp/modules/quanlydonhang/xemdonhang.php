<p>Chi tiết đơn hàng</p>
<?php
    $code = $_GET['code_cart'];
    $query_xemdonhang = mysqli_query($mysqli, "SELECT * FROM tbl_cart_details, tbl_sanpham 
    WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham 
    AND tbl_cart_details.code_cart = '$code' ORDER BY tbl_cart_details.id_cart_details DESC");
?>

<table border="1" width="100%" style="border-collapse: collapse;">
    <tr>
        <th>STT</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php
    $i = 0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_xemdonhang)){
        $thanhtien = $row['soluongmua']*$row['giasp'];
        $tongtien += $thanhtien;
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'], 0,',','.').' vnd' ?></td>
        <td><?php echo number_format($thanhtien, 0,',','.').' vnd' ?></td>
    </tr>
    <?php
    }
    ?>
    <tr>
        <td colspan="6">Tổng tiền là: <?php echo number_format($tongtien, 0,',','.').' vnd' ?></td>
    </tr>
</table>
