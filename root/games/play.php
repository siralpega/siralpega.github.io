<?php
require "./games-header.php";
?>
<!-- Only need closing php tag if you are ading HTML code in the file. if pure php, no need -->
<main>
	<?php
	if (!isset($_GET['id']))
	{
		header("Location: ./index.php");
	}
	else
	{
		$id = $_GET['id'];
		if($id == 1)
		{
			echo '<p> 1 </p>';//unity game 1 webgl or download for windows build of it
		}
		else if($id == 2)
		{
			echo '<p> 2 </p>';//unity game 2 webgl or download for windows build of it
		}
		else
		{
			echo
			'<div>
			<p class="error">Unknown Game</p>
			<a href="index.php">Back to Games</a>
			</div>';
		}
	}
	?>
</main>

<?php
require "../footer.php";
?>
