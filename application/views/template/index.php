<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gardu PLN</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="<?php echo base_url();?>asset/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url();?>asset/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <?php echo $header;?>


        <?php echo $sidebar;?>

        

        <div id="page-wrapper">
            
            <?php echo $content;?>
            <!-- /.row -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url();?>asset/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->
     <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url();?>asset/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>asset/js/plugins/dataTables/dataTables.bootstrap.js"></script>


    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url();?>asset/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->
     <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</body>

</html>
