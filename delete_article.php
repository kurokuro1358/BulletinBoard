<?php include("header.php"); ?>

<?php
//MySQLに接続
connectMySQL();

//テーブルの作成
$query = "create table if not exists article(number int auto_increment, date varchar(20) not null, author varchar(50) not null, password varchar(255) not null, title varchar(100) not null, content text not null, primary key(number))";
mysqlQuery($query);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['number']) && isset($_POST['password'])){
  $number = $_POST['number'];
  $password = $_POST['password'];
  $query = "select password from article where number=".$number;
  $datas = getQuery($query);
  foreach($datas as $data){
    $sql_password = $data[0];
  }
  if($sql_password == $password){

    $query = "delete from article where number=".$number;
    mysqlQuery($query);
    ?>
    <article id="work" class="wrapper style2">
      <div class="container">
          <div class="row aln-center">
            <div class="col-4 col-6-medium col-12-small">
              <section class="box style1">
                <p>投稿を消去しました</p>
                <a href="index.php">ホームに戻る</a>
              </section>
            </div>
          </div>
        </div>
      </article>
      <?php
  } else{
    ?>
    <article id="work" class="wrapper style2">
      <div class="container">
          <div class="row aln-center">
            <div class="col-4 col-6-medium col-12-small">
              <section class="box style1">
                <p>投稿を消去できませんでした</p>
                <a href="index.php">ホームに戻る</a>
              </section>
            </div>
          </div>
        </div>
      </article>
      <?php
  }
}
  ?>

  <?php include("footer.php"); ?>
