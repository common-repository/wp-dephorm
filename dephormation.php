<?php
/*
this file is NOT covered by the GPL licence of the plugin code. Please see terms and conditions below.
Licence Terms.
~~~~~~~~~~~~~~
1) Dephormation is copyright Peter John
2) You are free to download and install Dephormation for personal or commercial use
3) You may use Dephormation on as many computers as you wish without charge
3) Dephormation may not be rebranded or bundled with other software
4) No permission is granted for ISPs or software developers to incorporate Dephormation into a product or service involving Phorm or any other advertising system
5) You may decompile the software 

Please see https://www.dephormation.org.uk

*/

   // Overwrite Phorm's UID cookies
   setcookie('webwise-uid','OPTED_OUT', time()+60*60*24*3000, '/');
   // End

   // Read an image to confirm
   header("Expires: Sat, 1 Jan 2000 00:00:00 GMT");
   header("Cache-Control: max-age=0, no-cache, no-store, must-revalidate");
   header("Pragma: no-cache");
   header("Content-type: image/png");

   readfile("dephormed.png");

?>
