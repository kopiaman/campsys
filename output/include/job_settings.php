<?php
require_once(getabspath("classes/cipherer.php"));
$tdatajob = array();
	$tdatajob[".NumberOfChars"] = 80; 
	$tdatajob[".ShortName"] = "job";
	$tdatajob[".OwnerID"] = "";
	$tdatajob[".OriginalTable"] = "job";

//	field labels
$fieldLabelsjob = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjob["English"] = array();
	$fieldToolTipsjob["English"] = array();
	$fieldLabelsjob["English"]["ID"] = "ID";
	$fieldToolTipsjob["English"]["ID"] = "";
	$fieldLabelsjob["English"]["job_name"] = "Job Name";
	$fieldToolTipsjob["English"]["job_name"] = "";
	$fieldLabelsjob["English"]["job_category"] = "Job Category";
	$fieldToolTipsjob["English"]["job_category"] = "";
	if (count($fieldToolTipsjob["English"]))
		$tdatajob[".isUseToolTips"] = true;
}
	
	
	$tdatajob[".NCSearch"] = true;



$tdatajob[".shortTableName"] = "job";
$tdatajob[".nSecOptions"] = 0;
$tdatajob[".recsPerRowList"] = 1;
$tdatajob[".mainTableOwnerID"] = "";
$tdatajob[".moveNext"] = 1;
$tdatajob[".nType"] = 0;

$tdatajob[".strOriginalTableName"] = "job";




$tdatajob[".showAddInPopup"] = false;

$tdatajob[".showEditInPopup"] = false;

$tdatajob[".showViewInPopup"] = false;

$tdatajob[".fieldsForRegister"] = array();
	
$tdatajob[".listAjax"] = false;

	$tdatajob[".audit"] = true;

	$tdatajob[".locking"] = false;

$tdatajob[".listIcons"] = true;
$tdatajob[".edit"] = true;
$tdatajob[".inlineEdit"] = true;
$tdatajob[".inlineAdd"] = true;
$tdatajob[".view"] = true;



$tdatajob[".delete"] = true;

$tdatajob[".showSimpleSearchOptions"] = true;

$tdatajob[".showSearchPanel"] = true;

if (isMobile())
	$tdatajob[".isUseAjaxSuggest"] = false;
else 
	$tdatajob[".isUseAjaxSuggest"] = true;

$tdatajob[".rowHighlite"] = true;

// button handlers file names

$tdatajob[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajob[".isUseTimeForSearch"] = false;




$tdatajob[".allSearchFields"] = array();


$tdatajob[".googleLikeFields"][] = "ID";
$tdatajob[".googleLikeFields"][] = "job_name";
$tdatajob[".googleLikeFields"][] = "job_category";


$tdatajob[".advSearchFields"][] = "ID";
$tdatajob[".advSearchFields"][] = "job_name";
$tdatajob[".advSearchFields"][] = "job_category";

$tdatajob[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatajob[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajob[".strOrderBy"] = $tstrOrderBy;

$tdatajob[".orderindexes"] = array();

$tdatajob[".sqlHead"] = "SELECT ID,   job_name,   job_category";
$tdatajob[".sqlFrom"] = "FROM job";
$tdatajob[".sqlWhereExpr"] = "";
$tdatajob[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajob[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajob[".arrGroupsPerPage"] = $arrGPP;

$tableKeysjob = array();
$tableKeysjob[] = "ID";
$tdatajob[".Keys"] = $tableKeysjob;

$tdatajob[".listFields"] = array();
$tdatajob[".listFields"][] = "job_name";
$tdatajob[".listFields"][] = "job_category";

$tdatajob[".viewFields"] = array();
$tdatajob[".viewFields"][] = "job_name";
$tdatajob[".viewFields"][] = "job_category";

$tdatajob[".addFields"] = array();
$tdatajob[".addFields"][] = "job_name";
$tdatajob[".addFields"][] = "job_category";

$tdatajob[".inlineAddFields"] = array();
$tdatajob[".inlineAddFields"][] = "job_name";
$tdatajob[".inlineAddFields"][] = "job_category";

$tdatajob[".editFields"] = array();
$tdatajob[".editFields"][] = "job_name";
$tdatajob[".editFields"][] = "job_category";

$tdatajob[".inlineEditFields"] = array();
$tdatajob[".inlineEditFields"][] = "job_name";
$tdatajob[".inlineEditFields"][] = "job_category";

$tdatajob[".exportFields"] = array();

$tdatajob[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
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
	
		
		
	$tdatajob["ID"] = $fdata;
//	job_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "job_name";
	$fdata["GoodName"] = "job_name";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = "Job Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "job_name"; 
		$fdata["FullName"] = "job_name";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
	
		
		
	$tdatajob["job_name"] = $fdata;
//	job_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "job_category";
	$fdata["GoodName"] = "job_category";
	$fdata["ownerTable"] = "job";
	$fdata["Label"] = "Job Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "job_category"; 
		$fdata["FullName"] = "job_category";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
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
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Academic";
	$edata["LookupValues"][] = "Non_academic";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatajob["job_category"] = $fdata;

	
$tables_data["job"]=&$tdatajob;
$field_labels["job"] = &$fieldLabelsjob;
$fieldToolTips["job"] = &$fieldToolTipsjob;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["job"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["job"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_job()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   job_name,   job_category";
$proto0["m_strFrom"] = "FROM job";
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
	"m_strName" => "ID",
	"m_strTable" => "job"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "job_name",
	"m_strTable" => "job"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "job_category",
	"m_strTable" => "job"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "job";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "job_name";
$proto12["m_columns"][] = "job_category";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_job = createSqlQuery_job();
			$tdatajob[".sqlquery"] = $queryData_job;

$tableEvents["job"] = new eventsBase;
$tdatajob[".hasEvents"] = false;

$cipherer = new RunnerCipherer("job");

?>