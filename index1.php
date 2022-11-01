<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script defer src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	
</head>
<body>
<h6>
Par exemple dans un conteneur div qui a comme id "enfants", on veut trouver les div enfants ayant un id qui contient le mot 'fils' :
</h6>
	<div id="enfants">
		 <div name='fille_1' id='fille_1'>1</div>
		 <div id='fils_1'>2</div>
		 <div id='fils_2'>3</div>
		 <div id='fils_3'>4</div>
		 <div id='fille_2'>5</div>
		 <div name='fils_4' id='fils_4'>6</div>
	</div>

<script>
	
	
	var test = document.querySelectorAll('div[id^="fils"]')
	
	test.forEach(el => el.style.color = 'red')
	console.log(test);
	
</script>
</body>
</html>

