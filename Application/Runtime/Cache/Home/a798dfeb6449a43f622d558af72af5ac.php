<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传文件</title>
</head>
<body>
        <form action="<?php echo U('updata');?>" enctype="multipart/form-data" method="post" >
            <input type="file" name="photo"/>
            <input type="file" name="photo1"/>
            <input type="file" name="photo2"/>
            <input type="submit" value="提交"/>
        </form>
</body>
</html>