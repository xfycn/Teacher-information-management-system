$(document).ready(function(){
	var teacherInfoName;
	var data1;
	var m=1;
	// $("#Title").css("background-color","blue");
	// $("#Title").height(200);
	$("body").css("background-color","#CD853F");
	$("body").css("font-family","微软雅黑");
	$("#h").css("color","#DCDCDC");
	$("#tin").css("color","#F5DEB3");
	$("#st").css("color","#F5DEB3");
	$("#ts").css("color","#F5DEB3");
	$("#blank").height(30);
	$("button").width(80);
	$("button").height(30);
	$("#suggest").width(68);//单独定义推荐按钮的大小
	$("#suggest").height(22);
	$("#contact").width(68);//单独定义预约按钮的大小
	$("#contact").height(22);
	$("#ts").width(68);//单独定义检索按钮的大小
	$("#ts").height(22);
	$("#tin").height(42);
	$("#st").height(24);
	// $("#ts").height(44);
	// $("#ts").width(106);
	$("#1").click(function(){//相应功能的按钮被点击  其他功能的按钮要收起 同时自身功能的按钮要展开
		teacherInfoName=$("#tin").val();
		$("#2son").hide();
		$("#3son").hide();
		$("#1son").toggle();
		$(".1ss").hide();
		$("p").hide();
		$("#rutine").hide();
		$("#ach").hide();
	    $.get('teacher_info_manage.php?qqq=1&teacherInfoName',function(data){
	    	if (data=="false") 
	    	{
	    		alert("您输入的教师姓名不存在，请核对后输入！");
	    	}
	    	data1 = JSON.parse(data);
		});

	
	});
	$("#1-1").click(function(){
		    $("#rutine").hide();
		    $("#ach").hide();
		    $("#name")[0].innerHTML="姓名："+data1[0];
			$("#age")[0].innerHTML="年龄："+data1[2];		
			$("#sex")[0].innerHTML="性别："+data1[1];		
			$("#email")[0].innerHTML="邮箱："+data1[3];		
			$("p").toggle();		
		})
	$("#1-2").click(function(){
		$(".1ss1").hide();
		$("#rutine").hide();
		$("#ach")[0].innerHTML="成果："+data1[4];
		$("#ach").toggle();
	});
	$("#1-3").click(function(){
		$(".1ss1").hide();
		$(".1ss2").hide();
		$("#rutine")[0].innerHTML="正在和学校联系，目测学校不会告诉我们教师的日程";
		$("#rutine").toggle();
	});
	$("#2").click(function(){
		$("#1son").hide();
		$("#3son").hide();
		$("#2son").toggle();//出现toggle重复调用的现象  与在1son  2son之间切换的次数切换的次数相同
		$("p").hide();
		$("#rutine").hide();
		$("#ach").hide();

	});
	$("#3").click(function(){
		$("#1son").hide();
		$("#2son").hide();
		$("#3son").toggle();
		$("p").hide();
		$("#rutine").hide();
		$("#ach").hide();

	});
	
							 
});