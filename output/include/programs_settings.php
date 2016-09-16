<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprograms = array();
	$tdataprograms[".NumberOfChars"] = 80; 
	$tdataprograms[".ShortName"] = "programs";
	$tdataprograms[".OwnerID"] = "";
	$tdataprograms[".OriginalTable"] = "program";

//	field labels
$fieldLabelsprograms = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprograms["English"] = array();
	$fieldToolTipsprograms["English"] = array();
	$fieldLabelsprograms["English"]["BatchID"] = "Batch ID";
	$fieldToolTipsprograms["English"]["BatchID"] = "";
	$fieldLabelsprograms["English"]["DipID"] = "Dip ID";
	$fieldToolTipsprograms["English"]["DipID"] = "";
	if (count($fieldToolTipsprograms["English"]))
		$tdataprograms[".isUseToolTips"] = true;
}
	
	



$tdataprograms[".shortTableName"] = "programs";
$tdataprograms[".nSecOptions"] = 0;
$tdataprograms[".recsPerRowList"] = 1;
$tdataprograms[".mainTableOwnerID"] = "";
$tdataprograms[".moveNext"] = 1;
$tdataprograms[".nType"] = 1;

$tdataprograms[".strOriginalTableName"] = "program";




$tdataprograms[".showAddInPopup"] = false;

$tdataprograms[".showEditInPopup"] = false;

$tdataprograms[".showViewInPopup"] = true;

$tdataprograms[".fieldsForRegister"] = array();

$tdataprograms[".listAjax"] = false;

	$tdataprograms[".audit"] = false;

	$tdataprograms[".locking"] = false;

$tdataprograms[".listIcons"] = true;




$tdataprograms[".showSimpleSearchOptions"] = false;

$tdataprograms[".showSearchPanel"] = true;

if (isMobile())
	$tdataprograms[".isUseAjaxSuggest"] = false;
else 
	$tdataprograms[".isUseAjaxSuggest"] = true;

$tdataprograms[".rowHighlite"] = true;

// button handlers file names

$tdataprograms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprograms[".isUseTimeForSearch"] = false;



$tdataprograms[".useDetailsPreview"] = true;

$tdataprograms[".allSearchFields"] = array();

$tdataprograms[".allSearchFields"][] = "DipID";
$tdataprograms[".allSearchFields"][] = "BatchID";

$tdataprograms[".googleLikeFields"][] = "DipID";
$tdataprograms[".googleLikeFields"][] = "BatchID";


$tdataprograms[".advSearchFields"][] = "DipID";
$tdataprograms[".advSearchFields"][] = "BatchID";

$tdataprograms[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataprograms[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DipID,
BatchID";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprograms[".strOrderBy"] = $tstrOrderBy;

$tdataprograms[".orderindexes"] = array();
$tdataprograms[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "DipID");
$tdataprograms[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "BatchID");

$tdataprograms[".sqlHead"] = "SELECT DipID,  BatchID";
$tdataprograms[".sqlFrom"] = "FROM student_info";
$tdataprograms[".sqlWhereExpr"] = "(Status ='Active')";
$tdataprograms[".sqlTail"] = "GROUP BY BatchID";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprograms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprograms[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprograms = array();
$tdataprograms[".Keys"] = $tableKeysprograms;

$tdataprograms[".listFields"] = array();
$tdataprograms[".listFields"][] = "DipID";
$tdataprograms[".listFields"][] = "BatchID";

$tdataprograms[".viewFields"] = array();

$tdataprograms[".addFields"] = array();

$tdataprograms[".inlineAddFields"] = array();

$tdataprograms[".editFields"] = array();

$tdataprograms[".inlineEditFields"] = array();

$tdataprograms[".exportFields"] = array();

$tdataprograms[".printFields"] = array();

//	DipID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "DipID";
	$fdata["GoodName"] = "DipID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Dip ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DipID"; 
		$fdata["FullName"] = "DipID";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprograms["DipID"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "student_info";
	$fdata["Label"] = "Batch ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
		
		
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprograms["BatchID"] = $fdata;

	
$tables_data["programs"]=&$tdataprograms;
$field_labels["programs"] = &$fieldLabelsprograms;
$fieldToolTips["programs"] = &$fieldToolTipsprograms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["programs"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="program_course";
	$detailsParam["dDataSourceTable"]="program_course";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="program_course";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["programs"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["programs"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["programs"][$dIndex]["detailKeys"][]="ProgramID";

	
// tables which are master tables for current table (detail)
$masterTablesData["programs"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_programs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DipID,  BatchID";
$proto0["m_strFrom"] = "FROM student_info";
$proto0["m_strWhere"] = "(Status ='Active')";
$proto0["m_strOrderBy"] = "ORDER BY DipID,  BatchID";
$proto0["m_strTail"] = "GROUP BY BatchID";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "Status ='Active'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "student_info"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='Active'";
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
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "student_info";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "StudentID";
$proto10["m_columns"][] = "Name";
$proto10["m_columns"][] = "ICNO";
$proto10["m_columns"][] = "DOB";
$proto10["m_columns"][] = "MatricNo";
$proto10["m_columns"][] = "Nogilir";
$proto10["m_columns"][] = "Email";
$proto10["m_columns"][] = "Access";
$proto10["m_columns"][] = "Passw";
$proto10["m_columns"][] = "Type";
$proto10["m_columns"][] = "BranchID";
$proto10["m_columns"][] = "DateJoin";
$proto10["m_columns"][] = "Dateout";
$proto10["m_columns"][] = "Gender";
$proto10["m_columns"][] = "married";
$proto10["m_columns"][] = "Address1";
$proto10["m_columns"][] = "City";
$proto10["m_columns"][] = "Postcode";
$proto10["m_columns"][] = "StateID";
$proto10["m_columns"][] = "Country";
$proto10["m_columns"][] = "HomeTelephone";
$proto10["m_columns"][] = "MobileTelephone";
$proto10["m_columns"][] = "Nationality";
$proto10["m_columns"][] = "BatchID";
$proto10["m_columns"][] = "Intake";
$proto10["m_columns"][] = "Sponsor";
$proto10["m_columns"][] = "DipID";
$proto10["m_columns"][] = "Status";
$proto10["m_columns"][] = "Disability";
$proto10["m_columns"][] = "MedicalCondition";
$proto10["m_columns"][] = "race";
$proto10["m_columns"][] = "Religion";
$proto10["m_columns"][] = "Class";
$proto10["m_columns"][] = "Intake_Category";
$proto10["m_columns"][] = "f1_name";
$proto10["m_columns"][] = "f1_tel";
$proto10["m_columns"][] = "f1_relation";
$proto10["m_columns"][] = "f1_job";
$proto10["m_columns"][] = "f2_name";
$proto10["m_columns"][] = "f2_tel";
$proto10["m_columns"][] = "f2_relation";
$proto10["m_columns"][] = "f2_job";
$proto10["m_columns"][] = "blood";
$proto10["m_columns"][] = "hostel_in";
$proto10["m_columns"][] = "job";
$proto10["m_columns"][] = "al_certificate";
$proto10["m_columns"][] = "al_OJT";
$proto10["m_columns"][] = "al_license";
$proto10["m_columns"][] = "f_name";
$proto10["m_columns"][] = "f_tel";
$proto10["m_columns"][] = "f_ic";
$proto10["m_columns"][] = "f_address";
$proto10["m_columns"][] = "m_name";
$proto10["m_columns"][] = "m_tel";
$proto10["m_columns"][] = "m_ic";
$proto10["m_columns"][] = "m_address";
$proto10["m_columns"][] = "photo";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto13=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto13["m_column"]=$obj;
$obj = new SQLGroupByItem($proto13);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "DipID",
	"m_strTable" => "student_info"
));

$proto15["m_column"]=$obj;
$proto15["m_bAsc"] = 1;
$proto15["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto15);

$proto0["m_orderby"][]=$obj;					
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "student_info"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 1;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_programs = createSqlQuery_programs();
		$tdataprograms[".sqlquery"] = $queryData_programs;

$tableEvents["programs"] = new eventsBase;
$tdataprograms[".hasEvents"] = false;

$cipherer = new RunnerCipherer("programs");

?>