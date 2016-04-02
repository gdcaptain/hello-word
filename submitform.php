<html>
<head>
<title>hello word</title>
<link rel="stylesheet" href="lyb.css" type="text/css"></link>
</head>
<body>
<div id="luiyanben">
<h2>留言本</h2>
<a href="#">查看留言</a>
<a href="#">删除留言</a>
<br>
<?php
echo "Hello world!<br>";
$name=$_POST['name'];
$email=$_POST['email'];
echo "your name is {$name}"."<br>";
echo "your email is {$email} <br>";
print ('感谢!');
?>
</body>
</html>
