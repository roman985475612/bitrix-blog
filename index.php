<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ");

$APPLICATION->IncludeComponent("bitrix:news", "", [
    'IBLOCK_TYPE'             => 'Content',
    'IBLOCK_ID'               => '2',
    'SEF_MODE'                => 'Y',
    'SEF_FOLDER'              => '/',
    'SEF_URL_TEMPLATES'       => [
        'section' => '#SECTION_CODE_PATH#/',
        'detail'  => '#SECTION_CODE_PATH#/#ELEMENT_CODE#',
    ],
    'NEWS_COUNT'              => 2,
    'SORT_BY1'                => 'ID',
    'SORT_ORDER1'             => 'DESC',
    'LIST_ACTIVE_DATE_FORMAT' => 'j F Y',
    'LIST_PROPERTY_CODE'      => ['AUTHOR'],
    'DETAIL_PROPERTY_CODE'    => ['AUTHOR'],
]);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
