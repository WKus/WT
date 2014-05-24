<?php

//$wisdomlite = TRUE;
//if ($_COOKIE['sie']) {
//include ("membershome.php");
//} else {

$pagetitle = "Home Page";
include ("basics/headeroldnew3.php");
?>
<script type="text/javascript">
function _dSectionExpand(sec) {

if (! document.getElementById) {
     if (document.all[sec].style.display == "") {
   document.all[sec].style.display = "none";
     } else {
   document.all[sec].style.display = "";
   }
} else {
   if (document.getElementById(sec).style.display == "") {
   document.getElementById(sec).style.display = "none";
   } else {
   document.getElementById(sec).style.display = "";
   }
}
}



function showPopup(objID, yval) {

da=eval(yval);

yVal = da;

  if (type=="IE") {
  document.all[objID].style.pixelTop=yVal;
  }
  if (type=="NN") {
  document.layer[objID].top=yVal
  }
  if (type=="MO" || type=="OP" || !type) {
  document.getElementById(objID).style.top=yVal;
  }

}
</script>
<?php
#if (filesize ("basics/db.txt") >= filesize ("basics/dbbackup.txt") - 10) {
#copy ("basics/db.txt", "basics/dbbackup.txt");
#}

#####################################################
# CONNECT TO DB (READ ONLY)
#####################################################
/*
$dd = date ("Ymd");
if (! file_exists ("basics/db$dd.txt")) {

include ("../dbreadconnect.php");

//@////('dansope_wisdom', $db) or die( "Unable to select database");
$query = 'SELECT * FROM `database`';
$result = mysql_query($query, $db) or die('Query failed: ' . mysql_error());
mysql_close($db);

while ($user = mysql_fetch_array($result)) {
unset ($cont);
foreach ($user as $us) {
$i++;
if ($i % 2) {
$cont = "$cont$us*%f%*";
}
}
$file = "$file\n$cont";
}

$dd = date ("Ymd");
$dw = date ("Ymd", mktime(0, 0, 0, date ("m"), date("d") - 7, date("Y")));
$hand = fopen ("basics/db$dd.txt", 'w');
fwrite ($hand, $file);
fclose ($hand);
if (file_exists("basics/db$dw.txt")) {
unlink ("basics/db$dw.txt");
}
} */

#mail("dansoper@cantab.net", "Wisdom Database", $file,
#      "From: members@wisdom4all.com\r\n", "-f members@wisdom4all.com");


?>

  <!-- this creates extra padding -->
  <table cellpadding="0" cellspacing="0" style="width:100%"><tr><td style="width:150px; vertical-align:top;">
  <img src="images/spacer.gif" style="width:150px; height:1px" />
  <!-- here --></td><td style="width:100%; padding-right:0px;">

<map name="menu_Map">

<area shape="rect" alt="Forward newsletter link to a friend" coords="506,0,602,28"href="mailto:?subject=Wisdom Trust Newsletter&body=Click on this link for the latest Wisdom Trust newsletter:- http://www.wisdomtrust.org/wisdomnewsletter.html ... Sign up, free-of-charge, and help raise money for charity - even for you own favourite charity or good cause - almost every time you're online."</a>
<area shape="rect" alt="Examine facts about poverty, environment & health" coords="425,4,500,24"href="http://www.wisdomtrust.org/factslibrary.php" alt="tips">
<area shape="rect" alt="Vote for your favourite charity" coords="381,4,421,24"href="/charitystandings.php?showvoteform=yes" alt="research">
<area shape="rect" alt="Invite your friends to join us" coords="230,4,374,24"href="/invite.php" alt="invite new members">
<area shape="rect" alt="Research new facts for us" coords="154,4,227,24"href="http://www.wisdomtrust.org/contactfact.php" alt="vote">
<area shape="rect" alt="Examine our tips library" coords="110,4,152,24"href="http://www.wisdomtrust.org/ecotip.php" alt="educate">
<area shape="rect" alt="Earn money for charity through online shopping" coords="6,4,108,24"href="/shoppingmall.php" alt="forward to a friend">


</map>
 
<div align="left" style="background-color:#FFFFFF;">
        <table width="602px" border="0" cellspacing="0" cellpadding="0" style="color:#009600;font-family:Verdana, Arial,sans-serif;font-size:11px;">
                <tr>
                        <td valign="top" align="left" width="401px"><img src="http://www.wisdomtrust.org/images/spacer.gif" width="401px" height="1px"></td>
                        <td valign="top" align="left" width="1px"><img src="http://www.wisdomtrust.org/images/spacer.gif" width="1px" height="1px"></td>
                        <td valign="top" align="left" width="200px"><img src="http://www.wisdomtrust.org/images/spacer.gif" width="200px" height="1px"></td>
                </tr>
                <tr>
                        <td valign="top" align="left" width="401px">




<table width="150%" border="0" bordercolor="#009600" bgcolor="#FFFFFF" cellspacing="2" cellpadding="2" align="left">
<td>
<div style="color:#000000;font-family:Verdana,sans-serif;font-size:10px;font-weight:normal;padding-left:3px;padding-top:2px;padding-bottom:5px;">The Wisdom Trust helps create a wider awareness about the important issues facing the future of our planet and donates up to 70% of its income to other charities and good causes, worldwide.&nbsp;&nbsp; <span style="font-size:9px"><b><a href="/aboutus.php" style="color:#009600;font-weight:normal;text-decoration:none;" 
title="Click here for more information
about The Wisdom Trust's mission"><i>More...</i></a></span>
 </div>
</td>

</table>






<div style="position: absolute; left: 270px; top: 202px;">
<center>

<table width="450px">
<td width="100%">
<center>


<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="446" height="45">
<param name="movie" value="http://ru-mad.org/ciaran/surfbanner.swf" />
<param name="quality" value="high" />
<param name="wmode" value="transparent">
<embed src="http://ru-mad.org/ciaran/surfbanner.swf" width="446" height="45" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent"></embed>
</object>





<br><br><br>
<script type="text/javascript" src="http://uk.ask.com/affiliate/searchbox?sbjs=1&bt=4&qsrc=999&siteid=40189985"></script>

</div>


<div style="position: absolute; left: 0px; top: 165px;">
<center>

<script type="text/javascript">
var uri = 'http://impgb.tradedoubler.com/imp?type(img)g(16986250)a(1016705)' + new String (Math.random()).substring (2, 11);
document.write('<a href="http://clkuk.tradedoubler.com/click?p=3431&a=1016705&g=16986250" target="_BLANK"><img src="'+uri+'" border=0></a>');
</script>

</div>






<div style="position: absolute; left: 240px; top: 165px;">
<TABLE WIDTH="234px" BORDER="1" BORDERCOLOR="#000000;">
<TD>
<center>

<div style="color:#000000;font-family:Verdana,sans-serif;font-size:12px;font-weight:bold;padding-left:120px;padding-top:14px;padding-bottom:14px;"><a href="/shoppingmall.php" target="_blank" style="color:#009600;font-weight:bold;text-decoration:none;" title="Click here for The Wisdom Trust
Shopping Mall with over 1000 shops">Wisdom Trust<br>Shopping Mall</a></div>
</center>


<div style="position: absolute; left: 6px; top: 6px;"><img src="/images/shoppingicon6.GIF" height="50" width="100" vspace="0"></div>

</TD>
</TABLE>


</td>
</table>
</div>




<div class="logo" border="1" style="position: absolute; left: 840px; Top: 375px; width:150px; height:150px; margin:0; font-size:10px"><a href="http://www.frsb.org.uk" target="_blank" style="color:#009600;font-weight:bold;text-decoration:none;" title="The Fundraising Standards Board"><img src="/images/FRSB33.jpg" width="120px" height="120px" style="border:0" /></a></div>


<div class="logo" border="1" style="position: absolute; left: 840px; Top: 550px; width:150px; height:150px; margin:0; font-size:10px"><a href="http://www.institute-of-fundraising.org.uk" target="_blank" style="color:#009600;font-weight:bold;text-decoration:none;" title="The Institute of Fundraising"><img src="/images/IOF33.jpg" style="border:0" /></a></div>




<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>



<br><br><br><br><br><br><br>
<br><br><br><br>
<br>

<br>
<br>

<br>
<br>



        
        <table width="602px" border="0" cellspacing="0" cellpadding="0" style="color:#666666;font-family:Arial,sans-serif;font-size:11px;">
                <tr>
                        <td valign="top" align="left"><div style="padding-top:7px;">Had this website link forwarded to you? <a href="/register.php" style="color:#666666;font-weight:bold;">subscribe here</a>.</td>
                        <td valign="top" align="right"><div style="padding-top:7px;">The Wisdom Trust on Myspace: <a href="http://www.myspace.com/wisdomtrust" target="_blank" style="color:#009600;font-weight:bold;">Click here</a>.</td>


                </tr> </table>

</td>
</table>


        </div>
        <MAP name=menu_Map>
                  <AREA shape=RECT 
  alt="Forward newsletter link to a friend" coords=506,0,602,28 
  href="mailto:?subject=Wisdom Trust Newsletter&amp;body=Click on this link for the latest Wisdom Trust newsletter:- http://www.wisdomtrust.org/wisdomnewsletter.html ... Sign up, free-of-charge, and help raise money for charity - even for you own favourite charity or good cause - almost every time you're online." >

                  <AREA shape=RECT 
  alt="Examine facts about poverty, environment &amp; health" 
  coords=425,4,500,24 href="http://www.wisdomtrust.org/factslibrary.php">
                  <AREA 
  shape=RECT alt="Vote for your favourite charity" coords=381,4,421,24 
  href="/charitystandings.php?showvoteform=yes">
                  <AREA 
  shape=RECT alt="Invite your friends to join us" coords=230,4,374,24 
  href="/invite.php">
                  <AREA shape=RECT 
  alt="Research new facts for us" coords=154,4,227,24 
  href="http://www.wisdomtrust.org/contactfact.php">
                  <AREA shape=RECT 
  alt="Examine our tips library" coords=110,4,152,24 
  href="http://www.wisdomtrust.org/ecotip.php">
                  <AREA shape=RECT 
  alt="Earn money for charity through online shopping" coords=6,4,108,24 
  href="/shoppingmall.php">
            </MAP>
                <!--</td>
                </tr></table>-->
               <!-- <td class="verttop">-->
	

    </td></tr></table>
    <!-- this creates extra padding -->




<div style="position: absolute; left: 20px; top: 155px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/index.php" style="color:#009600;font-weight:normal;text-decoration:none;" title="General"><b><u>General</u></b></a></span></div></div>



<?php if ($sie) {

?>

<div class="logo" border="1" style="position: absolute; left: 30px; Top: 180px; width:200px; height:155px; margin:0; font-size:10px"><a href="/register.php" title="Friends of The Wisdom Trust
Account And Admin Centre"><img src="/images/iconstargold.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 176px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Friends of The Wisdom Trust
Account And Admin Centre">Admin</a></span></div></div>

<?php
}

Else {

?>



<div class="logo" border="1" style="position: absolute; left: 30px; Top: 180px; width:200px; height:155px; margin:0; font-size:10px"><a href="/register.php" title="Sign-up as a friend
of The Wisdom Trust"><img src="/images/ICONREGISTER20pix.jpg" width="14px" height="14px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 176px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Sign-up as a friend
of The Wisdom Trust">Register</a></span></div></div>

<?php

}

?>



<?php if ($sie) {



$bes3 = mysql_query("SELECT `day` FROM `fcs` WHERE `Unique Number` = '".$_SESSION['fundraiser']->unique."'");
$bes4 = mysql_fetch_array($bes3);
$bes5 = $bes4["day"];

$bes6 = mysql_query("SELECT `number` FROM `voting` WHERE `Unique Number` = '".$_SESSION['fundraiser']->unique."'");
$bes7 = mysql_fetch_array($bes6);
$bes8 = $bes7["number"];


$bes9 = intval($bes5 / 10);


$bes7 = $bes9 - $bes8 + 1;


?>





</div>



<div class="logo" border="1" style="position: absolute; left: 30px; Top: 198px; width:200px; height:155px; margin:0; font-size:10px"><a href="/charityvote.php" title="Vote to help us choose the
charities we donate to"><img src="/images/iconstargreen.gif" width="17px" height="17px" style="border:0" /></a></div>

<?php

if ($bes7 > 0) {

?>

<div style="position: absolute; left: 45px; top: 194px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFF380" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/charityvote.php" style="color:#2554C7;font-weight:bold;text-decoration:none;" title="Vote to help us choose the
charities we donate to">Vote (

<?php
echo $bes7;
?>

 available)</span></span></a>

</td>
</table>


</div></div>

<?php

}

else {


?>

<div style="position: absolute; left: 45px; top: 197px;">


<div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<span style="font-size:10px"><b><a href="/charityvote.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Vote to help us choose the
charities we donate to">Vote (None available)</a></span>

</div>
</div>
<?php

}

}

Else {

?>



<div class="logo" border="1" style="position: absolute; left: 26px; Top: 197px; width:200px; height:155px; margin:0; font-size:10px"><a href="/index.php" title="Get eco-tips, health-tips or IQ
puzzles straight to your inbox"><img src="/images/icon-mail.jpg" width="20px" height="20px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 197px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/index.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Get eco-tips, health-tips or IQ
puzzles straight to your inbox">Wisdom 2u</a></span></div></div>





<?php

}

?>


<div class="logo" border="1" style="position: absolute; left: 30px; Top: 242px; width:200px; height:155px; margin:0; font-size:10px"><a href="/invite.php" title="Invite your Friends & Family To
Join The Wisdom Trust's Program"><img src="/images/icon-mail.jpg" width="22px" height="22px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 238px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/invite.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Get eco-tips, health-tips or IQ
puzzles straight to your inbox">Wisdom 2u</a></span></div></div>





<div class="logo" border="1" style="position: absolute; left: 30px; Top: 221px; width:200px; height:155px; margin:0; font-size:10px"><a href="/invite.php" title="Invite your Friends & Family To
Join The Wisdom Trust's Program"><img src="/images/ICONINVITE20pix.jpg" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 217px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/invite.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Invite your Friends & Family To
Join The Wisdom Trust's Program">Invite</a></span></div></div>



<div class="logo" border="1" style="position: absolute; left: 30px; Top: 263px; width:200px; height:155px; margin:0; font-size:10px"><a href="/invite.php" title="Invite your Friends & Family To
Join The Wisdom Trust's Program"><img src="/images/iconstarred.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 259px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/invite.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Help and information ">Help</a></span></div></div>








<div style="position: absolute; left: 20px; top: 288px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.org/grants.php" style="color:#009600;font-weight:normal;text-decoration:none;" title="Eco Grants And Education
Grants For Members"><b><u>Wisdom Grants</u></b></a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 29px; Top: 311px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/grants.php" title="Grants between £1,000 and £20,000
to help you make your home and
your life more energy efficient"><img src="/images/ICONECOGRANT17pix2.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 309px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.org/grants.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Grants between £1,000 and £20,000
to help you make your home and
your life more energy efficient">Eco Grants</a></span></div></div>



<div class="logo" border="1" style="position: absolute; left: 30px; Top: 334px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.orgk/grants.php" title="Grants between £1,000 and
£20,000 to help you offset
the cost of your education"><img src="/images/ICONEDUCATIONGRANT17pix2.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 329px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.org/grants.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Grants between £1,000 and
£20,000 to help you offset
the cost of your education">Education Grants</a></span></div></div>



<div class="logo" border="1" style="position: absolute; left: 30px; Top: 355px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/wtcarbonoffsetting.php" title="Offset some or all your carbon
footprint using the value of
your Wisdom Trust grant fund"><img src="/images/ICONCQRBONOFFSETTING20pix.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 351px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.org/wtcarbonoffsetting.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="Offset some or all your carbon
footprint using the value of
your Wisdom Trust grant fund">Carbon Offsetting</a></span></div></div>



<div style="position: absolute; left: 20px; top: 376px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/membershome.php" style="color:#009600;font-weight:normal;text-decoration:none;"><b><u>Education</u></b></a></span></div></div>





<div class="logo" border="1" style="position: absolute; left: 29px; Top: 401px; width:200px; height:155px; margin:0; font-size:10px"><a href="/iq.php"><img src="/images/ICONWISDOMIQ17pix.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 397px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="/iq.php" style="color:#000000;font-weight:normal;text-decoration:none;"><span title="Test yourself today, win Fundraising
Credits and support your favourite
charity or good cause - it's easy!">WISDOM IQ</span></a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 30px; Top: 422px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/trivia.php"><img src="/images/ICONWISDOMAWARE17pix3.jpg" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 418px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/trivia.php" style="color:#000000;font-weight:normal;text-decoration:none;">WISDOM Aware</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 30px; Top: 443px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/trivia.php"><img src="/images/ICONPEARLSOFWISDOM17pix2.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 439px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/trivia.php" style="color:#000000;font-weight:normal;text-decoration:none;">Pearls of WISDOM</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 10px; Top: 464px; width:200px; height:155px; margin:0; font-size:10px"><a href="/membershome.php"><img src="/images/FCTICKICON17pix.gif" width="14px" height="14px" style="border:0" /></a></div>

<div class="logo" border="1" style="position: absolute; left: 30px; Top: 464px; width:200px; height:155px; margin:0; font-size:10px"><a href="/membershome.php"><img src="/images/WISDOMFACTSICON90pix2.gif" width="14px" height="14px" style="border:0" /></a></div>


<!-- WISDOM Facts -->


<?php

if ($_SESSION['fundraiser']) $bonusavailable = $_SESSION['fundraiser']->sessionwhatisposscalculations();

//$bonusavailable = unserialize(file_get_contents("/bonusfcs.php?do=whatispossible&eid=".$_SESSION['fundraiser']->email)); ?>

<!-- ImageReady Slices (w4abonuses.psd) -->

<?php if ($bonusavailable['total']) { ?>

<////////////>
<!-- 1-2-3 -->
<////////////>

<div style="position: absolute; left: 42px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFF380" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#2554C7;font-weight:bold;text-decoration:none;"><span title="Click for facts options">WISDOM Facts - &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>



   
<?php if ($bonusavailable['feat'])

{ ?>


<////////////>
<!--FEAT-->
<////////////>

<div style="position: absolute; left: 143px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFF380" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#FF0000;font-weight:bold;text-decoration:none;"><span title="Look at 1 facts">1

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>



<?php } 


else {?>


<////////////>
<!-NOFEAT->
<////////////>

<div style="position: absolute; left: 143px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="More Facts (1) available in <?php echo round (($bonusavailable['time'] + (2 * 3600) - time()) / 60); ?> mins">1

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>





<?php } ?>



<?php if ($bonusavailable['search'])

{ ?>



<////////////>
<!--SEARCH-->
<////////////>

<div style="position: absolute; left: 155px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFF380" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#FF0000;font-weight:bold;text-decoration:none;"><span title="Look at 2 facts">2

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>



<?php


} 


else { ?>



<////////////>
<!-NOSEARCH->
<////////////>

<div style="position: absolute; left: 155px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="More Facts (2) available in <?php echo round (($bonusavailable['time'] + (2 * 3600) - time()) / 60); ?> mins">2

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>


<?php } ?>





<?php if ($bonusavailable['price'])

{ ?>


<////////////>
<!--PRICE-->
<////////////>

<div style="position: absolute; left: 167px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFF380" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#FF0000;font-weight:bold;text-decoration:none;"><span title="Look at 3 facts">3

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>



<?php } 

else { ?>


<////////////>
<!-NOPRICE->
<////////////>

<div style="position: absolute; left: 167px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" title="More Facts (3) available in <?php echo round (($bonusavailable['time'] + (2 * 3600) - time()) / 60); ?> mins">3

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>




<?php }


}

 else { ?>



<////////////>
<!-- 0-0-0 -->
<////////////>

<div style="position: absolute; left: 42px; top: 459px;"><div class="noprint" style="color:#000000; padding-top:4px; margin-left:5px; float:left; text-align:left">

<table bgcolor="#FFFFFF" border="0" cellpadding="1" cellspacing="1">
<td>

<span style="font-size:10px"><b><a href="/register.php" style="color:#000000;font-weight:normal;text-decoration:none;" alt="No Facts (with FC's) Available for <?php echo $bonusavailable['minsremaining']; ?> mins" title="More Facts (with FC's) available in <?php echo $bonusavailable['minsremaining']; ?> mins">WISDOM Facts - 1 2 3

</span></span></a>

</td>
</table>


</div></div>

<////////////>
<!-- END -->
<////////////>





<?php } ?>
<!-- End ImageReady Slices -->








<div class="logo" border="1" style="position: absolute; left: 30px; Top: 485px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/ecotips.php"><img src="/images/ECOTIPSICON17pix2.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 481px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/ecotips.php" style="color:#000000;font-weight:normal;text-decoration:none;">Eco-Tips</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 30px; Top: 506px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/healthtips.php"><img src="/images/ICONHEALTHTIPS20pix.gif" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 502px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/healthtips.php" style="color:#000000;font-weight:normal;text-decoration:none;">Health-Tips</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 30px; Top: 527px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/trivia.php"><img src="/images/ICONWISDOMLIBRARY17pix.jpg" width="17px" height="17px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 523px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/trivia.php" style="color:#000000;font-weight:normal;text-decoration:none;">Facts Library</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 29px; Top: 547px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/wtalist.php"><img src="/images/ARTICLESICON17pix2.gif" width="16px" height="16px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 544px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/wtalist.php" style="color:#000000;font-weight:normal;text-decoration:none;">Articles</a></span></div></div>


<div class="logo" border="1" style="position: absolute; left: 31px; Top: 569px; width:200px; height:155px; margin:0; font-size:10px"><a href="http://www.wisdomtrust.org/trivia.php"><img src="/images/ICONNEWSLETTER17pix2.gif" width="15px" height="15px" style="border:0" /></a></div>

<div style="position: absolute; left: 45px; top: 565px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://www.wisdomtrust.orgk/wisdomnewsletter.php" style="color:#000000;font-weight:normal;text-decoration:none;">Newsletter</a></span></div></div>



<div class="logo" border="1" style="position: absolute; left: 455px; Top: 470px; width:200px; height:155px; margin:0; font-size:10px"><a href="/iq.php"><img src="/images/WISDOMIQICON90pix.gif" width="90px" height="90px" style="border:0" /></a></div>

<div style="position: absolute; left: 460px; top: 560px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:12px"><b><a href="http://wisdom4all.co.uk/iq.php" style="color:#000000;font-weight:normal;text-decoration:none;"><b>Wisdom IQ</b></a></span></div></div>

<div style="position: absolute; left: 440px; top: 575px;"><div class="noprint" style="color:#000000; padding-top:5px; margin-left:5px; float:left; text-align:left"><span style="font-size:10px"><b><a href="http://wisdom4all.co.uk/iq.php" style="color:#000000;font-weight:normal;text-decoration:none;">Test Yourself Today</a></span></div></div>






<div style="position: absolute; left: 270px; top: 630px;">

<b>So far, we list over 500 charities & good causes, in 21 different countries.<br>All are potential beneficiaries of donations from our fund and you can<br>help us decide which get donations and how much each one gets.</b><br>
<br><select class="input" name="spon2" id="sel">


<?php
# SQL added 23.11.04
#$dbfile = file ($dbfileloc);
#foreach ($dbfile as $dbline) {
#list ($dbemail, $dbpassword, $dbsponsor, $dbgold, $dbposition, $dbgspons, $dbman1, $dbman2, $dbman3, $dbman4, $dbman5, $dbbronze, $dbsilver, $dblogflag, $dbrest1, $dbrest2, $dbrest3, $dbrest4, $dbrest5, $dbrest6, $rest) = split ("\|", $dbline);



#####################################################
# CONNECT TO DB (READ ONLY)
#####################################################

include ("../dbreadconnect.php");

//('dansope_wisdom', $db) or die( "Unable to select database");
$query = 'SELECT `Sponsor / Charity Name`, `Unique Number` FROM `database`';
$result = mysql_query($query, $db) or die('Query failed: ' . mysql_error());
mysql_close($db);

while ($user = mysql_fetch_array($result)) {

if ($user["Sponsor / Charity Name"]) {
$chars[] = $user["Sponsor / Charity Name"] . "|" . $user["Unique Number"];

}
}
sort ($chars);
foreach ($chars as $char) {
list ($dblogflag, $dbrest2) = split ("\|", $char);
echo "<option value=\"$dbrest2\">$dblogflag</option>";

}
?>
<option value="" selected="selected">--------------- Current Charities & Good Causes Listed Here ---------------</option>
</select>
</p>


<b>
<b>If your own favourite charitable cause isn't yet listed <a href="/invite.php" target="_blank">click here</a> to nominate them.</b><br>


</div>



  <?php include ("basics/footeroldnew2.php");

  //}
  ?>
