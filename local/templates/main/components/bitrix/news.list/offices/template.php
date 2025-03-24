<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    ;
}
$emptyImage = SITE_TEMPLATE_PATH . "/placeholder.png";
$APPLICATION->SetTitle("Контакты");
use Bitrix\Main\Loader; 
Loader::includeModule("iblock");
?> 

<select id="js--select-custom" name="#" style="display:none">
    <option value="0" selected="selected" >Все города</option>
    <?
    $arFilter = array('IBLOCK_ID' => 7);
    $rsSections = CIBlockSection::GetList(array(), $arFilter);
    while ($arSection = $rsSections->Fetch())
    {$ob[]=$arSection;
        ?>
        <option value="<?=$arSection['NAME']?>"></option>
    <?}?>
				
</select>

<? if (!empty($arResult["ITEMS"])):  ?>

<div class="contacts" style="display:none">

    <?php $i=0; foreach ($arResult["ITEMS"] as $arItem): $i++;?>
        <?php foreach ($ob as $arob): 
        if($arItem["IBLOCK_SECTION_ID"]==$arob["ID"])
            $cityName=$arob["NAME"];
        endforeach;?>
        <div class="contacts__item" data-city="<?=$cityName?>" data-name="<?=$arItem["NAME"]?>" data-adress="<?=$arItem["PROPERTIES"]["ADRESS"]["VALUE"]?>" data-phone="<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>" data-mail="<?=$arItem["PROPERTIES"]["MAIL"]["VALUE"]?>" data-work="<?=$arItem["PROPERTIES"]["WORK_TIME"]["VALUE"]?>" data-coordinates="<?=$arItem["PROPERTIES"]["COORDS"]["VALUE"]?>"> 
        </div>
    <?endforeach;?>
</div>
            
<?php
endif; ?>



<div class="map">
    <div class="map__select"><select class="js--select-cities" id="js--select-formap" name="#"></select></div>
    <div class="map__columns">
        <div class="map__columns__body">
            <div class="map__yandex">
                <div class="map__yandex__include" id="js--mapoffices"></div>
            </div>
            <div class="map__hidedesktop"> <a class="mbtn mbtn__outline mbtn__wicon mbtn__block" href="/contacts"><span>Все адреса</span><i class="ic"><svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#arrow-long"></use>
                        </svg></i></a></div>
        </div>
        <div class="map__columns__aside">
            <div class="map__content">
                <div class="map__des js--placemark">
                    <div class="map__des__close js--btn-mapdes-close"><svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-close"></use>
                        </svg></div>
                    <div class="map__des__content js--placemark--popup"></div>
                </div>
                <div class="map__content__body">
                    <div class="map__addresses">
                        <ul class="js--addresses"></ul>
                    </div>
                </div>
                <div class="map__content__footer"><a class="mbtn mbtn__outline mbtn__wicon mbtn__block" href="/contacts"><span>Все адреса</span><i class="ic"><svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#arrow-long"></use>
                            </svg></i></a></div>
            </div>
        </div>
    </div>
</div>

