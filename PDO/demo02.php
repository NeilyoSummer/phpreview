<?php
/*
 * 主要写增删改查等相关的实例，这里我们按照增、查、改、删来讲解，更加符合我们实际的逻辑
 * 第一步：
 *      在数据库创建dbstest数据库使用utf8编码
 */

// 1. 连接MySQL服务器创建一个MySQL服务器连接对象
$conn = new mysqli('localhost', 'root', '', 'dbtest', 3306);

// 2. 检测是否连接成功
if ($conn->connect_errno) {
    die('数据库连接失败！' . $conn->connect_error);
}

// 3. 准备好对应的插入数据
$product_name = 'EOS 6D Mark 2 Canon';
$price = "$800";
$category = "Cameras";

$sql = "INSERT INTO tbl_products (product_name, price, category) VALUES (?, ?, ?)";

// 4. 执行语句预处理
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Error：' . $conn->error);
}

/**
 * 5. 绑定参数
 * bind_param 接受多个参数
 *  第一个参数type： 表示绑定的数据类型
 *      i 整数型
 *      s 字符串
 *      d 双精度浮点类型
 *      b blob二进制类型
 *  注意：
 *      排列顺序与后面的若干个参数类型的顺序相同
 *  后面的若干个参数：
 *      对应前面type的类型
 */
$stmt->bind_param('sss', $product_name, $price, $category);

// 6. 执行语句
$bool = $stmt->execute();

// 7. 检测是否成功，查看入库的id
if ($bool) {
    echo '入库id为：' . $stmt->insert_id . PHP_EOL;
}

// 8. 关闭预处理
$stmt->close();

// 9. 查询 result 返回的是一个资源结果
$result = $conn->query('select * from tbl_products');

// 10. 对结果进行匹配渲染
$rows = $result->fetch_all(MYSQLI_ASSOC);

// 11. 打印结果
var_dump($rows);

// 12. 拼写执行改操作的SQL语句
$sql = 'UPDATE tbl_products SET product_name=?, price=?, category=? WHERE id = ?';
$product_name = 'Sony A7M3';
$price = '$900';
$category = 'Cameras Pro';
$id = $rows[0]['id'];

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Error：' . $conn->error);
}

// 13. 绑定数据
$stmt->bind_param('sssi', $product_name, $price, $category, $id);

// 14. 执行操作
$bool = $stmt->execute();

if ($bool) {
    // 影响行数只有在发生了改变才会有值，否则为 0
    echo "执行修改成功!影响行数" . $stmt->affected_rows . PHP_EOL;
}

// 15. 关闭预处理
$stmt->close();

/**
 * 执行语句
 */

// 关闭数据库连接
$conn->close();
