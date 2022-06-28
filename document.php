<title><?php echo $_GET['a'];
echo ' - 그냥위키';?> </title>
<style type="text/css"> 
a { text-decoration:none; color: inherit; } 
</style> 
<font size='5'><a href='/'>그냥위키</a> &nbsp&nbsp&nbsp<a href='/edit/<?php echo $_GET['a']; ?>'>이문서 편집</a><div align="right"><input type="text"/><img height=20 width=20 src='https://svgsilh.com/png-1024/1093183.png'/></div></font>
<p align="center"><iframe width='80%' height='90%' src='/index.php?a=<?php echo $_GET['a']; ?>'></p>