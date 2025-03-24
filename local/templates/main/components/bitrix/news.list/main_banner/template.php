<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    ;
} ?>
<?php
if (!empty($arResult["ITEMS"])): ?>
    <div class="container-custom">
        <div class="welcome">
            <div class="welcome__slider swiper js--welcome-slider">
                <div class="swiper-wrapper"><!-- el-->
                    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                        <?php
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            $id = $this->GetEditAreaId($arItem['ID']);
                        ?>
                        <div class="welcome__slider__item swiper-slide">
                                <div class="welcome__card">
                                <div class="welcome__card__body">
                                    <div class="welcome__card__center">
                                        <div class="welcome__card__title"><?= $arItem["NAME"] ?></div>
                                        <div class="welcome__card__text"><?= $arItem["PREVIEW_TEXT"]?></div>
                                        <div class="welcome__card__btnswrapper">
                                            <?if($arItem["PROPERTIES"]["FORM_APPOINTMENT"]["VALUE"]=="Y"){?>
                                                <div class="welcome__card__btnswrapper__item"><button class="mbtn mbtn__primary" data-fancybox-html="modal-order" data-src="#js--modal-order">Записаться к врачу</button></div>
                                            <?}?>
                                            <?if($arItem["PROPERTIES"]["FORM_QUESTIONS"]["VALUE"]=="Y"){?>
                                                <div class="welcome__card__btnswrapper__item"><button class="mbtn mbtn__danger" data-fancybox-html="modal-qwestion" data-src="#js--modal-qwestion">Задать вопрос</button></div>
                                            <?}?>
                                        </div>
                                    </div>
                                </div>
                                <? $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>700, 'height'=>'500'), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true); ?>  
                                <div class="welcome__card__img"><img src="<?= $file["src"] ?>" alt="<?= $arItem["NAME"] ?>" /></div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
                <div class="sliders__pagination js--welcome-pagination"></div>
            </div>
        </div>
    </div>
<?php
endif; ?>