
var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("student_bill_list",pType,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Statement';if(!pageObj.buttonEventBefore['Statement']){pageObj.buttonEventBefore['Statement']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Statement']){pageObj.buttonEventAfter['Statement']=function(result,ctrl,pageObj,proxy,pageid,rowData){var message="Open !";ctrl.setMessage(message);var studentData=result['StudentID'];var viewNotis="x_billing_detail.php?StudentID="+studentData;window.open(viewNotis,"_blank");}}
$('a[id=Statement]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Statement"+"_"+Runner.genId();this.id=newId;var button_Statement=new Runner.form.Button({id:newId,btnName:"Statement"});button_Statement.init({args:[pageObj,proxy,pageid]});}});});