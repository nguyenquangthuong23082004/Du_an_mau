<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row header">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Mã sản phẩm <br>
                        <input type="text" name="masp" id="" disabled>
                    </div>
                    <div class="row mb10"> 
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" id="">
                    </div>
                    <div class="row mb10"> 
                        Price <br>
                        <input type="text" name="giasp" id="">
                    </div>
                    <div class="row mb10"> 
                        Hình <br>
                        <input type="file" name="hinhsp" id="">
                    </div>
                    <div class="row mb10"> 
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="CẬP NHẬT">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
</div>