<?php //netteCache[01]000365a:2:{s:4:"time";s:21:"0.77117900 1297008899";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:43:"C:\www\beeWings\app\templates\@layout.latte";i:2;i:1297008872;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"70363fd released on 2011-02-03";}}}?><?php

// source file: C:\www\beeWings\app\templates\@layout.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, '5xgqsgfl4a'); unset($_extends);


//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbd93194c053_head')) { function _lbd93194c053_head($_l, $_args) { extract($_args)
;
}}

//
// end of blocks
//

if ($_l->extends) {
	ob_start();
} elseif (isset($presenter, $control) && $presenter->isAjax() && $control->isControlInvalid()) {
	return Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars());
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="BeeWings" /><?php if (isset($robots)): ?>
	<meta name="robots" content="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($robots) ?>" />
<?php endif ?>

	<title>BeeWings</title>

	<link rel="stylesheet" media="screen,projection,tv" href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/css/screen.css" type="text/css" />
	<link rel="stylesheet" media="print" href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/css/print.css" type="text/css" />
	<link rel="shortcut icon" href="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/favicon.ico" type="image/x-icon" />

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo Nette\Templates\TemplateHelpers::escapeHtml($basePath) ?>/js/netteForms.js"></script>
	<?php if (!$_l->extends) { call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()); } ?>

</head>

<body><?php foreach ($iterator = $_l->its[] = new Nette\SmartCachingIterator($flashes) as $flash): ?>
	<div class="flash <?php echo Nette\Templates\TemplateHelpers::escapeHtml($flash->type) ?>"><?php echo Nette\Templates\TemplateHelpers::escapeHtml($flash->message) ?></div>
<?php endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

<?php Nette\Templates\LatteMacros::callBlock($_l, 'content', $template->getParams()) ?>
</body>
</html>
<?php
if ($_l->extends) {
	ob_end_clean();
	Nette\Templates\LatteMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
