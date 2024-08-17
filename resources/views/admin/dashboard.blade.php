@extends('admin.layouts.master')

@section('title', 'Dashboard Main')

@section('content')
<style>
    circle {
        r: 10;
    }
</style>
<div class="page-content">
    <div class="col-lg-12 mt-4 mb-5">
        <form method="post" class="row  justify-content-end align-items-end" id="date_chartCount">
            <div class="col-lg-2">
                <label for="start_date__chartCount">Bắt đầu</label>
                <input type="date" id="start_date__chartCount" value="2013-01-01">
            </div>
            <div class="col-lg-2">
                <label for="end_date_chartCount">Kết thúc</label>
                <input type="date" id="end_date_chartCount" value="2015-01-01">
            </div>
            <div class="col-lg-2">
                <input type="submit" value="lọc" id="date_chartCount_submit" style="padding: 0.9px; width: 150px;border-radius: 5px;border: 1px solid #14abef;background-color: #14abef;color: azure;">
            </div>
        </form>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng đơn hàng</p>
                            <h4 class="my-1 text-info"><span class="countOrder">{{$countOrder}}</span></h4>
                            <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="bx bxs-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng đơn chờ thanh toán</p>
                            <h4 class="my-1 text-info"><span class="unpaidOrders">{{$unpaidOrders}}</span></h4>
                            <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="bx bxs-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng đơn hàng hủy</p>
                            <h4 class="my-1 text-info"><span class="cancelOrders">{{$cancelOrders}}</span></h4>
                            <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blues text-white ms-auto"><i class="bx bxs-cart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng doanh thu</p>
                            <h4 class="my-1 text-danger"><span class="totalRevenue">{{number_format($totalRevenue,0,",",".")}}</span> VND</h4>
                            <!-- <p class="mb-0 font-13">+5.4% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-burning text-white ms-auto"><i class="bx bxs-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng Phiếu giảm</p>
                            <h4 class="my-1 text-success"><span class="countCoupon">{{$countCoupon}}</span></h4>
                            <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="bx bxs-bar-chart-alt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng số khách hàng</p>
                            <h4 class="my-1 text-warning"><span class="countUser">{{$countUser}}</span></h4>
                            <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class="bx bxs-group"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng số lượng loại sản phẩm</p>
                            <h4 class="my-1 text-warning"><span class="countCategory">{{$countCategory}}</span></h4>
                            <!-- <p class="mb-0 font-13">+8.4% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-orange text-white ms-auto"><i class="bx bxs-binoculars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng bài viết</p>
                            <h4 class="my-1 text-success"><span class="countPost">{{$countPost}}</span></h4>
                            <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="bx bxs-bar-chart-alt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng bình luận sản phẩm</p>
                            <h4 class="my-1 text-success"> <span class="countProductComments">{{$countProductComments}}</span></h4>
                            <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="bx bx-comment-detail"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng số lượng liên hệ</p>
                            <h4 class="my-1 text-success"><span class="countContact">{{$countContact}}</span></h4>
                            <!-- <p class="mb-0 font-13">-4.5% from last week</p> -->
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-primary bg-gradient text-white ms-auto"><i class="lni lni-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    {{-- <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Sales Overview</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center ms-auto font-13 gap-2 mb-3">
                        <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Sales</span>
                        <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Visits</span>
                    </div>
                    <div class="chart-container-1">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">24.15M</h5>
                            <small class="mb-0">Overall Visitor <span> <i class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">12:38</h5>
                            <small class="mb-0">Visitor Duration <span> <i class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3">
                            <h5 class="mb-0">639.82</h5>
                            <small class="mb-0">Pages/Visit <span> <i class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end row-->
    <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Biểu đồ thống kê loại sản phẩm bán ra</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" col-lg-12  ">

                        <head>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChartPie);

                                function drawChartPie(response) {
                                    // Create the data table.
                                    var data = new google.visualization.DataTable();
                                    data.addColumn('string', 'Category');
                                    data.addColumn('number', 'Quantity');
                                    var hasData = false;

                                    // Add rows to the data table
                                    response.datas.forEach(item => {
                                        if (item.qty_total > 0) {
                                            data.addRow([item.category_name, item.qty_total]);
                                            // hasData = true;
                                        }
                                    });
                                    // if (hasData) {
                                    //     data.addRow(['Không có dữ liệu', 0]);
                                    // }
                                    var options = {
                                        title: 'Doanh số bán ra',
                                        pieHole: 0.4, // For a donut chart, if desired
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                    chart.draw(data, options);
                                }
                            </script>
                        </head>

                        <body>
                            <div class="row justify-content-end align-items-end">
                                <div class="col-lg-9">
                                    <form method="post" class="row justify-content-end" id="date_piechart">
                                        <div class="col-lg-2">
                                            <label for="start_date_piechart">Bắt đầu</label>
                                            <input type="date" id="start_date_piechart" value="2013-01-01">
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="end_date_piechart">Kết thúc</label>
                                            <input type="date" id="end_date_piechart" value="2015-01-01">
                                        </div>
                                        <div class="col-lg-2 align-items-end d-flex">
                                            <input type="submit" value="lọc" id="date_piechart_submit" style="padding: 0.9px; width: 150px;border-radius: 5px;border: 1px solid #14abef;background-color: #14abef;color: azure;">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 ">
                                    <form method="post" class="row justify-content-end align-items-end">
                                        <div class="w-100 d-flex justify-content-end align-items-end">
                                            <label for="piechart_time">lọc theo:</label>
                                            <select name="piechart_time" id="piechart_time">
                                                <option value="">Lọc</option>
                                                <!-- <option value="day_piechart">Ngày</option> -->
                                                <option value="week_piechart">Tuần</option>
                                                <option value="month_piechart">Tháng</option>
                                                <option value="year_piechart">Năm</option>
                                            </select>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-lg-12">
                                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                                </div>


                            </div>

                        </body>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div>
                            <h6 class="mb-0">Biểu đồ thống kê số lượng hàng bán ra</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" col-lg-12 ">

                        <div class="row">
                            <div class="col-lg-12 ">
                                <form method="post" class="row areachart_chart justify-content-end">
                                    <div class="col-lg-2">
                                        <label for="start_date">Bắt đầu</label>
                                        <input type="date" id="start_date" value="2013-01-01">
                                    </div>


                                    <div class="col-lg-2">
                                        <label for="end_date">Kết thúc</label>
                                        <input type="date" id="end_date" value="2015-01-01">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" value="Kết quả" id="result_areachart_chart" style="padding: 0.9px; width: 150px;border-radius: 5px;border: 1px solid #14abef;background-color: #14abef;color: azure;">
                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-12 ">
                                <div id="areachart" style="width: 1300px; height: 500px;"></div>


                            </div>

                        </div>
                        <div class="row d-flex flex-row-reverse">
                            <input type="submit" value="Chi tiết ĐH thành công " id="successfulOrder" class="btn col-lg-3 text-white m-2 d-none" style="background-color: #3366cc;">
                            <input type="submit" value="Chi tiết ĐH thất bại" id="failedOrder" class="btn col-lg-3 text-white m-2 d-none" style="background-color: #dc3912;">
                        </div>



                        <div class="page-content tableOrder col-lg-12  d-none">
                            <!--breadcrumb-->
                            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                                <div class="breadcrumb-title pe-3">Đơn hàng <span class="titleOrder"></span></div>

                            </div>
                            <!--end breadcrumb-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered " style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Ngày Tháng Năm</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Giá </th>
                                                    <th>Tổng giá</th>
                                                </tr>
                                            </thead>
                                            <tbody id="orderTableBody">
                                                <tr class="forOderchart">
                                                    <td class="orderChatrId"></td>
                                                    <td class="orderChatrDate"></td>
                                                    <td class="orderChatrName"></td>
                                                    <td class="orderChatrQty"></td>
                                                    <td class="orderChatrPri"></td>
                                                    <td class="orderChatrTotal"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>



                        </body>

                        </html>

                    </div>

                </div>
            </div>
        </div>

        <!--end row-->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>





        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart(response = {
                Orders: [],
                unpaidOrdersChart: []
            }) {
                var dataArr = [
                    ['Date', 'Đơn hàng thành công', 'Đơn hàng thất bại']
                ];

                if (response.Orders.length > 0 || response.unpaidOrdersChart.length > 0) {
                    let aggregatedData = {};

                    // Process successful orders
                    response.Orders.forEach(item => {
                        let date = new Date(item.created_at);
                        let formattedDate = `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}`;
                        if (!aggregatedData[formattedDate]) {
                            aggregatedData[formattedDate] = {
                                successful: 0,
                                failed: 0
                            };
                        }
                        aggregatedData[formattedDate].successful += item.qty_total;
                    });

                    // Process unpaid orders
                    response.unpaidOrdersChart.forEach(item => {
                        let date = new Date(item.created_at);
                        let formattedDate = `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}`;
                        if (!aggregatedData[formattedDate]) {
                            aggregatedData[formattedDate] = {
                                successful: 0,
                                failed: 0
                            };
                        }
                        aggregatedData[formattedDate].failed += item.qty_total;
                    });

                    for (let date in aggregatedData) {
                        dataArr.push([date, aggregatedData[date].successful, aggregatedData[date].failed]);
                    }
                } else {
                    dataArr.push(['01-01-2013', 0, 0], ['01-01-2014', 0, 0], ['01-01-2015', 0, 0]);
                }

                var data = google.visualization.arrayToDataTable(dataArr);

                var options = {
                    title: 'Số lượng hàng bán',
                    hAxis: {
                        title: 'ngày-tháng-năm',
                        titleTextStyle: {
                            color: '#333'
                        }
                    },
                    vAxis: {
                        minValue: 0
                    }
                };

                var charts = new google.visualization.AreaChart(document.getElementById('areachart'));
                charts.draw(data, options);
            }
            var successfulOrder = document.querySelector('#successfulOrder')
            var failedOrder = document.querySelector('#failedOrder')
            var tableOrder = document.querySelector('.tableOrder')
            $(document).ready(function() {
                $('#result_areachart_chart').click(function(e) {
                    e.preventDefault();
                    var start_date = $(this).closest('.areachart_chart').find('#start_date').val();
                    var end_date = $(this).closest('.areachart_chart').find('#end_date').val();


                    if (!start_date || !end_date || end_date <= start_date) {
                        alert('Lỗi: ngày bắt đầu không được lớn hơn ngày kết thúc hoặc ngày không hợp lệ');
                    } else {
                        let url = "{{route('admin.dashboard.pots')}}";
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: "POST",
                            url: url,
                            dataType: "json",
                            data: {
                                start_date: start_date,
                                end_date: end_date,
                            },
                            success: function(response) {
                                if (response.Orders.length > 0 || response.unpaidOrdersChart.length > 0) {
                                    drawChart(response);

                                    handleOrderDetails(response);
                                    successfulOrder.classList.remove('d-none');
                                    failedOrder.classList.remove('d-none');
                                    tableOrder.classList.remove('d-none');
                                } else {
                                    alert('Không có đơn hàng nào trong khoảng thời gian này.');
                                }
                            }
                        });
                    }
                });

                $('#successfulOrder').click(function() {
                    showOrderDetails('Orders');
                });

                $('#failedOrder').click(function() {
                    showOrderDetails('unpaidOrdersChart');
                });

                // circle chart
                $('#piechart_time').change(function(e) {
                    var piechart_time = $(this).val();
                    var today = new Date();
                    var startDate_piechart, endDate_piechart;

                    if (piechart_time == 'day_piechart') {
                        startDate_piechart = new Date(today.setHours(0, 0, 0, 0));
                        endDate_piechart = new Date(today.setHours(23, 59, 59, 999));

                    } else if (piechart_time == 'week_piechart') {
                        var firstDayOfWeek = today.getDate() - today.getDay() + 1;
                        var lastDayOfWeek = firstDayOfWeek + 6;
                        startDate_piechart = new Date(today.setDate(firstDayOfWeek));
                        startDate_piechart.setHours(0, 0, 0, 0);

                        endDate_piechart = new Date(today.setDate(lastDayOfWeek));
                        endDate_piechart.setHours(23, 59, 59, 999);

                    } else if (piechart_time === 'year_piechart') {
                        startDate_piechart = new Date(today.getFullYear(), 0, 1);
                        endDate_piechart = new Date(today.getFullYear(), 11, 31);
                        endDate_piechart.setHours(23, 59, 59, 999);
                    }

                    let url = "{{route('admin.dashboard.chartPie')}}";
                    if (startDate_piechart && endDate_piechart) {
                        var formattedStartDate = startDate_piechart.toISOString().split('T')[0];
                        var formattedEndDate = endDate_piechart.toISOString().split('T')[0];

                        $.ajax({
                            method: "POST",
                            url: url,
                            dataType: "json",
                            data: {
                                startDate_piecharts: formattedStartDate,
                                endDate_piecharts: formattedEndDate,
                            },
                            success: function(response) {
                                drawChartPie(response);


                            }
                        });
                    }
                });

                $('#date_piechart_submit').click(function(e) {
                    var start_date_piechart = $(this).closest('#date_piechart').find('#start_date_piechart').val()
                    var end_date_piechart = $(this).closest('#date_piechart').find('#end_date_piechart').val()

                    e.preventDefault();
                    if (!start_date_piechart || !end_date_piechart || end_date_piechart <= start_date_piechart) {
                        alert('Lỗi: ngày bắt đầu không được lớn hơn ngày kết thúc hoặc ngày không hợp lệ');
                    } else {
                        let urls = "{{route('admin.dashboard.chartPie.date')}}";
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: "POST",
                            url: urls,
                            dataType: "json",
                            data: {
                                startDate_piecharts: start_date_piechart,
                                endDate_piecharts: end_date_piechart,
                            },
                            success: function(response) {
                                if (response.datas.length > 0) {
                                    drawChartPie(response);


                                } else {
                                    alert('Không có đơn hàng nào trong khoảng thời gian này.');
                                }
                            }
                        });



                    }
                })

                var countUser = document.querySelector('.countUser')
                var countOrder = document.querySelector('.countOrder')
                var unpaidOrders = document.querySelector('.unpaidOrders')
                var cancelOrders = document.querySelector('.cancelOrders')
                var totalRevenue = document.querySelector('.totalRevenue')
                var countCoupon = document.querySelector('.countCoupon')
                var countPost = document.querySelector('.countPost')
                var countProductComments = document.querySelector('.countProductComments')
                var countContact = document.querySelector('.countContact')

                $('#date_chartCount_submit').click(function(e) {
                    var start_date__chartCount = $(this).closest('#date_chartCount').find('#start_date__chartCount').val()
                    var end_date_chartCount = $(this).closest('#date_chartCount').find('#end_date_chartCount').val()




                    e.preventDefault();
                    if (!start_date__chartCount || !end_date_chartCount || end_date_chartCount <= start_date__chartCount) {
                        alert('Lỗi: ngày bắt đầu không được lớn hơn ngày kết thúc hoặc ngày không hợp lệ');
                    } else {
                        let urls = "{{route('admin.dashboard.chartCount.date')}}";
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            method: "POST",
                            url: urls,
                            dataType: "json",
                            data: {
                                startDate_countCharts: start_date__chartCount,
                                endDate_countCharts: end_date_chartCount,
                            },
                            success: function(response) {
                                console.log(response);

                                // for (let i = 0; i < response.datas.length; i++) {
                                countUser.textContent = response.datas.countUser;
                                countOrder.textContent = response.datas.countOrder;
                                unpaidOrders.textContent = response.datas.unpaidOrders;
                                cancelOrders.textContent = response.datas.cancelOrders;
                                totalRevenue.textContent = response.datas.totalRevenue;
                                countCoupon.textContent = response.datas.countCoupon;
                                countPost.textContent = response.datas.countPost;
                                countProductComments.textContent = response.datas.countProductComments;
                                countContact.textContent = response.datas.countContact;
                                // }


                            }
                        });



                    }
                })

            });

            function handleOrderDetails(response) {
                window.orderData = response;
            }

            function showOrderDetails(orderType) {
                var orderTableBody = $('#orderTableBody');
                orderTableBody.empty();

                if (window.orderData && window.orderData[orderType]) {
                    window.orderData[orderType].forEach(order => {
                        if (orderType === "Orders") {
                            document.querySelector('.titleOrder').innerHTML = '<span style="color: #3366CC;">thành công<span>';
                        } else {
                            document.querySelector('.titleOrder').innerHTML = '<span style="color: #DC3912;">đã hủy<span>';
                        }

                        let date = new Date(order.created_at);
                        let formattedDate = `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}`;

                        var productNames = order.product_names.join(', ');
                        let formattedTotal = new Intl.NumberFormat('vi-VN').format(order.total);
                        let price = order.total / order.qty_total;
                        var row = `<tr>
                            <td>${order.id}</td>
                            <td>${formattedDate}</td>
                            <td>${productNames}</td>
                            <td>${order.qty_total}</td>
                            <td>${price}</td>
                            <td>${formattedTotal}</td>
                        </tr>`;
                        orderTableBody.append(row);
                    });
                }
            }
        </script>

    </div>
    @endsection