<?php
//ini_set('display_errors',1); 
//error_reporting(E_ALL);
######### STRICT SELLERS URL ##########################################################################
DEFINE('WHMCS_SELLER','https://www.flexacore.com'); #Example https://flexacore.com/clients
$hideFields=array("SellerURL"); #Available Options "SellerURL" , "SecretKey" , "Username" , "Password" , "ActiveOrder", "AddFee" , "ResellerEmail", "ResellerNotify", "BalanceSoftLimit",	 "CreditsBalance" ,	 "TestMode"
$lang_Module="English"; #Default Language...you can add your language at /lang folder
$debug_email="support@flexacore.com"; #debug mail, for more seperate by commas

//$overrideFieldValues=array("BalanceSoftLimit"=>50); //You can override fields (client's options values)
//$ssl_veryfier=true; #CURL SSL Veryfier Connection | Default false
//$sync_fields=false; # Domain Additional Fields, pass values to order at seller site | Default true
//$allow_Nameserver_notifications=false; #Register,Modify,Delete NameServer Request by e-mail. Delivered at $debug_email var

