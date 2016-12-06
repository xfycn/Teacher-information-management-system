<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello world!</title>
    <!-- zui -->
    <link href="dist/css/zui.min.css" rel="stylesheet">
    <link href="teacher.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <!--[if IE 6]>
    <script type="javascript" src="dist/js/zui.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php
  Function func_name($ttv){
      if ( $ttv==1 ){
         $tt = "0";
      }else{

         $tt = $_POST['select2'];
      }
      return $tt;

  }
  $ttv = 0;
  echo $ttv ;
  if( $_POST )
  {
      $ttv++;

      $tt = func_name($ttv);
      echo $tt ;
  }

  echo $ttv ;
  ?>

<form action="" method="post" >
<select <?php  if ($ttv==1){echo "disabled";}  ?> name="select1">
  <option value="volvo" <?php if($ttv==0) echo("selected");?> >Volvo</option>
  <option value="saab" <?php if($ttv==1) echo("selected");?>>Saab</option>
  <option value="mercedes" <?php if($ttv==2) echo("selected");?>>Mercedes</option>
  <option value="audi" <?php if($ttv==3) echo("selected");?>>Audi</option>
</select>
<select name="select2" disabled >
  <option value="volvo" <?php if($ttv==0) echo("selected");?> >Volvo</option>
  <option value="saab" <?php if($ttv==1) echo("selected");?>>Saab</option>
  <option value="mercedes" <?php if($ttv==2) echo("selected");?>>Mercedes</option>
  <option value="audi" <?php if($ttv==3) echo("selected");?>>Audi</option>
</select>

<input class="btn btn-primary" type="submit" name="Submit" value="提交">


</form>








    <!-- jQuery (ZUI中的Javascript组件依赖于jQuery) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- ZUI Javascript组件 -->
    <script src="js/zui.min.js"></script>
  </body>
</html>