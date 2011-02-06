<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.48543500 1297008914";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"C:\www\beeWings\app\templates\Homepage\default.latte";i:2;i:1297008913;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"70363fd released on 2011-02-03";}}}?><?php

// source file: C:\www\beeWings\app\templates\Homepage\default.latte

?><?php
$_l = Nette\Templates\LatteMacros::initRuntime($template, NULL, 'v28zjr5ebg'); unset($_extends);

if (isset($presenter, $control) && $presenter->isAjax() && $control->isControlInvalid()) {
	return Nette\Templates\LatteMacros::renderSnippets($control, $_l, get_defined_vars());
}
