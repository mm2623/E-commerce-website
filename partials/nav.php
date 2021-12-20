<?php
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = true; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
if (($localWorks && $domain == "localhost") || $domain != "localhost") {
    session_set_cookie_params([
        "lifetime" => 60 * 60,
        "path" => "/Project",
        //"domain" => $_SERVER["HTTP_HOST"] || "localhost",
        "domain" => $domain,
        "secure" => true,
        "httponly" => true,
        "samesite" => "lax"
    ]);
}
session_start();
require_once(__DIR__ . "/../lib/functions.php");

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/font/bootstrap-icons.min.css" integrity="sha512-WYaDo1TDjuW+MPatvDarHSfuhFAflHxD87U9RoB4/CSFh24/jzUHfirvuvwGmJq0U7S9ohBXy4Tfmk2UKkp2gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
<link rel="stylesheet" href="<?php echo get_url('styles.css'); ?>">
<script src="<?php echo get_url('helpers.js'); ?>"></script>
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
        <!--<a class="navbar-brand" href="<?php echo get_url('home.php'); ?>">Home</a>-->
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navContent">-->
            <ul class="navbar-nav me-auto">
                <?php if (is_logged_in()) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('home.php'); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('profile.php'); ?>">Profile</a></li>
                <?php endif; ?>
                <?php if (is_logged_in() && !has_role("Admin")) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('purchase_history.php'); ?>">My Orders</a></li>
                <?php endif; ?>
                <?php if (is_logged_in() && has_role("Admin")) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('purchase_history.php'); ?>">All Orders</a></li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo get_url('shop.php'); ?>">Shop</a></li>
                <?php if (!is_logged_in()) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('login.php'); ?>">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('register.php'); ?>">Register</a></li>
                <?php endif; ?>
                <?php if (has_role("Admin")) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="rolesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Roles
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="rolesDropdown">
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/create_role.php'); ?>">Create</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/list_roles.php'); ?>">List</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/assign_roles.php'); ?>">Assign</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <?php if (has_role("Admin")) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="rolesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Items
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="rolesDropdown">
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/add_item.php'); ?>">Create</a></li>
                            <li><a class="dropdown-item" href="<?php echo get_url('admin/list_items.php'); ?>">List</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                
                <?php if (is_logged_in()) : ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo get_url('logout.php'); ?>">Logout</a></li>
                <?php endif; ?>
                <?php if (is_logged_in()) : ?>
                    <!--<svg xmlns="http://www.w3.org/2000/svg" align="center" width="68px" height="40px" viewBox="0 -12 50 20" version="1.1">
	                    <g >
		                    <a xlink:href="cart.php">
		                        <text x="10" y="10">CART</text>
		                        <path class = "test" style=" stroke:none;fill-rule:nonzero;fill:black;fill-opacity:1;" d="M 9.804688 2.554688 C 9.585938 3.011719 8.632812 5.214844 8.503906 5.417969 C 8.488281 5.441406 8.472656 5.46875 8.460938 5.488281 C 8.332031 5.707031 8.199219 5.875 7.738281 5.875 L 3.328125 5.875 C 3.421875 6.15625 3.613281 6.5 4.011719 6.5 L 7.828125 6.5 C 7.941406 6.5 8.03125 6.59375 8.03125 6.703125 C 8.03125 6.816406 7.941406 6.910156 7.828125 6.910156 L 4.011719 6.910156 C 3.445312 6.910156 3.03125 6.464844 2.878906 5.785156 C 2.792969 5.410156 1.761719 1.953125 1.6875 1.683594 C 1.609375 1.511719 1.421875 1.386719 1.242188 1.386719 L 0.304688 1.386719 C 0.191406 1.386719 0.101562 1.296875 0.101562 1.183594 C 0.101562 1.070312 0.191406 0.980469 0.304688 0.980469 L 1.242188 0.980469 C 1.59375 0.980469 1.925781 1 2.066406 1.332031 C 2.070312 1.339844 2.074219 1.347656 2.078125 1.359375 C 2.117188 1.507812 2.972656 4.542969 3.21875 5.464844 L 7.734375 5.464844 C 8 5.464844 8.027344 5.417969 8.105469 5.285156 C 8.121094 5.257812 8.136719 5.230469 8.15625 5.199219 C 8.277344 5.011719 9.226562 2.816406 9.429688 2.390625 C 9.511719 2.171875 9.496094 2.050781 9.472656 2.019531 C 9.460938 1.996094 9.410156 1.984375 9.34375 1.984375 C 8.902344 1.988281 3.289062 1.984375 3.09375 1.984375 C 2.980469 1.984375 2.890625 1.890625 2.890625 1.777344 C 2.890625 1.664062 2.980469 1.574219 3.09375 1.574219 C 3.140625 1.574219 8.898438 1.582031 9.339844 1.574219 C 9.609375 1.574219 9.742188 1.6875 9.808594 1.785156 C 9.933594 1.964844 9.929688 2.222656 9.804688 2.554688 Z M 3.902344 7.109375 C 4.429688 7.109375 4.859375 7.539062 4.859375 8.066406 C 4.859375 8.59375 4.429688 9.019531 3.902344 9.019531 C 3.378906 9.019531 2.949219 8.59375 2.949219 8.066406 C 2.949219 7.539062 3.378906 7.109375 3.902344 7.109375 Z M 3.902344 8.628906 C 4.214844 8.628906 4.464844 8.375 4.464844 8.066406 C 4.464844 7.757812 4.214844 7.503906 3.902344 7.503906 C 3.59375 7.503906 3.34375 7.757812 3.34375 8.066406 C 3.34375 8.375 3.59375 8.628906 3.902344 8.628906 Z M 3.902344 8.628906 "/>
		                        <path style=" stroke:none;fill-rule:nonzero;fill:black;fill-opacity:1;" d="M 7.785156 7.109375 C 8.3125 7.109375 8.742188 7.539062 8.742188 8.066406 C 8.742188 8.59375 8.3125 9.019531 7.785156 9.019531 C 7.261719 9.019531 6.832031 8.59375 6.832031 8.066406 C 6.832031 7.539062 7.261719 7.109375 7.785156 7.109375 Z M 7.785156 8.628906 C 8.097656 8.628906 8.347656 8.375 8.347656 8.066406 C 8.347656 7.757812 8.097656 7.503906 7.785156 7.503906 C 7.476562 7.503906 7.226562 7.757812 7.226562 8.066406 C 7.226562 8.375 7.476562 8.628906 7.785156 8.628906 Z M 7.785156 8.628906 "/>
		                    </a>
	                    </g>
	                 </svg>-->
            </ul>
            <ul class="navbar-nav ms-auto">
                     <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                        <g>
                            <a xlink:href="cart.php">
                                <path d="M980.3,255.2C958.7,301,863.2,521.5,850.2,541.9c-1.5,2.4-2.9,4.8-4.3,7.1c-12.7,21.7-26,38.3-72.3,38.3H332.8c9.2,28.1,28.5,62.7,68.5,62.7h381.6c11.3,0,20.4,9.2,20.4,20.5c0,11.3-9.1,20.4-20.4,20.4H401.3c-56.6,0-98-44.3-113.4-112.3c-8.5-37.5-111.8-383.1-119.2-410.2c-7.9-17.2-26.3-29.6-44.3-29.6h-94c-11.3,0-20.4-9.2-20.4-20.5C10,107.1,19.2,98,30.4,98h94c35,0,68.1,1.9,82.4,35.1c0.4,0.9,0.7,1.8,0.9,2.7c4,14.9,89.7,318.5,114.1,410.7h451.8c26.5,0,29.1-4.6,37-18.1c1.6-2.7,3.2-5.5,5.1-8.4c12.1-19,106.9-238.2,127.1-280.8c8.4-22,6.9-34,4.6-37.5c-1.5-2.2-6.4-3.5-13.1-3.5c-44.3,0.6-605.4,0-624.9,0c-11.3,0-20.4-9.2-20.4-20.5c0-11.3,9.2-20.4,20.4-20.4h0c4.8,0,580.3,0.7,624.5,0c26.9,0,40.4,11.6,47.1,21.3C993.3,196.4,993,222.2,980.3,255.2z M390.5,711.1c52.6,0,95.5,42.8,95.5,95.4c0,52.6-42.8,95.5-95.5,95.5c-52.6,0-95.4-42.8-95.4-95.5C295,753.9,337.8,711.1,390.5,711.1z M390.4,862.8c31,0,56.2-25.2,56.2-56.3c0-31-25.2-56.2-56.2-56.2c-31,0-56.2,25.2-56.2,56.2C334.3,837.6,359.5,862.8,390.4,862.8z M778.7,711.1c52.6,0,95.5,42.8,95.5,95.4c0,52.6-42.8,95.5-95.5,95.5c-52.6,0-95.4-42.8-95.4-95.5C683.3,753.9,726.1,711.1,778.7,711.1z M778.7,862.8c31,0,56.2-25.2,56.2-56.3c0-31-25.2-56.2-56.2-56.2c-31,0-56.2,25.2-56.2,56.2C722.6,837.6,747.8,862.8,778.7,862.8z"/>
                            </a>
                        </g>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <a xlink:href="cart.php">
                        <text x="-10" y="600" style= "font-size:300pt;">CART</text>
                        </a>
                    </svg>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>