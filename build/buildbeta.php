<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/b/_site/css/main.css">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/b/_site/js/script.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
          <h1>WPI blog</h1>
          <p>Build beta</p>
        </div>
      <div class="row">
        <div class="span10">
<?php
  $to      = "brian@wordspicturesideas.com";
  $subject = 'WPI blog build ';
  $message = '';
  $headers = 'From: buildrobot@baybridgetoday.com' . "\r\n" . 'Reply-To: dev@wordspicturesideas.com' . "\r\n";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo "</div></div><div class='row'><div class='span10'>";
  echo "<h4>Detailed output below:</h4>";
  echo "<pre>";
  // $output = passthru('export HOME=/var/www/vhosts/wpibeta.org/subdomains/b; /usr/bin/jekyll build -s /var/www/vhosts/wpibeta.org/subdomains/b/httpdocs/b --trace', $return);
  $output = passthru('export HOME=/var/www/vhosts/wpibeta.org/subdomains/b; ./b/httpdocs/b/build/build deploy', $return);
  echo $output . "</pre>";

  $message = $return;
  mail($to, $subject, $message, $headers); 


} else {
?>
  <form method="post">
    <fieldset>
      <div class="checkbox">
        <label>
          <input type="hidden" name="activate" value="activate"/> <!-- Activate -->
            The process may take a minute. Please only press it once.
        </label>
      </div>
      <button type='submit' class='btn btn-warning btn-large btn-block'> Build WPI site</button>
    </fieldset>
  </form>
  </div>
  </div>
 <?php } ?>
    </div>
  </body>
</html>