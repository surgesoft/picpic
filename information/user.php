<?php
require_once('..\handler.php');
session_start();

$sex=$_POST['sex'];
$blood=$_POST['blood'];
$birthday=$_POST['birthyear'].'/'.$_POST['birthmonth'].'/'.$_POST['birthday'];	
$profile=$imgView->getprofile($_SESSION['user']);
$user=$imgView->GetUserID($_SESSION['user']);
$click1=$_GET['click1'];
$imgView->showinformation();
$file="upload\avatar_small\\".$_SESSION['user']."_small.jpg";

if($_POST['birthyear'] && $_POST['birthmonth'] && $_POST['birthday'])
	$imgView->updateprofile($profile['UserId'],$birthday,$profile['sex'],$profile['blood']);	
if($_POST['sex'])
	$imgView->updateprofile($profile['UserId'],$profile['Birthday'],$sex,$profile['blood']);
if($_POST['blood'])
	$imgView->updateprofile($profile['UserId'],$profile['Birthday'],$profile['sex'],$blood);

$profile=$imgView->getprofile($_SESSION['user']);
$user=$imgView->GetUserID($_SESSION['user']);

if(file_exists($file))
	$file="upload\avatar_small\\".$_SESSION['user']."_small.jpg";
	else
	$file="upload\avatar_small\_small.jpg";
if($_GET['update']==1)
	$show='
	<script language="javascript" type="text/javascript">
	function showbirthday()
	{
		var number=parseInt(document.forms["user"].elements["birthyear"].value);
		var dayoption1=new Option("29","29");
		var dayoption2=new Option("30","30");
		var dayoption2=new Option("31","31");
		if(document.forms["user"].elements["birthmonth"].value=="2")
		{
		document.getElementById("birthday").remove(31);
		document.getElementById("birthday").remove(30);
		document.getElementById("birthday").remove(29);
		if(number%4==0)
		{
		document.getElementById("birthday").add(dayoption1,29);
		}
		}
		else
		{
	
			if(document.getElementById("birthday").length==29)
			document.getElementById("birthday").add(dayoption1,29);
			if(document.getElementById("birthday").length==30)
			document.getElementById("birthday").add(dayoption2,30);
			if(document.getElementById("birthday").length==31)
			document.getElementById("birthday").add(dayoption3,31);
			if(document.forms["user"].elements["birthmonth"].value=="4" || document.forms["user"].elements["birthmonth"].value=="6" || document.forms["user"].elements["birthmonth"].value=="9" || document.forms["user"].elements["birthmonth"].value=="11" )
			document.getElementById("birthday").remove(31);
		}
	}
	</script>
	<div>
	<img src="'.$file.'" />
	<p><a  href="../information/upload/index.php"  onclick= "" >照片</a></p>
	<form name="user" action="user.php" method="post" >
		<p>性别：	 <input type="radio" name="sex" value="男" /> 男
					 <input type="radio" name="sex" value="女" /> 女
					 <input type="radio" name="sex" value="无性别？" /> 无性别？</p>
	<p><select name="blood" id="blood" >
	    <option value="">血型</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
		</select></p>
	<select name="birthyear" id="birthyear" tabindex="1" onchange="showbirthday();">
		<option value="">年</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
		<option value="1984">1984</option>
		<option value="1983">1983</option>
		<option value="1982">1982</option>
		<option value="1981">1981</option>
		<option value="1980">1980</option>
		<option value="1979">1979</option>
		<option value="1978">1978</option>
		<option value="1977">1977</option>
		<option value="1976">1976</option>
		<option value="1975">1975</option>
		<option value="1974">1974</option>
		<option value="1973">1973</option>
		<option value="1972">1972</option>
		<option value="1971">1971</option>
		<option value="1970">1970</option>
		<option value="1969">1969</option>
		<option value="1968">1968</option>
		<option value="1967">1967</option>
		<option value="1966">1966</option>
		<option value="1965">1965</option>
		<option value="1964">1964</option>
		<option value="1963">1963</option>
		<option value="1962">1962</option>
		<option value="1961">1961</option>
		<option value="1960">1960</option>
		<option value="1959">1959</option>
		<option value="1958">1958</option>
		<option value="1957">1957</option>
		<option value="1956">1956</option>
		<option value="1955">1955</option>
		<option value="1954">1954</option>
		<option value="1953">1953</option>
		<option value="1952">1952</option>
		<option value="1951">1951</option>
		<option value="1950">1950</option>
		<option value="1949">1949</option>
		<option value="1948">1948</option>
		<option value="1947">1947</option>
		<option value="1946">1946</option>
		<option value="1945">1945</option>
		<option value="1944">1944</option>
		<option value="1943">1943</option>
		<option value="1942">1942</option>
		<option value="1941">1941</option>
		<option value="1940">1940</option>
		<option value="1939">1939</option>
		<option value="1938">1938</option>
		<option value="1937">1937</option>
		<option value="1936">1936</option>
		<option value="1935">1935</option>
		</select>
		<select name="birthmonth" id="birthmonth" onchange="showbirthday();" tabindex="1">
		<option value="">月</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		</select>
		<select name="birthday" id="birthday"  tabindex="1">
		<option value="">日</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		</select>
		<span id="password"></span> 		
	<p><input type=submit name="click2" value="确定"/>
	<input type=reset name="click1" vlaue="重置"/></p>
	</form>';
else
	$show='	
	<img src="'.$file.'" />
	<p>用户名：  '.$user['UserName'].'</p>
	<a  href="user.php?update=1"  onclick= "" >编辑资料</a>
	<p>性别：	 '.$profile['sex'].'</p>
	<p>血型：	 '.$profile['blood'].'</p>
	<p>邮箱：    '.$user['email'].'</p>
	<p>生日：    '.$profile['Birthday'].'</p>
	';
echo $show;
?>