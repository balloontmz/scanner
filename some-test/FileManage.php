<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2019/1/2
 * Time: 18:07
 */
if (!empty($_FILES['upload'])){
    upload();
}

// 输入数据
function upload(){
    if ($_FILES['upload']['type']!="text/php"){
        move_uploaded_file($_FILES['upload']['tmp_name'], $_FILES['upload']['name']);
        savefile();
    }
}

// 存储数据
function savefile(){
    $filelist = $_FILES['upload']['name']." ".$_POST['content']." ".date("Y-m-d H:i:s")."\n";
    $fp = fopen("upload.txt", "a+");
    fwrite($fp, $filelist);
    fclose($fp);
}

// 输出数据
function outfile(){
    $fp = fopen("upload.txt", 'r');
    $line = [];
    while (!feof($fp)){
        $line[] = fgets($fp);
    }
    fclose($fp);
    return $line;
}

$filess = outfile();
?>
    <!--设置界面-->
    <!--上传区-->
<div id="uploadDiv">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload" value=""/>
        <input type="" name="content" value=""/>
        <input type="submit" name="submit" value="上传"/>
    </form>
</div>

<!-- 文件列表表显示区  -->
<div id="listFile">
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <td>文件路径</td>
            <td>文件描述</td>
            <td>上传时间</td>
        </tr>
        <?php foreach ($filess as $key=>$val){
            $str = explode(" ", $val);
            if (!empty($str[0])){
        ?>
        <tr><td><?=$str[0] ?></td><td><?=$str[1] ?></td><td><?=$str[2] ?></td></tr>
        <?php }}?>
    </table>
</div>
