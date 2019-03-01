<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="common.css" type="text/css">
<link rel="stylesheet" href="photo.css" type="text/css">
<link rel="stylesheet" href="photo-left.css" type="text/css">
<script type="text/javascript">
function copy(e){
	var text = window.getSelection()+"";
	text=text.replace(/(.+)\s*/,"$1");
	input = document.createElement("input");
	input.hidden = true;
	input.value = text;
	document.body.appendChild(input);
	input.select();
	try {
		success = document.execCommand("copy", false, null);
	} catch (ex) {
		success = false;
	} finally {
		document.body.removeChild(input);
	}
	return false;
};
</script>
</head>
<body>


<table oncopy="copy(event);return false">
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />
<tr><td>abc@123#xyy</td></tr></table><br />


<div>abc@123#xyy</div><span>abc@123#xyy</span>

</body>
</html>
