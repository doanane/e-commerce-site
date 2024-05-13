<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php
/* at the top of 'check.php' */
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
  /* 
         Up to you which header to send, some prefer 404 even if 
         the files does exist for security
      */
  header('HTTP/1.0 403 Forbidden', TRUE, 403);

  /* choose the appropriate page to redirect users */
  die(header('location: ' . APPURL . ''));
}


//created a file  called index.php that will help us prevent users from access the books when not paid using
//  the same code generated from the stackoverflow site and add the php code for your header and footer.