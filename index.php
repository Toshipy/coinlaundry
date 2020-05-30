<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="master" type="text/css" href="master.css">
</head>
<body>


  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">


        <div class="form-item">お問い合わせの種類</div>
        <?php 
          $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name = "category">
          <option value ="未選択">選択してください</option>
          <?php
                foreach ($types as $type) {
      echo "<option value='{$type}'>{$type}</option>";}
          ?>
        </select>
        
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>

</body>
</html>
