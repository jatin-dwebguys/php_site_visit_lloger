<script type="text/javascript">
// $('#current_online').html('0');
// $('#total_visit').html('0');
// $('#visit_today').html('0');

<?php
if($current_online > 0)
{
    echo "$('#current_online').html('".$current_online."');";
}

if($total_visit > 0)
{
    echo "$('#total_visit').html('".$total_visit."');";
}

if($visit_today > 0)
{
    echo "$('#visit_today').html('".$visit_today."');";
}

?>
</script>