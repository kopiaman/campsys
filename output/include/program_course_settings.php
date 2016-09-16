<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprogram_course = array();
	$tdataprogram_course[".NumberOfChars"] = 80; 
	$tdataprogram_course[".ShortName"] = "program_course";
	$tdataprogram_course[".OwnerID"] = "";
	$tdataprogram_course[".OriginalTable"] = "program_course";

//	field labels
$fieldLabelsprogram_course = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprogram_course["English"] = array();
	$fieldToolTipsprogram_course["English"] = array();
	$fieldLabelsprogram_course["English"]["ProgramID"] = "Course";
	$fieldToolTipsprogram_course["English"]["ProgramID"] = "";
	$fieldLabelsprogram_course["English"]["CourseID"] = "Module";
	$fieldToolTipsprogram_course["English"]["CourseID"] = "";
	$fieldLabelsprogram_course["English"]["Semester"] = "Sem";
	$fieldToolTipsprogram_course["English"]["Semester"] = "";
	$fieldLabelsprogram_course["English"]["total_hour"] = "Total Hour";
	$fieldToolTipsprogram_course["English"]["total_hour"] = "";
	$fieldLabelsprogram_course["English"]["pcid"] = "Pcid";
	$fieldToolTipsprogram_course["English"]["pcid"] = "";
	$fieldLabelsprogram_course["English"]["BatchID"] = "Batch ID";
	$fieldToolTipsprogram_course["English"]["BatchID"] = "";
	$fieldLabelsprogram_course["English"]["credit"] = "Credit";
	$fieldToolTipsprogram_course["English"]["credit"] = "";
	if (count($fieldToolTipsprogram_course["English"]))
		$tdataprogram_course[".isUseToolTips"] = true;
}
	
	
	$tdataprogram_course[".NCSearch"] = true;



$tdataprogram_course[".shortTableName"] = "program_course";
$tdataprogram_course[".nSecOptions"] = 0;
$tdataprogram_course[".recsPerRowList"] = 1;
$tdataprogram_course[".mainTableOwnerID"] = "";
$tdataprogram_course[".moveNext"] = 1;
$tdataprogram_course[".nType"] = 0;

$tdataprogram_course[".strOriginalTableName"] = "program_course";




$tdataprogram_course[".showAddInPopup"] = false;

$tdataprogram_course[".showEditInPopup"] = false;

$tdataprogram_course[".showViewInPopup"] = false;

$tdataprogram_course[".fieldsForRegister"] = array();
	
$tdataprogram_course[".listAjax"] = false;

	$tdataprogram_course[".audit"] = true;

	$tdataprogram_course[".locking"] = false;

$tdataprogram_course[".listIcons"] = true;
$tdataprogram_course[".inlineEdit"] = true;
$tdataprogram_course[".inlineAdd"] = true;



$tdataprogram_course[".delete"] = true;

$tdataprogram_course[".showSimpleSearchOptions"] = true;

$tdataprogram_course[".showSearchPanel"] = true;

if (isMobile())
	$tdataprogram_course[".isUseAjaxSuggest"] = false;
else 
	$tdataprogram_course[".isUseAjaxSuggest"] = true;

$tdataprogram_course[".rowHighlite"] = true;

// button handlers file names

$tdataprogram_course[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprogram_course[".isUseTimeForSearch"] = false;




$tdataprogram_course[".allSearchFields"] = array();


$tdataprogram_course[".googleLikeFields"][] = "pcid";
$tdataprogram_course[".googleLikeFields"][] = "ProgramID";
$tdataprogram_course[".googleLikeFields"][] = "BatchID";
$tdataprogram_course[".googleLikeFields"][] = "CourseID";
$tdataprogram_course[".googleLikeFields"][] = "Semester";
$tdataprogram_course[".googleLikeFields"][] = "total_hour";
$tdataprogram_course[".googleLikeFields"][] = "credit";



$tdataprogram_course[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main


$tdataprogram_course[".totalsFields"][] = array(
	"fName" => "credit", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdataprogram_course[".totalsFields"][] = array(
	"fName" => "total_hour", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdataprogram_course[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprogram_course[".strOrderBy"] = $tstrOrderBy;

$tdataprogram_course[".orderindexes"] = array();

$tdataprogram_course[".sqlHead"] = "SELECT pcid,   ProgramID,   BatchID,   CourseID,   Semester,   total_hour,   credit";
$tdataprogram_course[".sqlFrom"] = "FROM program_course";
$tdataprogram_course[".sqlWhereExpr"] = "";
$tdataprogram_course[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprogram_course[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprogram_course[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprogram_course = array();
$tableKeysprogram_course[] = "pcid";
$tdataprogram_course[".Keys"] = $tableKeysprogram_course;

$tdataprogram_course[".listFields"] = array();
$tdataprogram_course[".listFields"][] = "CourseID";
$tdataprogram_course[".listFields"][] = "credit";
$tdataprogram_course[".listFields"][] = "Semester";
$tdataprogram_course[".listFields"][] = "total_hour";

$tdataprogram_course[".viewFields"] = array();

$tdataprogram_course[".addFields"] = array();

$tdataprogram_course[".inlineAddFields"] = array();
$tdataprogram_course[".inlineAddFields"][] = "CourseID";
$tdataprogram_course[".inlineAddFields"][] = "credit";
$tdataprogram_course[".inlineAddFields"][] = "Semester";
$tdataprogram_course[".inlineAddFields"][] = "total_hour";

$tdataprogram_course[".editFields"] = array();

$tdataprogram_course[".inlineEditFields"] = array();
$tdataprogram_course[".inlineEditFields"][] = "credit";
$tdataprogram_course[".inlineEditFields"][] = "Semester";
$tdataprogram_course[".inlineEditFields"][] = "total_hour";

$tdataprogram_course[".exportFields"] = array();

$tdataprogram_course[".printFields"] = array();

//	pcid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pcid";
	$fdata["GoodName"] = "pcid";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Pcid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "pcid"; 
		$fdata["FullName"] = "pcid";
	
		
		
				
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
	
		
		
	$tdataprogram_course["pcid"] = $fdata;
//	ProgramID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProgramID";
	$fdata["GoodName"] = "ProgramID";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Course"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ProgramID"; 
		$fdata["FullName"] = "ProgramID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		$fdata["CompatibilityMode"] = true; 
	
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataprogram_course["ProgramID"] = $fdata;
//	BatchID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BatchID";
	$fdata["GoodName"] = "BatchID";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Batch ID"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "BatchID"; 
		$fdata["FullName"] = "BatchID";
	
		
		
				
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
	
		
		
	$tdataprogram_course["BatchID"] = $fdata;
//	CourseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CourseID";
	$fdata["GoodName"] = "CourseID";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "CourseID"; 
		$fdata["FullName"] = "CourseID";
	
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
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "CourseID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Shortname";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_course["CourseID"] = $fdata;
//	Semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Semester";
	$fdata["GoodName"] = "Semester";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Sem"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "Semester"; 
		$fdata["FullName"] = "Semester";
	
		
		
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=32";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_course["Semester"] = $fdata;
//	total_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_hour";
	$fdata["GoodName"] = "total_hour";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Total Hour"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "total_hour"; 
		$fdata["FullName"] = "total_hour";
	
		
		
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
			$edata["EditParams"].= " maxlength=4";
	
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_course["total_hour"] = $fdata;
//	credit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "credit";
	$fdata["GoodName"] = "credit";
	$fdata["ownerTable"] = "program_course";
	$fdata["Label"] = "Credit"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "credit"; 
		$fdata["FullName"] = "credit";
	
		
		
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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:50px;";
	$edata["controlWidth"] = 50;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprogram_course["credit"] = $fdata;

	
$tables_data["program_course"]=&$tdataprogram_course;
$field_labels["program_course"] = &$fieldLabelsprogram_course;
$fieldToolTips["program_course"] = &$fieldToolTipsprogram_course;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["program_course"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["program_course"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Program_Batch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Program_Batch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["program_course"][$mIndex] = $masterParams;	
		$masterTablesData["program_course"][$mIndex]["masterKeys"][]="DipID";
		$masterTablesData["program_course"][$mIndex]["masterKeys"][]="BatchID";
		$masterTablesData["program_course"][$mIndex]["detailKeys"][]="ProgramID";
		$masterTablesData["program_course"][$mIndex]["detailKeys"][]="BatchID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_program_course()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pcid,   ProgramID,   BatchID,   CourseID,   Semester,   total_hour,   credit";
$proto0["m_strFrom"] = "FROM program_course";
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
	"m_strName" => "pcid",
	"m_strTable" => "program_course"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProgramID",
	"m_strTable" => "program_course"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "BatchID",
	"m_strTable" => "program_course"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "CourseID",
	"m_strTable" => "program_course"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Semester",
	"m_strTable" => "program_course"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "total_hour",
	"m_strTable" => "program_course"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "credit",
	"m_strTable" => "program_course"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "program_course";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "pcid";
$proto20["m_columns"][] = "ProgramID";
$proto20["m_columns"][] = "BatchID";
$proto20["m_columns"][] = "CourseID";
$proto20["m_columns"][] = "Semester";
$proto20["m_columns"][] = "total_hour";
$proto20["m_columns"][] = "credit";
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
$queryData_program_course = createSqlQuery_program_course();
							$tdataprogram_course[".sqlquery"] = $queryData_program_course;

include_once(getabspath("include/program_course_events.php"));
$tableEvents["program_course"] = new eventclass_program_course;
$tdataprogram_course[".hasEvents"] = true;

$cipherer = new RunnerCipherer("program_course");

?>