<?php
if (isset($_SESSION)) {
  include 'dashboard.html';
}else {
  include 'login.html';
}
?>
