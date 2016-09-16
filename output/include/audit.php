<?php
class AuditTrailTable
{
	var $logTableName="campsys_mata4_audit";
	var $TableObj;
	var $params;
	
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength = 300;

	function AuditTrailTable()
	{
		global $dal;
		$this->TableObj = &$dal->Table($this->logTableName);
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"],$_SESSION["UserID"]);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$table;
			$this->TableObj->action=$this->strLogin;
			$this->TableObj->description="";
			$this->TableObj->Add();
		}
		return $retval;
    }
    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$table;
			$this->TableObj->action=$this->strFailLogin;
			$this->TableObj->description="";
			$this->TableObj->Add();
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }
    function LogLogout()
    {
	global $globalEvents;
	if($_SESSION["UserID"]!="")
	{
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->TableObj->datetime=now();		
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$table;
			$this->TableObj->action=$this->strLogout;
			$this->TableObj->description="";
			$this->TableObj->Add();
		}
		return $retval;
	}
    }
    function LogChPassword()
    {
		global $globalEvents;
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->TableObj->datetime=now();		
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$table;
			$this->TableObj->action=$this->strChPass;
			$this->TableObj->description="";
			$this->TableObj->Add();
		}
		return $retval;
    }
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=substr($val,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$str_table;
			$this->TableObj->action=$this->strAdd;
			$this->TableObj->description=$str;
			$this->TableObj->Add();
		}
		return $retval;
    }
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
												
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v)>$this->maxFieldLength)
								$v=substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$str_table;
			$this->TableObj->action=$this->strEdit;
			$this->TableObj->description=$str;
			$this->TableObj->Add();
		}
		return $retval;
    }
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{	
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=substr($v,0,$this->maxFieldLength);
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$str_table;
			$this->TableObj->action=$this->strDelete;
			$this->TableObj->description=$str;
			$this->TableObj->Add();
		}
		return $retval;
    }
    
    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$this->params[0];
			$this->TableObj->user=$this->params[1];
			$this->TableObj->table=$stable;
			$this->TableObj->action=$message;
			$this->TableObj->description=$description;
			$this->TableObj->Add();
		}
		return $retval;
    }
    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->TableObj->ip=$_SERVER["REMOTE_ADDR"];
			$this->TableObj->action=$this->strAccess;
			$this->TableObj->Delete();
		}
		
    }
    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->TableObj->datetime=now();
			$this->TableObj->ip=$_SERVER["REMOTE_ADDR"];
			$this->TableObj->user=$pUsername;
			$this->TableObj->table="";
			$this->TableObj->action=$this->strAccess;
			$this->TableObj->description="";
			$this->TableObj->Add();
		}
    }
    
	function LoginAccess()
	{
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$rstmp=$this->TableObj->Query(AddFieldWrappers("ip")."='".$_SERVER["REMOTE_ADDR"]."' and ".AddFieldWrappers("action")."='access'",AddFieldWrappers("id")." asc");
			$i=0;
			while($data = db_fetch_array($rstmp))
			{
				if(secondsPassedFrom($data["datetime"])/60<=$this->timeLogin)
				{
					if($i==0)
					{
						$firstAccess=$data["datetime"];
					}
					$i+=1;
				}
			}
			if($i>=$this->attLogin)
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess)/60);
			else
				return false;
		}
		else
			return false;
	}
	function logValueEnable($table)
	{
		if($table=="student_info")
		{
			return true;
		}
		if($table=="student_extracurricular")
		{
			return true;
		}
		if($table=="student_course")
		{
			return true;
		}
		if($table=="student_qualification")
		{
			return true;
		}
		if($table=="student_discipline")
		{
			return true;
		}
		if($table=="student_hostel")
		{
			return true;
		}
		if($table=="course")
		{
			return true;
		}
		if($table=="program")
		{
			return true;
		}
		if($table=="staff_compulsory_training")
		{
			return true;
		}
		if($table=="staff_employement_history")
		{
			return true;
		}
		if($table=="staff_discipline")
		{
			return true;
		}
		if($table=="staff_qualification")
		{
			return true;
		}
		if($table=="staff_info")
		{
			return true;
		}
		if($table=="setting")
		{
			return true;
		}
		if($table=="student_school")
		{
			return true;
		}
		if($table=="program_course")
		{
			return true;
		}
		if($table=="group")
		{
			return true;
		}
		if($table=="campus_setting")
		{
			return true;
		}
		if($table=="student_absent")
		{
			return true;
		}
		if($table=="student_industry_training")
		{
			return true;
		}
		if($table=="user")
		{
			return true;
		}
		if($table=="setting_bill_item")
		{
			return true;
		}
		if($table=="program_billing")
		{
			return true;
		}
		if($table=="job")
		{
			return true;
		}
		if($table=="set_intake_category")
		{
			return true;
		}
		if($table=="set_setting_category")
		{
			return true;
		}
		if($table=="Marking_Batch")
		{
			return true;
		}
		if($table=="Report-Billing Pending")
		{
			return true;
		}
		if($table=="Report-Billing Paid")
		{
			return true;
		}
		if($table=="student_payment")
		{
			return true;
		}
		if($table=="LIST-Student Billing")
		{
			return true;
		}
		if($table=="student_billing")
		{
			return true;
		}
		if($table=="report_bill_pending")
		{
			return true;
		}
		if($table=="report_bill_paid")
		{
			return true;
		}
		if($table=="Report_Family")
		{
			return true;
		}
		if($table=="Report_Discipline")
		{
			return true;
		}
		if($table=="Report_Extracurricular")
		{
			return true;
		}
		if($table=="Report-_Industry_Training")
		{
			return true;
		}
		if($table=="Report_Compulsory_Training")
		{
			return true;
		}
		if($table=="Report_Sponsor")
		{
			return true;
		}
		if($table=="Report_Staff_Training")
		{
			return true;
		}
		if($table=="Report_Staff_Kin")
		{
			return true;
		}
		if($table=="Report_Student_Course")
		{
			return true;
		}
		if($table=="training")
		{
			return true;
		}
		if($table=="Report_Student_Hostel")
		{
			return true;
		}
		if($table=="Chart_no_student")
		{
			return false;
		}
		if($table=="Report_Exam_Slip_Indiv")
		{
			return true;
		}
		if($table=="Report_Exam_Slip_Batch")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Indiv")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Batch")
		{
			return true;
		}
		if($table=="Report_Student_Class")
		{
			return true;
		}
		if($table=="all")
		{
			return true;
		}
		if($table=="enroll")
		{
			return true;
		}
		if($table=="staff_internal_history")
		{
			return true;
		}
		if($table=="calendar_qa")
		{
			return true;
		}
		if($table=="enroll_prospect")
		{
			return true;
		}
		if($table=="Report_Exam_Summary")
		{
			return true;
		}
		if($table=="Report_student_billing_overall")
		{
			return true;
		}
		if($table=="Report_Sponsor_Overall")
		{
			return true;
		}
		if($table=="Report_Student_Hostel_overall")
		{
			return true;
		}
		if($table=="Report_Student_Class_overall")
		{
			return true;
		}
		if($table=="Report_Student_Payment")
		{
			return true;
		}
		if($table=="ojt_company")
		{
			return true;
		}
		if($table=="exam_eligible_seatno")
		{
			return true;
		}
		if($table=="exam_result_memo")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Batch_Whole")
		{
			return true;
		}
		if($table=="t_facilities_timetable")
		{
			return true;
		}
		if($table=="student_evaluation")
		{
			return true;
		}
		if($table=="Report_Student_Attendance")
		{
			return true;
		}
		if($table=="Report_Instructor_Trade")
		{
			return true;
		}
		if($table=="student_course_dca")
		{
			return true;
		}
		if($table=="Evaluation_Batch_List")
		{
			return true;
		}
		if($table=="w_news")
		{
			return true;
		}
		if($table=="w_gallery_sub")
		{
			return true;
		}
		if($table=="w_pic")
		{
			return true;
		}
		if($table=="w_gallery")
		{
			return true;
		}
		if($table=="w_faq")
		{
			return true;
		}
		if($table=="w_slider")
		{
			return true;
		}
		if($table=="Report_Exam_Slip_MOE")
		{
			return true;
		}
		if($table=="Report_Exam_Result_MOE")
		{
			return true;
		}
		if($table=="Program_Batch")
		{
			return true;
		}
		if($table=="timetable_attendance")
		{
			return true;
		}
		if($table=="Report_Absent")
		{
			return true;
		}
		if($table=="Report_Attendance")
		{
			return true;
		}
		if($table=="Program_Batch_Bill")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="support")
		{
			return false;
		}
		if($table=="w_course")
		{
			return false;
		}
		if($table=="Chart_Exam_Internal")
		{
			return false;
		}
		if($table=="student_billing_item")
		{
			return true;
		}
		if($table=="student_bill_list")
		{
			return true;
		}
		if($table=="student_bill_pay")
		{
			return true;
		}
		if($table=="course_moe2")
		{
			return false;
		}
		if($table=="course_moe2_sem2")
		{
			return false;
		}
		if($table=="course_moe2_sem3")
		{
			return false;
		}
		if($table=="course_moe2_sem4")
		{
			return false;
		}
		if($table=="course_moe2_sem5")
		{
			return false;
		}
		if($table=="course_moe2_sem6")
		{
			return false;
		}
		if($table=="Marking_Student_list")
		{
			return true;
		}
		if($table=="Report_Attendance_Student_List")
		{
			return true;
		}
		if($table=="Report_Student_Course_List")
		{
			return true;
		}
		if($table=="student_course_DCA_List_student2")
		{
			return true;
		}
		if($table=="student_bill_list2")
		{
			return true;
		}
		if($table=="student_bill_statement")
		{
			return false;
		}
	}
}

class AuditTrailFile
{
	var $logfile="audit/audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength = 300;
	
	function AuditTrailFile()
	{
		$userid="";
		if(@$_SESSION["UserID"])
			$userid=$_SESSION["UserID"];
		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);
	}
    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			if($fp)
			{
				fputs($fp,$str);
				fclose($fp);
			}
		}
		return $retval;
    }
    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table="user";
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			if($fp)
			{
				fputs($fp,$str);
				fclose($fp);
			}
		}
		return $retval;
    }
    function LogLogout()
    {
				global $globalEvents;
	if($_SESSION["UserID"]!="")
	{
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
			if($fp)
			{
				fputs($fp,$str);
				fclose($fp);
			}
		}
		return $retval;
	}
    }
    function LogChPassword()
    {
				global $globalEvents;
		$retval=true;
		$table="user";
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			if($fp)
			{
				fputs($fp,$str);
				fclose($fp);
			}
		}
		return $retval;
    }
    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v=str_replace(array("\r\n","\n","\t")," ",$val);
							if(strlen($v)>$this->maxFieldLength)
								$v=substr($v,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			
			if($fp)
			{
				fputs($fp,$str_add);
				fclose($fp);
			}
		}
		return $retval;
    }
    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1=str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							if(strlen($v1)>$this->maxFieldLength)
								$v1=substr($v1,0,$this->maxFieldLength);
						}
						
						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2=str_replace(array("\r\n","\n","\t")," ",$newvalue);
							if(strlen($v2)>$this->maxFieldLength)
								$v2=substr($v2,0,$this->maxFieldLength);
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			if($fp)
			{
				fputs($fp,$str_add);
				fclose($fp);
			}
		}
		return $retval;
    }
    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v=str_replace(array("\r\n","\n","\t")," ",$val);
						if(strlen($v)>$this->maxFieldLength)
							$v=substr($v,0,$this->maxFieldLength);
					}
					if($fp)
						$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";
				
			if($fp)
			{
				fputs($fp,$str_add);
				fclose($fp);
			}
		}
		return $retval;
    }
	function CreateLogFile()
	{
		$p=strrpos($this->logfile,".");
		$logfileName=substr($this->logfile,0,$p);
		$logfileExt=substr($this->logfile,$p+1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;
		
		$fulname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fulname)){
			$fsize = filesize($fulname);
		}
		
		$fp=@fopen($tn,"a");
		if($fp)
		{
			if(!filesize($tn))
			{
				$str=$this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
				if($fp)
					fputs($fp,$str);
			}			
		}
		return $fp;
	}
	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$fp=$this->CreateLogFile();
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			if($fp)
			{
				fputs($fp,$str);
				fclose($fp);
			}
		}
		return $retval;
    }
    
    function LoginAccess()
	{
		return false;
	}
	function LoginSuccessful()
    {
		return true;
    }
    function LoginUnsuccessful($pUsername)
    {	
		return true;
	}
	function logValueEnable($table)
	{
		if($table=="student_info")
		{
			return true;
		}
		if($table=="student_extracurricular")
		{
			return true;
		}
		if($table=="student_course")
		{
			return true;
		}
		if($table=="student_qualification")
		{
			return true;
		}
		if($table=="student_discipline")
		{
			return true;
		}
		if($table=="student_hostel")
		{
			return true;
		}
		if($table=="course")
		{
			return true;
		}
		if($table=="program")
		{
			return true;
		}
		if($table=="staff_compulsory_training")
		{
			return true;
		}
		if($table=="staff_employement_history")
		{
			return true;
		}
		if($table=="staff_discipline")
		{
			return true;
		}
		if($table=="staff_qualification")
		{
			return true;
		}
		if($table=="staff_info")
		{
			return true;
		}
		if($table=="setting")
		{
			return true;
		}
		if($table=="student_school")
		{
			return true;
		}
		if($table=="program_course")
		{
			return true;
		}
		if($table=="group")
		{
			return true;
		}
		if($table=="campus_setting")
		{
			return true;
		}
		if($table=="student_absent")
		{
			return true;
		}
		if($table=="student_industry_training")
		{
			return true;
		}
		if($table=="user")
		{
			return true;
		}
		if($table=="setting_bill_item")
		{
			return true;
		}
		if($table=="program_billing")
		{
			return true;
		}
		if($table=="job")
		{
			return true;
		}
		if($table=="set_intake_category")
		{
			return true;
		}
		if($table=="set_setting_category")
		{
			return true;
		}
		if($table=="Marking_Batch")
		{
			return true;
		}
		if($table=="Report-Billing Pending")
		{
			return true;
		}
		if($table=="Report-Billing Paid")
		{
			return true;
		}
		if($table=="student_payment")
		{
			return true;
		}
		if($table=="LIST-Student Billing")
		{
			return true;
		}
		if($table=="student_billing")
		{
			return true;
		}
		if($table=="report_bill_pending")
		{
			return true;
		}
		if($table=="report_bill_paid")
		{
			return true;
		}
		if($table=="Report_Family")
		{
			return true;
		}
		if($table=="Report_Discipline")
		{
			return true;
		}
		if($table=="Report_Extracurricular")
		{
			return true;
		}
		if($table=="Report-_Industry_Training")
		{
			return true;
		}
		if($table=="Report_Compulsory_Training")
		{
			return true;
		}
		if($table=="Report_Sponsor")
		{
			return true;
		}
		if($table=="Report_Staff_Training")
		{
			return true;
		}
		if($table=="Report_Staff_Kin")
		{
			return true;
		}
		if($table=="Report_Student_Course")
		{
			return true;
		}
		if($table=="training")
		{
			return true;
		}
		if($table=="Report_Student_Hostel")
		{
			return true;
		}
		if($table=="Chart_no_student")
		{
			return false;
		}
		if($table=="Report_Exam_Slip_Indiv")
		{
			return true;
		}
		if($table=="Report_Exam_Slip_Batch")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Indiv")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Batch")
		{
			return true;
		}
		if($table=="Report_Student_Class")
		{
			return true;
		}
		if($table=="all")
		{
			return true;
		}
		if($table=="enroll")
		{
			return true;
		}
		if($table=="staff_internal_history")
		{
			return true;
		}
		if($table=="calendar_qa")
		{
			return true;
		}
		if($table=="enroll_prospect")
		{
			return true;
		}
		if($table=="Report_Exam_Summary")
		{
			return true;
		}
		if($table=="Report_student_billing_overall")
		{
			return true;
		}
		if($table=="Report_Sponsor_Overall")
		{
			return true;
		}
		if($table=="Report_Student_Hostel_overall")
		{
			return true;
		}
		if($table=="Report_Student_Class_overall")
		{
			return true;
		}
		if($table=="Report_Student_Payment")
		{
			return true;
		}
		if($table=="ojt_company")
		{
			return true;
		}
		if($table=="exam_eligible_seatno")
		{
			return true;
		}
		if($table=="exam_result_memo")
		{
			return true;
		}
		if($table=="Report_Exam_Result_Batch_Whole")
		{
			return true;
		}
		if($table=="t_facilities_timetable")
		{
			return true;
		}
		if($table=="student_evaluation")
		{
			return true;
		}
		if($table=="Report_Student_Attendance")
		{
			return true;
		}
		if($table=="Report_Instructor_Trade")
		{
			return true;
		}
		if($table=="student_course_dca")
		{
			return true;
		}
		if($table=="Evaluation_Batch_List")
		{
			return true;
		}
		if($table=="w_news")
		{
			return true;
		}
		if($table=="w_gallery_sub")
		{
			return true;
		}
		if($table=="w_pic")
		{
			return true;
		}
		if($table=="w_gallery")
		{
			return true;
		}
		if($table=="w_faq")
		{
			return true;
		}
		if($table=="w_slider")
		{
			return true;
		}
		if($table=="Report_Exam_Slip_MOE")
		{
			return true;
		}
		if($table=="Report_Exam_Result_MOE")
		{
			return true;
		}
		if($table=="Program_Batch")
		{
			return true;
		}
		if($table=="timetable_attendance")
		{
			return true;
		}
		if($table=="Report_Absent")
		{
			return true;
		}
		if($table=="Report_Attendance")
		{
			return true;
		}
		if($table=="Program_Batch_Bill")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="support")
		{
			return false;
		}
		if($table=="w_course")
		{
			return false;
		}
		if($table=="Chart_Exam_Internal")
		{
			return false;
		}
		if($table=="student_billing_item")
		{
			return true;
		}
		if($table=="student_bill_list")
		{
			return true;
		}
		if($table=="student_bill_pay")
		{
			return true;
		}
		if($table=="course_moe2")
		{
			return false;
		}
		if($table=="course_moe2_sem2")
		{
			return false;
		}
		if($table=="course_moe2_sem3")
		{
			return false;
		}
		if($table=="course_moe2_sem4")
		{
			return false;
		}
		if($table=="course_moe2_sem5")
		{
			return false;
		}
		if($table=="course_moe2_sem6")
		{
			return false;
		}
		if($table=="Marking_Student_list")
		{
			return true;
		}
		if($table=="Report_Attendance_Student_List")
		{
			return true;
		}
		if($table=="Report_Student_Course_List")
		{
			return true;
		}
		if($table=="student_course_DCA_List_student2")
		{
			return true;
		}
		if($table=="student_bill_list2")
		{
			return true;
		}
		if($table=="student_bill_statement")
		{
			return false;
		}
	}
}
?>