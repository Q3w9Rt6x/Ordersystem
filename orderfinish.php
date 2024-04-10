<?php
    session_start();
        $products = isset($_SESSION['products'])? $_SESSION['products']:[];
        $total = 0;
        foreach($products as $key => $product){
            $subtotal = (int)$product['price']*(int)$product['count'];
            $total += $subtotal;
        }
    //DB接続
    try{
        $dbh = new PDO("mysql:host=localhost;dbname=pbl_db","root","");
    }catch(PDOException $e){
        var_dump($e->getMessage());
        exit;
    }

    $stmt1 = $dbh->prepare("INSERT INTO orders(total,created_at) VALUES(:total,now())");
    $stmt1->bindParam(':total',$total);
    $stmt1->execute();

    //ordersのid取得
    $order_id = $dbh->lastInsertId();

    //order_productsテーブル
    foreach($products as $key => $product){
        $stmt2 = $dbh->prepare("INSERT INTO order_products(order_id,product_name,num,price) VALUES(:order_id,:product_name,:num,:price)");
        $stmt2->bindParam(':order_id',$order_id);
        $stmt2->bindParam(':product_name',$key);
        $stmt2->bindParam(':num',$product['count']);
        $stmt2->bindParam(':price',$product['price']);
        $stmt2->execute();
    }

    unset($_SESSION['products']);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>購入確認</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <a href="#" onclick="history.back(); return false;"><img src="image/back.jpg" alt="ボタン" width="40" height="40" hspace="10"></a>
            <div id="search-wrap">
                <form role="search" method="get" action="">
                    <input type="text" value="" name="" id="search-text">
                </form>
            </div>
        </header>
        <main>
            <div style="text-align: center;">
                <div class="finish" style="text-align: center;">
                    <h3><p>ご注文ありがとうございます</p>
                    <p>お客様の整理券番号は</p>
                    <p>1</p>
                    <p>です</p>
                    <p>提供予定時刻は</p>
                    <p>10：30</p>
                    <p>です</p></h3>
                    <h5><p>尚、混雑具合によっては</p>
                    <p>時間が前後することがございます</p>
                    <p>ご了承ください</p></h5>
                </div>
            </div>
        </main>
    </body>
</html>