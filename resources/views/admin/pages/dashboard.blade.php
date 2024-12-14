@extends('Admin.layouts.master')

@section('title')
    Bảng điều khiển
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Thống Kê Đơn Hàng</h4>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Chờ
                                                        xác nhận</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_pending']) ? $data['order_pending'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger-subtle rounded fs-3">
                                                        <i class="bx bx-popsicle text-danger"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Đã xác
                                                        nhận</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_confirmed']) ? $data['order_confirmed'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="bx bxs-been-here text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Đang
                                                        giao</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_shipping']) ? $data['order_shipping'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="bx bxs-truck text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Giao
                                                        thành công</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_delivering']) ? $data['order_delivering'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="bx bxs-check-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Hoàn
                                                        thành / Đã nhận hàng</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_completed']) ? $data['order_completed'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                        <i class="bx bxs-check-circle text-success"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Giao
                                                        thất bại</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_failed']) ? $data['order_failed'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger-subtle rounded fs-3">
                                                        <i class="bx bxs-message-square-x text-danger"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Hủy
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['order_cancelled']) ? $data['order_cancelled'] : 0 }}">0</span>
                                                        Đơn hàng </h4>
                                                    <a href="{{ route('admin.orders.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-danger-subtle rounded fs-3">
                                                        <i class="bx bxs-message-alt-x text-danger"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Thành viên
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['users']) ? $data['users'] : 0 }}">0</span>
                                                        Thành viên </h4>
                                                    <a
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="bx bx-male-female text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->

                                <div class="col-xl-3 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Sản phẩm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-end justify-content-between mt-4">
                                                <div>
                                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span
                                                            class="counter-value"
                                                            data-target="{{ !empty($data['products']) ? $data['products'] : 0 }}">0</span>
                                                            Sản phẩm </h4>
                                                    <a  href="{{ route('admin.products.index') }}"
                                                        class="text-decoration-underline">Xem </a>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                        <i class="bx bx-store text-primary"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div>
                        </div> <!-- end row-->

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-0">Thống Kê Doanh Thu</h4>
                                                <div class="mt-3">
                                                    <h4>Doanh thu: <span class="counter-value"
                                                            data-target="{{ !empty($totalRevenueThisMonth) ? $totalRevenueThisMonth : 0 }}">0</span>
                                                        VNĐ</h4>
                                                    <p>Số đơn: {{ !empty($totalOrders) ? $totalOrders : 0 }} đơn</p>
                                                </div>
                                            </div>
                                            <form action="{{ route('admin.orders.index') }}" method="post">
                                                @csrf
                                                <div class="d-flex align-items-center">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select class="form-select" name="filter" id="filter">
                                                                <option value="">-- Chọn bộ lọc --</option>
                                                                <option value="day">Thống kê theo ngày</option>
                                                                <option value="month">Thống kê theo tháng</option>
                                                                <option value="year">Thống kê theo năm</option>
                                                                <option value="range">Thống kê theo khoảng thời gian
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <!-- Lọc theo ngày cụ thể -->
                                                        <div class="col" id="dayFilter" style="display: none;">
                                                            <input type="date" id="dateFilter" name="date"
                                                                class="form-control">
                                                        </div>

                                                        <div class="col" id="monthFilter" style="display: none;">
                                                            <select id="monthSelect" class="form-select" name="month">
                                                                @for ($i = 1; $i <= 12; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                            <select id="yearSelect" class="form-select mt-2"
                                                                name="yearMonth">
                                                                @for ($i = 2000; $i <= \Carbon\Carbon::now()->year; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>

                                                        <!-- Lọc theo năm -->
                                                        <div class="col" id="yearFilter" style="display: none;">
                                                            <select id="yearSelect2" class="form-select"
                                                                name="year_filter">
                                                                <option value="">-- Chọn Năm --</option>
                                                            </select>
                                                        </div>

                                                        <!-- Lọc theo khoảng thời gian -->
                                                        <div class="col" id="rangeFilter" style="display: none;">
                                                            <input type="date" name="start_date" class="form-control"
                                                                id="start_date">
                                                        </div>

                                                        <div class="col" id="rangeFilterEnd" style="display: none;">
                                                            <input type="date" name="end_date" class="form-control"
                                                                id="end_date">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-left: 10px">
                                                        <div class="col text-end">
                                                            <button type="button" class="btn btn-primary"
                                                                id="btnFilter">Lọc</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="bar" class="chartjs-chart"
                                            data-colors='["--vz-success-rgb, 0.8", "--vz-success-rgb, 0.9"]'></canvas>
                                    </div>
                                </div>

                            </div> <!-- end col -->


                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="top-products">
                                    <h3>Top 5 Sản Phẩm Doanh Thu Cao Nhất</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Ảnh</th>
                                                <th>Doanh Thu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['topProducts'] as $product)
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td>
                                                        <img src="{{ $product->image }}" alt="" style="width: 50px; height: 50px;">
                                                    </td>
                                                    <td>{{ number_format($product->total_revenue, 0, '.', ',') }} VND</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="top-products">
                                    <h3>Top 5 Sản Phẩm Bán Chạy Nhất</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Ảnh</th>
                                                <th>Số Lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['topSellingProducts'] as $product)
                                                <tr>
                                                    <td>{{ $product->name }}</td>
                                                    <td>
                                                        <img src="{{ $product->image }}" alt="" style="width: 50px; height: 50px;">
                                                    </td>
                                                    <td>{{ ($product->total_quantity ?? 0) }} Sản phẩm</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- end row-->
                    </div> <!-- end .h-100-->
                </div> <!-- end col -->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var currentYear = new Date().getFullYear();
            var startYear = 2000;

            // Thêm các năm từ 2000 đến năm hiện tại vào select với id="yearSelect"
            for (var year = startYear; year <= currentYear; year++) {
                $('#yearSelect2').append('<option value="' + year + '">' + year + '</option>');
            }

            // Hiển thị hoặc ẩn các bộ lọc khác nhau khi thay đổi `#filter`
            $('#filter').on('change', function() {
                var filter = $(this).val();
                $('#dayFilter').toggle(filter === 'day');
                $('#monthFilter').toggle(filter === 'month');
                $('#yearFilter').toggle(filter === 'year');
                $('#rangeFilter').toggle(filter === 'range');
                $('#rangeFilterEnd').toggle(filter === 'range');
            });

            let barChart; // Declare a variable to hold the chart instance

            function createBarChart(data) {
                const isbarchart = document.getElementById("bar");
                const barChartColor = getChartColorsArray("bar");

                // Destroy the existing chart instance if it exists
                if (barChart) {
                    barChart.destroy();
                }

                // Create a new chart instance
                barChart = new Chart(isbarchart, {
                    type: "bar",
                    data: {
                        labels: data.labels, // Gán nhãn ngày
                        datasets: [{
                                label: "Doanh thu",
                                backgroundColor: barChartColor[0],
                                borderColor: barChartColor[0],
                                borderWidth: 1,
                                hoverBackgroundColor: barChartColor[1],
                                hoverBorderColor: barChartColor[1],
                                data: data.revenue, // Gán dữ liệu doanh thu
                            }
                        ]
                    },
                    options: {
                        scales: {
                            x: {
                                ticks: {
                                    font: {
                                        family: "Poppins"
                                    }
                                }
                            },
                            y: {
                                ticks: {
                                    font: {
                                        family: "Poppins"
                                    }
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    font: {
                                        family: "Poppins"
                                    }
                                }
                            },
                            animations: {
                                tension: {
                                    duration: 1000, // Thời gian hiệu ứng (ms)
                                    easing: 'easeOutBounce', // Kiểu easing cho hiệu ứng
                                    from: 1,
                                    to: 0,
                                    loop: true // Nếu muốn hiệu ứng lặp lại
                                },
                                // Hiệu ứng cho cột
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        animation: {
                                            duration: 1000, // Thời gian hiệu ứng
                                            easing: 'easeOutElastic', // Kiểu easing cho hiệu ứng
                                        }
                                    }
                                }
                            }
                        }
                    }
                });
            }

            $('#btnFilter').on('click', function() {
                const filter = $('select[name="filter"]').val();
                const date = $('#dateFilter').val();
                const year = $('#yearSelect2').val(); // Đổi từ yearSelect sang yearSelect2
                const yearMonth = $('#yearSelect').val(); // Đổi từ yearSelect sang yearSelect2
                const month = $('#monthSelect').val();
                const startDate = $('#start_date').val();
                const endDate = $('#end_date').val();

                // Gửi yêu cầu AJAX đến server
                $.ajax({
                    url: "{{ route('orders.getRevenueAndProfitData') }}",
                    method: 'GET',
                    data: {
                        filter: filter,
                        date: date,
                        year: year,
                        yearMonth: yearMonth,
                        month: month,
                        start_date: startDate,
                        end_date: endDate
                    },
                    dataType: 'json',
                    success: function(data) {
                        createBarChart(data); // Call the function to create the chart
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: xhr.responseJSON.error,
                            showConfirmButton: true,
                        })
                    }
                });
            });

            // Initial chart loading
            $.ajax({
                url: "{{ route('orders.getRevenueAndProfitData') }}",
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    createBarChart(data); // Call the function to create the chart
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi khi tải dữ liệu biểu đồ:', error);
                }
            });
        });
    </script>
@endsection
