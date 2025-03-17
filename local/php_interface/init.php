<?php
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('main', 'OnEpilog', 'AddSuffixInTitle');
function AddSuffixInTitle()
{
	global $APPLICATION;
    CModule::IncludeModule("iblock");
    $arSelect = Array("ID", "NAME", "PROPERTY_U_LINK", "PROPERTY_U_H1", "PROPERTY_U_TITLE", "PROPERTY_U_DESCRIPTION", "PROPERTY_U_KEYWORDS");
    $arFilter = Array("IBLOCK_ID"=>12, "PROPERTY_U_LINK"=>$APPLICATION->GetCurDir(), "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
   
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
    }
  if($arFields){
  
      if($arFields["PROPERTY_U_H1_VALUE"]){
          $APPLICATION->SetPageProperty("H1", $arFields["PROPERTY_U_H1_VALUE"]);
      }
      if($arFields["PROPERTY_U_TITLE_VALUE"]){
          $APPLICATION->SetPageProperty("title", $arFields["PROPERTY_U_TITLE_VALUE"]);
      }
      if($arFields["PROPERTY_U_DESCRIPTION_VALUE"]){
          $APPLICATION->SetPageProperty("description", $arFields["PROPERTY_U_DESCRIPTION_VALUE"]);
      }
      if($arFields["PROPERTY_U_KEYWORDS_VALUE"]){
          $APPLICATION->SetPageProperty("keywords", $arFields["PROPERTY_U_KEYWORDS_VALUE"]);
      }
  }
}
