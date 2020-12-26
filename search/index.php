<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Результаты поиска | Marlin");

$APPLICATION->IncludeComponent("bitrix:search.page", 'clear', [
    'USE_LANGUAGE_GUESS' => 'Y',
    'PAGE_RESULT_COUNT'  => 2,
    'DISPLAY_TOP_PAGER'  => 'N',
]);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
