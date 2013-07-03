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
        Current time: <span id="current_time"></span> | Client IP: <?= $_SERVER["REMOTE_ADDR"] ?> | Current online: <span id="current_online">xxx</span> | Visit today: <span id="visit_today">xxx</span> | Unique visits: xxx | Total visits: <span id="total_visit">xxx</span>

    </div>

    <div class="clear"></div>
<p align="right" style="margin-right: 30px"><a href="" id="btn_load" onclick="return false;">load</a> | <a href="" class="filter_ip" onclick="return false;">filter ip</a> | <a href="" class="filter_clear" onclick="return false;">clear</a>
</p>
<!-- <input class="filter_input" style="text-align: right; width: 100%; background: none repeat scroll 0% 0% black; border: 1px solid rgb(0, 204, 0); color: rgb(0, 153, 0);"> -->
</div>

<script type="text/javascript">

// $(".filter_input").keypress(function() {
    
//     var n = $(this).val().split(" ");

//     switch(n[0])
//     {
//     case 'grep':
//         fn_grep(n[1]);
//         break;
//     default:
//         console.log('invalid command');
//     }
// });

// function fn_grep(str)
// {
//     $('.log_content').each(function(i,e){
//         $(e).css('background','none');
//         var a = $(e).val();
        
//         // find
//         if( a.indexOf(str) >= 0)
//         {
//             $(e).css('background','red');
//             console.log('here');
//         }
//         else
//         {
//             console.log('not found');
//         }
//     });
// }

$('.filter_ip').click(function(){
    $('.log_client_ip').css('background','none');
    var ip=prompt("Enter IP","");
    var r = $('span[value="'+ip+'"]');
    
    if ( r.length == 0)
    {
        alert('not found');
    }

    $('span[value="'+ip+'"]').each(function(i, e){
        $(e).css('background','red');
    });
    return false;
});

// $('.log_content').each(function(i,e){
//     console.log( $(e).)
// });
// a.indexOf('14.161.zxcz')

$('.filter_clear').click(function(){
    $('.log_client_ip').css('background','none');
    
    return false;
});
</script>