<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/user.php'); 
    if ($logged==false) {
         header("Location:../index.php");
    }
?>


    <body style="background: url(./../assets/img/bg.jpg);opacity:.95;">

        <div id="wrapper">

           <?php 
                require_once("nav.php");
                require_once("sidebar.php");
            ?>

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Transaction 
                            </h1>
                            <ol class="breadcrumb">
                              <li>Transaction</li>
                              <li class="active">History</li>
                            </ol>
                            <!-- <h4>Transaction History</h4> -->
                           <!--  <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#history" data-toggle="pill">HISTORY</a>
                                </li>
                            </ul> -->
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-bordered table-condensed"style="background: white;">
                                    <thead>
                                        <tr>
                                            <th>Control Number.</th>
                                            <th>Bill Date</th>
                                            <th>Amount</th>
                                            <th>Final Amount Payed</th>
                                            <th>Transaction Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $id=$_SESSION['uid'];
                                        $query1 = "SELECT COUNT(*) FROM bill , transaction WHERE transaction.bid=bill.id AND bill.uid={$id}  ";
                                        $result1 = mysqli_query($con,$query1);
                                        $row1 = mysqli_fetch_row($result1);
                                        $numrows = $row1[0];
                                        include("paging1.php");
                                        
                                        $result = retrieve_transaction_history($_SESSION['uid'],$offset, $rowsperpage);
                                        while($row = mysqli_fetch_assoc($result)){
                                                @$my_control_number = $id + 203040974;
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php 
                                                        if($row['pdate']!=NULL) echo $my_control_number ;
                                                        else echo "-";
                                                     ?>
                                                </td>
                                                <!-- <?php echo $row['id'] ?></td> -->
                                                <td height="50"><?php echo $row['bdate'] ?></td>
                                                <td><?php echo 'Tsh '.$row['amount'] ?></td>
                                                <td><?php echo 'Tsh '.$row['payable'] ?></td>
                                                <td>
                                                    <?php 
                                                        if($row['pdate']!=NULL) echo $row['pdate'];
                                                        else echo "TRANSACTION PENDING";
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php include("paging2.php");  ?>
                            </div>
                            <!-- .table-responsive -->
                        </div>
                        <!-- /.col-lg-12 -->                    
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php 
        require_once("footer.php");
        require_once("js.php");
        ?>
        
    </body>
</html>
