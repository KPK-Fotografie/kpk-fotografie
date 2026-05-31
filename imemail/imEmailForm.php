<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('Name', @$_POST['imObjectForm_6_1'], '', false);
	$form->setField('E-Mail-Adresse', @$_POST['imObjectForm_6_2'], '', false);
	$form->setField('Telefon (optional)', @$_POST['imObjectForm_6_3'], '', false);
	$form->setField('Betreff', @$_POST['imObjectForm_6_4'], '', false);
	$form->setField('Nachricht (z. B. Bildtitel, Kategorien aus der Galerie, Anliegen)', @$_POST['imObjectForm_6_5'], '', false);
	$form->setField('Datenschutzhinweis gelesen und akzeptiert', @$_POST['imObjectForm_6_6'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '97444FD8A4836805B4ECA95D95B9D1B2' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			$errorMessage = "Sie müssen Javascript aktivieren!";
		$form->mailToOwner('noreply@31.websitex5.me', '', 'info@kpk-fotografie.de', 'Neuer Kontakt', "Neue Daten von meiner Website erhalten:", false);
		if ($errorMessage == '') {
			echo "{\"status\" : true}";
		}

		else {
			echo "{\"status\" : false, \"err\" : \"$errorMessage\"}";
		}
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file