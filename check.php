<?php

function httpget($address,$timeout=3)
{
$context = stream_context_create(array(
'http' => array(
'timeout' => $timeout
)
));

return file_get_contents($address,0,$context);
}


while(true)
{
$content=httpget('https://www.kimsufi.com/en/order/kimsufi.cgi?hard=162sk42',10);
if($content)
{
if(strpos($content,'est invalide')==false)
{
api_notify("[kimsufi]Appear! ","Time: " . date("Y-m-d-H:i",time()+46800),1,2);//Here should go your notify function
}
}
sleep(60);

}
