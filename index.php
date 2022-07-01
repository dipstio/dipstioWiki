<?php
require_once("namumark.php");
$wPage = new PlainWikiPage("위키텍스트");
$wEngine = new NamuMark($wPage);
$wEngine->prefix = "/wiki";
echo $wEngine->toHtml();
session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('login.php');</script>";            
}

else {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} 
?>
<body>
    <div class="base">
        <h2><?php echo "안녕하세요, $username($name)님";?></h2>
        <button type="button" class="btn" onclick="location.href='logout.php'">
            LOGOUT
        </button>
    </div>
</body>
