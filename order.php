<?php

    $delete_name = isset($_POST['delete_name'])? htmlspecialchars($_POST['delete_name'], ENT_QUOTES, 'utf-8') : '';

    session_start();
    
    if($delete_name != '') unset($_SESSION['products'][$delete_name]);

    $total = 0;
    $products = isset($_SESSION['products'])? $_SESSION['products']:[];
    foreach($products as $name => $product){
        $subtotal = (int)$product['price']*(int)$product['count'];
        $total += $subtotal;
    }

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>order</title>
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
            <h4 style="text-align:center">内容をご確認の上「注文確定」ボタンを押してください</h4>
            <div class="orderlist">
                <table class="order-table">
                    <thead>
                        <tr>
                            <th>商品名</th>
                            <th>価格</th>
                            <th>個数</th>
                            <th>小計</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $name => $product): ?>
                        <tr>
                            <td label="商品名："><?php echo $name; ?></td>
                            <td label="価格：" class="text-right">¥<?php echo $product['price']; ?></td>
                            <td label="個数：" class="text-right"><?php echo $product['count']; ?></td>
                            <td label="小計：" class="text-right">¥<?php echo $product['price']*$product['count']; ?></td>
                            <td>
                                <form action="order.php" method="post">
                                    <input type="hidden" name="delete_name" value="<?php echo $name; ?>">
                                    <button type="submit">削除</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <tr class="total">
                            <th colspan="3">合計</th>
                            <td colspan="2">¥<?php echo $total; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tuika">
                <div class="flex">
                    <button type="button" onclick="location.href='drink.php'"><img src="image/tuika.jpg" width="50"/>商品を追加する</button>
                </div>
            </div>
            <style>
            /* ダイアログのスタイル（デフォルトは非表示） */
            .modal {
              display: none;
              position: fixed;
              z-index: 1;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              overflow: auto;
              background-color: rgba(0, 0, 0, 0.4);
            }
            
            /* ダイアログのコンテンツスタイル */
            .modal-content {
              background-color: #fefefe;
              margin: 15% auto;
              padding: 20px;
              border: 1px solid #888;
              width: 50%;
            }
            </style>
            <button onclick="location.href='orderfinish.php',openConfirmation()" class="kakutei" <?php if(empty($products)) echo 'disabled="disabled"'; ?>>注文確認</button>
            <div id="confirmationDialog" class="modal">
                <div class="modal-content">
                    <p>本当に注文しますか？</p>
                    <button onclick="placeOrder()">OK</button>
                    <button onclick="closeConfirmation()">キャンセル</button>
                </div>
            </div>
            <script>
            // 確認用ダイアログを表示する関数
            function openConfirmation() {
                const confirmationDialog = document.getElementById("confirmationDialog");
                confirmationDialog.style.display = "block";
            }
        
            // 注文を確定する関数（ダイアログの「OK」ボタンがクリックされたときに呼ばれる）
            function placeOrder() {
                // ここに実際の注文処理を追加します
                alert("注文が確定しました！");
                closeConfirmation();
        
                // 注文確定後、ページを遷移させる
                window.location.href = "orderfinish.html"; // 任意の遷移先URLを指定
            }
        
            // 確認用ダイアログを閉じる関数（ダイアログの「キャンセル」ボタンがクリックされたときに呼ばれる）
            function closeConfirmation() {
                const confirmationDialog = document.getElementById("confirmationDialog");
                confirmationDialog.style.display = "none";
            }
            </script>
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