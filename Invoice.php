<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/invoice.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--Script to retrieve data from table-->
    <script type="text/javascript">
        function sendx_option(){
            var sel = document.getElementById("item");
            var text = document.getElementById("my_option");
            text.value = sel.option[sel.selectedIndex].value;
            var frm = document.getElementById("my_form");
            alert ("lasc");
            frm.submit();
        }


    </script>

</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2">      <!--navbar start-->
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Sidebar menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
                                    <h4 style="font-size: 1.5em;">
                                        Accounts 360
                                        <br>
                                        <small style="font-size: 0.5em;">The Complete solution </small>
                                    </h4>
                                </a>
                            </li>
                            <li class=""><a href="#"><span class="glyphicon glyphicon-th"></span> Dashboard </a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Employees</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Invoice</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Report</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-usd"></span> Expenses</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-piggy-bank"></span> Taxes</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <!--Main Content-->
            <div>
                <h2><p class="text-center">Invoice</p></h2>
            </div>
            <div class="control-group"><br></div>
            <div class="details">

                <h4><p class="text-center">Please Enter Details</p></h4>
                <br>

                <form method="POST" name="bill" id="bill">

                    <table border="1" width="100%" >
                        <tr height="100">
                            <td>Customer Name:</td>
                            <td><input type="text" placeholder="Name" style="width: 90%"></td>
                            <td style="padding-left: 5em" ></td>
                            <td>Email Address:</td>
                            <td><input type="email" placeholder="Email" style="width: 90%"></td>
                        </tr>




                    </table>
                    <br>
                    <table border="1" width="100%" style="padding-top: 10px;">
                        <tr>
                            <th width="10%">Sr.No</th>
                            <th width="30%">Item Name</th>
                            <th width="20%">Rate</th>
                            <th width="20%">Quantity</th>
                            <th width="20%">Cost</th>
                        </tr>

                        <tr>
                            <td></td>
                            <td>

                                    <?php
                                    /*$pname = $_REQUEST['item'];*/

                                    $con = mysqli_connect("localhost", "root", "");
                                    if(!$con){
                                        die('Could not connect');
                                    }
                                    mysqli_select_db($con, "mini");

                                    $sql = mysqli_query($con, "Select item, rate from inventory");
                                    /*echo "<label for ='item'>DOntknowwhat:</label>";*/
                                    /*id item used in javascript*/
                                    echo "<form id= 'form' action='do.php' method='post'>";
                                    echo "<select onchange='get_total()' name='item_select' id='item' class='form-control'><option value=' '>Select Something</option>";
                                    while($row = $sql->fetch_assoc()){
                                        echo "<option value='" . $row['item'] . "'>" . $row['item'] ."</option>";
                                    }
                                    echo "</select>";
                                    echo "</form>"


                                    ?>


                            </td>
                            <td><!--New Form here-->
<!--                                --><?php
////                                    $con = mysqli_connect("localhost", "root", "", "mini");
////                                    function fill_product($con){
////                                        $output = '';
////                                        $sql = "Select rate from inventory";
////                                        $result = mysqli_query($con, $sql);
////                                        $result2 = mysqli_query($con, $sql) or die($sql."<br/><br/>".mysqli_error($con));
////
////                                        if($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
////                                            $output = 'Text in';   /*mod needed*/
////                                        }
////                                        return $output;
////                                    }
//
//                                    //echo fill_product($con);
//                                echo 'ds';
//                                   if(isset($_POST['item_selected'])){
//                                       $test = $_POST['item_selected'];
//                                       echo $test;
//                                       echo 'done';
//                                   }
//                                   else{
//                                       echo 'as';
//                                   }
//
//                                ?>


                                <input type="number" name = "rate" style="width: 100%;">

                            </td>

                            <td>
                                <input type="number" name = "quantity" style="width: 100%;">
                            </td>
                            <td>
                                <input type="number" name="total" id = 'total_price' style="width: 100%;">
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>

                                <?php
                                /*$pname = $_REQUEST['item'];*/

                                $con = mysqli_connect("localhost", "root", "");
                                if(!$con){
                                    die('Could not connect');
                                }
                                mysqli_select_db($con, "mini");

                                $sql = mysqli_query($con, "Select item, rate from inventory");
                                /*echo "<label for ='item'>DOntknowwhat:</label>";*/
                                /*id item used in javascript*/
                                echo "<form id= 'form' action='do.php' method='post'>";
                                echo "<select onchange='send_option();' name='item_select' id='item' class='form-control'><option value=' '>Select Something</option>";
                                while($row = $sql->fetch_assoc()){
                                    echo "<option value='" . $row['item'] . "'>" . $row['item'] ."</option>";
                                }
                                echo "</select>";
                                echo "</form>"


                                ?>


                            </td>
                            <td><!--New Form here-->



                                <input type="number" name = "rate" style="width: 100%;">

                            </td>

                            <td>
                                <input type="number" name = "quantity" style="width: 100%;">
                            </td>
                            <td>
                                <input type="number" name="total" style="width: 100%;">
                            </td>
                        </tr>

                    </table>

                </form>

            </div>
        </div>
    </div>
</div>

</body>

</html>

<script>    /*Not in use*/
    $(document).ready(function () {
       $('#item').change(function(){
          var brand_id = $(this).val();

          $.ajax({
             url: "load_data.php",
              method: "POST",
              data: {brand_id:brand_id}
              success : function (data) {
                  $('#show_product').html(data); <!--show_product not defined-->
              }
          });
       });
    });
</script>
<script>
    function calc_total_bill(){
        var totbill= 0;
        for(var i=1;i<=5;i++){
            if(document.getElementById("total"+i).value)
                totbill = totbill + parseInt(document.getElementById("total"+i).value);
        }
        document.getElelementById("totalbill").value = totbill;
    }

    var theform = document.forms['bill'];
    var item_price = new Array();


    item_price['Fire Extinguisher'] = 200;
    item_price['Helmet'] = 100;
    item_price['Gloves'] = 20;
    
    function get_item_price() {
        var price;
        var theform = document.forms['bill'];
        var selected_item =  theform.elements["item"];
        price = item_price[selected_item.value];

        return price;
    }

    function get_total(){
        var grand_price = get_item_price();

        document.getElementById('total_price').innerHTML = ""+grand_price;

    }
</script>
