<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<aside class="widget">
    <h3 class="widget-title text-uppercase text-center"><?= GetMessage('SEARCH_TITLE') ?></h3>

    <form action="<?=$arResult['FORM_ACTION']?>">
        <input 
            name="q" 
            type="text" 
            value=""
            class="custom-form-control"
            placeholder="Search..."
        >
        <input 
            name="s" 
            type="submit" 
            value="<?= GetMessage('SEARCH_TITLE') ?>"
            class="text-uppercase text-center btn btn-subscribe"
        >
    </form>

</aside>
