<script type="text/javascript">
// $('#current_online').html('xxx');
// $('#total_visit').html('xxx');
// $('#visit_today').html('xxx');

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