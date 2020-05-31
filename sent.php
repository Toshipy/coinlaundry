<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせ</title>
  <link rel="stylesheet" type="text/css" href="master.css">
</head>
<body>

  <div class="main">
    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">
      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ 年齢</div>
      <?php echo $_POST['age']; ?>

      <div class="form-item">■ お問い合わせの種類</div>
      <!-- この下でcategoryを受け取りechoしましょう -->
      <?php echo $_POST['category'];
      ?>

      <div class="form-item">■ 内容</div>
      <?php echo $_POST['body']; ?>
    </div>
  </div>

  <div class="footer">
  
    <div class="like-box">
      <iframe src="https://twitter.com/Parkalleyoop" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>
