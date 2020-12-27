<div class="leave-comment mr0">
    <h3 class="text-uppercase mb-3"><?= GetMessage('AUTH_TITLE') ?></h3>
    <form 
        class="form-horizontal contact-form" 
        role="form" 
        name="form_auth" 
        method="post" 
        target="_top" 
        action="<?=$arResult["AUTH_URL"]?>"
    >
        <input type="hidden" name="AUTH_FORM" value="Y" />
        <input type="hidden" name="TYPE" value="AUTH" />
        
        <?if ($arResult["BACKURL"] <> ''):?>
            <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
        <?endif?>
        
        <?foreach ($arResult["POST"] as $key => $value):?>
            <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?endforeach?>

        <div class="form-group">
            <div class="col-md-12">
                <input 
                    type="text" 
                    class="form-control" 
                    id="login" 
                    name="USER_LOGIN"
                    value="<?=$arResult["LAST_LOGIN"]?>"
                    placeholder="<?=GetMessage("AUTH_LOGIN")?>"
                >
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input 
                    type="password" 
                    class="form-control" 
                    id="password" 
                    name="USER_PASSWORD"
                    placeholder="<?=GetMessage("AUTH_PASSWORD")?>"
                >
            </div>
        </div>
        <input type="submit" value="<?=GetMessage('AUTH_AUTHORIZE')?>" class="btn send-btn">
    </form>
</div>
