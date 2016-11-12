<?php
	$con=mysql_connect("localhost",'root','');
	mysql_select_db("teacher_information",$con);
	$sql="select * from info ";
	mysql_query("set names 'utf8'"  );
	$result=mysql_query($sql);
	$inf = array();
	for ($i=0; $i <mysql_num_rows($result) ; $i++) 
	{ 
		$inf[$i]=mysql_fetch_array($result);
	}
	if (isset($_GET['teacherInfoName']))
	{
	    for ($n=0; $n <count($inf) ; $n++) 
	    { 
			if ($_GET['teacherInfoName']==$inf[n][0]) 
			{
				$flag=1;
				$m=$n;
				break;
			}
		}
		if ($flag==1) {
			echo json_encode($inf[$m]);
		}
		else
		{
			echo "false";
		}
	}
?>