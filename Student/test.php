<?php
#6#
	$ch=curl_init('https://apiv4.goqii.com/user/verify_mobile?goqiiUserId=&goqiiAccessToken=&extention=91&signature=01b41fef506b5db011afe4bc9729b51dc03d4518&apiKey=whshf1wjy88ayld1h2ba6jqay2gay854&mobile=8884823362&nonce=iuwerjjfhadlsnnk');
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,array('Host: apiv4.goqii.com',
'Connection: Keep-Alive',
'Accept-Encoding: gzip',
'User-Agent: okhttp/3.8.0'));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);

curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$lifa8 = curl_exec($ch);
echo $lifa8;


?>