<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Paperlike
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111010

-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Kelompok Study Web</title>
        <link href="<?php echo base_url(); ?>/themes/templateA/style.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id="wrapper">
            <div id="header-wrapper">
                <div id="header">
                    <div id="logo">
                        <h1><a href="#">KSWEB </a></h1>
                        <p>Template design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a></p>
                    </div>
                    <div id="menu">
                        <ul>
                            <li ><a href="<?php echo site_url("admin"); ?>" accesskey="1" title=""><span>Home</span></a></li>
                            <li><a href="#" accesskey="2" title=""><span>Pendaftar</span></a></li>
                            <li><a href="#" accesskey="3" title=""><span>Terdaftar</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- end #header -->
            <div id="page">
                <div id="content">
                    <?php
                    if (!empty($content)) {
                        $this->load->view($content);
                    } ?>


                    <div id="about">
                        <h2>Kelompok Study Web</h2>
                        <p>Empat sehat lima #kode</p>
                    </div>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <h2>Search NIM</h2>
                            <div id="search" >
                                <form method="get" action="<?php echo site_url('admin/s');?>">
                                    <div>
                                        <input type="text" name="s" id="search-text" value="" />
                                        <input type="submit" id="search-submit" value="GO" />
                                    </div>
                                </form>
                            </div>
                            <div style="clear: both;">&nbsp;</div>
                        </li>


                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
            <!-- end #page -->
        </div>
        <div id="footer">
            <p>Copyright (c) 2010 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a>.</p>
        </div>
        <!-- end #footer -->
    </body>
</html>
