<?php
require_once(getabspath("classes/cipherer.php"));
$tdataojt_company = array();
	$tdataojt_company[".NumberOfChars"] = 80; 
	$tdataojt_company[".ShortName"] = "ojt_company";
	$tdataojt_company[".OwnerID"] = "";
	$tdataojt_company[".OriginalTable"] = "ojt_company";

//	field labels
$fieldLabelsojt_company = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsojt_company["English"] = array();
	$fieldToolTipsojt_company["English"] = array();
	$fieldLabelsojt_company["English"]["id"] = "Id";
	$fieldToolTipsojt_company["English"]["id"] = "";
	$fieldLabelsojt_company["English"]["organization_name"] = "Organization Name";
	$fieldToolTipsojt_company["English"]["organization_name"] = "";
	$fieldLabelsojt_company["English"]["address"] = "Address";
	$fieldToolTipsojt_company["English"]["address"] = "";
	$fieldLabelsojt_company["English"]["state"] = "State";
	$fieldToolTipsojt_company["English"]["state"] = "";
	$fieldLabelsojt_company["English"]["tel"] = "Tel";
	$fieldToolTipsojt_company["English"]["tel"] = "";
	$fieldLabelsojt_company["English"]["fax"] = "Fax";
	$fieldToolTipsojt_company["English"]["fax"] = "";
	$fieldLabelsojt_company["English"]["email"] = "Email";
	$fieldToolTipsojt_company["English"]["email"] = "";
	if (count($fieldToolTipsojt_company["English"]))
		$tdataojt_company[".isUseToolTips"] = true;
}
	
	
	$tdataojt_company[".NCSearch"] = true;



$tdataojt_company[".shortTableName"] = "ojt_company";
$tdataojt_company[".nSecOptions"] = 0;
$tdataojt_company[".recsPerRowList"] = 1;
$tdataojt_company[".mainTableOwnerID"] = "";
$tdataojt_company[".moveNext"] = 1;
$tdataojt_company[".nType"] = 0;

$tdataojt_company[".strOriginalTableName"] = "ojt_company";




$tdataojt_company[".showAddInPopup"] = false;

$tdataojt_company[".showEditInPopup"] = false;

$tdataojt_company[".showViewInPopup"] = false;

$tdataojt_company[".fieldsForRegister"] = array();
	
$tdataojt_company[".listAjax"] = false;

	$tdataojt_company[".audit"] = true;

	$tdataojt_company[".locking"] = false;

$tdataojt_company[".listIcons"] = true;
$tdataojt_company[".inlineEdit"] = true;
$tdataojt_company[".inlineAdd"] = true;

$tdataojt_company[".exportTo"] = true;


$tdataojt_company[".delete"] = true;

$tdataojt_company[".showSimpleSearchOptions"] = true;

$tdataojt_company[".showSearchPanel"] = true;

if (isMobile())
	$tdataojt_company[".isUseAjaxSuggest"] = false;
else 
	$tdataojt_company[".isUseAjaxSuggest"] = true;

$tdataojt_company[".rowHighlite"] = true;

// button handlers file names

$tdataojt_company[".addPageEvents"] = false;

// use timepicker for search panel
$tdataojt_company[".isUseTimeForSearch"] = false;




$tdataojt_company[".allSearchFields"] = array();

$tdataojt_company[".allSearchFields"][] = "id";
$tdataojt_company[".allSearchFields"][] = "organization_name";
$tdataojt_company[".allSearchFields"][] = "address";
$tdataojt_company[".allSearchFields"][] = "state";
$tdataojt_company[".allSearchFields"][] = "tel";
$tdataojt_company[".allSearchFields"][] = "fax";
$tdataojt_company[".allSearchFields"][] = "email";

$tdataojt_company[".googleLikeFields"][] = "id";
$tdataojt_company[".googleLikeFields"][] = "organization_name";
$tdataojt_company[".googleLikeFields"][] = "address";
$tdataojt_company[".googleLikeFields"][] = "state";
$tdataojt_company[".googleLikeFields"][] = "tel";
$tdataojt_company[".googleLikeFields"][] = "fax";
$tdataojt_company[".googleLikeFields"][] = "email";


$tdataojt_company[".advSearchFields"][] = "organization_name";
$tdataojt_company[".advSearchFields"][] = "address";
$tdataojt_company[".advSearchFields"][] = "tel";
$tdataojt_company[".advSearchFields"][] = "fax";
$tdataojt_company[".advSearchFields"][] = "email";

$tdataojt_company[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataojt_company[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataojt_company[".strOrderBy"] = $tstrOrderBy;

$tdataojt_company[".orderindexes"] = array();

$tdataojt_company[".sqlHead"] = "SELECT id,   organization_name,   address,   `state`,   tel,   fax,   email";
$tdataojt_company[".sqlFrom"] = "FROM ojt_company";
$tdataojt_company[".sqlWhereExpr"] = "";
$tdataojt_company[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataojt_company[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataojt_company[".arrGroupsPerPage"] = $arrGPP;

$tableKeysojt_company = array();
$tableKeysojt_company[] = "id";
$tdataojt_company[".Keys"] = $tableKeysojt_company;

$tdataojt_company[".listFields"] = array();
$tdataojt_company[".listFields"][] = "organization_name";
$tdataojt_company[".listFields"][] = "address";
$tdataojt_company[".listFields"][] = "tel";
$tdataojt_company[".listFields"][] = "fax";
$tdataojt_company[".listFields"][] = "email";

$tdataojt_company[".viewFields"] = array();

$tdataojt_company[".addFields"] = array();

$tdataojt_company[".inlineAddFields"] = array();
$tdataojt_company[".inlineAddFields"][] = "organization_name";
$tdataojt_company[".inlineAddFields"][] = "address";
$tdataojt_company[".inlineAddFields"][] = "tel";
$tdataojt_company[".inlineAddFields"][] = "fax";
$tdataojt_company[".inlineAddFields"][] = "email";

$tdataojt_company[".editFields"] = array();

$tdataojt_company[".inlineEditFields"] = array();
$tdataojt_company[".inlineEditFields"][] = "organization_name";
$tdataojt_company[".inlineEditFields"][] = "address";
$tdataojt_company[".inlineEditFields"][] = "tel";
$tdataojt_company[".inlineEditFields"][] = "fax";
$tdataojt_company[".inlineEditFields"][] = "email";

$tdataojt_company[".exportFields"] = array();
$tdataojt_company[".exportFields"][] = "organization_name";
$tdataojt_company[".exportFields"][] = "address";
$tdataojt_company[".exportFields"][] = "tel";
$tdataojt_company[".exportFields"][] = "fax";
$tdataojt_company[".exportFields"][] = "email";

$tdataojt_company[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
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
	
		
		
	$tdataojt_company["id"] = $fdata;
//	organization_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_name";
	$fdata["GoodName"] = "organization_name";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Organization Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "organization_name"; 
		$fdata["FullName"] = "organization_name";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["organization_name"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "address"; 
		$fdata["FullName"] = "address";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 41;
			$edata["nCols"] = 240;
	
		
		$edata["inputStyle"] = " width:234px;";
	$edata["controlWidth"] = 234;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["address"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "State"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "state"; 
		$fdata["FullName"] = "`state`";
	
		
		
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
	
		
		$edata["LookupWhere"] = "Class=1";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["state"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Tel"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "tel"; 
		$fdata["FullName"] = "tel";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["tel"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Fax"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fax"; 
		$fdata["FullName"] = "fax";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ojt_company";
	$fdata["Label"] = "Email"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "email"; 
		$fdata["FullName"] = "email";
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataojt_company["email"] = $fdata;

	
$tables_data["ojt_company"]=&$tdataojt_company;
$field_labels["ojt_company"] = &$fieldLabelsojt_company;
$fieldToolTips["ojt_company"] = &$fieldToolTipsojt_company;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ojt_company"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["ojt_company"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ojt_company()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   organization_name,   address,   `state`,   tel,   fax,   email";
$proto0["m_strFrom"] = "FROM ojt_company";
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
	"m_strName" => "id",
	"m_strTable" => "ojt_company"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_name",
	"m_strTable" => "ojt_company"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "ojt_company"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "ojt_company"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "ojt_company"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "ojt_company"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ojt_company"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "ojt_company";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "organization_name";
$proto20["m_columns"][] = "address";
$proto20["m_columns"][] = "state";
$proto20["m_columns"][] = "tel";
$proto20["m_columns"][] = "fax";
$proto20["m_columns"][] = "email";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ojt_company = createSqlQuery_ojt_company();
							$tdataojt_company[".sqlquery"] = $queryData_ojt_company;

$tableEvents["ojt_company"] = new eventsBase;
$tdataojt_company[".hasEvents"] = false;

$cipherer = new RunnerCipherer("ojt_company");

?>