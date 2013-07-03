<div id="main">
    <div id="left_column">
        <ul id="list_site">
            <?
            foreach ($sites as $key => $site) {
                echo '<li class="btn_select_site" siteid="'.$site['id'].'"><a href="'.$site['url'].'">'.$site['name'].'</a></li>';
            }

            ?>
            
            <!-- <li class="active"><a href="" >familug.org</a></li> -->
            
            
        </ul>
    </div>
    <div id="right_column">
        
    </div>

    <div class="clear"></div>
</div>

<script type="text/javascript">

// default run
var _first = $('.btn_select_site').first()
_first.addClass('active');

__client_id = _first.attr('siteid');

$('.btn_select_site').click(function(){
    __client_id = $(this).attr('siteid');

    $('li.active').removeClass('active');
    $(this).addClass('active');
    
    $('#right_column').html('');

    load_all(__client_id);

    return false;
});

// first run with default
$("#btn_load").html('<span class="log_bullet">&bull; </span> load');
load_all(__client_id);

function load_all(clientid)
{

    $.ajax({
        type: "GET",
        url: "<?= base_url('res/index') ?>"+'/'+clientid,

        success: function(res){
            if(res != 'false')
            {
                $('#right_column').html(res);
                $("#btn_load").html('load');
            }
            else
            {
                $("#btn_load").html('load');
                alert('ERROR');
            }
        },
    });

}

function load(clientid)
{
    var id = $('.log_content').first().attr('logid');
    id = (typeof(id) == 'undefined') ? -1 : id;
    $("#btn_load").html('<span class="log_bullet">&bull; </span> load');

    $.ajax({
        type: "GET",
        url: "<?= base_url('res/load_part') ?>"+'/'+clientid+'/'+id,

        success: function(res){
            if(res != 'false')
            {
                $('#right_column').prepend(res);

                $("#btn_load").html('load');
            }
            else
            {
                $("#btn_load").html('load');
                alert('ERROR');
            }
        },
    });
}

$('#btn_load').click(function(){

    load(__client_id);
    return false;
});

setInterval(function(){ load(__client_id); }, 4000);

</script>