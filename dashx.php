<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/dash.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});

    google.charts.setOnLoadCallback(drawIncomeChart);

    google.charts.setOnLoadCallback(drawExpenseChart);

    google.charts.setOnLoadCallback(drawProfitlossChart);

    google.charts.setOnLoadCallback(drawSalesChart);


    function drawIncomeChart() {    //call to income chart
      var data = google.visualization.arrayToDataTable([
        ['Overdue', '30 days Paid', 'Left', { role: 'annotation' } ],
        ['2010', 15, 37,'']
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

       var options = {
        width: 200,
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("Income_chart"));
      chart.draw(view, options);
  }

  function drawExpenseChart(){ //call to expense chart
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['ex1',    3],
            ['ex2',    3],
            ['ex3',    3],

        ]);

        var options = {
            width: 200,
            height: 300,
            chartArea: {width: 200},
            title: 'My expense',
            pieHole: 0.5

        };

        var chart = new google.visualization.PieChart(document.getElementById('Expense_chart'));
        chart.draw(data, options);
  }

  function drawProfitlossChart(){
      var data = google.visualization.arrayToDataTable([
          ['Element', 'Density', { role: 'style' }],
          ['Profit', 20, 'lightgreen'],
          ['Loss', 10, 'silver'],

      ]);

      var options = {
          width: 200,
          height: 300,
          bar: {groupWidth: "35%"},
          chartArea: {width: 200},
          title: 'My Net Income',

      }

      var chart = new google.visualization.BarChart(document.getElementById('Profitloss_chart'));
      chart.draw(data, options);
  }
  
  
  function drawSalesChart() {
      var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
      ]);

      var options = {
          title: 'Company Performance',
          height: 300,
          curveType: 'function',
          legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('Sales_chart'));
      chart.draw(data, options);
  }

  </script>





</head>

<body>
<div class="row affix-row">
    <div class="col-sm-3 col-md-2 affix-sidebar">
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
      <ul class="nav navbar-nav" id="sidenav01">
        <li class="active">
          <a href="#" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed">
          <h4 style="font-size: 1.3em;">
          Accounts 360
          <br>
          <small style="font-size: 0.5em;">The Complete solution </small>
          </h4>
          </a>
          <!--<div class="collapse" id="toggleDemo0" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">ProfileSubMenu1</a></li>
              <li><a href="#">ProfileSubMenu2</a></li>
              <li><a href="#">ProfileSubMenu3</a></li>
            </ul>
          </div>-->
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-th"></span> Dashboard <span class="caret pull-right"></span>
          </a>
          <!--<div class="collapse" id="toggleDemo" style="height: 0px;">
            <ul class="nav nav-list">
              <li><a href="#">Submenu1.1</a></li>
              <li><a href="#">Submenu1.2</a></li>
              <li><a href="#">Submenu1.3</a></li>
            </ul>
          </div> -->
        </li>
        <li>
          <a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
          <span class="glyphicon glyphicon-user"></span> Employees <span class="caret pull-right"></span>
          </a>
          
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Invoice</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Report <span class="badge pull-right">42</span></a></li>
        <li><a href=""><span class="glyphicon glyphicon-usd"></span> Expenses</a></li>
		<li><a href=""><span class="glyphicon glyphicon-piggy-bank"></span> Taxes</a></li>
		
      </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
	</div>
	<div class="col-sm-9 col-md-10 affix-content">
		<div class="container">
			
            <div class="page-header">
                <h3><span class="glyphicon glyphicon-th"></span> Page starts here</h3>
            </div>


            <!--<div class="card-deck">
                <div class="card text-center" style="width: 292px;height: 342px;background-color: ghostwhite; "> <!Card 1>

                    <div class="card-block">
                    <div class="card-title"><div class="card-title">Income</div></div>
                    <div id="columnchart_values" style="width: 10%; height: 100px;"></div></div>

                </div>

                <div class="card text-center" style="width: 292px;height: 342px;background-color: ghostwhite; "> <!Card 1>

                    <div class="card-block">
                        <div class="card-title"><div class="card-title">Income</div></div>
                        <div id="columnchart_values" style="width: 10%; height: 100px;"></div></div>

                </div>

            </div>-->


            <div class="holder">

                <div class="wrapper ">

                    <div class="card-block">
                        <div class="card-title">Income</div>
                        <div id="Income_chart"></div>
                    </div>
                </div>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title">Expenses</div>
                        <div id="Expense_chart"></div>
                    </div>
                </div>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title"><h3>Bank Accounts</h3></div>
                        <hr>
                        <div>
                            <h4>Bank Account 1</h4>
                            <p>Balance: </p>
                            <p>Last Updated:</p>
                            <hr>


                            <h4>Bank Account 1</h4>
                            <p>Balance: </p>
                            <p>Last Updated:</p>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title">Expenses</div>
                        <div id="Profitloss_chart"></div>
                    </div>
                </div>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title">Sales</div>
                        <div id="Sales_chart"></div>
                    </div>
                </div>

                <div class="wrapper">

                    <div class="card-block">
                        <div class="card-title"><h3>Employee Count</h3></div>
                        <hr>
                        <div>
                            <h4>Total number of employees:</h4>
                            <h2>25</h2>
                            <hr>
                            <h4>Employees on leave</h4>
                            <h2>2</h2>
                        </div>
                    </div>
                </div>


                <div class="clear"></div>

            </div>


  </div>
        <hr>
        <div>©2017 Mini Project. All Rights reserved</div>

		</div>
	</div>

</body>
</html>