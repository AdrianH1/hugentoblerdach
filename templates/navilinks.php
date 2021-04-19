<?php

		// Parameter "page" auf Standard setzen, wenn nicht vorhanden
		if (!isset($_GET['page']))	{
			$_GET['page'] = 'home';
		} 


if (in_array($_GET['page'], array('angebote', 'steildach', 'flachdach', 'fassaden', 'bodenbeschichtung', 'abdichtung', 'unterhalt', 'dachfenster', 'spengler'))){
	?>

		<ul id="navil">
			<li id="unter"><a href="index.php?page=steildach">Steildach</a></li>
			<li id="unter"><a href="index.php?page=flachdach">Flachdach</br></a></li>
			<li id="unter"><a href="index.php?page=fassaden">Fassaden+Isolation</a></li>
			<li id="unter"><a href="index.php?page=bodenbeschichtung">Bodenbeschichtung</a></li>
			<li id="unter"><a href="index.php?page=abdichtung">Abdichtung</a></li>
			<li id="unter"><a href="index.php?page=unterhalt">Unterhalt</a></li>
			<li id="unter"><a href="index.php?page=dachfenster">Dachfenster</a></li>
			<li id="unter"><a href="index.php?page=spengler">Spengler</a></li>
		</ul>

	
	<?php
	
}else{

}

if (in_array($_GET['page'], array('firma', 'links'))){
	?>

		<ul id="navil">
			<li id="unter"><a href="index.php?page=links">Links</a></li>

		</ul>

	
	<?php
	
}else{

}
