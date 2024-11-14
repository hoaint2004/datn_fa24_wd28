@extends('admin.index')
@section('title', 'Thống kê')
@section('content')

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
@endsection
