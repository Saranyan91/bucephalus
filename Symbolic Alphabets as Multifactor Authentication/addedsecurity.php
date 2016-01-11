<?php
include('session.php');
include('seclogin.php'); // Includes seclogin Script

if(isset($_SESSION['login_user1'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Additional Authentication</title>
      </head>
    
    <body>
        <div><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        </div>
        <div><p>For added security reasons we have sent you the additional password to your email along with the key for that password</p>
            <p>Please click that password using the below symbolic keyboard</p></div>
        <p><?php echo $username ; ?></p>
        <div>
        <input type="image" onmousedown="Appendingpass('17');" id = "17" src="Font symbols/17.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('23')" id = "23" src="Font symbols/23.JPG" height="42" width="42"> 
            <input type="image" onmousedown="Appendingpass('05')" id = "05" src="Font symbols/5.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('18')" id = "18" src="Font symbols/18.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('20')" id = "20" src="Font symbols/20.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('25')" id = "25" src="Font symbols/25.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('21')" id = "21" src="Font symbols/21.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('09')" id = "09" src="Font symbols/9.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('15')" id = "15" src="Font symbols/15.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('16')" id = "16" src="Font symbols/16.JPG" height="42" width="42"><br>
            <input type="image" onmousedown="Appendingpass('01')" id = "01" src="Font symbols/1.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('19')" id = "19" src="Font symbols/19.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('04')" id = "04" src="Font symbols/4.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('06')" id = "06" src="Font symbols/6.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('07')" id = "07" src="Font symbols/7.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('08')" id = "08" src="Font symbols/8.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('10')" id = "10" src="Font symbols/10.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('11')" id = "11" src="Font symbols/11.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('12')" id = "12" src="Font symbols/12.JPG" height="42" width="42"><br>
            <input type="image" onmousedown="Appendingpass('26')" id = "26" src="Font symbols/26.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('24')" id = "24" src="Font symbols/24.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('03')" id = "03" src="Font symbols/3.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('22')" id = "22" src="Font symbols/22.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('02')" id = "02" src="Font symbols/2.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('14')" id = "14" src="Font symbols/14.JPG" height="42" width="42">
            <input type="image" onmousedown="Appendingpass('13')" id = "13" src="Font symbols/13.JPG" height="42" width="42"><br>
            </div>
        <form method="post" id="passform" action=""> 
            <input id="enterpass" name="enterpass" type="password">
            <input id="button" type="submit" name="submit" value="Log-In">
        </form>
        <span><?php echo $error; ?></span>
        <script type="text/javascript">
            var pass = '';
            function Appendingpass(str) {
                var temp = pass.concat(str);
                fobj = document.forms['passform'];
                fobj.elements['enterpass'].value = temp;
                pass = temp;
            }
       </script>
     </body>
 </html>