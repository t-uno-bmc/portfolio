<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="bootstrap4/js/bootstrap.min.js"></script>
  </head>
  <body>

    <div class="container" style="padding: 30px;">
      <h2 class="text-center">UserPage</h2>
      <div class="input-group mb-3">
        <?php echo "IDは".$_POST["txtid"]."、パスワードは".$_POST["txtpass"]"です。" ?>
      </div>
    </div>
    <script type="text/javascript" src="bootstrap4/User/user.js"></script>
  </body>
</html>
