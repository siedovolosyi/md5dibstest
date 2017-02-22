<?php
//*******//
//$cards = '1702';
//$year = '20' . substr($cards, 0,2);
//$months = substr($cards, 2,2);
//$cardDate = date('ymt', strtotime($year . '-' . $months));
//if (date('ymt', strtotime('now')) <= $cardDate) {
//    echo 'yes';
//} else {
//    echo 'no';
//}
//*******//
$k1 = 'uD?TYWUehGy6(ufm;}.dO^XY8d*f,1gn';
$k2 = 'ho$8BeA;fNg93(@Pd;wtVd;bV#8ad]XQ';
$merchant = '90221600';
$orderId = '10840';
$ticket = '1639919142';
$currency = 'NOK';
$amount = '16900';
echo md5($k2 . md5($k1 . 'merchant=' . $merchant . '&orderid=' . $orderId . '&ticket=' . $ticket . '&currency=' . $currency . '&amount=' . $amount));
//echo MD5($k2 . MD5($k1 . "transact=1635624036&amount=100&currency=NOK"));

//echo $md5key=md5($k2.md5($k1."transact=".$ticket."&preauth=true&currency=".$currency));

echo '</br>';
//echo '8602f0a3fe373640dbd94722d84d9dfb';
//The calculation MD5(k2 + MD5(k1 + "transact=10117&amount=9995&currency=208")) should result in the key 0bfae621cc8276911b3767dc14db3bc7
// md5key = MD5(k2 + MD5(k1 + "merchant=<merchant>&orderid=<orderid>&ticket=<ticket>&currency=<currency>&amount=<amount>"))
// md5key = MD5(k2 + MD5(k1 + "merchant=<merchant>&orderid=<orderid>&ticket=<ticket>&currency=<currency>&amount=<amount>"))