<?php

$name = isset($_POST['name'])? htmlspecialchars($_POST['name'], ENT_QUOTES, 'utf-8') : '';
$price = isset($_POST['price'])? htmlspecialchars($_POST['price'], ENT_QUOTES, 'utf-8') : '';
$count = isset($_POST['count'])? htmlspecialchars($_POST['count'], ENT_QUOTES, 'utf-8') : '';
    session_start();
    if(isset($_SESSION['products'])){  
        $products = $_SESSION['products']; 
        foreach($products as $key => $product){
            if($key == $name){ 
                $count = (int)$count + (int)$product['count'];
            }
        }
    }
    
    if($name!=''&&$count!=''&&$price!=''){
        $_SESSION['products'][$name]=[
            'count' => $count,
            'price' => $price
        ];
    }
    $products = isset($_SESSION['products'])? $_SESSION['products']:[];

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>drink menu</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <header>
            <a href="#" onclick="history.back(); return false;"><img src="image/back.jpg" alt="ボタン" width="40" height="40" hspace="10"></a>
            <div id="search-wrap">
                <form role="search" method="get" action="">
                    <input type="text" value="" name="" id="search-text">
                </form>
                <!--/search-wrap-->
            </div>
        </header>
        <div class="content">
            <main>
                <div class="container">
                    <ul>
                        <li><a href="drink.php" ><span class="link" onclick="location.href='#'">ドリンク</span></a></li>
                        <li><a href="food.php"><span class="link" onclick="location.href='#'">フード</span></a></li>
                        <li><a href="set.php"><span class="link" onclick="location.href='#'">セット</span></a></li>
                    </ul>
                </div>
                <div class="food">
                    <table id="table1">
                        <tr class="a">
                            <td>
                                <div class="content1">
                                    <img src="image/cohi.png" alt="ドリンク１" width="200px" height="200px" align="left" style="margin-right: 10px;">
                                    <p><h4><div align="right">￥500</div><div align="left"></div>ドリップコーヒー</h4></p>
                                    <p><font size="2"><div align="left">厳選された香り高いドリップコーヒー</div></font><br></p>
                                    <div align="right">
                                        <form action="drink.php" method="POST">
                                            <input type="hidden" name="name" value="ドリップコーヒー">
                                            <input type="hidden" name="price" value="500">
                                            <input type="hidden" name="time" value="5">
                                            <input type="text" value="1" name="count">
                                            <button type="submit">追加する</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="a">
                            <td>
                                <div class="content2">
                                    <img src="image/cohi2.png" alt="ドリンク2" width="200px" height="200px" align="right">
                                    <p><h4><div align="left">￥500</div><div align="left">カフェミスト</div></h4></p>
                                    <p style="text-align: left"><font size="2">香り高いドリップコーヒーに<br>ふわふわのスチームミルクを加えて</font><br></p>
                                    <div align="left">
                                        <form action="drink.php" method="POST">
                                            <input type="hidden" name="name" value="カフェミスト">
                                            <input type="hidden" name="price" value="500">
                                            <input type="hidden" name="time" value="5">
                                            <input type="text" value="1" name="count">
                                            <button type="submit">追加する</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="a">
                            <td>
                                <div class="content3">
                                    <img src="image/cohi3.png" alt="ドリンク3" width="200px" height="200px" align="left" style="margin-right: 10px;">
                                    <p><h4><div align="right">￥500</div><div align="left">コールドブリュー コーヒー</div></h4></p>
                                    <p><font size="2"><div align="left"> 熱を加えずに14時間かけてゆっくりと水で抽出したコールドブリュー コーヒー。</div></font><br></p>
                                    <div align="right">
                                        <form action="drink.php" method="POST">
                                            <input type="hidden" name="name" value="コールドブリュー コーヒー">
                                            <input type="hidden" name="price" value="500">
                                            <input type="hidden" name="time" value="5">
                                            <input type="text" value="1" name="count">
                                            <button type="submit">追加する</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </main>
        </div>
        
        <footer>
            <div class="footer">
                <table>
                    <tr>
                        <td> <a href="home.php" class="button">
                            <img src="image/home.jpg" alt="ボタン" width="80" height="80" hspace="20"/>
                        </td>
                        <td><a href="drink.php" class="button">
                            <img src="image/menu.jpg" alt="ボタン" width="80" height="80" hspace="20"/>
                        </td>
                        <td><a href="order.php" class="button">
                            <img src="image/order.jpg" alt="ボタン" width="80" height="80" hspace="20"/>
                        </td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>