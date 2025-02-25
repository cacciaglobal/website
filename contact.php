<?php
$mailto = 'info.cacciaglobal@gmail.com' ;
$subject = "Query from " . $_POST['txtname'] ;
$mailfrom = "noreplyyusuf@gmail.com";

$iheading = "Query @ Caccia Global"
$iname = $_POST['txtname'];
$iemail = $_POST['txtemail'];
$iphone = $_POST['txtphone'];
$imessage = $_POST['txtmessage'] ;

$http_referrer = getenv( "HTTP_REFERER" );

if($iname=="") echo("<html><head><title>$iheading</title><script>function update(){history.go(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><table border=1pt cellpadding=0 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79 bgcolor=#B7BABD><tr><td><table border=0 cellpadding=3 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79><tr><td><b><font color=#272F3A><font face=verdana size=2>Error: You Didn't Entered Your Name!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#272F3A>Please wait for a while..... You are being redirected! If not then click </font><a href=javascript: style=text-decoration: none><font face=Verdana size=1 color=#272F3A>here</font></a><font face=Verdana size=1 color=#272F3A>.</font></p><body></html>");
else if($imobile=="") echo("<html><head><title>$iheading</title><script>function update(){history.go(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><table border=1pt cellpadding=0 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79 bgcolor=#B7BABD><tr><td><table border=0 cellpadding=3 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79><tr><td><b><font color=#272F3A><font face=verdana size=2>Error: You Didn't Entered Your Email!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#272F3A>Please wait for a while..... You are being redirected! If not then click </font><a href=javascript: style=text-decoration: none><font face=Verdana size=1 color=#272F3A>here</font></a><font face=Verdana size=1 color=#272F3A>.</font></p><body></html>");
     else if($imessage=="") echo("<html><head><title>$iheading</title><script>function update(){history.go(-1);}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><table border=1pt cellpadding=0 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79 bgcolor=#B7BABD><tr><td><table border=0 cellpadding=3 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79><tr><td><b><font color=#272F3A><font face=verdana size=2>Error: You Didn't Entered The Message!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#666666>Please wait for a while..... You are being redirected! If not then click </font><a href=javascript: style=text-decoration: none><font face=Verdana size=1 color=#272F3A>here</font></a><font face=Verdana size=1 color=#272F3A>.</font></p><body></html>");
          else
            {
             $messageproper = "<div align=center>" .
"<html><head><title></title></head><body><table border=1 width=500 cellspacing=0 cellpadding=0 style=border-collapse: collapse bordercolor=#808080>" .
"<tr><td colspan=2 height=42 bgcolor=#E1E1E1><p align=center><b><font face=Tahoma>Query Details</font></b></td></tr>" .
"<tr><td width=20% height=30><font face=Tahoma>Name :</font></td><td width=79% height=30><font face=Tahoma>$iname</font></td></tr>" .
"<tr><td width=20% height=30><font face=Tahoma>Email :</font></td><td width=79% height=30><font face=Tahoma>$iemail</font></td></tr>" .
"<tr><td width=20% height=30><font face=Tahoma>Phone :</font></td><td width=79% height=30><font face=Tahoma>$iphone</font></td></tr>" .
"<tr><td width=20% height=30><font face=Tahoma>Message :</font></td><td width=79% height=30><font face=Tahoma>$imessage</font></td></tr></table></body></html>" ;



             if(mail($mailto, $subject, $messageproper,"From:$mailfrom, MIME-Version: 1.0\n"."Content-type: text/html; charset=iso-8859-1"))
               {
                echo("<html><head><title>$iheading</title><script>function update(){top.location='/Index';}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><table border=1pt cellpadding=0 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79 bgcolor=#B7BABD><tr><td><table border=0 cellpadding=3 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79><tr><td><b><font color=#272F3A><font face=verdana size=2>Message Was Sent Successfully!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#656F79>Please wait for a while..... You are being redirected! If not then click </font><a href=javascript: style=text-decoration: none><font face=Verdana size=1 color=#272F3A>here</font></a><font face=Verdana size=1 color=#272F3A>.</font></p><body></html>");
               }
             else
               {
                echo("<html><head><title>$iheading</title><script>function update(){top.location='/Index';}var refresh=setInterval('update()',3000);</script></head><body onload=refresh><div align=center><center><table border=1pt cellpadding=0 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79 bgcolor=#B7BABD><tr><td><table border=0 cellpadding=3 cellspacing=0 style=border-collapse: collapse; bordercolor=#656F79><tr><td><b><font color=#272F3A><font face=verdana size=2>An Error Occured In mail()!</font></font></b></td></tr></table></td></tr></table></center></div><p align=center><font face=Verdana size=1 color=#272F3A>Please wait for a while..... You are being redirected! If not then click </font><a href=javascript: style=text-decoration: none><font face=Verdana size=1 color=#272F3A>here</font></a><font face=Verdana size=1 color=#272F3A>.</font></p><body></html>");
               }
            }

?>