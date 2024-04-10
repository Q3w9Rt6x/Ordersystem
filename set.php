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
        <title>set menu</title>
        <link rel="stylesheet" href="style4.css">
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
                         
                          <img src="image/h1.png" alt="フード１" width="250px" height="200px" align="left" style="margin-right: 10px;">
                        
                          <p><h4><div align="right">￥500</div><div align="left">セット1</div></h4></p>
                          <p><font size="2"><div align="left">メニュー項目において各ページで、メニューの一つは説明を35文字以上で作成してください</div></p>
                          <div align="right">
                            <form action="set.php" method="POST">
                                <input type="hidden" name="name" value="セット１">
                                <input type="hidden" name="time" value="15">
                                <input type="hidden" name="price" value="500">
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
                          
                          <img src="image/h2.png" alt="フード2" width="250px" height="200px" align="right">
                         
                          <p><h4><div align="left">￥500</div><div align="right">セット2</div></h4></p>
                          <p style="text-align: left"><font size="2">上の条件を満たしていてもレイアウトが治らない場合は説明欄の文字数を調節することで直してください。</font><br></p>
                          <div align="left">
                            <form action="set.php" method="POST">
                                <input type="hidden" name="name" value="セット２">
                                <input type="hidden" name="time" value="15">
                                <input type="hidden" name="price" value="500">
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
                          
                          <img src="image/h3.png" alt="フード3" width="230px" height="200px" align="left">
                          
                          <p><h4><div align="right">￥500</div><div align="left">セット3</div></h4></p>
                          <p><font size="2"><div align="left">説明</div></font><br></p>
                          <div align="right">
                            <form action="set.php" method="POST">
                                <input type="hidden" name="name" value="セット３">
                                <input type="hidden" name="price" value="500">
                                <input type="hidden" name="time" value="15">
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