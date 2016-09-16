<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_compulsory_training = array();
	$tdatastudent_compulsory_training[".NumberOfChars"] = 80; 
	$tdatastudent_compulsory_training[".ShortName"] = "student_compulsory_training";
	$tdatastudent_compulsory_training[".OwnerID"] = "";
	$tdatastudent_compulsory_training[".OriginalTable"] = "student_compulsory_training";

//	field labels
$fieldLabelsstudent_compulsory_training = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_compulsory_training["English"] = array();
	$fieldToolTipsstudent_compulsory_training["English"] = array();
	$fieldLabelsstudent_compulsory_training["English"]["ID"] = "ID";
	$fieldToolTipsstudent_compulsory_training["English"]["ID"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["StudentID"] = "Student";
	$fieldToolTipsstudent_compulsory_training["English"]["StudentID"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["TrainingID"] = "Training Selection";
	$fieldToolTipsstudent_compulsory_training["English"]["TrainingID"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["Attendance"] = "Attendance";
	$fieldToolTipsstudent_compulsory_training["English"]["Attendance"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["Training_date"] = "Training Date";
	$fieldToolTipsstudent_compulsory_training["English"]["Training_date"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["Venue"] = "Venue";
	$fieldToolTipsstudent_compulsory_training["English"]["Venue"] = "";
	$fieldLabelsstudent_compulsory_training["English"]["Provider"] = "Provider";
	$fieldToolTipsstudent_compulsory_training["English"]["Provider"] = "";
	if (count($fieldToolTipsstudent_compulsory_training["English"]))
		$tdatastudent_compulsory_training[".isUseToolTips"] = true;
}
	
	



$tdatastudent_compulsory_training[".shortTableName"] = "student_compulsory_training";
$tdatastudent_compulsory_training[".nSecOptions"] = 0;
$tdatastudent_compulsory_training[".recsPerRowList"] = 1;
$tdatastudent_compulsory_training[".mainTableOwnerID"] = "";
$tdatastudent_compulsory_training[".moveNext"] = 1;
$tdatastudent_compulsory_training[".nType"] = 0;

$tdatastudent_compulsory_training[".strOriginalTableName"] = "student_compulsory_training";




$tdatastudent_compulsory_training[".showAddInPopup"] = false;

$tdatastudent_compulsory_training[".showEditInPopup"] = false;

$tdatastudent_compulsory_training[".showViewInPopup"] = false;

$tdatastudent_compulsory_training[".fieldsForRegister"] = array();
	
$tdatastudent_compulsory_training[".listAjax"] = false;

	$tdatastudent_compulsory_training[".audit"] = true;

	$tdatastudent_compulsory_training[".locking"] = false;

$tdatastudent_compulsory_training[".listIcons"] = true;




$tdatastudent_compulsory_training[".showSimpleSearchOptions"] = true;

$tdatastudent_compulsory_training[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_compulsory_training[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_compulsory_training[".isUseAjaxSuggest"] = true;

$tdatastudent_compulsory_training[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_compulsory_training[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_compulsory_training[".isUseTimeForSearch"] = false;




$tdatastudent_compulsory_training[".allSearchFields"] = array();

$tdatastudent_compulsory_training[".allSearchFields"][] = "Training_date";
$tdatastudent_compulsory_training[".allSearchFields"][] = "Venue";
$tdatastudent_compulsory_training[".allSearchFields"][] = "Provider";

$tdatastudent_compulsory_training[".googleLikeFields"][] = "ID";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "StudentID";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "TrainingID";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "Attendance";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "Training_date";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "Venue";
$tdatastudent_compulsory_training[".googleLikeFields"][] = "Provider";

$tdatastudent_compulsory_training[".panelSearchFields"][] = "ID";
$tdatastudent_compulsory_training[".panelSearchFields"][] = "StudentID";
$tdatastudent_compulsory_training[".panelSearchFields"][] = "TrainingID";
$tdatastudent_compulsory_training[".panelSearchFields"][] = "Attendance";

$tdatastudent_compulsory_training[".advSearchFields"][] = "Training_date";
$tdatastudent_compulsory_training[".advSearchFields"][] = "Venue";
$tdatastudent_compulsory_training[".advSearchFields"][] = "Provider";

$tdatastudent_compulsory_training[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_compulsory_training[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_compulsory_training[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_compulsory_training[".orderindexes"] = array();

$tdatastudent_compulsory_training[".sqlHead"] = "SELECT ID,   StudentID,   TrainingID,   Attendance,   Training_date,   Venue,   Provider";
$tdatastudent_compulsory_training[".sqlFrom"] = "FROM student_compulsory_training";
$tdatastudent_compulsory_training[".sqlWhereExpr"] = "";
$tdatastudent_compulsory_training[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_compulsory_training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_compulsory_training[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_compulsory_training = array();
$tableKeysstudent_compulsory_training[] = "ID";
$tdatastudent_compulsory_training[".Keys"] = $tableKeysstudent_compulsory_training;

$tdatastudent_compulsory_training[".listFields"] = array();
$tdatastudent_compulsory_training[".listFields"][] = "Provider";
$tdatastudent_compulsory_training[".listFields"][] = "Training_date";
$tdatastudent_compulsory_training[".listFields"][] = "Venue";
$tdatastudent_compulsory_training[".listFields"][] = "TrainingID";
$tdatastudent_compulsory_training[".listFields"][] = "Attendance";

$tdatastudent_compulsory_training[".viewFields"] = array();

$tdatastudent_compulsory_training[".addFields"] = array();

$tdatastudent_compulsory_training[".inlineAddFields"] = array();

$tdatastudent_compulsory_training[".editFields"] = array();

$tdatastudent_compulsory_training[".inlineEditFields"] = array();

$tdatastudent_compulsory_training[".exportFields"] = array();

$tdatastudent_compulsory_training[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "student_compulsory_training";
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
	
		
		
	$tdatastudent_compulsory_training["ID"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Student"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "StudentID"; 
		$fdata["FullName"] = "StudentID";
	
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
	
		
		
	$tdatastudent_compulsory_training["StudentID"] = $fdata;
//	TrainingID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TrainingID";
	$fdata["GoodName"] = "TrainingID";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Training Selection"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "TrainingID"; 
		$fdata["FullName"] = "TrainingID";
	
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
				if(strpos(GetUserPermissions("student_compulsory_training"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "TrainingID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "TrainingName";
	
		
	$edata["LookupTable"] = "training";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "Participant_Type='Student'";
	
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_compulsory_training["TrainingID"] = $fdata;
//	Attendance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Attendance";
	$fdata["GoodName"] = "Attendance";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Attendance"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Attendance"; 
		$fdata["FullName"] = "Attendance";
	
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
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yes";
	$edata["LookupValues"][] = "No";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_compulsory_training["Attendance"] = $fdata;
//	Training_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Training_date";
	$fdata["GoodName"] = "Training_date";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Training Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Training_date"; 
		$fdata["FullName"] = "Training_date";
	
		
		
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
	
		
		
	$tdatastudent_compulsory_training["Training_date"] = $fdata;
//	Venue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Venue";
	$fdata["GoodName"] = "Venue";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Venue"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Venue"; 
		$fdata["FullName"] = "Venue";
	
		
		
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
	
		
		
	$tdatastudent_compulsory_training["Venue"] = $fdata;
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "student_compulsory_training";
	$fdata["Label"] = "Provider"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Provider"; 
		$fdata["FullName"] = "Provider";
	
		
		
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
	
		
		
	$tdatastudent_compulsory_training["Provider"] = $fdata;

	
$tables_data["student_compulsory_training"]=&$tdatastudent_compulsory_training;
$field_labels["student_compulsory_training"] = &$fieldLabelsstudent_compulsory_training;
$fieldToolTips["student_compulsory_training"] = &$fieldToolTipsstudent_compulsory_training;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_compulsory_training"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_compulsory_training"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_info";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_info";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["student_compulsory_training"][$mIndex] = $masterParams;	
		$masterTablesData["student_compulsory_training"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_compulsory_training"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_compulsory_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   StudentID,   TrainingID,   Attendance,   Training_date,   Venue,   Provider";
$proto0["m_strFrom"] = "FROM student_compulsory_training";
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
	"m_strTable" => "student_compulsory_training"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_compulsory_training"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TrainingID",
	"m_strTable" => "student_compulsory_training"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Attendance",
	"m_strTable" => "student_compulsory_training"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Training_date",
	"m_strTable" => "student_compulsory_training"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Venue",
	"m_strTable" => "student_compulsory_training"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "student_compulsory_training"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "student_compulsory_training";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "StudentID";
$proto20["m_columns"][] = "TrainingID";
$proto20["m_columns"][] = "Attendance";
$proto20["m_columns"][] = "Training_date";
$proto20["m_columns"][] = "Venue";
$proto20["m_columns"][] = "Provider";
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
$queryData_student_compulsory_training = createSqlQuery_student_compulsory_training();
							$tdatastudent_compulsory_training[".sqlquery"] = $queryData_student_compulsory_training;

$tableEvents["student_compulsory_training"] = new eventsBase;
$tdatastudent_compulsory_training[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_compulsory_training");

?>