<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
global $APPLICATION;
$curDir = $APPLICATION->GetCurDir();
?>
<? if (!empty($arResult)): ?>
<ul class="header__nav">

    <?php
    $previousLevel = 0;
    foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></div></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <!-- <li class="header__menu__item header__menu__chapter <?= $curDir == $arItem["LINK"] ? "header__menu__item__active" : "" ?>"> -->
    <li class="header__nav__item">
        <? if ($curDir == $arItem["LINK"]): ?>
            <span class="header__nav__link"><?= $arItem["TEXT"] ?>
                           
                        </span>
        <? else: ?>
            <a class="header__nav__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?>
                
            </a>
        <? endif ?>
        <div class="header__nav__popup">
            <ul class="header__nav__submenu">
                <? else: ?>
                <li >
                    <? if ($curDir == $arItem["LINK"]): ?>
                        <span ><?= $arItem["TEXT"] ?></span>
                    <? else: ?>
                        <a ><?= $arItem["TEXT"] ?></a>
                    <? endif ?>
                    <div class="header__nav__popup">
                        <ul class="header__nav__submenu">
                            <? endif ?>

                            <? else: ?>

                                <? if ($arItem["PERMISSION"] > "D"): ?>

                                    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                        <li class="header__nav__item">
                                            <? if ($curDir == $arItem["LINK"]): ?>
                                                <span  class="header__nav__link"><?= $arItem["TEXT"] ?></span>
                                            <? else: ?>
                                                <a  class="header__nav__link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
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
                                <?= str_repeat("</ul></div></li>", ($previousLevel - 1)); ?>
                            <? endif ?>
                        </ul>
                        <? endif ?>
