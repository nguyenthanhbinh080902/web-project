<?php 
    include('../../config/config.php');

    $tenbaiviet = $_POST['tenbaiviet'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){ // khi click vào nút thêm danh mục
        $sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet, thutu) VALUE('$tenbaiviet', '$thutu') ";
        mysqli_query($mysqli, $sql_them);
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_danhmucbaiviet SET tendanhmuc_baiviet = '$tenbaiviet', thutu = '$thutu'  WHERE id_baiviet = '$_GET[idbaiviet]' ";
        mysqli_query($mysqli, $sql_update);
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');
    }else{
        $id = $_GET['idbaiviet'];
        $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet = '$id' ";
        mysqli_query($mysqli, $sql_xoa);
        header('Location: ../../index.php?action=quanlydanhmucbaiviet&query=them');
    }
?>