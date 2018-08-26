# Flexacore-Domain-Registrar-For-WHMCS
Official Flexacore Domain Registrar For WHMCS



1.	Download the module archive “f-t-l-registrar-latest.zip” from https://www.flexacore.com/downloads.php and Unzip it to your desktop or any other preferred location.

2.	Upload the folder “modules” to your WHMCS root via FTP (Make sure in your registrars directory you get the folder flexacore)

 <img src="cdn.flexacore.com/docs/whmcs/cpanel_upload.png" alt="cPanel Upload">


3.	Go to WHMCS Setup>> Domain Registars >> Flexacore
 

4.	Fill in with the right details or else the module will not work

Setting	Description	Option
SecretKey	The reseller’s secretkey (Raise a support ticket in the client area at flexacore.com to get this)	Required
Username	The reseller’s e-mail used when accessing Flexacore client area	Required
Password	The reseller’s password used when accessing Flexacore client area	Required




a.	Check the Active Order option to change the status order from Pending to Active if is paid after renew/transfer/register actions. Recommended
b.	AddFee: Adds the domain cost as transaction fee and this helps to have more realistic stats about your income Recommended

5.	Go to WHMCS Setup>> Domain Pricing and assign the DomainSeller module to tlds that the reseller want to order by you
 

6.	WHOIS Service of ALL tlds! Edit the file whmcsfolder/includes/whoisservers.php. More at whois_info.txt
7.	Now it’s time to start selling domains, login to your account at flexacore.com and add funds to your account. Enjoy your sales, cheers.
 

Optional
8.	Edit the file whmcsfolder/includes/additionaldomainfields.php to define additional domain fields to tld. More at add_domainfileds.txt file 

