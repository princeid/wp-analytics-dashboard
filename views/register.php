<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body class="container--signin">
  <form class="my-form" action="/auth/register" method="post">
    <div class="form-wrapper">
      <div class="signin-logo">
        <span>
          <svg width="71" height="71" viewBox="0 0 71 71" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="71" height="71" rx="35.5" fill="#4C60EB" />
            <text x="17" y="40" fill="white">Logo</text>
          </svg>
        </span>
      </div>
      <h2 class="signin-form-title">Register</h2>
      <h6 class="signin-subtitle info-text">Please enter your credentials to proceed.</h6>
      <?php include_once 'partials/flash-messages.php' ?>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" class="form-control" placeholder="first name & last name">
        
      </div>
      <div class="form-group">
        <label>Email address</label>
        <input type="text" name="email" class="form-control" placeholder="samplemail@mail.com">
        <small class="info-text">Forgot password?</small>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="password">
      </div>
      <button class="btn btn-primary signin-btn">Sign up</button>
      <span class="signin-text">
        <span class="info-text">Already have an account? </span>&nbsp;
        <a href="/auth/login">Sign in</a>
      </span>
    </div>
  </form>
</body>

</html>







<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/scss/main.min.css" />
</head>
<body class="container--signin">
    <form class="my-form" action="/auth/register" method="post">
    <?php include_once 'partials/flash-messages.php' ?>
      <div class="signin--logo">
       <span> <?php echo $prince; ?></span>
      </div>
      <h2 class="signin--form-tile">Register</h2>
      <h6 class="signin-subtitle">Please enter your credentials to proceed.</h6>

      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" class="form-control" placeholder="Full Name">
      </div>

      <div class="form-group">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="samplemail@mail.com">
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" >
      </div>

      <input type="submit" value="Register" class="btn btn-primary sign-btn">
      <span class="sign-up-text">
        <span>Already have an account? </span>
        <a href="/auth/login">Login</a>
      </span>
    </form>
</body>
</html> -->