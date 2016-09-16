<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_absent = array();
	$tdatastudent_absent[".NumberOfChars"] = 80; 
	$tdatastudent_absent[".ShortName"] = "student_absent";
	$tdatastudent_absent[".OwnerID"] = "";
	$tdatastudent_absent[".OriginalTable"] = "student_absent";

//	field labels
$fieldLabelsstudent_absent = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_absent["English"] = array();
	$fieldToolTipsstudent_absent["English"] = array();
	$fieldLabelsstudent_absent["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_absent["English"]["StudentID"] = "";
	$fieldLabelsstudent_absent["English"]["abid"] = "Abid";
	$fieldToolTipsstudent_absent["English"]["abid"] = "";
	$fieldLabelsstudent_absent["English"]["courseID"] = "Module";
	$fieldToolTipsstudent_absent["English"]["courseID"] = "";
	$fieldLabelsstudent_absent["English"]["dates"] = "Date";
	$fieldToolTipsstudent_absent["English"]["dates"] = "";
	$fieldLabelsstudent_absent["English"]["reason"] = "Reason";
	$fieldToolTipsstudent_absent["English"]["reason"] = "";
	if (count($fieldToolTipsstudent_absent["English"]))
		$tdatastudent_absent[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_absent[".NCSearch"] = true;



$tdatastudent_absent[".shortTableName"] = "student_absent";
$tdatastudent_absent[".nSecOptions"] = 0;
$tdatastudent_absent[".recsPerRowList"] = 1;
$tdatastudent_absent[".mainTableOwnerID"] = "";
$tdatastudent_absent[".moveNext"] = 1;
$tdatastudent_absent[".nType"] = 0;

$tdatastudent_absent[".strOriginalTableName"] = "student_absent";




$tdatastudent_absent[".showAddInPopup"] = false;

$tdatastudent_absent[".showEditInPopup"] = false;

$tdatastudent_absent[".showViewInPopup"] = false;

$tdatastudent_absent[".fieldsForRegister"] = array();
	
$tdatastudent_absent[".listAjax"] = false;

	$tdatastudent_absent[".audit"] = true;

	$tdatastudent_absent[".locking"] = false;

$tdatastudent_absent[".listIcons"] = true;
$tdatastudent_absent[".inlineEdit"] = true;
$tdatastudent_absent[".inlineAdd"] = true;



$tdatastudent_absent[".delete"] = true;

$tdatastudent_absent[".showSimpleSearchOptions"] = true;

$tdatastudent_absent[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_absent[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_absent[".isUseAjaxSuggest"] = true;

$tdatastudent_absent[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_absent[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_absent[".isUseTimeForSearch"] = false;




$tdatastudent_absent[".allSearchFields"] = array();


$tdatastudent_absent[".googleLikeFields"][] = "StudentID";

$tdatastudent_absent[".panelSearchFields"][] = "StudentID";
$tdatastudent_absent[".panelSearchFields"][] = "courseID";
$tdatastudent_absent[".panelSearchFields"][] = "dates";
$tdatastudent_absent[".panelSearchFields"][] = "reason";


$tdatastudent_absent[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_absent[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_absent[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_absent[".orderindexes"] = array();

$tdatastudent_absent[".sqlHead"] = "SELECT abid,   StudentID,   courseID,   dates,   reason";
$tdatastudent_absent[".sqlFrom"] = "FROM student_absent";
$tdatastudent_absent[".sqlWhereExpr"] = "";
$tdatastudent_absent[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_absent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_absent[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_absent = array();
$tableKeysstudent_absent[] = "abid";
$tdatastudent_absent[".Keys"] = $tableKeysstudent_absent;

$tdatastudent_absent[".listFields"] = array();
$tdatastudent_absent[".listFields"][] = "courseID";
$tdatastudent_absent[".listFields"][] = "dates";
$tdatastudent_absent[".listFields"][] = "reason";

$tdatastudent_absent[".viewFields"] = array();

$tdatastudent_absent[".addFields"] = array();

$tdatastudent_absent[".inlineAddFields"] = array();
$tdatastudent_absent[".inlineAddFields"][] = "courseID";
$tdatastudent_absent[".inlineAddFields"][] = "dates";
$tdatastudent_absent[".inlineAddFields"][] = "reason";

$tdatastudent_absent[".editFields"] = array();

$tdatastudent_absent[".inlineEditFields"] = array();
$tdatastudent_absent[".inlineEditFields"][] = "courseID";
$tdatastudent_absent[".inlineEditFields"][] = "dates";
$tdatastudent_absent[".inlineEditFields"][] = "reason";

$tdatastudent_absent[".exportFields"] = array();

$tdatastudent_absent[".printFields"] = array();

//	abid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "abid";
	$fdata["GoodName"] = "abid";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Abid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "abid"; 
		$fdata["FullName"] = "abid";
	
		
		
				
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
	
		
		
	$tdatastudent_absent["abid"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
		
		
				
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
				if(strpos(GetUserPermissions("student_absent"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "StudentID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "student_info";
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
	
		
		
	$tdatastudent_absent["StudentID"] = $fdata;
//	courseID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "courseID";
	$fdata["GoodName"] = "courseID";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Module"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "courseID"; 
		$fdata["FullName"] = "courseID";
	
		
		
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
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "course";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		$edata["inputStyle"] = " width:120px;";
	$edata["controlWidth"] = 120;
	
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_absent["courseID"] = $fdata;
//	dates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dates";
	$fdata["GoodName"] = "dates";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "dates"; 
		$fdata["FullName"] = "dates";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_absent["dates"] = $fdata;
//	reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "reason";
	$fdata["GoodName"] = "reason";
	$fdata["ownerTable"] = "student_absent";
	$fdata["Label"] = "Reason"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "reason"; 
		$fdata["FullName"] = "reason";
	
		
		
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 201;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "class=23";
	
		
		
		
				
	
	
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
	
		
		
	$tdatastudent_absent["reason"] = $fdata;

	
$tables_data["student_absent"]=&$tdatastudent_absent;
$field_labels["student_absent"] = &$fieldLabelsstudent_absent;
$fieldToolTips["student_absent"] = &$fieldToolTipsstudent_absent;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_absent"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_absent"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="Report_Attendance_Student_List";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Report_Attendance_Student_List";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_absent"][$mIndex] = $masterParams;	
		$masterTablesData["student_absent"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_absent"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_absent()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "abid,   StudentID,   courseID,   dates,   reason";
$proto0["m_strFrom"] = "FROM student_absent";
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
	"m_strName" => "abid",
	"m_strTable" => "student_absent"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_absent"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "courseID",
	"m_strTable" => "student_absent"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "student_absent"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "reason",
	"m_strTable" => "student_absent"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "student_absent";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "abid";
$proto16["m_columns"][] = "StudentID";
$proto16["m_columns"][] = "courseID";
$proto16["m_columns"][] = "dates";
$proto16["m_columns"][] = "reason";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_absent = createSqlQuery_student_absent();
					$tdatastudent_absent[".sqlquery"] = $queryData_student_absent;

$tableEvents["student_absent"] = new eventsBase;
$tdatastudent_absent[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_absent");

?>