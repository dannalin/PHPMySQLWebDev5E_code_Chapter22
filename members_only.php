<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Members Only</title>
</head>
<body>
    <h1>Members Only</h1>
    <?php
        // check session variable
        // 檢查session 變數
        if (isset($_SESSION['valid_user'])) {
            echo '<p>You are logged in as '.$_SESSION['valid_user'].'</p>';
            echo '<p><em>Member-Only content goes here.</em></p>';
        } else {
            echo '<p>You are not logged in.</p>';
            echo '<p>Only logged in members may see this page.</p>';
        }
    ?>
    <p><a hrdf="authmain.php">Back to Home Page</a></p>
</body>
</html>