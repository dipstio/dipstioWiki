<title><?php echo $_GET['a'];
echo ' - 그냥위키';?> </title>
<?php
// 라이브러리를 불러옵니다.
require_once("namumark.php");
?>
<font size=14><?php
$sdf = $_GET['a'];
echo $sdf;?>
</font>
<?php
// MySQLWikiPage와는 달리 PlainWikiPage의 첫 번째 인수로 위키텍스트를 받습니다.
$a = array('나무마크' => '[목차]
== 개요 ==
위키 문법이다.');
$wPage = new PlainWikiPage($a[$sdf]);
// NamuMark 생성자는 WikiPage를 인수로 받습니다.
$wEngine = new NamuMark($wPage);

// 위키링크의 앞에 붙을 경로를 prefix에 넣습니다.
$wEnginee = $wEngine->toHtml();

// toHtml을 호출하면 HTML 페이지가 생성됩니다.
echo $wEnginee;
