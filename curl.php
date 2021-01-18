<?php
$hours = $_REQUEST['hours'];
$trigger = $_REQUEST['trigger'];
if($trigger && $trigger==1){
    startStop('https://jenkins-st.appscms.com/job/Infra/job/staging-infra-down-ondemand/buildWithParameters?token=xLT3RwJnBTsQCH4EwzCDYsM&time=1');
    echo "Server is up now";
}else{
    startStop('https://jenkins-st.appscms.com/job/Infra/job/staging-infra-down-ondemand/build?token=xLT3RwJnBTsQCH4EwzCDYsM');
    echo "Server is stop now";
}
function startStop($url){
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'remote-up-down:11157ee3172d65af41467aa4e2ce79a22a',
	'Connection:keep-alive',
	'Cache-Control:max-age=0',
	'Upgrade-Insecure-Requests:1',
	'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36',
	'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
	'Accept-Language:nl-NL,nl;q=0.9,en-US;q=0.8,en;q=0.7',
	));
	$data = curl_exec($ch);
	$data = curl_exec($ch);
	$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	return $data; 
	}
?>