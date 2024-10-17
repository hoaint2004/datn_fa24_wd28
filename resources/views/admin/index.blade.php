<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('index.css') }}">

    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <title>Dashboard</title>
</head>

<body>
    <div id="mySidenav" class="mySidenav">
        <p class="logo">
            <span>M</span>__SoftTech
        </p>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-gauge icons"></i> &nbsp;&nbsp; Thống Kê
        </a>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-calendar icons"></i> &nbsp;&nbsp; Quản Lý Danh Mục
        </a>

        <a href="#" class="icon-a">
            <i class="fa-brands fa-product-hunt icons"></i> &nbsp;&nbsp; Quản Lý Sản Phẩm
        </a>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-user icons"></i> &nbsp;&nbsp; Quản Lý Tài Khoản
        </a>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-bag-shopping icons"></i> &nbsp;&nbsp; Quản Lý Đơn Hàng
        </a>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-envelope-open-text icons"></i> &nbsp;&nbsp; Quản Lý Bình Luận
        </a>

        <a href="#" class="icon-a">
            <i class="fa-solid fa-comments icons"></i> &nbsp;&nbsp; Quản Lý Đánh Giá
        </a>
    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: white" class="nav">
                    &#9776; Dashbroad
                </span>
                <span style="font-size: 30px; cursor: pointer; color: white" class="nav2">
                    &#9776; Dashbroad
                </span>
            </div>
            <div class="col-div-6">
                <div class="profile">
                    <img src="{{ url('storage/images/g7.jpg') }}" alt="" class="pro-img" width="100px">
                    <p>Manoj Adhijari <span> UI/ UX DESIGHNER</span></p>
                </div>
            </div>

            <div class="clearfix">

            </div>

            <div class="col-div-3">
                <div class="box">
                    <p>
                        67 <br> <span>Customers</span>
                        <i class="fa fa-users box-icon"></i>
                    </p>
                </div>
            </div>

            <div class="col-div-3">
                <div class="box">
                    <p>
                        88 <br> <span>Projects</span>
                        <i class="fa fa-list box-icon"></i>
                    </p>
                </div>
            </div>

            <div class="col-div-3">
                <div class="box">
                    <p>
                        99 <br> <span>Orders</span>
                        <i class="fa fa-bag-shopping box-icon"></i>
                    </p>
                </div>
            </div>

            <div class="col-div-3">
                <div class="box">
                    <p>
                        67 <br> <span>Tasks</span>
                        <i class="fa fa-tasks box-icon"></i>
                    </p>
                </div>
            </div>

            <div class="clearfix">
            </div>

            <br> <br>

            <div class="col-div-8">
                <div class="box-8">
                    <div class="content-box">
                        <p>Top Selling Projects <span>View All</span></p>
                        <br>
                        <table>
                            <tr>
                                <th>Company</th>
                                <th>Contact</th>
                                <th>Country</th>
                            </tr>

                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds </td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds </td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds </td>
                                <td>Futterkiste</td>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Alfreds </td>
                                <td>Futterkiste</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-div-4">
                <div class="box-4">
                    <div class="content-box">
                        <p>Total Sale <span>View All</span></p>

                        <div class="circle-wrap">

                            <div class="circle">
                                <div class="mask full">
                                    <div class="fill">
                                        
                                    </div>
                                </div>
                                
                                <div class="mask half">
                                    <div class="fill">
                                        
                                    </div>
                                </div>
                                
                                <div class="inside-circle">70%</div>
                            </div>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        $(".nav").click(function(){
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icon-a").css('height', '30px');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-10px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });
    
        $(".nav2").click(function(){
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".logo span").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });

        $("#mySidenav").click(function(){
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".logo span").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });

    
    </script>
</body>



</html>
