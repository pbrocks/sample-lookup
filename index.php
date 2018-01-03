<!DOCTYPE html>
<html>
<title><?php echo basename( __DIR__ ); ?></title>
<body>
	<link rel="stylesheet" type="text/css" href="inc/css/grid-style.css">
	
	<div class="grid-wrapper">
		<div class="section one">
			<div id="logo-section"></div>
			<h1><?php echo basename( __DIR__ ); ?></h1>
		</div>
		<div class="section two">

			<p><b>Search a <span>keyword</span> or <span>tag</span> and see what we have for you:</b></p>
			<form> 
				Lookup: <input type="text" onkeyup="showHint(this.value)">
			</form>

			<p>Suggestions: <span id="suggestions"></span></p>

		</div>
		<div class="section three">

			<p>Some area for comment
			</p>


		</div>
		<div class="box ad one">Lookup Tool</div>
		<div class="box ad two">Suggestions should appear above as you type.</div>
	</div>

	<script type="text/javascript" src="inc/js/show-suggestion.js"></script>
</body>
</html>
