

 

<html>
<body>
<h1>Index Page</h1>
<br />

This instance ID is:--

<?php

// From URL to get webpage contents.
$url = "http://169.254.169.254/latest/meta-data/instance-id";

// Initialize a CURL session.
$ch = curl_init();

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

echo $result;

?>

<br />
<hr />

IP address is:--

<?php

// From URL to get webpage contents.
$url = "http://169.254.169.254/latest/meta-data/local-ipv4";

// Initialize a CURL session.
$ch = curl_init();

// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

$result = curl_exec($ch);

echo $result;

?>

</body>
</html>

