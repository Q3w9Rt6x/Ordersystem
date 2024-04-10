<!-- <?php
    session_start();

    if($_SESSION['admin_login'] == false){
        header("Location:./index.html");
        exit;
    }

    $id = isset($_GET['id'])? htmlspecialchars($_GET['id'], ENT_QUOTES, 'utf-8'):'';
    if($id==''){
      header('location:./misekakunin.php');
    }

    //DB接続
    try{
      $dbh = new PDO("mysql:host=localhost;dbname=pbl_db","root","");
    }catch(PDOException $e){
      var_dump($e->getMessage());
      exit;
    }

    //order_products
    $stmt2 = $dbh->prepare("SELECT * FROM order_products WHERE order_id=:id");
    $stmt2->bindParam(':id',$id);
    $stmt2->execute();
    $order_products = $stmt2->fetchAll(PDO::FETCH_ASSOC);

?> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>店舗確認画面</title>
  </head>
  
  <body>
    <table border="1" bgcolor="#000000" width="600" height="500" align="center">
      <col span="1" bgcolor="#e4c8c8">
      <col span="1" bgcolor="#ffffff">
      <col span="1" bgcolor="#e4c8c8">
      <col span="1" bgcolor="#ffffff">
      
      <tbody>
        <tr>
          <th>注文番号</th><td></td>
        </tr>
        <tr>
          <th>注文時間</th><td></td>
        </tr>
        <tr>
          <th>提供予定時間</th><td></td>
        </tr>
        <tr>
          <th>注文内容</th><td></td>
        </tr>
        <tr>
          <th>ステータス</th><td></td>
        </tr>
        
      </tbody>

      <tr>
        <th>注文番号</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
      </tr>
      <tr align="center">
        <th>注文時間</th>
        <td>10:00</td>
        <td>10:10</td>
        <td>10:20</td>
      </tr>
      <tr align="center">
        <th>提供予定時間</th>
        <td>10:30</td>
        <td>10:40</td>
        <td>10:50</td>
      </tr>
      <tr>
        <th>注文内容</th>
        <td>1.卵サンド<br>2.フラペチーノ</td>
        <td>1.キッシュ<br>2.チョコサンド<br>3.カプチーノ</td>
        <td>1.ストロベリーパイ<br>2.アメリカン</td>
      </tr>
      <tr>
        <th>完了</th>
        <th><input type="checkbox" name="完了"></th>
        <th><input type="checkbox" name="完了"></th>
        <th><input type="checkbox" name="完了"></th>
      </tr>
    </table>
  </body>
</html>