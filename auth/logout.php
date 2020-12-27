<?php
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$USER->Logout();

LocalRedirect('/');

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");