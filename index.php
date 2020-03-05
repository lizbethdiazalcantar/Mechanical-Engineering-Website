<?php
include('login.php');
?>

<style type="text/css">
body{
  font-size: 14px;
  height: 100%;
  width:100%;
}
.form input[type='password'],
.form text,
.form select,
.form textarea,
.form input[type='text']
{
  width: 100%;
  border:1px solid black;
  padding:10px;
  margin-bottom: 5px;
  outline: none;
  display: block;
  resize: vertical;
}
.form input[type='submit']
{
  margin-top: 5px;
  margin-bottom: 5px;
}
.widget
{
  margin-bottom: 10px;
  width: 460px;
  height: 280px;
  margin-left: 400px;
  background-color: white;
}
.widget .widget-heading{
  background: blue;
  border: 1px solid black;
  padding: 10px;
  font-weight: bold;
  text-align: justify;
}

.widget .widget-contents
{
  padding: 10px;
  border-bottom: 1px solid black;
}
.button{
  width: 100px;
  height: 32px;
  color: blue;
  border:medium none;
  font-size: 14px;
  margin: 24px auto;
  text-transform: uppercase;
}
</style>


<title>Login</title>
</head>
<body>
  <div class="widget">
    <div class="widget-heading">Login</div>
    <div class="widget-contents">
      <form id="login" action="login.php" class="form" method="post" enctype='multipart/form-data'/><fieldset>
        <div>
          <label>Username</label>
          <input type="text" name="usrname"/>
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password"/>
        </div>
        <div>
          <input type="submit" value="login" class="button"/></div>
          <span><?php echo $userpass_err; ?></span>
        </fieldset>
      </form>
    </form>
  </div>
</div>
