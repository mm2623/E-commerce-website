<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<h1>Home</h1>
<p style = "margin-left: 5px;">
<?php 
if (is_logged_in(true)) {
    echo "Welcome, " . get_username();
} else {
    echo "You're not logged in";
}
if ($_SESSION["data"]=="FALSE"){
    include ("data.php");
    $_SESSION["data"] = "TRUE";
}
//shows session info
//echo "<pre>" . var_export($_SESSION, true) . "</pre>";
?>
</p>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
