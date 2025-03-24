<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
global $APPLICATION;
$curDir = $APPLICATION->GetCurDir();
?>
<? if (!empty($arResult)): ?>

<ul class="mobilemenu__nav">

    <?php
    $previousLevel = 0;
    foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <!-- <li class="header__menu__item header__menu__chapter <?= $curDir == $arItem["LINK"] ? "header__menu__item__active" : "" ?>"> -->
    <li class="mobilemenu__nav__item">
        <? if ($curDir == $arItem["LINK"]): ?>
            <span class="mobilemenu__nav__link"><?= $arItem["TEXT"] ?>
                           
                        </span>
                        <a class="mobilemenu__nav__linkslide js--mobilemenu-linkslide"><i class="ic"><svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#arrow-down-small"></use>
                                    </svg></i></a>
        <? else: ?>
            <a class="mobilemenu__nav__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?>
                
            </a>
            <a class="mobilemenu__nav__linkslide js--mobilemenu-linkslide"><i class="ic"><svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#arrow-down-small"></use>
                                    </svg></i></a>
        <? endif ?>
        <!-- <div class="header__nav__popup"> -->
            <ul class="mobilemenu__nav__submenu">
                <? else: ?>
                <li >
                    <? if ($curDir == $arItem["LINK"]): ?>
                        <span ><?= $arItem["TEXT"] ?></span>
                    <? else: ?>
                        <a ><?= $arItem["TEXT"] ?></a>
                    <? endif ?>
                    <!-- <div class="header__nav__popup"> -->
                        <ul class="mobilemenu__nav__item">
                            <? endif ?>

                            <? else: ?>

                                <? if ($arItem["PERMISSION"] > "D"): ?>

                                    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                        <li class="mobilemenu__nav__item">
                                            <? if ($curDir == $arItem["LINK"]): ?>
                                                <span  class="mobilemenu__nav__link"><?= $arItem["TEXT"] ?></span>
                                            <? else: ?>
                                                <a  class="mobilemenu__nav__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                            <? endif ?>
                                        </li>
                                    <? else: ?>
                                        <li>
                                            <? if ($curDir == $arItem["LINK"]): ?>
                                                <a><?= $arItem["TEXT"] ?></a>
                                            <? else: ?>
                                                <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                                            <? endif ?>
                                        </li>
                                    <? endif ?>

                                <? endif ?>

                            <? endif ?>

                            <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                            <? endforeach ?>

                            <? if ($previousLevel > 1): // close last item tags ?>
                                <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                            <? endif ?>
                        </ul>
                        <? endif ?>
