<?php defined ("_JEXEC") or die(); ?>

<?php
$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;

if ($this->params->get('logoFile')){
$logo = '<img src="' .  htmlspecialchars(JUri::root() . $this->params->get('logoFile'), ENT_QUOTES) . '" alt="' . $sitetitle . '" />';
}
if ($this->params->get('sitetitle')){
$sitetitle =  htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT);
}
if ($this->params->get('sitedescription')){
$sitedescription =  htmlspecialchars($this->params->get('sitedescription'), ENT_COMPAT);
}
?>
<!doctype html>

<html lang="ru">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head"/>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">

<!--style-->
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="templates/<?php echo $this->template; ?>/css/style.css" />
	
	<script src="templates/<?php echo $this->template; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/<?php echo $this->template; ?>/js/main.js" type="text/javascript"></script>
</head>
<body>
	<div class="delivery">
		<div class="container">
			<div class="row">
				<div class="col">
					Доставка
				</div>
			</div>
		</div>
	</div>
	<jdoc:include type="component" />

</body>
</html>