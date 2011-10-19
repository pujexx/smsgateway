<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .inner {
                width: 600px;
                height: 400px;
                border: #000000 solid 2px;
                margin-left: auto;
                margin-top: 40px;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <div class="inner">
            <img src="<?php echo base_url(); ?>/themes/logo.png" width="100"><h2>Kelompok Study Web</h2>
            <hr>
            <table border="0">
                <tr>
                    <td>Sudah terima dari </td><td>:</td><td><?php echo $identitas['name'] ?></td>
                </tr>
                <tr>
                    <td>Banyak Uang </td><td>:</td><td>Rp. 10.000</td>
                </tr>
                   <tr>
                    <td>Untuk  </td><td>:</td><td>Pembayaran pendaftaran KSWEB</td>
                </tr>
            </table>
        </div>
        <button onclick="window.print(); return false;">Print</button>
    </body>
</html>
