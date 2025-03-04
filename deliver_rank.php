<?php
$mc_server = "your-minecraft-server-ip";
$mc_port = "25575"; // RCON port
$mc_password = "your-rcon-password";

$username = $_GET['username'];
$rank = $_GET['rank'];

// Example command: Give VIP Rank
$command = "lp user $username parent set $rank";

// Connect to RCON & execute command
?>
