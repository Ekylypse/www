<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://HA_URL:8123/api/states/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ...'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
echo '<br>';

$info = json_decode($result,true);

$entity_id = $info['entity_id'];
$state = $info['state'];
$last_changed = $info['last_changed'];
echo $info.'  '.$state.'  '.$last_changed;
?>
