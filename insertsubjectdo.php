<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$subjectId = $_POST ['subjectId'];
$subject = $_POST ['subject'];



// sql语句中字符串数据类型都要加引号，数字字段随便
//$sql = "insert into student(studentId,name,className,birthday,sex,nation) values('$studentId','$name','$className','$birthday','$sex','$nation')";
$sql = "insert subject set subjectId = '$subjectId',subject = '$subject' ";
if (mysql_query ( $sql )) {
	echo "添加成功！！！<br/>";
	echo "<a href='subject.php'>回到主页</a>";
} else {
	echo "添加失败！！！<br/>";
	echo "<a href='subject.php'>系统错误</a>";
}