<html>
<head>
    <title>LLOGER</title>

    <link rel="stylesheet" type="text/css" href="<?= base_url("/template/css/main.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url("/template/css/jquery-ui.css"); ?>">

    <script src="<?php echo base_url("template/js/jquery.min.js"); ?>"></script>

    <script src="<?php echo base_url("template/js/jquery-ui.min.js"); ?>"></script>

</head>

<body>
<div id="header">
    <div id="logo">
        <h2>LLOGER</h2>
    </div>

    <div id="time">
        Current time: <span id="current_time"></span> | Client IP: <?= $_SERVER["REMOTE_ADDR"] ?>

    </div>

    <div class="clear"></div>
<p align="right" style="margin-right: 30px"><a href="" id="btn_load" onclick="return false;">load</a></p>
</div>

<div id="main">
    <div id="left_column">
        <ul id="list_site">
            <?
            // foreach ($sites as $key => $site) {
            //     echo '<li><a href="'.$site['url'].'">'.$site['name'].'</a></li>';
            // }

            ?>
            
            <li class="active"><a href="" >familug.org</a></li>
            
            
        </ul>
    </div>
    <div id="right_column">
        
    </div>

    <div class="clear"></div>
</div>


<div id="footer">
    <br/>
    <br/>
    <center>
        &#0169; lamdt@familug.org
    </center>
</div>


<script type="text/javascript">

$.ajax({
    type: "GET",
    url: "<?= base_url('res/index/51d29dd2d9967') ?>",

    success: function(res){
        if(res != 'false')
        {
            $('#right_column').html(res);
        }
        else
        {
            alert('ERROR');
        }
    },
});

function load()
{
    var id = $('.log_content').first().attr('logid');
    $.ajax({
        type: "GET",
        url: "<?= base_url('res/load_part/51d29dd2d9967') ?>"+'/'+id,

        success: function(res){
            if(res != 'false')
            {
                $('#right_column').prepend(res)
            }
            else
            {
                alert('ERROR');
            }
        },
    });
}

$('#btn_load').click(function(){

    load();
    return false;
});

setInterval(function(){ load(); }, 4000);

function Timer() {
   var dt=new Date()
   document.getElementById('current_time').innerHTML=dt.getHours()+":"+ (dt.getMinutes() < 10 ? "0" : "") + dt.getMinutes() +":"+ (dt.getSeconds() < 10 ? "0" : "") +dt.getSeconds();
   setTimeout("Timer()",1000);
}
Timer();
</script>
</body>
</html>