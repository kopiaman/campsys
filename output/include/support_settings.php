<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasupport = array();
	$tdatasupport[".NumberOfChars"] = 80; 
	$tdatasupport[".ShortName"] = "support";
	$tdatasupport[".OwnerID"] = "staff";
	$tdatasupport[".OriginalTable"] = "support";

//	field labels
$fieldLabelssupport = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssupport["English"] = array();
	$fieldToolTipssupport["English"] = array();
	$fieldLabelssupport["English"]["sid"] = "Sid";
	$fieldToolTipssupport["English"]["sid"] = "";
	$fieldLabelssupport["English"]["topic"] = "Topic";
	$fieldToolTipssupport["English"]["topic"] = "";
	$fieldLabelssupport["English"]["staff"] = "Requestor";
	$fieldToolTipssupport["English"]["staff"] = "";
	$fieldLabelssupport["English"]["sstatus"] = "Status";
	$fieldToolTipssupport["English"]["sstatus"] = "";
	$fieldLabelssupport["English"]["inquiry"] = "Inquiry";
	$fieldToolTipssupport["English"]["inquiry"] = "";
	$fieldLabelssupport["English"]["answer"] = "Answer";
	$fieldToolTipssupport["English"]["answer"] = "";
	$fieldLabelssupport["English"]["sdate"] = "Date";
	$fieldToolTipssupport["English"]["sdate"] = "";
	$fieldLabelssupport["English"]["stitle"] = "Title";
	$fieldToolTipssupport["English"]["stitle"] = "";
	$fieldLabelssupport["English"]["attach"] = "Attachment";
	$fieldToolTipssupport["English"]["attach"] = "";
	$fieldLabelssupport["English"]["attachAns"] = "Attachment Answer";
	$fieldToolTipssupport["English"]["attachAns"] = "";
	if (count($fieldToolTipssupport["English"]))
		$tdatasupport[".isUseToolTips"] = true;
}
	
	
	$tdatasupport[".NCSearch"] = true;



$tdatasupport[".shortTableName"] = "support";
$tdatasupport[".nSecOptions"] = 1;
$tdatasupport[".recsPerRowList"] = 1;
$tdatasupport[".mainTableOwnerID"] = "staff";
$tdatasupport[".moveNext"] = 1;
$tdatasupport[".nType"] = 0;

$tdatasupport[".strOriginalTableName"] = "support";




$tdatasupport[".showAddInPopup"] = false;

$tdatasupport[".showEditInPopup"] = false;

$tdatasupport[".showViewInPopup"] = false;

$tdatasupport[".fieldsForRegister"] = array();
	
$tdatasupport[".listAjax"] = false;

	$tdatasupport[".audit"] = false;

	$tdatasupport[".locking"] = false;

$tdatasupport[".listIcons"] = true;
$tdatasupport[".edit"] = true;
$tdatasupport[".view"] = true;



$tdatasupport[".delete"] = true;

$tdatasupport[".showSimpleSearchOptions"] = true;

$tdatasupport[".showSearchPanel"] = true;

if (isMobile())
	$tdatasupport[".isUseAjaxSuggest"] = false;
else 
	$tdatasupport[".isUseAjaxSuggest"] = true;

$tdatasupport[".rowHighlite"] = true;

// button handlers file names

$tdatasupport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasupport[".isUseTimeForSearch"] = false;




$tdatasupport[".allSearchFields"] = array();

$tdatasupport[".allSearchFields"][] = "sstatus";
$tdatasupport[".allSearchFields"][] = "staff";
$tdatasupport[".allSearchFields"][] = "topic";

$tdatasupport[".googleLikeFields"][] = "sid";
$tdatasupport[".googleLikeFields"][] = "topic";
$tdatasupport[".googleLikeFields"][] = "staff";
$tdatasupport[".googleLikeFields"][] = "inquiry";
$tdatasupport[".googleLikeFields"][] = "sstatus";
$tdatasupport[".googleLikeFields"][] = "answer";
$tdatasupport[".googleLikeFields"][] = "sdate";
$tdatasupport[".googleLikeFields"][] = "stitle";
$tdatasupport[".googleLikeFields"][] = "attach";
$tdatasupport[".googleLikeFields"][] = "attachAns";


$tdatasupport[".advSearchFields"][] = "sstatus";
$tdatasupport[".advSearchFields"][] = "staff";
$tdatasupport[".advSearchFields"][] = "topic";

$tdatasupport[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasupport[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY sid DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasupport[".strOrderBy"] = $tstrOrderBy;

$tdatasupport[".orderindexes"] = array();
$tdatasupport[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "sid");

$tdatasupport[".sqlHead"] = "SELECT sid,  topic,  staff,  inquiry,  sstatus,  answer,  sdate,  stitle,  attach,  attachAns";
$tdatasupport[".sqlFrom"] = "FROM support";
$tdatasupport[".sqlWhereExpr"] = "";
$tdatasupport[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasupport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasupport[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssupport = array();
$tableKeyssupport[] = "sid";
$tdatasupport[".Keys"] = $tableKeyssupport;

$tdatasupport[".listFields"] = array();
$tdatasupport[".listFields"][] = "sdate";
$tdatasupport[".listFields"][] = "sstatus";
$tdatasupport[".listFields"][] = "staff";
$tdatasupport[".listFields"][] = "topic";
$tdatasupport[".listFields"][] = "stitle";

$tdatasupport[".viewFields"] = array();
$tdatasupport[".viewFields"][] = "sdate";
$tdatasupport[".viewFields"][] = "sstatus";
$tdatasupport[".viewFields"][] = "staff";
$tdatasupport[".viewFields"][] = "topic";
$tdatasupport[".viewFields"][] = "stitle";
$tdatasupport[".viewFields"][] = "inquiry";
$tdatasupport[".viewFields"][] = "attach";
$tdatasupport[".viewFields"][] = "answer";
$tdatasupport[".viewFields"][] = "attachAns";

$tdatasupport[".addFields"] = array();
$tdatasupport[".addFields"][] = "sdate";
$tdatasupport[".addFields"][] = "sstatus";
$tdatasupport[".addFields"][] = "staff";
$tdatasupport[".addFields"][] = "topic";
$tdatasupport[".addFields"][] = "stitle";
$tdatasupport[".addFields"][] = "inquiry";
$tdatasupport[".addFields"][] = "attach";

$tdatasupport[".inlineAddFields"] = array();

$tdatasupport[".editFields"] = array();
$tdatasupport[".editFields"][] = "sdate";
$tdatasupport[".editFields"][] = "sstatus";
$tdatasupport[".editFields"][] = "staff";
$tdatasupport[".editFields"][] = "topic";
$tdatasupport[".editFields"][] = "stitle";
$tdatasupport[".editFields"][] = "inquiry";
$tdatasupport[".editFields"][] = "attach";
$tdatasupport[".editFields"][] = "answer";
$tdatasupport[".editFields"][] = "attachAns";

$tdatasupport[".inlineEditFields"] = array();

$tdatasupport[".exportFields"] = array();

$tdatasupport[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Sid"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "sid"; 
		$fdata["FullName"] = "sid";
	
		
		
				
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
	
		
		
	$tdatasupport["sid"] = $fdata;
//	topic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "topic";
	$fdata["GoodName"] = "topic";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Topic"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "topic"; 
		$fdata["FullName"] = "topic";
	
		
		
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
	$edata["LookupValues"][] = "Bug/Problem";
	$edata["LookupValues"][] = "Improvement";
	$edata["LookupValues"][] = "Request New Function";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["topic"] = $fdata;
//	staff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "staff";
	$fdata["GoodName"] = "staff";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Requestor"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staff"; 
		$fdata["FullName"] = "staff";
	
		
		
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
				
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff_info";
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
	
		
		
	$tdatasupport["staff"] = $fdata;
//	inquiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inquiry";
	$fdata["GoodName"] = "inquiry";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Inquiry"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "inquiry"; 
		$fdata["FullName"] = "inquiry";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 211;
			$edata["nCols"] = 641;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["inquiry"] = $fdata;
//	sstatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sstatus";
	$fdata["GoodName"] = "sstatus";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "sstatus"; 
		$fdata["FullName"] = "sstatus";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["list"] = $vdata;
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
	$edata["LookupValues"][] = "Pending";
	$edata["LookupValues"][] = "In Progress";
	$edata["LookupValues"][] = "Solved";
	$edata["LookupValues"][] = "To Be Concerned";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
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
	
		
				
		$fdata["EditFormats"]["register"] = $edata;
	$edata = array("EditFormat" => "Readonly");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Pending";
	$edata["LookupValues"][] = "In Action";
	$edata["LookupValues"][] = "Solved";
	$edata["LookupValues"][] = "To Be Concerned";

	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = true;
	
		
		
	$tdatasupport["sstatus"] = $fdata;
//	answer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "answer";
	$fdata["GoodName"] = "answer";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Answer"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "answer"; 
		$fdata["FullName"] = "answer";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
			
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 186;
			$edata["nCols"] = 645;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["answer"] = $fdata;
//	sdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sdate";
	$fdata["GoodName"] = "sdate";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "sdate"; 
		$fdata["FullName"] = "sdate";
	
		
		
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
	$edata["InitialYearFactor"] = 0; 
	$edata["LastYearFactor"] = 1; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["sdate"] = $fdata;
//	stitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "stitle";
	$fdata["GoodName"] = "stitle";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Title"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "stitle"; 
		$fdata["FullName"] = "stitle";
	
		
		
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
			
		$edata["inputStyle"] = " width:370px;";
	$edata["controlWidth"] = 370;
	
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["stitle"] = $fdata;
//	attach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "attach";
	$fdata["GoodName"] = "attach";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Attachment"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "attach"; 
		$fdata["FullName"] = "attach";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["attach"] = $fdata;
//	attachAns
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attachAns";
	$fdata["GoodName"] = "attachAns";
	$fdata["ownerTable"] = "support";
	$fdata["Label"] = "Attachment Answer"; 
	$fdata["FieldType"] = 201;
	
		
		
		
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		
		$fdata["strField"] = "attachAns"; 
		$fdata["FullName"] = "attachAns";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
			//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupport["attachAns"] = $fdata;

	
$tables_data["support"]=&$tdatasupport;
$field_labels["support"] = &$fieldLabelssupport;
$fieldToolTips["support"] = &$fieldToolTipssupport;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["support"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["support"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_support()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  topic,  staff,  inquiry,  sstatus,  answer,  sdate,  stitle,  attach,  attachAns";
$proto0["m_strFrom"] = "FROM support";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sid DESC";
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
	"m_strName" => "sid",
	"m_strTable" => "support"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "topic",
	"m_strTable" => "support"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "staff",
	"m_strTable" => "support"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "inquiry",
	"m_strTable" => "support"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sstatus",
	"m_strTable" => "support"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "answer",
	"m_strTable" => "support"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sdate",
	"m_strTable" => "support"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "stitle",
	"m_strTable" => "support"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "attach",
	"m_strTable" => "support"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "attachAns",
	"m_strTable" => "support"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "support";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "sid";
$proto26["m_columns"][] = "topic";
$proto26["m_columns"][] = "staff";
$proto26["m_columns"][] = "inquiry";
$proto26["m_columns"][] = "sstatus";
$proto26["m_columns"][] = "answer";
$proto26["m_columns"][] = "sdate";
$proto26["m_columns"][] = "stitle";
$proto26["m_columns"][] = "attach";
$proto26["m_columns"][] = "attachAns";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "support"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_support = createSqlQuery_support();
										$tdatasupport[".sqlquery"] = $queryData_support;

include_once(getabspath("include/support_events.php"));
$tableEvents["support"] = new eventclass_support;
$tdatasupport[".hasEvents"] = true;

$cipherer = new RunnerCipherer("support");

?>