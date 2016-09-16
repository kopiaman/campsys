<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastudent_bill_statement = array();
	$tdatastudent_bill_statement[".NumberOfChars"] = 80; 
	$tdatastudent_bill_statement[".ShortName"] = "student_bill_statement";
	$tdatastudent_bill_statement[".OwnerID"] = "";
	$tdatastudent_bill_statement[".OriginalTable"] = "student_bill_statement";

//	field labels
$fieldLabelsstudent_bill_statement = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_bill_statement["English"] = array();
	$fieldToolTipsstudent_bill_statement["English"] = array();
	$fieldLabelsstudent_bill_statement["English"]["bid"] = "Bid";
	$fieldToolTipsstudent_bill_statement["English"]["bid"] = "";
	$fieldLabelsstudent_bill_statement["English"]["statement"] = "Statement";
	$fieldToolTipsstudent_bill_statement["English"]["statement"] = "";
	$fieldLabelsstudent_bill_statement["English"]["studentID"] = "Student ";
	$fieldToolTipsstudent_bill_statement["English"]["studentID"] = "";
	$fieldLabelsstudent_bill_statement["English"][""] = "";
	$fieldToolTipsstudent_bill_statement["English"][""] = "";
	$fieldLabelsstudent_bill_statement["English"][""] = "Upload Statement";
	$fieldToolTipsstudent_bill_statement["English"][""] = "";
	$fieldLabelsstudent_bill_statement["English"]["dates"] = "Date";
	$fieldToolTipsstudent_bill_statement["English"]["dates"] = "";
	if (count($fieldToolTipsstudent_bill_statement["English"]))
		$tdatastudent_bill_statement[".isUseToolTips"] = true;
}
	
	
	$tdatastudent_bill_statement[".NCSearch"] = true;



$tdatastudent_bill_statement[".shortTableName"] = "student_bill_statement";
$tdatastudent_bill_statement[".nSecOptions"] = 0;
$tdatastudent_bill_statement[".recsPerRowList"] = 1;
$tdatastudent_bill_statement[".mainTableOwnerID"] = "";
$tdatastudent_bill_statement[".moveNext"] = 1;
$tdatastudent_bill_statement[".nType"] = 0;

$tdatastudent_bill_statement[".strOriginalTableName"] = "student_bill_statement";




$tdatastudent_bill_statement[".showAddInPopup"] = false;

$tdatastudent_bill_statement[".showEditInPopup"] = false;

$tdatastudent_bill_statement[".showViewInPopup"] = false;

$tdatastudent_bill_statement[".fieldsForRegister"] = array();
	
$tdatastudent_bill_statement[".listAjax"] = false;

	$tdatastudent_bill_statement[".audit"] = false;

	$tdatastudent_bill_statement[".locking"] = false;

$tdatastudent_bill_statement[".listIcons"] = true;
$tdatastudent_bill_statement[".inlineEdit"] = true;
$tdatastudent_bill_statement[".inlineAdd"] = true;



$tdatastudent_bill_statement[".delete"] = true;

$tdatastudent_bill_statement[".showSimpleSearchOptions"] = false;

$tdatastudent_bill_statement[".showSearchPanel"] = true;

if (isMobile())
	$tdatastudent_bill_statement[".isUseAjaxSuggest"] = false;
else 
	$tdatastudent_bill_statement[".isUseAjaxSuggest"] = true;

$tdatastudent_bill_statement[".rowHighlite"] = true;

// button handlers file names

$tdatastudent_bill_statement[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_bill_statement[".isUseTimeForSearch"] = false;




$tdatastudent_bill_statement[".allSearchFields"] = array();


$tdatastudent_bill_statement[".googleLikeFields"][] = "bid";
$tdatastudent_bill_statement[".googleLikeFields"][] = "studentID";
$tdatastudent_bill_statement[".googleLikeFields"][] = "statement";
$tdatastudent_bill_statement[".googleLikeFields"][] = "dates";



$tdatastudent_bill_statement[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastudent_bill_statement[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastudent_bill_statement[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_bill_statement[".orderindexes"] = array();

$tdatastudent_bill_statement[".sqlHead"] = "SELECT bid,   StudentID,   `statement`,   dates";
$tdatastudent_bill_statement[".sqlFrom"] = "FROM student_bill_statement";
$tdatastudent_bill_statement[".sqlWhereExpr"] = "";
$tdatastudent_bill_statement[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_bill_statement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_bill_statement[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstudent_bill_statement = array();
$tableKeysstudent_bill_statement[] = "bid";
$tdatastudent_bill_statement[".Keys"] = $tableKeysstudent_bill_statement;

$tdatastudent_bill_statement[".listFields"] = array();
$tdatastudent_bill_statement[".listFields"][] = "dates";
$tdatastudent_bill_statement[".listFields"][] = "statement";

$tdatastudent_bill_statement[".viewFields"] = array();

$tdatastudent_bill_statement[".addFields"] = array();

$tdatastudent_bill_statement[".inlineAddFields"] = array();
$tdatastudent_bill_statement[".inlineAddFields"][] = "dates";
$tdatastudent_bill_statement[".inlineAddFields"][] = "statement";

$tdatastudent_bill_statement[".editFields"] = array();

$tdatastudent_bill_statement[".inlineEditFields"] = array();
$tdatastudent_bill_statement[".inlineEditFields"][] = "dates";
$tdatastudent_bill_statement[".inlineEditFields"][] = "statement";

$tdatastudent_bill_statement[".exportFields"] = array();

$tdatastudent_bill_statement[".printFields"] = array();

//	bid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "bid";
	$fdata["GoodName"] = "bid";
	$fdata["ownerTable"] = "student_bill_statement";
	$fdata["Label"] = "Bid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "bid"; 
		$fdata["FullName"] = "bid";
	
		
		
				
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
	
		
		
	$tdatastudent_bill_statement["bid"] = $fdata;
//	studentID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "studentID";
	$fdata["GoodName"] = "studentID";
	$fdata["ownerTable"] = "student_bill_statement";
	$fdata["Label"] = "Student "; 
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
	
		
		
	$tdatastudent_bill_statement["studentID"] = $fdata;
//	statement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "statement";
	$fdata["GoodName"] = "statement";
	$fdata["ownerTable"] = "student_bill_statement";
	$fdata["Label"] = "Statement"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		
		
		
		$fdata["strField"] = "statement"; 
		$fdata["FullName"] = "`statement`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files/account";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Document Download");
	
		
		
		
								$vdata["ShowIcon"] = true; 
				
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|doc";
						$edata["acceptFileTypes"] .= "|docx";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|pdf";
						$edata["acceptFileTypes"] .= "|png";
						$edata["acceptFileTypes"] .= "|rtf";
						$edata["acceptFileTypes"] .= "|txt";
						$edata["acceptFileTypes"] .= "|xls";
						$edata["acceptFileTypes"] .= "|xlsx";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_bill_statement["statement"] = $fdata;
//	dates
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dates";
	$fdata["GoodName"] = "dates";
	$fdata["ownerTable"] = "student_bill_statement";
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 1; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastudent_bill_statement["dates"] = $fdata;

	
$tables_data["student_bill_statement"]=&$tdatastudent_bill_statement;
$field_labels["student_bill_statement"] = &$fieldLabelsstudent_bill_statement;
$fieldToolTips["student_bill_statement"] = &$fieldToolTipsstudent_bill_statement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["student_bill_statement"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["student_bill_statement"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="student_info";
	$masterParams["mDataSourceTable"]="student_bill_list2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student_bill_list2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["student_bill_statement"][$mIndex] = $masterParams;	
		$masterTablesData["student_bill_statement"][$mIndex]["masterKeys"][]="StudentID";
		$masterTablesData["student_bill_statement"][$mIndex]["detailKeys"][]="StudentID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_student_bill_statement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "bid,   StudentID,   `statement`,   dates";
$proto0["m_strFrom"] = "FROM student_bill_statement";
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
	"m_strName" => "bid",
	"m_strTable" => "student_bill_statement"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StudentID",
	"m_strTable" => "student_bill_statement"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "statement",
	"m_strTable" => "student_bill_statement"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "dates",
	"m_strTable" => "student_bill_statement"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "student_bill_statement";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "bid";
$proto14["m_columns"][] = "StudentID";
$proto14["m_columns"][] = "statement";
$proto14["m_columns"][] = "dates";
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
$queryData_student_bill_statement = createSqlQuery_student_bill_statement();
				$tdatastudent_bill_statement[".sqlquery"] = $queryData_student_bill_statement;

$tableEvents["student_bill_statement"] = new eventsBase;
$tdatastudent_bill_statement[".hasEvents"] = false;

$cipherer = new RunnerCipherer("student_bill_statement");

?>