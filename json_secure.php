<?php

header('Content-type: application/json',true,201);
echo '{"data":"<script>window.alert("xss");</script>"}';
