<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Check if request is from Facebook or Instagram in-app browser
if (
    strpos($user_agent, 'FBAN') !== false || // Facebook App
    strpos($user_agent, 'FBAV') !== false || // Facebook App
    strpos($user_agent, 'Instagram') !== false // Instagram App
) {
    // Allowed: show your website
    // Continue to rest of your page...
} else {
    // Block everything else
    header('HTTP/1.0 403 Forbidden');
    echo "<h2 style='text-align:center;margin-top:50px;'>🚫 This website can only be viewed inside Facebook or Instagram.</h2>";
    exit;
}
?>
