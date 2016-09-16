<?php
require_once(getabspath("classes/cipherer.php"));
$tdataw_faq = array();
	$tdataw_faq[".NumberOfChars"] = 80; 
	$tdataw_faq[".ShortName"] = "w_faq";
	$tdataw_faq[".OwnerID"] = "";
	$tdataw_faq[".OriginalTable"] = "w_faq";

//	field labels
$fieldLabelsw_faq = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsw_faq["English"] = array();
	$fieldToolTipsw_faq["English"] = array();
	$fieldLabelsw_faq["English"]["faqid"] = "Faqid";
	$fieldToolTipsw_faq["English"]["faqid"] = "";
	$fieldLabelsw_faq["English"]["question"] = "Question";
	$fieldToolTipsw_faq["English"]["question"] = "";
	$fieldLabelsw_faq["English"]["answer"] = "Answer";
	$fieldToolTipsw_faq["English"]["answer"] = "";
	$fieldLabelsw_faq["English"]["position"] = "Position";
	$fieldToolTipsw_faq["English"]["position"] = "";
	$fieldLabelsw_faq["English"]["fstatus"] = "Status";
	$fieldToolTipsw_faq["English"]["fstatus"] = "";
	$fieldLabelsw_faq["English"]["category"] = "Category";
	$fieldToolTipsw_faq["English"]["category"] = "";
	if (count($fieldToolTipsw_faq["English"]))
		$tdataw_faq[".isUseToolTips"] = true;
}
	
	
	$tdataw_faq[".NCSearch"] = true;



$tdataw_faq[".shortTableName"] = "w_faq";
$tdataw_faq[".nSecOptions"] = 0;
$tdataw_faq[".recsPerRowList"] = 1;
$tdataw_faq[".mainTableOwnerID"] = "";
$tdataw_faq[".moveNext"] = 1;
$tdataw_faq[".nType"] = 0;

$tdataw_faq[".strOriginalTableName"] = "w_faq";




$tdataw_faq[".showAddInPopup"] = false;

$tdataw_faq[".showEditInPopup"] = false;

$tdataw_faq[".showViewInPopup"] = false;

$tdataw_faq[".fieldsForRegister"] = array();
	
$tdataw_faq[".listAjax"] = false;

	$tdataw_faq[".audit"] = true;

	$tdataw_faq[".locking"] = false;

$tdataw_faq[".listIcons"] = true;
$tdataw_faq[".edit"] = true;



$tdataw_faq[".delete"] = true;

$tdataw_faq[".showSimpleSearchOptions"] = true;

$tdataw_faq[".showSearchPanel"] = true;

if (isMobile())
	$tdataw_faq[".isUseAjaxSuggest"] = false;
else 
	$tdataw_faq[".isUseAjaxSuggest"] = true;

$tdataw_faq[".rowHighlite"] = true;

// button handlers file names

$tdataw_faq[".addPageEvents"] = false;

// use timepicker for search panel
$tdataw_faq[".isUseTimeForSearch"] = false;




$tdataw_faq[".allSearchFields"] = array();

$tdataw_faq[".allSearchFields"][] = "question";
$tdataw_faq[".allSearchFields"][] = "position";
$tdataw_faq[".allSearchFields"][] = "category";
$tdataw_faq[".allSearchFields"][] = "fstatus";

$tdataw_faq[".googleLikeFields"][] = "faqid";
$tdataw_faq[".googleLikeFields"][] = "question";
$tdataw_faq[".googleLikeFields"][] = "answer";
$tdataw_faq[".googleLikeFields"][] = "position";
$tdataw_faq[".googleLikeFields"][] = "fstatus";
$tdataw_faq[".googleLikeFields"][] = "category";


$tdataw_faq[".advSearchFields"][] = "question";
$tdataw_faq[".advSearchFields"][] = "position";
$tdataw_faq[".advSearchFields"][] = "category";
$tdataw_faq[".advSearchFields"][] = "fstatus";

$tdataw_faq[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataw_faq[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataw_faq[".strOrderBy"] = $tstrOrderBy;

$tdataw_faq[".orderindexes"] = array();

$tdataw_faq[".sqlHead"] = "SELECT faqid,   question,   answer,   `position`,   fstatus,   category";
$tdataw_faq[".sqlFrom"] = "FROM w_faq";
$tdataw_faq[".sqlWhereExpr"] = "";
$tdataw_faq[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataw_faq[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataw_faq[".arrGroupsPerPage"] = $arrGPP;

$tableKeysw_faq = array();
$tableKeysw_faq[] = "faqid";
$tdataw_faq[".Keys"] = $tableKeysw_faq;

$tdataw_faq[".listFields"] = array();
$tdataw_faq[".listFields"][] = "question";
$tdataw_faq[".listFields"][] = "answer";
$tdataw_faq[".listFields"][] = "position";
$tdataw_faq[".listFields"][] = "category";
$tdataw_faq[".listFields"][] = "fstatus";

$tdataw_faq[".viewFields"] = array();

$tdataw_faq[".addFields"] = array();
$tdataw_faq[".addFields"][] = "question";
$tdataw_faq[".addFields"][] = "position";
$tdataw_faq[".addFields"][] = "category";
$tdataw_faq[".addFields"][] = "fstatus";
$tdataw_faq[".addFields"][] = "answer";

$tdataw_faq[".inlineAddFields"] = array();

$tdataw_faq[".editFields"] = array();
$tdataw_faq[".editFields"][] = "question";
$tdataw_faq[".editFields"][] = "position";
$tdataw_faq[".editFields"][] = "category";
$tdataw_faq[".editFields"][] = "fstatus";
$tdataw_faq[".editFields"][] = "answer";

$tdataw_faq[".inlineEditFields"] = array();

$tdataw_faq[".exportFields"] = array();

$tdataw_faq[".printFields"] = array();

//	faqid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "faqid";
	$fdata["GoodName"] = "faqid";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Faqid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "faqid"; 
		$fdata["FullName"] = "faqid";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["faqid"] = $fdata;
//	question
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "question";
	$fdata["GoodName"] = "question";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Question"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "question"; 
		$fdata["FullName"] = "question";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";
	
		$edata["inputStyle"] = " width:557px;";
	$edata["controlWidth"] = 557;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["question"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Answer"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "answer"; 
		$fdata["FullName"] = "answer";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 246;
			$edata["nCols"] = 753;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["answer"] = $fdata;
//	position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "position";
	$fdata["GoodName"] = "position";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Position"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "position"; 
		$fdata["FullName"] = "`position`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["position"] = $fdata;
//	fstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fstatus";
	$fdata["GoodName"] = "fstatus";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "fstatus"; 
		$fdata["FullName"] = "fstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "On";
	$edata["LookupValues"][] = "Off";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["fstatus"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "w_faq";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "category"; 
		$fdata["FullName"] = "category";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=54";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataw_faq["category"] = $fdata;

	
$tables_data["w_faq"]=&$tdataw_faq;
$field_labels["w_faq"] = &$fieldLabelsw_faq;
$fieldToolTips["w_faq"] = &$fieldToolTipsw_faq;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["w_faq"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["w_faq"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_w_faq()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "faqid,   question,   answer,   `position`,   fstatus,   category";
$proto0["m_strFrom"] = "FROM w_faq";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "faqid",
	"m_strTable" => "w_faq"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "question",
	"m_strTable" => "w_faq"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "w_faq"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "position",
	"m_strTable" => "w_faq"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "fstatus",
	"m_strTable" => "w_faq"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "w_faq"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "w_faq";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "faqid";
$proto18["m_columns"][] = "question";
$proto18["m_columns"][] = "answer";
$proto18["m_columns"][] = "position";
$proto18["m_columns"][] = "fstatus";
$proto18["m_columns"][] = "category";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_w_faq = createSqlQuery_w_faq();
						$tdataw_faq[".sqlquery"] = $queryData_w_faq;

$tableEvents["w_faq"] = new eventsBase;
$tdataw_faq[".hasEvents"] = false;

$cipherer = new RunnerCipherer("w_faq");

?>