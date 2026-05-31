<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '865F2FED99EA04B5E447AB5907068D54',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => '',
	'version' => '2026.1.9.0',
	'sitename' => 'KPK-Fotografie – Fotografie aus Leidenschaft',
	'lang_code' => 'de-DE',
	'rtl' => false,
	'public_folder' => '',
	'salt' => '6o6vks2d9nc4ury15gopl6d22lp8tg4c6j',
	'common_email_sender_addres' => 'noreply@31.websitex5.me',
	'enable_sender_header' => true,
	'date_format' => 'dd/MM/yy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MM/yy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	BREAKPOINTS
|-------------------------------
*/

$imSettings['breakpoints'] = array(
	array("name" => "Desktop", "hash" => "ea2f0ee4d5cbb25e1ee6c7c4378fee7b", "start" => "max", "end" => 1150.0, "fluid" => false),
	array("name" => "Breakpoint 1", "hash" => "d2f9bff7f63c0d6b7c7d55510409c19b", "start" => 1149.9, "end" => 720.0, "fluid" => false),
	array("name" => "Mobile", "hash" => "72e5146e7d399bc2f8a12127e43469f1", "start" => 719.9, "end" => 480.0, "fluid" => false),
	array("name" => "Mobile Fluid", "hash" => "5ecdcca63de80fd3d4fbb36295d22b7d", "start" => 479.9, "end" => 0.0, "fluid" => true),
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"jo9rw1bt-imCpt\">Wortprüfung:</label><br />
			<input type=\"text\" id=\"jo9rw1bt-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_255e01qt.png',
	'notification_public_key' => 'BC2g7La_nuFS7ST74IyuWQKkFyHIJWIH1h4lqA8i8vwea4xd51yDdFTuES_UHmZIzrh5o1Iy3yJbqaFVc5qWez0',
	'notification_private_key' => 'jUlYYh-rdBBXpHhwXPd8H1IjWO5a3ScCSYCb3I0W01U',
	'notification_dbprefix' => 'w5_by2ulbk1_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'lk64cjf1' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'cun0zn9x_db',
		'user' => 'cun0zn9x_db',
		'password' => 'jC8?rZ9|vU8)',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(4, 4, 4, 1); background-color: rgba(129, 204, 214, 1); padding: 10px 30px 10px 30px; border: solid; border-block-color: transparent transparent; border-inline-color: transparent transparent; border-width: 1px; border-radius: 0px; ',
	'email_opening' => 'Sehr geehrter Kunde,<br /> <br /> Vielen Dank für Ihre Bestellung. Ihre Zahlung ist noch nicht bei uns eingegangen<br /> <br /> Nachstehend finden Sie die Liste der bestellten Produkte, die Rechnungs- und Lieferinformationen sowie Hinweise zur Zahlungsabwicklung.',
	'email_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team.',
	'email_payment_opening' => 'Sehr geehrter Kunde,<br /> <br /> Vielen Dank für Ihren Einkauf. Wir bestätigen, dass Ihre Zahlung empfangen wurde und dass den Auftrag schnellstmöglich bearbeitet wird.<br /> <br /> Nachstehend finden Sie die Liste der bestellten Produkte und die Rechnungs- und Lieferinformationen.',
	'email_payment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'email_digital_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Nachstehend finden Sie die Liste der Download-Links für die bestellten Produkte:',
	'email_digital_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'email_physical_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Wir bestätigen, dass die Bestellung erfolgreich bearbeitet und dass die Waren verschickt wurden.<br /><br />Nachstehend finden Sie die Liste der an Sie versendeten Produkte:',
	'email_physical_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array());
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_by2ulbk1_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Banküberweisung',
		'description' => 'Später per Banküberweisung zahlen.',
		'email_text' => 'Nachstehend finden Sie die Informationen, die für die Zahlung per Banküberweisung benötigt werden:

XXX YYY ZZZ

Bitte beachten Sie, dass Sie nach Abschluss der Zahlung eine Kopie der Überweisungsbestätigung gemeinsam mit der Bestellnummer senden müssen.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Mail',
		'description' => 'Die Ware wird in 3-5 Tagen geliefert.',
		'email_text' => 'Versand per Mail.\\nDie Ware wird in 3-5 Tagen geliefert.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Expresslieferung',
		'description' => 'Die Ware wird in 1-2 Tagen geliefert.',
		'email_text' => 'Versand per Expresslieferung.\\nDie Ware wird in 1-2 Tagen geliefert.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();


/*
|-------------------------------
|	ANALYTICS SETTINGS
|-------------------------------
*/

$imSettings['analytics'] = array(
	'type' => 'wsx5analytics',
	'database' => array(
		'id' => '',
		'table' => 'w5_by2ulbk1_analytics'
	)
);

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2026.1.9 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#040404" style="background-color: #040404;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; font: normal normal normal 14pt \'Montserrat\'; color: #4F596D; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom-style: solid; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 15px; padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 14pt \'Montserrat\'; color: #FFFFFF; background-color: #040404; text-decoration: none; text-align: center;  margin-top: 5px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px; background-color: #040404">' . "\n\t\t" . 'Die in dieser E-Mail enthaltenen Informationen sind ausschließlich für den genannten Empfänger bestimmt.<br>Sollten Sie diese E-Mail fälschlicherweise erhalten haben, informieren Sie bitte umgehend den Absender und  löschen Sie die Nachricht, ohne Kopien zu erstellen.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#4F596D';
$ImMailer->bodySeparatorBorderColor = '#4F596D';
$ImMailer->emailBackground = '#040404';
$ImMailer->emailContentStyle = 'font: normal normal normal 14pt \'Montserrat\'; color: #4F596D; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Montserrat;';

// End of file x5settings.php