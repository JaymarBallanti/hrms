<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="login"><h3>Log-in</h3>
    <form action="" method="post" name="verify">
      <div class="fields">
      <input type="text" name="username" placeholder="Username"
                    style="width: 250px"><br/><br/>
      <input type="password" name="password" placeholder="Password"
                    style="width: 250px">
      </div>
      <span style="text-align:center; color: red"><h4><?php echo $error; ?></h4></span>
      <br/>
      <br/>
      <div class="submit">
        <input type="submit" value="Log-in" name="submit" style="width: 100px">
      </div>
    </form>
  </div>
</body>
</html>
