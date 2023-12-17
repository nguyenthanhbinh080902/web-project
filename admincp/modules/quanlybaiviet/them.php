<p>Thêm bài viết</p>
<table border="1" width="100%" style="border-collapse: collapse">
  <form action="modules/quanlybaiviet/xuly.php" method="post" enctype="multipart/form-data">
    <tr>
      <td>Tên bài viết</td>
      <td><input type="text" name="tenbaiviet" ></td>
    </tr>
    <tr>
      <td>Tóm tắt</td>
      <td><textarea style="resize: none" name="tomtat" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Nội dung</td>
      <td><textarea style="resize: none" name="noidung" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Danh mục</td>
      <td>
        <select name="danhmuc" id="">
          <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu ASC";
            $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
            while ($row = mysqli_fetch_array($query_danhmuc)){ 
          ?>
          <option value="<?php echo $row['id_baiviet'] ?>"><?php echo $row['tendanhmuc_baiviet'] ?></option>
          <?php
            }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Tình trạng</td>
      <td>
        <select name="tinhtrang" id="">
          <option value="1" selected>Được duyệt</option>
          <option value="0">Chưa được duyệt</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" ></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Thêm bài viết" name="thembaiviet"></td>
    </tr>
  </form>
</table>