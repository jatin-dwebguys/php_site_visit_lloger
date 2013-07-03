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

</script>
</body>
</html>