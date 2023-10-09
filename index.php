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


<!-- HostCiti.net --><a href="http://hostciti.net/" title="hostciti.net" target="_blank" onclick="this.href='http://hostciti.net/stat/?ch=stat'+'&r='+escape(window.location.href.slice(7));" >
<script type="text/javascript" language="javascript"><!--
Coun='<img src="http://hostciti.net/stat/stat.php?i=1&col=4d95bf&tc=ffffff';
iD=document; Coun+='&d='+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)
+"&w="+screen.width+'&h='+screen.height;
iH=window.location.href.slice(7);
Coun+='&r='+escape(iH);
Coun+='&n='+escape(iD.referrer.slice(7));
iD.write(Coun+'" width="88" height="31" border="0" />');
</script></a><!-- End of HostCiti.net counter -->

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
define("DB_HOST", "sql108.byethost17.com");
	define("DB_USER", "b17_35184350");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "b17_35184350_labdb");
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
			
					
<?php
error_reporting(0);

// Terminal Color
$biru    = "\e[34m";
$kuning  = "\e[33m";
$cyan    = "\e[96m";
$magenta = "\e[35m";
$hijau   = "\e[92m";
$merah   = "\e[91m";
$putih   = "\e[0m";

echo $kuning . "~~ AUTO VISITOR BLOG ~~\n";
echo "Github: github.com/pjmidgard  \n\n";
echo $hijau . "Url Website: ";
$url = trim(fgets(STDIN));
echo $hijau . "Number of bot visitors: ";
$max = trim(fgets(STDIN));
echo $hijau . "Delay (milliseconds)(1 sec = 1000): ";
$delay = trim(fgets(STDIN));
echo "\n";

for ($i = 1; $i < $max + 1; $i++) {
  $class = new autovisitor($url);
  echo $putih . "[$i] VISITORS SENT FROM (" . $class->run() . ")\n";
  // delay milisecond
  usleep($delay);
}
echo "\n";
echo $hijau . "[x] FINISHED $putih\n";

class Random_UA
{
  public $linux_proc = array(
    'i686',
    'x86_64'
  );

  public $mac_proc = array(
    'Intel',
    'PPC',
    'U; Intel',
    'U; PPC'
  );

  public $lang = array(
    'en-US',
    'sl-SI'
  );

  function __construct()
  {
    $this->linux_proc = array(
      'i686',
      'x86_64'
    );
    $this->mac_proc   = array(
      'Intel',
      'PPC',
      'U; Intel',
      'U; PPC'
    );
    $this->lang       = array(
      'en-US',
      'sl-SI'
    );
  }

  function firefox()
  {
    $ver = array(
      'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), strtotime('today'))) . ' Firefox/' . rand(5, 7) . '.0',
      'Gecko/' . date('Ymd', rand(strtotime('2011-1-1'), strtotime('today'))) . ' Firefox/' . rand(5, 7) . '.0.1',
      'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), strtotime('today'))) . ' Firefox/3.6.' . rand(1, 20),
      'Gecko/' . date('Ymd', rand(strtotime('2010-1-1'), strtotime('today'))) . ' Firefox/3.8'
    );
    $platforms = array(
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; ' . $this->lang[array_rand($this->lang, 1)] . '; rv:1.9.' . rand(0, 2) . '.20) ' . $ver[array_rand($ver, 1)],
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; rv:' . rand(5, 7) . '.0) ' . $ver[array_rand($ver, 1)],
      '(Macintosh; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0) ' . $ver[array_rand($ver, 1)]
    );
    return $platforms[array_rand($platforms, 1)];
  }

  function safari()
  {
    $saf = rand(531, 535) . '.' . rand(1, 50) . '.' . rand(1, 7);
    if (rand(0, 1) == 0) {
      $ver = rand(4, 5) . '.' . rand(0, 1);
    } else {
      $ver = rand(4, 5) . '.0.' . rand(1, 5);
    }
    $platforms = array(
      '(Windows; U; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
      '(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ' rv:' . rand(2, 6) . '.0; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/$ver Safari/$saf",
      '(iPod; U; CPU iPhone OS ' . rand(3, 4) . '_' . rand(0, 3) . ' like Mac OS X; ' . $this->lang[array_rand($this->lang, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Version/" . rand(3, 4) . ".0.5 Mobile/8B" . rand(111, 119) . " Safari/6$saf"
    );
    return $platforms[array_rand($platforms, 1)];
  }

  function iexplorer()
  {
    $ie_extra  = array(
      '',
      '; .NET CLR 1.1.' . rand(4320, 4325) . '',
      '; WOW64'
    );
    $platforms = array(
      '(compatible; MSIE ' . rand(5, 9) . '.0; Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; Trident/' . rand(3, 5) . '.' . rand(0, 1) . ')'
    );
    return $platforms[array_rand($platforms, 1)];
  }

  function opera()
  {
    $op_extra  = array(
      '',
      '; .NET CLR 1.1.' . rand(4320, 4325) . '',
      '; WOW64'
    );

    $platforms = array(
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00',
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . '; U; ' . $this->lang[array_rand($this->lang, 1)] . ') Presto/2.9.' . rand(160, 190) . ' Version/' . rand(10, 12) . '.00'
    );
    return $platforms[array_rand($platforms, 1)];
  }

  function chrome()
  {
    $saf       = rand(531, 536) . rand(0, 2);
    $platforms = array(
      '(X11; Linux ' . $this->linux_proc[array_rand($this->linux_proc, 1)] . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
      '(Windows NT ' . rand(5, 6) . '.' . rand(0, 1) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf",
      '(Macintosh; U; ' . $this->mac_proc[array_rand($this->mac_proc, 1)] . ' Mac OS X 10_' . rand(5, 7) . '_' . rand(0, 9) . ") AppleWebKit/$saf (KHTML, like Gecko) Chrome/" . rand(13, 15) . '.0.' . rand(800, 899) . ".0 Safari/$saf"
    );
    return $platforms[array_rand($platforms, 1)];
  }

  function generate()
  {
    $x = rand(1, 5);
    switch ($x) {
      case 1:
        return "Mozilla/5.0 " . $this->firefox();
        break;
      case 2:
        return "Mozilla/5.0 " . $this->safari();
        break;
      case 3:
        return "Mozilla/" . rand(4, 5) . ".0 " . $this->iexplorer();
        break;
      case 4:
        return "Opera/" . rand(8, 9) . '.' . rand(10, 99) . ' ' . $this->opera();
        break;
      case 5:
        return 'Mozilla/5.0' . $this->chrome();
        break;
    }
  }
}


class autovisitor extends Random_UA
{
  public $url;

  public function __construct($url)
  {
    $this->url = $url;
  }

  private function curl()
  {
    $ch = curl_init();
    CURL_SETOPT($ch, CURLOPT_URL, $this->url);
    CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array(
      'Referer: ' . $this->acakReferer(),
      'User-Agent: ' . $this->generate()
    ));
    CURL_SETOPT($ch, CURLOPT_FOLLOWLOCATION, true);
    CURL_SETOPT($ch, CURLOPT_SSL_VERIFYHOST, 0);
    CURL_SETOPT($ch, CURLOPT_SSL_VERIFYPEER, 0);
    CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, 1);
    CURL_SETOPT($ch, CURLOPT_USERAGENT, $this->generate());
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }

  private function xflush()
  {
    static $output_handler = null;
    if ($output_handler === null) {
      $output_handler = @ini_get('output_handler');
    }
    if ($output_handler == 'ob_gzhandler') {
      return;
    }
    flush();
    if (function_exists('ob_flush') and function_exists('ob_get_length') and ob_get_length() !== false) {
      @ob_flush();
    } else if (function_exists('ob_end_flush') and function_exists('ob_start') and function_exists('ob_get_length') and ob_get_length() !== FALSE) {
      @ob_end_flush();
      @ob_start();
    }
  }

  private function acakReferer()
  {
    $list   = array();
    /* List asal traffic */
    $list[] = "http://facebook.com";
    $list[] = "http://google.com";
    $list[] = "http://google.co.id";
    $list[] = "http://twitter.com";
    $list[] = "http://facebook.com";
    $list[] = "http://google.com";
    $list[] = "http://twitter.com";
    $list[] = "http://google.co.id";
    $list[] = "http://google.com.my";
    $list[] = "http://google.jp";
    $list[] = "http://google.us";
    $list[] = "http://google.tl";
    $list[] = "http://google.ac";
    $list[] = "http://google.ad";
    $list[] = "http://google.ae";
    $list[] = "http://google.af";
    $list[] = "http://google.ag";
    $list[] = "http://google.ru";
    $list[] = "http://google.by";
    $list[] = "http://google.ca";
    $list[] = "http://google.cn";
    $list[] = "http://google.cl";
    $list[] = "http://google.cm";
    $list[] = "http://google.cv";
    $list[] = "http://google.gg";
    $list[] = "http://google.ge";
    $list[] = "http://google.gr";
    $list[] = "http://google.com.tw";
    $list[] = "https://search.yahoo.com";
    $list[] = "http://www.beinyu.com";
    $acak   = array_rand($list, 1);
    return $list[$acak];
  }

  public function run()
  {
    $this->xflush();
    $this->curl();
    return $this->acakReferer();
  }
}
?>

			</body>
</html>
