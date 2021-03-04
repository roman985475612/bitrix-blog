<?php
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

LocalRedirect(SITE_DIR);

$APPLICATION->SetTitle("Вход на сайт");
?>
<p>Вы зарегистрированы и успешно авторизовались.</p>

<p>Используйте административную панель в верхней части экрана для быстрого доступа к функциям управления структурой и информационным наполнением сайта. Набор кнопок верхней панели отличается для различных разделов сайта. Так отдельные наборы действий предусмотрены для управления статическим содержимым страниц, динамическими публикациями (новостями, каталогом, фотогалереей) и т.п.</p>

<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>