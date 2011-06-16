	function editTool(groupId, toolId)
	{
		/*
		original for the following:
		<a class="dark_gray" href="#">&uarr; up</a>&nbsp;&nbsp;&nbsp;
		<a class="dark_gray" href="#">&darr; down</a>&nbsp;&nbsp;&nbsp;
		<a class="default_color" href="#">seaded</a>&nbsp;&nbsp;&nbsp;
		<a class="red" href="#">delete</a>									
		*/
			
		$("div.tool_editor_for_tool_"+toolId+"").html("<a class='dark_gray' href='cmtls/"+groupId+"/"+toolId+"/move/up/?destination=cmtls/"+groupId+"/"+toolId+"'>&uarr; up</a>&nbsp;&nbsp;&nbsp;<a class='dark_gray' href='cmtls/"+groupId+"/"+toolId+"/move/down/?destination=cmtls/"+groupId+"/"+toolId+"'>&darr; down</a>&nbsp;&nbsp;&nbsp;<a class='modalframe-child default_color' href='/cmtls/"+groupId+"/"+toolId+"/edit'>seaded</a>&nbsp;&nbsp;&nbsp;<a class='modalframe-child red' href='/cmtls/"+groupId+"/"+toolId+"/delete'>delete</a>");
	
		if ($("div.edit_buttons_for_tool_"+toolId+"").find("div.tool_editor_for_tool_"+toolId+"").is(":hidden")) {
			$("div.edit_buttons_for_tool_"+toolId+"").find("div.tool_editor_for_tool_"+toolId+":hidden").slideDown("fast"); 
			$("a.link_for_tool_"+toolId+"").removeClass('dark_gray').addClass('default_color');
		}
		else {
			$("div.edit_buttons_for_tool_"+toolId+"").find("div.tool_editor_for_tool_"+toolId+":visible").slideUp("fast");				
			$("a.link_for_tool_"+toolId+"").removeClass('default_color').addClass('dark_gray');
		}
	}


	function showTools(groupId)
	{
			
		if ($("li.group_nr_"+groupId+"").find("ul.tool_navi_for_group_nr_"+groupId+"").is(":hidden")) {
			$("li.group_nr_"+groupId+"").find("ul.tool_navi_for_group_nr_"+groupId+":hidden").slideDown("fast"); 
			$("ul.group_navi").find("li.group_nr_"+groupId+"").css("background","#eeeeee"); 
			$("li.group_nr_"+groupId+"").find("a.link_for_group_nr_"+groupId+"").addClass("darkest_gray"); 
			
		}
		else {
			$("li.group_nr_"+groupId+"").find("ul.tool_navi_for_group_nr_"+groupId+":visible").slideUp("fast");				
			$("ul.group_navi").find("li.group_nr_"+groupId+"").css("background","transparent"); 
			$("li.group_nr_"+groupId+"").find("a.link_for_group_nr_"+groupId+"").removeClass("darkest_gray"); 
		}
	}


	function showOpener(groupId)
	{
		$("li.group_nr_"+groupId+"").find("div.down_arrow_nr_"+groupId+":hidden").show();
	}

	function hideOpener(groupId)
	{
		$("li.group_nr_"+groupId+"").find("div.down_arrow_nr_"+groupId+":visible").hide();									 
	}

