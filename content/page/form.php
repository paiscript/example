<h1>Form</h1>

<b>GET: </b>
<pre><?php print_r($_GET);?></pre>
<form action="<?php echo pai_link(null, array('action' => 'A'));?>" method="get" accept-charset="utf-8">
	<input type="hidden" name="action" value="B">
	<input type="text" name="test" value="<?php echo htmlspecialchars(@$_GET['test'])?>" id="test">
	

	<input type="submit" value="Submit">
</form>

<br>

<b>POST: </b>
<pre><?php print_r($_POST);?></pre>
<form action="<?php echo PAI_SELF;?>" method="post" accept-charset="utf-8">
	<input type="hidden" name="action" value="test">
	<input type="text" name="test" value="<?php echo htmlspecialchars(@$_POST['test'])?>" id="test">
	

	<input type="submit" value="Submit">
</form>
