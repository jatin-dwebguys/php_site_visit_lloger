<div id="footer">
    <br/>
    <br/>
    <center>
        &#0169; lamdt@familug.org
    </center>
</div>


<script type="text/javascript">



function Timer() {
   var dt=new Date()
   document.getElementById('current_time').innerHTML= (dt.getHours() < 10 ? "0" : "") + dt.getHours()+":"+ (dt.getMinutes() < 10 ? "0" : "") + dt.getMinutes() +":"+ (dt.getSeconds() < 10 ? "0" : "") +dt.getSeconds();
   setTimeout("Timer()",1000);
}
Timer();

__parse_ip = true;
function parse_ip(e)
{
    $('.log_client_ip').css('background','none');
    
    if( __parse_ip)
    {
        var ip = $(e).attr('value');
        $('span[value="'+ip+'"]').each(function(i, e){
            $(e).css('background','red');
        });
    }

    __parse_ip = !__parse_ip;
    return false;
}
</script>
</body>
</html>