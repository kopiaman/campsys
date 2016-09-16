<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_school = array();
	$tdatastudent_school[".NumberOfChars"] = 80; 
	$tdatastudent_school[".ShortName"] = "student_school";
	$tdatastudent_school[".OwnerID"] = "";
	$tdatastudent_school[".OriginalTable"] = "student_school";

//	field labels
$fieldLabelsstudent_school = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_school["English"] = array();
	$fieldToolTipsstudent_school["English"] = array();
	$fieldLabelsstudent_school["English"]["studentID"] = "Student";
	$fieldToolTipsstudent_school["English"]["studentID"] = "";
	$fieldLabelsstudent_school["English"]["subject"] = "Subject";
	$fieldToolTipsstudent_school["English"]["subject"] = "";
	$fieldLabelsstudent_school["English"]["grade"] = "Grade";
	$fieldToolTipsstudent_school["English"]["grade"] = "";
	$fieldLabelsstudent_school["English"]["ID"] = "ID";
	$fieldToolTipsstudent_school["English"]["ID"] = "";
	if (count($fieldToolTipsstudent_school["English"]))
		$tdatastudent_school[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_school[".NCSearch"] = true;



$tdatastudent_school[".shortTableName"] = "student_school";
$tdatastudent_school[".nSecOptions"] = 0;
$tdatastudent_school[".recsPerRowList"] = 1;
$tdatastudent_school[".mainTableOwnerID"] = "";
$tdatastudent_school[".moveNext"] = 1;
$tdatastudent_school[".nType"] = 0;

$tdatastudent_school[".strOriginalTableName"] = "student_school";




$tdatastudent_school[".showAddInPopup"] = false;

$tdatastudent_school[".showEditInPopup"] = false;

$tdatastudent_school[".showViewInPopup"] = false;

$tdatastudent_school[".fieldsForRegister"] = array();
	
$tdatastudent_school[".listAjax"] = false;

	$tdatastudent_school[".audit"] = true;

	$tdatastudent_school[".locking"] = false;

$tdatastudent_school[".listIcons"] = true;
$tdatastudent_school[".edit"] = true;
$tdatastudent_school[".inlineEdit"] = true;
$tdatastudent_school[".inlineAdd"] = true;



$tdatastudent_school[".delete"] = true;

$tdatastudent_school[".showSimpleSearchOptions"] = true;

$tdatastudent_school[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_school[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_school[".isUseAjaxSuggest"] = true;

$tdatastudent_school[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_school[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_school[".isUseTimeForSearch"] = false;




$tdatastudent_school[".allSearchFields"] = array();





$tdatastudent_school[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_school[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_school[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_school[".orderindexes"] = array();

$tdatastudent_school[".sqlHead"] = "SELECT studentID,   subject,   grade,   ID";
$tdatastudent_school[".sqlFrom"] = "FROM student_school";
$tdatastudent_school[".sqlWhereExpr"] = "";
$tdatastudent_school[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_school[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_school[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_school = array();
$tableKeysstudent_school[] = "ID";
$tdatastudent_school[".Keys"] = $tableKeysstudent_school;

$tdatastudent_school[".listFields"] = array();
$tdatastudent_school[".listFields"][] = "subject";
$tdatastudent_school[".listFields"][] = "grade";

$tdatastudent_school[".viewFields"] = array();

$tdatastudent_school[".addFields"] = array();
$tdatastudent_school[".addFields"][] = "subject";
$tdatastudent_school[".addFields"][] = "grade";

$tdatastudent_school[".inlineAddFields"] = array();
$tdatastudent_school[".inlineAddFields"][] = "subject";
$tdatastudent_school[".inlineAddFields"][] = "grade";

$tdatastudent_school[".editFields"] = array();
$tdatastudent_school[".editFields"][] = "subject";
$tdatastudent_school[".editFields"][] = "grade";

$tdatastudent_school[".inlineEditFields"] = array();
$tdatastudent_school[".inlineEditFields"][] = "subject";
$tdatastudent_school[".inlineEditFields"][] = "grade";

$tdatastudent_school[".exportFields"] = array();

$tdatastudent_school[".printFields"] = array();

//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_school";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "studentID"; 
		$fdata["FullName"] = "studentID";
	
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
	
		
		
	$tdatastudent_school["studentID"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "student_school";
	$fdata["Label"] = "Subject"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "subject"; 
		$fdata["FullName"] = "subject";
	
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
				if(strpos(GetUserPermissions("student_school"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "Field_Name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Field_Name";
	
		
	$edata["LookupTable"] = "setting";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Class=11";
	
		
		
		$edata["AllowToAdd"] = true; 
	
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_school["subject"] = $fdata;
//	grade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "grade";
	$fdata["GoodName"] = "grade";
	$fdata["ownerTable"] = "student_school";
	$fdata["Label"] = "Grade"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "grade"; 
		$fdata["FullName"] = "grade";
	
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
			$edata["EditParams"].= " maxlength=4";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_school["grade"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_school";
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
	
		
		
	$tdatastudent_school["ID"] = $fdata;

	
$tables_data["student_school"]=&$tdatastudent_school;
$field_labels["student_school"] = &$fieldLabelsstudent_school;
$fieldToolTips["student_school"] = &$fieldToolTipsstudent_school;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_school"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_school"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_school"][$mIndex] = $masterParams;	
		$masterTablesData["student_school"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_school"][$mIndex]["detailKeys"][]="studentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_school()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "studentID,   subject,   grade,   ID";
$proto0["m_strFrom"] = "FROM student_school";
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
	"m_strName" => "studentID",
	"m_strTable" => "student_school"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "student_school"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "grade",
	"m_strTable" => "student_school"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "student_school"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "student_school";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "studentID";
$proto14["m_columns"][] = "subject";
$proto14["m_columns"][] = "grade";
$proto14["m_columns"][] = "ID";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_school = createSqlQuery_student_school();
				$tdatastudent_school[".sqlquery"] = $queryData_student_school;

$tableEvents["student_school"] = new eventsBase;
$tdatastudent_school[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_school");

?>