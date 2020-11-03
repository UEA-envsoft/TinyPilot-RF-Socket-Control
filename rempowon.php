<?php
echo exec('python /opt/tinypilot/app/TransmitRF.py a_on');
$loc = "http://" . $_SERVER['SERVER_ADDR'];
echo "<script>window.location.href = '$loc';</script>"
?>