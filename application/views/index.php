<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Make Money!!!</title>
        <link rel="stylesheet" href="/assets/css/style.css">
	</head>
	<body>
		<h2>Your Gold<div class='score'><?php if(isset($gold)) { echo $gold;} else echo "0"; ?></div></h2>
		<div class='places'>
			<form action='/process_money' method='post'>
				<h2>Farm</h2>
				<p>(earns 10-20 golds)</p>
				<input type='hidden' name='action' value='farm'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='/process_money' method='post'>
				<h2>Cave</h2>
				<p>(earns 5-10 golds)</p>
				<input type='hidden' name='action' value='cave'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='/process_money' method='post'>
				<h2>House</h2>
				<p>(earns 2-5 golds)</p>
				<input type='hidden' name='action' value='house'>
				<input type='submit'>
			</form>
		</div>		
		<div class='places'>
			<form action='/process_money' method='post'>
				<h2>Casino!</h2>
				<p>(earns/takes 0-50 golds)</p>
				<input type='hidden' name='action' value='casino'>
				<input type='submit'>
			</form>
		</div>
		<p class='act'>Activities:</p>
		<div class='activities'>
			<?php if(isset($activities)) { echo $activities;} else echo " "; ?>
		</div>
		<form action='/process_money' method='post'>
			<input type="hidden" name="action" value="reset">
		 <input type='submit' value='reset'>
		</form>
		
	</body>
</html>