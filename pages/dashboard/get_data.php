<?php
	$url_get = "https://9c5605cadd8c57f8d134636d0c9681c4:3fc0d27d73e1fdc1d37611a25ea86d82@applesolutions.myshopify.com/admin/orders/count.json?status=any";
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$url_get);   //using GET
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);   //return results as string
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   //don't need to verify any certificates
	$result = curl_exec($curl);   //go get the data!
	curl_close($curl);   //close connection to free up your resources
	$results = json_decode($result,true);
	echo json_encode($results["count"]);