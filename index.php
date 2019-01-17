<?php

switch (connection_status())
{
case CONNECTION_NORMAL:
  $txt = 'Status code: 200';
  break;
case (CONNECTION_ABORTED & CONNECTION_TIMEOUT):
  $txt = 'Connexion non reussite';
  break;
default:
  $txt = 'Unknown';
  break;
}
//echo $txt;
echo "status : Ok";
?>
