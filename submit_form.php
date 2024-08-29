<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    // 处理其他表单数据
    // 保存数据到数据库或进行其他处理

    // 可以重定向到另一个页面或显示提交成功信息
    echo "提交成功，感谢您的申请!";
}
?>
