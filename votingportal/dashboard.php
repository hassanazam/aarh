<!DOCTYPE html>
<html lang="en">
 <head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
 
 


<body>



<div id="wrapper">
       
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" >

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="votingarea.html"><i class="fa fa-desktop"></i> Voting Area</a>
                    </li>
					<li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i>Voting Trends</a>
                    </li>
                    <!-- <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs &amp; Panels</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li> -->
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i>Submit Results</a>
                    </li>


                    <!-- <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="first.html">Second Level Link</a>
                            </li>
                            <li>
                                <a href="second.html">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level collapse">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li> -->
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small>Summary of this Polling Station</small>
                        </h1>
                    </div>
                </div>
                
				
				<!-- First Row -->
	<div class="row">
	
								<!-- First Block  -->
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-primary text-center no-boder bg-color-brown">
				<div class="panel-body">
					<i class="fa fa-users fa-5x"></i>
					<h3>Mr. Muzzamil</h3>
				</div>
					<div class="panel-footer back-footer-brown">Name of Returning Officer</div>
			</div>
		</div>
								<!-- First Block -->
								
								
								<!-- Second Block -->
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-primary text-center no-boder bg-color-blue">
				<div class="panel-body">
					<i class="fa fa-expeditedssl fa-5x"></i>
					<h3>13213 </h3>
				</div>
				<div class="panel-footer back-footer-blue">ID of R.O.</div>
			</div>
		</div>
								<!-- Second Block -->
								
								
								<!-- Third Block -->
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-primary text-center no-boder bg-color-red">
				<div class="panel-body">
					<i class="fa fa fa-foursquare fa-5x"></i>
					<h3>Govt. School of Nazimabad</h3>
				</div>
				<div class="panel-footer back-footer-red">Name of Polling Station</div>
			</div>
		</div>
								<!-- Third Block -->
								
								
								<!-- Fourth Block -->
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-primary text-center no-boder bg-color-green">
				<div class="panel-body">
					<i class="fa fa-pie-chart fa-5x"></i>
					<h3>12,630</h3>
				</div>
				<div class="panel-footer back-footer-green">Number of votes cast</div>
			</div>
			</div>
								<!-- Fourth Block -->
			
		
	</div>
								<!-- First Row -->
								
								<br><br>


                <br><br>
								
								<!-- Second Row -->
								
	<div class="row">

	
				<!-- First Graph ~ Voting Results -->
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Polling Station Voting Result</div>
				<div class="panel-body">
					<div id="morris-bar-chart" style="position: relative;"><svg height="439" version="1.1" width="653" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="33.5" y="405" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">0</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M46,405H628" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="33.5" y="310" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">25</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M46,310H628" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="33.5" y="215" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">50</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M46,215H628" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="33.5" y="120" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">75</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M46,120H628" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">100</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M46,25H628" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="586.4285714285714" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2012</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="503.2857142857143" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2011</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="420.14285714285717" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2010</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="337" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2009</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="253.85714285714286" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2008</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="170.71428571428572" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2007</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="87.57142857142857" y="417.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4">2006</tspan></text><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="56.39285714285714" y="25" width="29.678571428571427" height="380" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="89.07142857142857" y="63" width="29.678571428571427" height="342" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="139.53571428571428" y="120" width="29.678571428571427" height="285" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="172.21428571428572" y="158" width="29.678571428571427" height="247" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="222.67857142857142" y="215" width="29.678571428571427" height="190" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="255.35714285714283" y="253" width="29.678571428571427" height="152" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="305.8214285714286" y="120" width="29.678571428571427" height="285" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="338.50000000000006" y="158" width="29.678571428571427" height="247" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="388.9642857142857" y="215" width="29.678571428571427" height="190" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="421.64285714285717" y="253" width="29.678571428571427" height="152" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="472.10714285714283" y="120" width="29.678571428571427" height="285" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="504.7857142857143" y="158" width="29.678571428571427" height="247" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="555.25" y="25" width="29.678571428571427" height="380" r="0" rx="0" ry="0" fill="#0b62a4" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="587.9285714285714" y="63" width="29.678571428571427" height="342" r="0" rx="0" ry="0" fill="#7a92a3" stroke="none" fill-opacity="1"></rect></svg><div class="morris-hover morris-default-style" style="display: none; left: 296px; top: 184px;"><div class="morris-hover-row-label">2009</div><div class="morris-hover-point" style="color: #0b62a4">
						Series A:
						75
					</div><div class="morris-hover-point" style="color: #7a92a3">
						Series B:
						65
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
				<!-- First Graph -->
	
				<!-- Second Graph ~ Turnout Ratio -->
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				Turnout Ratio Yet
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"><svg height="439" version="1.1" width="176" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.75px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#0b62a4" d="M88,274A52,52,0,0,0,137.4505195819044,238.0824784495329" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#0b62a4" stroke="#ffffff" d="M88,277A55,55,0,0,0,140.3034341731681,239.0103137446983L157.42092172075039,244.57732551569046A73,73,0,0,1,88,295Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#3980b5" d="M137.4505195819044,238.0824784495329A52,52,0,0,0,41.39032519732385,198.94488744792653" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#3980b5" stroke="#ffffff" d="M140.3034341731681,239.0103137446983A55,55,0,0,0,38.70130549716946,197.61478480069152L18.08548779598577,187.4173311718898A78,78,0,0,1,162.1757793728566,246.1237176742994Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#679dc6" d="M41.39032519732385,198.94488744792653A52,52,0,0,0,87.98366371847005,273.9999974339029" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#679dc6" stroke="#ffffff" d="M38.70130549716946,197.61478480069152A55,55,0,0,0,87.98272124068949,276.9999972858588L87.97706637400604,294.99999639759443A73,73,0,0,1,22.56718729624309,189.63416891728147Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="88" y="212" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: 800; font-stretch: normal; font-size: 15px; line-height: normal; font-family: Arial;" font-size="15px" font-weight="800" transform="matrix(0.8069,0,0,0.8069,16.9931,43.0621)" stroke-width="1.2393162393162391"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="6">Votes for none</tspan></text><text x="88" y="232" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 14px; line-height: normal; font-family: Arial;" font-size="14px" transform="matrix(1.0833,0,0,1.0833,-7.3333,-18.6667)" stroke-width="0.9230769230769231"><tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="5">30</tspan></text></svg>
					</div>
				</div>
			</div>
		</div>
				<!-- Second Graph -->
	</div>
								
								<!-- Second Row -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tasks Panel
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <span class="badge">7 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> Commented on a post
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">16 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">36 minutes ago</span>
                                        <i class="fa fa-fw fa-globe"></i> Invoice 653 has paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">1.23 hour ago</span>
                                        <i class="fa fa-fw fa-user"></i> A new user has added
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">yesterday</span>
                                        <i class="fa fa-fw fa-globe"></i> Saved the world
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">More Tasks <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Responsive Table Example
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>User Name</th>
                                                <th>Email ID.</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John</td>
                                                <td>Doe</td>
                                                <td>John15482</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kimsila</td>
                                                <td>Marriye</td>
                                                <td>Kim1425</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Rossye</td>
                                                <td>Nermal</td>
                                                <td>Rossy1245</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Richard</td>
                                                <td>Orieal</td>
                                                <td>Rich5685</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Jacob</td>
                                                <td>Hielsar</td>
                                                <td>Jac4587</td>
                                                <td>name@site.com</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Wrapel</td>
                                                <td>Dere</td>
                                                <td>Wrap4585</td>
                                                <td>name@site.com</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
				<footer><p>All right reserved to WebThemez. AARH <a href="#">Online Voting System</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


								
								
								
								<!-- Custom Scripts -->
								
								<script src="scripts/jquery-1.10.2.js"></script>
								<script src="scripts/bootstrap.min.js"></script>
								<script src="scripts/jquery.metisMenu.js"></script>
								<script src="scripts/morris/raphael-2.1.0.min.js"></script>
								<script src="scripts/morris/morris.js"></script>
								<script src="scripts/custom-scripts.js"></script>
								
								<!-- Custom Scripts -->

</body>
</html>


                
            </div>