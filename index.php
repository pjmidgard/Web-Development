<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Main Assignment: Sports</title>
        <style>
	#header{
	background-color : #AFD0F1;  <!-- background color -->
	border:1px solid red; 
        width:1000px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
		#horizontal_menu{
	background-color : #F9AF70;  <!-- background color -->
	border:1px solid red;
        width:1000px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
	#side_bar_1
	{
		background-color : #A32000;  <!-- background color -->
	    border:1px solid red; 
        width:200px;
        height:800px;
        color:#FFEA46;              <!-- text blue -->
	text-align:center;
	float:left;
	margin-top:  -1px;
	margin-left: 40px;
	}
		#Bofore_Content
	{
		background-color : #B0C0A0;  <!-- background color -->
	    border:1px solid red; 
        width:599px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 240px;
	margin-top:  -1px;
	float:center;
	}	
	li.s {
display: inline;
		

}

	#section{
        background-color : #FF4D31;    <!-- background color -->
	border:1px solid red; 
	width:599px;
    height:600px;
 	color:#FFEA46;             <!-- color text -->
	float:center;
	margin-left: 240px;
	margin-right:139px;
	}  
		#side_bar_2
	{
		background-color : #FBFF3F;  <!-- background color -->
	    border:1px solid red; 
        width:200px;
        height:800px;
        color:blue;              <!-- text blue -->
	text-align:center
	float:right;
	margin-left: 840px;
	margin-top:  -811px;
	margin-right:39px;
	}
			#After_Content
	{
		background-color : #B0C0A0;  <!-- background color -->
	    border:1px solid red; 
        width:599px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 240px;
	float:center;
	}
		#footer{
	background-color : #5BA300;  <!-- background color -->
	border:1px solid red; 
        width:1000px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
    	</style>
    </head>
			<body bgcolor="#FFF8D2">
			<?php session_start(); $df=0; $ds=0; $dfq=0;
			$_SESSION["qwe"]="";
			$_SESSION["derk"]="ok";
			if (!isset($_SESSION["lghjas"])){}
elseif (isset($_SESSION["lghjas"])){
$_SESSION["lghjas"]="click";}
			if (!isset($_SESSION["lghj"])){}elseif($_SESSION["lghj"]=="Clickh")
			{$_SESSION["lghj"]="Click";}
			elseif (isset($_SESSION["lghj"])){$_SESSION["lghj"]="Click";}
            //"ldfd"
            if (!isset($_SESSION["ldfd"])){}elseif($_SESSION["ldfd"]=="Clickh")
			{$_SESSION["ldfd"]="Click";}
			elseif (isset($_SESSION["ldfd"])){$_SESSION["ldfd"]="Click";}		
          if (!isset($_SESSION["lghlk"])){} elseif (!isset($_SESSION["lghj"])){if($_SESSION["lghlk"]=="Update_Product")
		  {$_SESSION["lghlk"]="Click";}}
		  if (!isset($_SESSION["lfg"])){} 
		    elseif (isset($_SESSION["lfg"])){$_SESSION["lfg"]="in";} 
			 if (!isset($_SESSION["lghld"])){} elseif (!isset($_SESSION["lghld"])){if($_SESSION["lghld"]=="Update_Product")
		  {$_SESSION["lghld"]="Click";}}
		  	  if (!isset($_SESSION["dert"])){} 
		    elseif (isset($_SESSION["dert"])){$_SESSION["dert"]="in";}
		   			?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px;
						padding-right: 1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; Name:  		Jurijus Pacalovas<br>
	&nbsp;&nbsp; Student: 	    C17706201
						</div>
<div id="horizontal_menu" style="border-style: solid; border-width: 1px; padding-left: 1px;
 padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<nav>
				<br>
				<div align="center">
					<ul>
						&nbsp;&nbsp; <li class="s"><a href="index.php">
						<font style="font-size:12px"> Home </font></a></li> <!-- login page -->
						<?php
						//echo $_SESSION["lg"];		
                        //fg
		//////////////////////////////////////////////////////
						if(isset($_SESSION["lg"])){
						echo '
						&nbsp;&nbsp;  <li class="s"><a href="Update_Product.php">
						<font style="font-size:12px"> Update_Product </font></a></li>   
					    &nbsp;&nbsp;  <li class="s"><a href="Add_Product.php">
						<font style="font-size:12px"> Add_Product </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="Delete_Product.php">
						<font style="font-size:12px"> Delete_Product </font></a></li>
						&nbsp;&nbsp;  <li class="s"><a href="Search_Product.php">
						<font style="font-size:12px"> Show_Product </font></a></li>
						';
						
						}
						
					
					
					?>
					</ul>
					</div>
	</nav>
			</div>	
			<div id="side_bar_1" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
			<br><br><br><br>
			On our website you can read books
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br> Books
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
	       
		   You Can see on our website pages such as Login, Registration, Search for a book, Reserve a book, View reserved books.
           	   <ul> 
			<li> <font style="font-size: 16pt"> On  <u>Login</u> page you can see instruction. </font> </li>
			<li> <font style="font-size: 16pt"> On  <u>Registration</u> You can Register on this page.</font> </li>
			<li> <font style="font-size: 16pt"> On  <u>Search for a book</u> This page you can search books
			&nbsp;and other users and you can choose one/several more sports. </font> </li>
			<li> <font style="font-size: 16pt"> On  <u>Reserve a book</u>  <u> You can order books </u> </font> </li>
			<li> <font style="font-size: 16pt"> On  <u>View reserved books</u> Allow the user to see a list of the book(s) currently reserved 
			by that user. User able to remove the reservation as well. </font> </li>
			
			</font>
			
			</div>		
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			
			Welcome everybody to our website.
			
			
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
          

		<form method="POST" action="index.php">
<?php
if(!isset($_SESSION["lg"]) && !isset($_SESSION["lj"])) //die('');
{

echo '
<p>&nbsp;&nbsp;&nbsp;<font style="font-size: 8pt"> Please enter login<br>
&nbsp;&nbsp;&nbsp;

<input type="text"  name="login" size="20" maxlength="30"></input>
</p>
<p>&nbsp;&nbsp; &nbsp; Please enter password<br>&nbsp;&nbsp;&nbsp;
<input type="password"  name="pass" size="20" maxlength="30"></input>
<br>
&nbsp;
</p>
&nbsp;
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset">
</font>';
$ds=1;
}
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:15pt">';echo "USER <br>";
echo "</font></div>";
echo "You are welcome ";
echo $_SESSION["lj"]. " <br> ";
}
?>
</form>
<?php 
define("DB_HOST", "sql100.freecluster.eu");
	define("DB_USER", "fceu_17384599");
	define("DB_PASSWORD", "7cgv4wsm");
	define("DB_DATABASE", "fceu_17384599_labdb");
	try{
		$dbConnection = new 
PDO('mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';charset=utf8', DB_USER, DB_PASSWORD);
		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {echo 'Connection failed: ' . $e->getMessage();}
	
	foreach ($items as $row) 
{
//////
/* login 1 */ 
//echo $row[0]." <br> "; 
$row1=$row[0]; $ty2=$row[0];
$ty3[0]=$ty2[0];$ty4=$ty3[0];
$dlin3=strlen($ty4);
if($dlin3==1){$dfq=1;}else{$dfq=0;}
/* password 5 */
//echo $row[4]." <br> "; 
////////////	
			}//foreach
		/////
		

if(isset($_SESSION["lg"])) //die('');
{
echo
'<form method="POST" action="index.php">
<input type="submit" name="Sign out" value="Sign out"></input>
</form>';
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
		}
	}
}
?>
<br>
<?php
function You_have_Sign_in(){
$df=2;
echo '<b><font color ="green"> You have Sign in </font></b>';
}
if(!isset($_SESSION["lg"]) && !isset($_SESSION["lj"]) && $ds==1) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	

	
	    $varN1 = $_POST["login"];
		$varN2 = $_POST["pass"];	
		$df=0;
    $df=0; $login=$varN1;
$pass=$varN2;
//echo $login." <br> "; 
//echo $pass." <br> "; 
$dlin1=strlen($varN2);
$dlin2=strlen($varN1);
if($dlin1>1 && $dlin2>1)
{$sql = "SELECT * FROM user WHERE UserID = '$login' and Password = '$pass'";}
if($dlin1>1 && $dlin2>1)
{
$items = $dbConnection->prepare("$sql");
$items->execute();
foreach ($items as $row) 
{
//////
/* login 1 */ 
//echo $row[0]." <br> "; 
$row1=$row[0]; $ty2=$row[0];
$ty3[0]=$ty2[0];$ty4=$ty3[0];
$dlin3=strlen($ty4);
if($dlin3==1){$df=1;}else{$df=0;}
/* password 5 */
//echo $row[4]." <br> "; 
////////////	
			}//foreach
			
		/////
}

 
	

//session
//echo  $row[0]." <br> "; 
 $US1=$row[1];
 $US2=$row[4];
 $US3 = $US1 . ' ' . $US2;
 $US4=$row[0];
 $US6 = $US4;  

 
 $dlinq=strlen($US2);
 
 if($dlinq==0)
 {
	 echo $_SESSION["lr"]. " <br> ";
	 
 }
 else
 {
 $_SESSION["lg"]="$US3";
 $_SESSION["lj"]="$US6";
 $_SESSION["fg"]=="1";
	 
 }
 

 echo '<meta http-equiv="refresh" content="0; url=index.php">';

}//if ($_SERVER["REQUEST_METHOD"] == "POST")
}

if(isset($_SESSION["lg"])) //die('');
{
 echo '<div align="center">';
 You_have_Sign_in();
 echo $_SESSION["lg"]. " <br> ";
}

		?>
</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; Name:  		Jurijus Pacalovas<br>
	&nbsp;&nbsp; Student: 	    C17706201
						</div>
			<br><br>
			</body>
</html> 