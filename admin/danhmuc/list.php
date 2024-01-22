<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
        table{
            width: 100%;
            border-collapse: collapse;
        }
        table  th:nth-child(1){
            width: 10%;
            padding: 20px;
            background-color: #ccc;
        }
        table  th:nth-child(2){
            width: 30%;
            background-color: #ccc;

        }
        table  th:nth-child(3){
            width: 40%;
            background-color: #ccc;
        }
        table  th:nth-child(4){
            width: 20%;
            background-color: #ccc;
        }
        table td{
            padding: 10px 20px;
            border: 1px #999 solid;
        }
    </style>
</head>
<body>
        <div class="row">
            <div class="row header">
                <h1>Quản lý hàng hóa</h1>
            </div>
            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row mb10">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Loại</th>
                                <th>Tên Loại</th>
                                <th></th>
                            </tr>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                $suadm = "index.php?act=suadm&id=".$id;
                                $xoadm = "index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td> 
                                            <a href="'.$suadm.'"><input type="button" value="Sửa"></a> 
                                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="row mb10"> 
                        
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
                <?php 
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                ?>
            </div>
        </div>
</body>
</html>