<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="logo"><img src="4eachblog_logo.jpg"></div>

  <header>
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </header>

  <main>
    <h1>プログラミングに役立つ掲示板</h1>
        <form method="POST" action="insert.php">
          <h2>入力フォーム</h2>
          <div>
            <label>ハンドルネーム</label><br>
            <input type="text" class="text" size="35" name="handlename">
          </div>

          <div>
            <label>タイトル</label><br>
            <input type="text" class="text" size="35" name="title">
          </div>

          <div>
            <label>コメント</label><br>
            <textarea name="comments" cols="65" rows="5"></textarea>
          </div>

            <input type="submit" class="submit" value="投稿する">
        </form>
      



    <div class="side_meny">
      <h2>人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>いま人気のエディタTop5</li>
          <li>HTMLの基礎</li>
        </ul>

      <h2>オススメリンク</h2>
        <ul>
          <li>インターノウス株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Bracketsのダウンロード</li>
        </ul>

      <h2>カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
    </div>


    <?php
              mb_internal_encoding("utf8");
              $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
              $stmt = $pdo->query("select * from 4each_keijiban");

              while ($row = $stmt->fetch()) {

                echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                echo "</div>";
              }

        ?>
  </main>

  <footer>
    copyright © internous | 4each blog the which provides A to Z about programming.
  </footer>
</body>
</html>