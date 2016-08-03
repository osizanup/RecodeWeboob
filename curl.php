<?php 
	$curl = curl_init("https://www.paypal.com/signin?country.x=IN&locale.x=en_IN");	//URL
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	$page = curl_exec($curl);		//Excutes url
	 if(curl_errno($curl)) {// check for execution errors
		echo 'Scraper error: ' . curl_error($curl);
		exit;
	}
	echo$page;
	// curl_close($curl);
?>
<script>
window.onload =  setTimeout(function(){ insertData(); }, 8000);		//timeout of 8sec //Wait for page getting loaded

function insertData(){		//JS function to fill data in textboxes
	// alert('insert');
	document.getElementById('email').value = 'YOUR USERNAME';
	document.getElementById('password').value = 'YOUR PASSWORD';
	document.getElementById('btnLogin').click();		//clicks on LogIn button
	
	// alert('done');
}
</script>
