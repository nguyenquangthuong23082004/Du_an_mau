<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
//Controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra người dùng có click btn add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listdanhmuc=loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm = loadOne_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            if(isset($dm))  var_dump($dm);
            break;
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc=loadAll_danhmuc();
            include "danhmuc/list.php";
            break;
        // controller sanpham
        case 'addsp':
            //kiểm tra người dùng có click btn add
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_sanpham($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "sanpham/add.php";
            break;
        case 'listsp':
            $listsanpham = loadAll_sanpham();
            include "sanpham/list.php";
            break;
        case 'xoasp' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_sanpham($_GET['id']);
                $thongbao = "Xóa thành công";
            }
            $listsanpham=loadAll_sanpham();
            include "sanpham/list.php";
            break;
        case 'suasp' :
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm = loadOne_sanpham($_GET['id']);
            }
            include "sanpham/update.php";
            if(isset($dm))  var_dump($dm);
            break;
        case 'updatesp':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_sanpham($id,$tenloai);
                $thongbao = "Cập nhật thành công";
            }
            $listsanpham=loadAll_sanpham();
            include "sanpham/list.php";
            break;
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}
include "footer.php";

?>