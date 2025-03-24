<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
global $APPLICATION;
$curDir = $APPLICATION->GetCurDir()
?>


<? if (!empty($arResult)): ?>
    <ul class="mobilenav__menu">

    <?
    $previousLevel = 0;
foreach ($arResult

    as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></div></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="mobilenav__menu__item mobilenav__menu__chapter">
        <a class="mobilenav__menu__link js--mobilenav--link" href="javascript:void(0)">
            <?= $arItem["TEXT"] ?><i>
                <svg>
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right"></use>
                </svg>
            </i
            ></a>
        <div class="mobilenav__menu__popup js--mobilenav--popup">
            <div class="mobilenav__menu__popup__header">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="mobilenav__menu__back js--mobilenav--back">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-back"></use>
                                </svg
                                >
                                <span>Назад</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="mobilenav__menu__close js--mobilenav--closepopup">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#close"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul>
    <? else: ?>
    <li class="mobilenav__menu__item mobilenav__menu__chapter">
    <a class="mobilenav__menu__link js--mobilenav--link" href="javascript:void(0)">
        <?= $arItem["TEXT"] ?><i>
            <svg>
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-right"></use>
            </svg>
        </i
        ></a>
    <div class="mobilenav__menu__popup js--mobilenav--popup">
    <div class="mobilenav__menu__popup__header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="mobilenav__menu__back js--mobilenav--back">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#arrow-back"></use>
                        </svg
                        >
                        <span>Назад</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="mobilenav__menu__close js--mobilenav--closepopup">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/img/svgsprite/sprite.symbol.svg#close"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <ul>
    <? endif ?>

    <? else: ?>

        <? if ($arItem["PERMISSION"] > "D"): ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                <li class="mobilenav__menu__item mobilenav__menu__item__active">
                    <a class="mobilenav__menu__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? else: ?>
                <li class="mobilenav__menu__item mobilenav__menu__item__active">
                    <a class="mobilenav__menu__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                </li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></div></div></li>", ($previousLevel - 1)); ?>
    <? endif ?>
    </ul>
<? endif ?>