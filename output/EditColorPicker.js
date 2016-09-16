
Runner.controls.EditColorPicker=Runner.extend(Runner.controls.Control,{myVal:"value of my Field: ",constructor:function(cfg){this.addEvent(["change","keyup"]);Runner.controls.EditColorPicker.superclass.constructor.call(this,cfg);this.myVal=this.getFieldSetting("myVal");$("#"+this.valContId).miniColors({letterCase:'uppercase'});},getForSubmit:function(){if(!this.appearOnPage()){return[];}
return[this.valueElem.clone().val(this.getValue())]},setFocus:function(){if(!this.appearOnPage()){return[];}
return false;}});Runner.controls.constants["EditColorPicker"]="EditColorPicker";