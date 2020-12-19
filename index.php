<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle(" ");

$APPLICATION->IncludeComponent("bitrix:news", "", [
    'IBLOCK_TYPE'          => 'content',
    'IBLOCK_ID'            => 'BLOG',
    'NEWS_COUNT'           => 2,
    'SORT_BY1'             => 'ID',
    'SORT_ORDER1'          => 'DESC',
    'LIST_ACTIVE_DATE_FORMAT' => 'j F Y',
    'LIST_PROPERTY_CODE'   => ['AUTHOR'],
    'DETAIL_PROPERTY_CODE' => ['AUTHOR'],
]);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>