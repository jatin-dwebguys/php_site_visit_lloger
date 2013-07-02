<html>
<head>
    <title>LLOGGER</title>

    <link rel="stylesheet" type="text/css" href="<?= base_url("/template/css/main.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/template/css/jquery-ui.css"); ?>">

    <script src="<?php echo base_url("template/js/jquery.min.js"); ?>"></script>

    <script src="<?php echo base_url("template/js/jquery-ui.min.js"); ?>"></script>

</head>

<body>
<div id="header">
    <div id="logo">
        <h2>LLOGGER</h2>
    </div>

    <div id="time">
        Current time: <span id="current_time"></span> | Client IP: <?= $_SERVER["REMOTE_ADDR"] ?>

    </div>

    <div class="clear"></div>
<p align="right" style="margin-right: 30px"><a href="" id="btn_load" onclick="return false;">load</a> | Current online: xxx | Visit today: xxx | Unique visits: xxx | Total visits: xxx</p>
</div>