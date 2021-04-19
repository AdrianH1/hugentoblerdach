			
		<!--Seitentitel-->
			<?php
				
			if (!isset($_GET['page']))	{
				$_GET['page'] = 'home';
			} 
			
			switch ($_GET['page'])
			{
				case 'home':
					echo 'Home';
					break;
				case 'angebote':
					echo 'Angebote';
					break;
				case 'firma':
					echo 'Firma';
					break;
				case 'kontakt':
					echo 'Kontakt';
					break;	
				case 'steildach':
					echo 'Steildach';
					break;
				case 'flachdach':
					echo 'Flachdach';
					break;
				case 'fassaden':
					echo 'Fassaden </br>+Isolation';
					break;
				case 'bodenbeschichtung':
					echo 'Boden-</br>beschichtung';
					break;			
				case 'abdichtung':
					echo 'Abdichtung';
					break;			
				case 'unterhalt':
					echo 'Unterhalt';
					break;
				case 'dachfenster':
					echo 'Dachfenster';
					break;		
				case 'spengler':
					echo 'Spengler';
					break;
				case 'links':
					echo 'Links';
					break; 					
			}
		?>
