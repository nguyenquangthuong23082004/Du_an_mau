<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    *{  
        box-sizing: border-box;
    }
    .formcontent{
    padding: 20px 0px;
    }
    .headerAdmin{
        background-color: rgb(238, 238, 238);
        border: 1px #CCC solid;
        font-size: 2vw;
        color: #666;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .formcontent input[type="text"]{
    width: 100%;
    border: 1px #CCC solid;
    padding: 5px 10px;
    border-radius: 5px;
    }
    .formcontent input[type="submit"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: rgb(255, 255, 255);
    border: 1px #CCC solid;
    transition: 0.5s linear;
    }
    .formcontent input[type="submit"]:hover{
    background-color: #ccc;
    }
    .formcontent input[type="reset"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: rgb(255, 255, 255);
    border: 1px #CCC solid;
    transition: 0.5s linear;
    }
    .formcontent input[type="reset"]:hover{
    background-color: #ccc;
    }
    .formcontent input[type="button"]{
    border-radius: 5px;
    padding: 5px 10px;
    background-color: rgb(255, 255, 255);
    border: 1px #CCC solid;
    transition: 0.5s linear;
    }
    .formcontent input[type="button"]:hover{
    background-color: #ccc;
    }
</style>
<body>
    <div class="boxcenter">
        <div class="row mb headerAdmin">
            <H1>Trang admin</H1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Trủ</a></li>
                <li><a href="index.php?act=adddm">Danh mục</a></li>
                <li><a href="index.php?act=addsp">Hàng hóa</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
            </ul>
        </div>
</body>