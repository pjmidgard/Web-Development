<?php
// function to connect and execute the query


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Main Assignment: Sports</title>
        <style>
	#header{
	background-color : #AFD0F1;  <!-- background color -->
	border:1px solid red; 
        width:1100px;
        height:100px;
        color:blue;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
		#horizontal_menu{
	background-color : #F9AF70;  <!-- background color -->
	border:1px solid red;
        width:1100px;
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
        height:705px;
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
        width:900px;
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
	width:900px;
    height:600px;
 	color:#FFEA46;             <!-- color text -->
	float:center;
	margin-left: 240px;
	margin-right:139px;
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
			<br><br><br><br
			<table width="25" height="25" border="1" bgcolor="black" style="border-color: " align="left">
			<tr>

<?php
			if(isset($_SESSION["lg"])) //die('');
{
echo
'<form method="POST" action="index.php">
<input type="submit" name="Sign out" value="Sign out"></input>
</form>';
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POSTq") 
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	
		}
	}
}
if(!isset($_SESSION["lg"])) 
{
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
?>
</table>
			
			
			<hr>
			On our website you can read books
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br> Books
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
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
			
			
			?>

 <!--Form -->
		
		<table width="50" height="50" border="1" bgcolor="black" style="border-color: " align="Left">
		<tr> <td>
		<br>
           <form action="Add_Product.php" method="postr">
            <input type="submit" name="search" value="Reload">
		   </form>
             &nbsp;&nbsp;&nbsp;&nbsp;
			 Please, add a row.
      <form action="Add_Product.php" method="post">
	  
	  
           ProductID <input type="text" name="ProductIDs" placeholder="Value To add"><br><br>
		   PName <input type="text" name="PNames" placeholder="Value To add"><br><br>
		   Description <input type="text" name="Descriptions" placeholder="Value To add"><br><br>
		   Price <input type="text" name="Prices" placeholder="Value To add"><br><br>
		   Stock <input type="text" name="Stocks" placeholder="Value To add"><br><br>
            <input type="submit" value="OK" ></input><br><br>
            
             

      <!-- populate table from mysql database   (`ProductID`, `PName`, `Description`, `Price`, `Stock`)  --> 
                <?php
                	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	               {
					   
					   $varN1 = $_POST["ProductIDs"];
					   $varN2 = $_POST["PNames"];
					   $varN3 = $_POST["Descriptions"];
					   $varN4 = $_POST["Prices"];
					   $varN5 = $_POST["Stocks"];
					 $sqlq1 = "insert into product (`ProductID`, `PName`, `Description`, `Price`, `Stock`) 
					 values('$varN1','$varN2','$varN3','$varN4','$varN5')";
					 $items = $dbConnection->prepare("$sqlq1");
                     $items->execute();
					 
                      
				   }
			?>
			</table>
			</div>		
	   </table>
       


		 
		 
		 
		
		



<br>
<?php
function You_have_Sign_in(){
$df=2;
echo '<b><font color ="green"> You have Sign in </font></b>';
}

        	if ($_SERVER["REQUEST_METHOD"] == "POSTq") 
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
{$sql = "SELECT * FROM product WHERE PName";}
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
	 
 }
 

 

}//if ($_SERVER["REQUEST_METHOD"] == "POSTq")
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

		
		
			<br><br>
			</body>
</html> 