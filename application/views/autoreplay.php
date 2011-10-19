<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="<?php echo base_url("themes"); ?>/js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript">
            var refreshId = setInterval(function()
            {
                $('#replay').fadeOut("slow").load('<?php echo site_url("smsgateway/autoreplay"); ?>').fadeIn("slow");
            }, 6000);
        </script>
    </head>
    <body>
        <div id="replay">
        </div>
    </body>
</html>
