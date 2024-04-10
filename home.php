<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>home</title>
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
            <div class="home">
                <div style="text-align: center">
                    <img src="image/homeosusume.jpg" alt="おすすめメニュー" height="250px">
                </div>
            </div>
            <div class="homemenucd" style="text-aligin: center">
                <table>
                    <tr>
                        <td><a href="drink.php" class="button">
                            <img src="image/homedrink.jpg" alt="ボタン" height="60" hspace="10" vspace="10" />
                        </td>
                        <td><a href="food.php" class="button">
                            <img src="image/homefood.jpg" alt="ボタン" height="60" hspace="10" vspace="10"/>
                        </td>
                        <td><a href="set.php" class="button">
                            <img src="image/homeset.jpg" alt="ボタン" height="60" hspace="10" vspace="10"/>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="sinnsaku">
                <div style="text-align: center">
                    <img src="image/sinnsakumenu.png" alt="新作メニュー" height="200">
                </div>
            </div>
            <div class="ninnki">
                <div style="text-align: center">
                    <img src="image/ninkimenu.png" alt="人気メニュー" height="195">
                </div>
            </div>
        </main>
        
        <footer>
            <div class="footer">
                <table>
                    <tr>
                        <td><a href="home.php" class="button">
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