YUI.add("moodle-availability_dedicationtime-form",function(t,i){M.availability_dedicationtime=M.availability_dedicationtime||{},M.availability_dedicationtime.form=t.Object(M.core_availability.plugin),M.availability_dedicationtime.form.initInner=function(i){this.params=i},M.availability_dedicationtime.form.getNode=function(i){var a,e=t.Node.create("<span>"+this.params+"</span>");return i.dedicationtime===undefined&&(i.dedicationtime=""),i.unit===undefined&&(i.unit="hours"),a=i.dedicationtime,i=i.unit,e.one("input[name=availability_dedicationtime_value]").set("value",a),e.one("select[name=availability_dedicationtime_unit]").set("value",i),M.availability_dedicationtime.form.addedEvents||(M.availability_dedicationtime.form.addedEvents=!0,(a=t.one("#fitem_id_availabilityconditionsjson")).delegate("click",function(){M.core_availability.form.update()},".availability_dedicationtime select"),a.delegate("change",function(){M.core_availability.form.update()},".availability_dedicationtime input[name=availability_dedicationtime_value]")),e},M.availability_dedicationtime.form.fillValue=function(i,a){i.dedicationtime=a.one("input[name=availability_dedicationtime_value]").get("value"),i.unit=a.one("select[name=availability_dedicationtime_unit]").get("value")},M.availability_dedicationtime.form.fillErrors=function(i,a){a=Number(a.one("input[name=availability_dedicationtime_value]").get("value"));!isNaN(a)&&0!=a||i.push("availability_dedicationtime:error_invalidnumber")}},"@VERSION@",{requires:["base","node","event","moodle-core_availability-form"]});