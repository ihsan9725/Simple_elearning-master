<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/form.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/input.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/button.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/message.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/icon.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/form.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/transition.js"></script>

  <style type="text/css">
    body { 
       background : url(web-image/web-login-bg.jpg) no-repeat center center fixed;
      
      
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Register your account
      </div>
    </h2>
        <?php if ($this->session->flashdata('success')) { ?>
	<h3>
            <?php echo $this->session->flashdata('success'); ?>
	</h3>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
	<h3>
            <?php echo $this->session->flashdata('error'); ?>
	</h3>
        <?php } ?>
    <form class="ui large form" method="post">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="name" placeholder="Fullname" required="required">
          </div>
        </div>
          <div class="field">
          <div class="ui left icon input">
            <i class="envelope icon"></i>
            <input type="email" name="email" placeholder="E-mail address" required="required">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password" minlength="8" required required="required">
          </div>
        </div>
        <button class="ui fluid large teal submit button" name="register" value="daftar">Register</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      Sudah punya akun? <?= anchor('http://localhost/Simple_elearning-master/login','Login Disini.');?>
    </div>
  </div>
</div>

</body>

</html>
