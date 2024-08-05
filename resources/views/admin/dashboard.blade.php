@extends('admin.layouts.master')

@section('title', 'Dashboard Main')

@section('content')
<style>
    circle{
        r:10;
    }
</style>
<div class="page-content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-4 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Tổng đơn hàng</p>
                            <h4 class="my-1 text-info">{{$countOrder}}</h4>
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
                            <p class="mb-0 text-secondary">Tổng đơn chờ thang toán</p>
                            <h4 class="my-1 text-info">{{$unpaidOrders}}</h4>
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
                            <h4 class="my-1 text-info">{{$cancelOrders}}</h4>
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
                            <h4 class="my-1 text-danger">{{number_format($totalRevenue,0,",",".")}} VND</h4>
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
                            <h4 class="my-1 text-success">{{$countCoupon}}</h4>
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
                            <h4 class="my-1 text-warning">{{$countUser}}</h4>
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
                            <h4 class="my-1 text-warning">{{$countCategory}}</h4>
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
                            <h4 class="my-1 text-success">{{$countPost}}</h4>
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
                            <h4 class="my-1 text-success">{{$countProductComments}}</h4>
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
                            <h4 class="my-1 text-success">{{$countContact}}</h4>
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
                            <h6 class="mb-0">Biểu đồ thống kê tổng số lượng bán ra</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class=" col-4  ">

                        <head>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {

                                    var data = google.visualization.arrayToDataTable([
                                        ['Task', 'Hours per Day'],
                                        <?php
                                        // ['Work', 40],
                                        foreach ($data as $key => $item) {
                                            echo "['" . $item['category_name'] . "', " . $item['qty_total'] . "],";
                                        }
                                        ?>
                                    ]);



                                    var options = {
                                        title: 'Doanh số bán ra'
                                    };
                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                    chart.draw(data, options);
                                }
                            </script>
                        </head>

                        <body>
                            <div class="row">
                                <!-- <form method="get" id="Pie_chart">
                                    <div class="col-lg-12 ">
                                        <label for="start_date">bất đầu</label>
                                        <input type="date" id="start_date" value="">
                                    </div>
                                    <div class="col-lg-12 mt-2 ">
                                        <label for="end_date">kết thúc</label>
                                        <input type="date" id="end_date" value="">
                                    </div>
                                    <div>
                                        <input type="submit" value="Kết quả" id="result_Pie_chart">

                                    </div> -->
                                <!-- </form> -->

                                <div class="col-lg-6">
                                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                                </div>


                            </div>

                        </body>

                        </html>

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
                    <div class=" col-lg-12  ">

                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" class="row areachart_chart">
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

                            <div class="col-lg-12">
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