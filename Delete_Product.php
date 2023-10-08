<?php
// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("sql100.freecluster.eu", "fceu_17384599", "7cgv4wsm", "fceu_17384599_labdb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<?php
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "DELETE FROM `product` WHERE CONCAT(`ProductID`, `Pname`, `Description`, `Price`, `Stock`) LIKE '%".$valueToSearch."%'"; 
    $search_result = filterTable($query);
	echo '<meta http-equiv="refresh" content="0; url=Delete_Product.php">';
    
}
 else {
    $query = "SELECT * FROM `product`";
    $search_result = filterTable($query);
}

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
	
	
			#footer{
	background-color : #5BA300;  <!-- background color -->
	border:1px solid red; 
        width:1100px;
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
           <form action="Delete_Product.php" method="postr">
            <input type="submit" name="search" value="Reload">
		   </form>
             &nbsp;&nbsp;&nbsp;&nbsp;
			 Here you can delete a row.
      <form action="Delete_Product.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Delete"><br><br>
            <input type="submit" name="search" value="Delete"><br><br>
            
            <table>
                <tr>
                    <th>ProductID</th>
                    <th>PName</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['ProductID'];?></td>
                    <td><?php echo $row['PName'];?></td>
                    <td><?php echo $row['Description'];?></td>
                    <td><?php echo $row['Price'];?></td>
                    <td><?php echo $row['Stock'];?></td>
                </tr>
                <?php endwhile;?>


			
			</div>		
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			
			Welcome everybody to our website.
			
			
	   </div>
        
            </table>
        </form>

<div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
       


		 
		 
		 
		/////
		


?>
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

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; Name:  		Jurijus Pacalovas<br>
	&nbsp;&nbsp; Student: 	    C17706201
						</div>
			<br><br>
			</body>
</html> 