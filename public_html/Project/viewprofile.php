<?php
require_once(__DIR__ . "/../../partials/nav.php");
$user_id = se($_GET, "id", get_user_id(), false);
error_log("user id $user_id");
$isMe = $user_id === get_user_id();
//!! makes the value into a true or false value regardless of the data https://stackoverflow.com/a/2127324
$edit = !!se($_GET, "edit", false, false); //if key is present allow edit, otherwise no edit
if ($user_id < 1) {
    flash("Invalid user", "danger");
    redirect1("home.php");
    //die(header("Location: home.php"));
}
$email = get_user_email();
$username = get_username();
$created = "";
$public = false;
//$user_id = get_user_id(); //this is retrieved above now
//TODO pull any other public info you want
$db = getDB();
$stmt = $db->prepare("SELECT username, email,created, Status from Users where id = :id");
try {
    $stmt->execute([":id" => $user_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    error_log("user: " . var_export($r, true));
    $username = se($r, "username", "", false);
    $email = se($r, "email", "", false);
    $created = se($r, "created", "", false);
    $public = se($r, "Status", 0, false) > 0;
    if (!$public && !$isMe) {
        flash("User's profile is private", "warning");
        redirect1("home.php");
        //die(header("Location: home.php"));
    }
} catch (Exception $e) {
    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}
?>
<?php
?>
<div class="container-fluid">
    <h1>Profile</h1>
    <?php if (!$edit) : ?>
        <div>Username: <?php se($username); ?></div>
        <?php if ($public) : ?>
            <?php if ($user_id == get_user_id()) : ?>
                <div>Email Address: <?php se($email); ?></div>
            <?php endif; ?>
        <div>Joined: <?php se($created); ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php
require_once(__DIR__ . "/../../partials/footer.php");
?>