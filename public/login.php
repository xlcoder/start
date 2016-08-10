<?php require_once "header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h2 class="title">PHP Bookmark</h2>
        </div>
        <form action="" method="post"></form>

        <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" action="admin.php" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" placeholder="username" name="username">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </div>
        </form>
        </div>

        <div class="col-md-4 col-md-offset-4">
            <?php do_html_url("register_form.php","Register")?>

            <?php do_html_url("forget_form.php","Forget Password")?>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>
