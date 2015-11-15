<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
		<div>
		<a href="register.php">注册</a>
		<a href="login.php">登陆</a>
		</div>
	</header>
	<div class="container">
		<article class="a1">
			<img src="images/photo-icon.png">
			<div class="headertext">
				<h1 class="head">How-Old.net</h1>
				<div class="description">HOW OLD DO I LOOK?
				<span>#HowOldRobot</span></div>
			</div>
		</article>

		<article class="a2">
			<form>
				<div class="input-group" >
					<input class="input-engine">
					<input id="upfile" type="file">
					<div class="filetext"><span id="filename">请上传文件</span></div>
					<!-- <input type="text" class="submit"> -->
				</div>
			</form>
			<div class="vidio">
				<img src="1.jpg">
			</div>
		</article>
	</div>
	<footer>脚注脚注脚注脚注</footer>
	<script type="text/javascript">
	var upfile = document.getElementById("upfile");
	upfile.onchange = function() {
		updateFilename(this.value);
	};
	function extractFilename(path) {
	  var x;
	  x = path.lastIndexOf('\\');
	  if (x >= 0) // 基于Windows的路径
	    return path.substr(x+1);
	  x = path.lastIndexOf('/');
	  if (x >= 0) // 基于Unix的路径
	    return path.substr(x+1);
	  return path; // 仅包含文件名
	}
	function updateFilename(path) {
	   var name = extractFilename(path);
	   document.getElementById('filename').textContent = "您上传的是 "+name;
	 }
	</script>
</body>
</html>
