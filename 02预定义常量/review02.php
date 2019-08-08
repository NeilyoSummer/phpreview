<?php

namespace Review\Review;

// 常用的部分预定义常量
echo "路径分隔符：" . PATH_SEPARATOR . PHP_EOL; // （windows为分号；Unix为冒号：）

echo "目录分隔符：" . DIRECTORY_SEPARATOR . PHP_EOL;

echo "换行符PHP_EOL：\\n" . PHP_EOL;

echo "PHP版本常量：" . PHP_VERSION . PHP_EOL;

echo "PHP服务器操作系统：" . PHP_OS . PHP_EOL;

echo "PHP执行环境：" . PHP_SAPI . PHP_EOL;

echo "PHP执行环境：" . php_sapi_name() . PHP_EOL;

echo "PHP运行环境最大值：" . PHP_INT_MAX . PHP_EOL;

echo "PHP运行环境最小值：" . PHP_INT_MIN . PHP_EOL;

echo "PHP运行环境字节长：" . PHP_INT_SIZE . PHP_EOL;

echo "PHP运行文件所在绝对路径：" . __FILE__ . PHP_EOL;

echo "PHP运行文件中的当前行号：" . __LINE__ . PHP_EOL;

echo "PHP运行文件的所在目录：" . __DIR__ . PHP_EOL;

function helloWorld()
{
    echo "执行函数函数的名称：" . __FUNCTION__ . PHP_EOL;
    return "Hello World" . PHP_EOL;
}

helloWorld();

class Student
{
    public function __construct()
    {
        echo "执行对象的类名：" . __CLASS__ . PHP_EOL;
    }

    public function getName()
    {
        echo "执行对象的方法名：" . __METHOD__ . PHP_EOL;
    }
}

$student = new Student();
$student->getName();

// 获取当前的命名空间名称
echo "PHP当前的命名空间名称：" . __NAMESPACE__ . PHP_EOL;