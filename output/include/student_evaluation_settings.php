<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_evaluation = array();
	$tdatastudent_evaluation[".NumberOfChars"] = 80; 
	$tdatastudent_evaluation[".ShortName"] = "student_evaluation";
	$tdatastudent_evaluation[".OwnerID"] = "";
	$tdatastudent_evaluation[".OriginalTable"] = "student_evaluation";

//	field labels
$fieldLabelsstudent_evaluation = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_evaluation["English"] = array();
	$fieldToolTipsstudent_evaluation["English"] = array();
	$fieldLabelsstudent_evaluation["English"]["id"] = "Id";
	$fieldToolTipsstudent_evaluation["English"]["id"] = "";
	$fieldLabelsstudent_evaluation["English"]["as_comment"] = "Comment";
	$fieldToolTipsstudent_evaluation["English"]["as_comment"] = "";
	$fieldLabelsstudent_evaluation["English"]["result"] = "Result";
	$fieldToolTipsstudent_evaluation["English"]["result"] = "";
	$fieldLabelsstudent_evaluation["English"]["StudentID"] = "Student ID";
	$fieldToolTipsstudent_evaluation["English"]["StudentID"] = "";
	$fieldLabelsstudent_evaluation["English"]["as_date"] = "Evaluation Date";
	$fieldToolTipsstudent_evaluation["English"]["as_date"] = "";
	$fieldLabelsstudent_evaluation["English"]["eid"] = "Task No";
	$fieldToolTipsstudent_evaluation["English"]["eid"] = "";
	if (count($fieldToolTipsstudent_evaluation["English"]))
		$tdatastudent_evaluation[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_evaluation[".NCSearch"] = true;



$tdatastudent_evaluation[".shortTableName"] = "student_evaluation";
$tdatastudent_evaluation[".nSecOptions"] = 0;
$tdatastudent_evaluation[".recsPerRowList"] = 1;
$tdatastudent_evaluation[".mainTableOwnerID"] = "";
$tdatastudent_evaluation[".moveNext"] = 1;
$tdatastudent_evaluation[".nType"] = 0;

$tdatastudent_evaluation[".strOriginalTableName"] = "student_evaluation";




$tdatastudent_evaluation[".showAddInPopup"] = false;

$tdatastudent_evaluation[".showEditInPopup"] = false;

$tdatastudent_evaluation[".showViewInPopup"] = false;

$tdatastudent_evaluation[".fieldsForRegister"] = array();
	
$tdatastudent_evaluation[".listAjax"] = false;

	$tdatastudent_evaluation[".audit"] = true;

	$tdatastudent_evaluation[".locking"] = false;

$tdatastudent_evaluation[".listIcons"] = true;
$tdatastudent_evaluation[".inlineEdit"] = true;
$tdatastudent_evaluation[".inlineAdd"] = true;



$tdatastudent_evaluation[".delete"] = true;

$tdatastudent_evaluation[".showSimpleSearchOptions"] = true;

$tdatastudent_evaluation[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_evaluation[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_evaluation[".isUseAjaxSuggest"] = true;

$tdatastudent_evaluation[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_evaluation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_evaluation[".isUseTimeForSearch"] = false;




$tdatastudent_evaluation[".allSearchFields"] = array();

$tdatastudent_evaluation[".allSearchFields"][] = "eid";
$tdatastudent_evaluation[".allSearchFields"][] = "result";
$tdatastudent_evaluation[".allSearchFields"][] = "as_date";
$tdatastudent_evaluation[".allSearchFields"][] = "as_comment";

$tdatastudent_evaluation[".googleLikeFields"][] = "id";
$tdatastudent_evaluation[".googleLikeFields"][] = "eid";
$tdatastudent_evaluation[".googleLikeFields"][] = "as_comment";
$tdatastudent_evaluation[".googleLikeFields"][] = "result";
$tdatastudent_evaluation[".googleLikeFields"][] = "StudentID";
$tdatastudent_evaluation[".googleLikeFields"][] = "as_date";


$tdatastudent_evaluation[".advSearchFields"][] = "eid";
$tdatastudent_evaluation[".advSearchFields"][] = "result";
$tdatastudent_evaluation[".advSearchFields"][] = "as_date";
$tdatastudent_evaluation[".advSearchFields"][] = "as_comment";

$tdatastudent_evaluation[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_evaluation[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_evaluation[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_evaluation[".orderindexes"] = array();

$tdatastudent_evaluation[".sqlHead"] = "SELECT id,   eid,   as_comment,   `result`,   StudentID,   as_date";
$tdatastudent_evaluation[".sqlFrom"] = "FROM student_evaluation";
$tdatastudent_evaluation[".sqlWhereExpr"] = "";
$tdatastudent_evaluation[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_evaluation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_evaluation[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_evaluation = array();
$tableKeysstudent_evaluation[] = "id";
$tdatastudent_evaluation[".Keys"] = $tableKeysstudent_evaluation;

$tdatastudent_evaluation[".listFields"] = array();
$tdatastudent_evaluation[".listFields"][] = "eid";
$tdatastudent_evaluation[".listFields"][] = "result";
$tdatastudent_evaluation[".listFields"][] = "as_date";
$tdatastudent_evaluation[".listFields"][] = "as_comment";

$tdatastudent_evaluation[".viewFields"] = array();

$tdatastudent_evaluation[".addFields"] = array();

$tdatastudent_evaluation[".inlineAddFields"] = array();
$tdatastudent_evaluation[".inlineAddFields"][] = "eid";
$tdatastudent_evaluation[".inlineAddFields"][] = "result";
$tdatastudent_evaluation[".inlineAddFields"][] = "as_date";
$tdatastudent_evaluation[".inlineAddFields"][] = "as_comment";

$tdatastudent_evaluation[".editFields"] = array();

$tdatastudent_evaluation[".inlineEditFields"] = array();
$tdatastudent_evaluation[".inlineEditFields"][] = "eid";
$tdatastudent_evaluation[".inlineEditFields"][] = "result";
$tdatastudent_evaluation[".inlineEditFields"][] = "as_date";
$tdatastudent_evaluation[".inlineEditFields"][] = "as_comment";

$tdatastudent_evaluation[".exportFields"] = array();

$tdatastudent_evaluation[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Id"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
		$fdata["FullName"] = "id";
	
		
		
				
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
	
		
		
	$tdatastudent_evaluation["id"] = $fdata;
//	eid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eid";
	$fdata["GoodName"] = "eid";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Task No"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "eid"; 
		$fdata["FullName"] = "eid";
	
		
		
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
								$edata["LookupType"] = 1;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				if(strpos(GetUserPermissions("student_evaluation"), 'S') !== false)
		$edata["LCType"] = 2;
	else 
		$edata["LCType"] = 0;
			
		
			
	$edata["LinkField"] = "eid";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "eid";
	
		
	$edata["LookupTable"] = "eva_ass_topic";
	$edata["LookupOrderBy"] = "";
	
		
		$edata["LookupWhere"] = "types='Practical'";
	
		
		
		
		$edata["SimpleAdd"] = true;
			
	
	
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
	
		
		
	$tdatastudent_evaluation["eid"] = $fdata;
//	as_comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "as_comment";
	$fdata["GoodName"] = "as_comment";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Comment"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "as_comment"; 
		$fdata["FullName"] = "as_comment";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_evaluation["as_comment"] = $fdata;
//	result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "result";
	$fdata["GoodName"] = "result";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Result"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "result"; 
		$fdata["FullName"] = "`result`";
	
		
		
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
	
		
		
	$tdatastudent_evaluation["result"] = $fdata;
//	StudentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "StudentID";
	$fdata["GoodName"] = "StudentID";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Student ID"; 
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
	
		
		
	$tdatastudent_evaluation["StudentID"] = $fdata;
//	as_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "as_date";
	$fdata["GoodName"] = "as_date";
	$fdata["ownerTable"] = "student_evaluation";
	$fdata["Label"] = "Evaluation Date"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "as_date"; 
		$fdata["FullName"] = "as_date";
	
		
		
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
	
		
		
		$edata["DateEditType"] = 11; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		$edata["inputStyle"] = " width:40px;";
	$edata["controlWidth"] = 40;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_evaluation["as_date"] = $fdata;

	
$tables_data["student_evaluation"]=&$tdatastudent_evaluation;
$field_labels["student_evaluation"] = &$fieldLabelsstudent_evaluation;
$fieldToolTips["student_evaluation"] = &$fieldToolTipsstudent_evaluation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_evaluation"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_evaluation"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_evaluation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   eid,   as_comment,   `result`,   StudentID,   as_date";
$proto0["m_strFrom"] = "FROM student_evaluation";
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
	"m_strTable" => "student_evaluation"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "eid",
	"m_strTable" => "student_evaluation"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "as_comment",
	"m_strTable" => "student_evaluation"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "result",
	"m_strTable" => "student_evaluation"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_evaluation"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "as_date",
	"m_strTable" => "student_evaluation"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "student_evaluation";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "eid";
$proto18["m_columns"][] = "as_comment";
$proto18["m_columns"][] = "result";
$proto18["m_columns"][] = "StudentID";
$proto18["m_columns"][] = "as_date";
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
$queryData_student_evaluation = createSqlQuery_student_evaluation();
						$tdatastudent_evaluation[".sqlquery"] = $queryData_student_evaluation;

$tableEvents["student_evaluation"] = new eventsBase;
$tdatastudent_evaluation[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_evaluation");

?>