
		<div id="headbild">
			<?php 
				
			if (!isset($_GET['page']))	{
				$_GET['page'] = 'home';
			}
			
			switch ($_GET['page'])
			{
				case 'home':
					echo '<style>#headbild{background-image: url(./bilder/headbild_home.jpg)}</style>';
					break;
				case 'angebote':
					echo '<style>#headbild{background-image: url(./bilder/headbild_angebote.jpg)}</style>';
					break;
				case 'firma':
					echo '<style>#headbild{background-image: url(./bilder/headbild_firma.jpg)}</style>';
					break;
				case 'kontakt':
					echo '<style>#headbild{background-image: url(./bilder/headbild_kontakt.jpg)}</style>';
					break;	
				case 'steildach':
					echo '<style>#headbild{background-image: url(./bilder/headbild_steildach.jpg)}</style>';
					break;
				case 'flachdach':
					echo '<style>#headbild{background-image: url(./bilder/headbild_flachdach.jpg)}</style>';
					break;
				case 'fassaden':
					echo '<style>#headbild{background-image: url(./bilder/headbild_fassaden.jpg)}</style>';
					break;
				case 'bodenbeschichtung':
					echo '<style>#headbild{background-image: url(./bilder/headbild_bodenbeschichtung.jpg)}</style>';
					break;			
				case 'abdichtung':
					echo '<style>#headbild{background-image: url(./bilder/headbild_abdichtung.jpg)}</style>';
					break;			
				case 'unterhalt':
					echo '<style>#headbild{background-image: url(./bilder/headbild_unterhalt.jpg)}</style>';
					break;
				case 'dachfenster':
					echo '<style>#headbild{background-image: url(./bilder/headbild_dachfenster.jpg)}</style>';
					break;	
				case 'spengler':
					echo '<style>#headbild{background-image: url(./bilder/headbild_spengler.jpg)}</style>';
					break;
				case 'links':
					echo '<style>#headbild{background-image: url(./bilder/headbild_links.jpg)}</style>';
					break;				
			}
		?>
		</div>

	<!-- Functions einbinden -->
	<?php include ('templates/functions.php'); ?>

	<?php

		// Inhalt aus Textdateien ausgeben
	?>
		<div id="inhalt"><?php
			$page = addSlash('inhalt').$_GET['page'].'.txt';
			echo getContentFromTextFile($page);?>
		</div>
	
	


		


		