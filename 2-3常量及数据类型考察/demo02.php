<?php
// 假设url => "http://www.superman.com/index.php/user/reg?status=dead";
echo $_SERVER['SERVER_ADDR'] . "<br>"; // 127.0.0.1
echo $_SERVER['SERVER_NAME'] . "<br>"; // 127.0.0.1
echo $_SERVER['REQUEST_TIME'] . "<br>"; // 1565683185
echo $_SERVER['QUERY_STRING'] . "<br>"; // status=dead
echo $_SERVER['HTTP_REFERER'] . "<br>";  // 有可能为空，因为直接访问url，不会存在
echo $_SERVER['HTTP_USER_AGENT'] . "<br>"; // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.87 Safari/537.36
echo $_SERVER['REMOTE_ADDR'] . "<br>"; // 127.0.0.1
echo $_SERVER['REQUEST_URI'] . "<br>"; // /demo02.php/user/reg?status=dead
echo $_SERVER['PATH_INFO'] . "<br>"; // /user/reg
