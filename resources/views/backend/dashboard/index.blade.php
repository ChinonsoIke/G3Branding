@extends('backend.layouts.default')
@section('title', 'Dashboard')

@section('content')
    <!-- top tiles -->
    <div class="container" style="display: inline-block;">
        <div class="row">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-building"></i></div>
                    <div class="count">179</div>
                    <h3>Hotels</h3>
                    <p>75 students enrolled....</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <div class="count">31</div>
                    <h3>Customers</h3>
                    <p>75 students enrolled....</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-circle"></i></div>
                    <div class="count">200</div>
                    <h3>Booking</h3>
                    <p>75 students enrolled....</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-edit"></i></div>
                    <div class="count">21</div>
                    <h3>Blog</h3>
                    <p>75 students enrolled....</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Hotels <small>Daily reports</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul class="list-unstyled msg_list">
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet animi beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>Abdurrazaq</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, Ad beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>Olusola Example</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet animi beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bookings <small>Daily reports</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <ul class="list-unstyled msg_list">
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>John Smith</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet animi beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>Abdurrazaq</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, Ad beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image">
                                  <img src="{{ asset('ustacky/admin/build/images/user.png') }}" alt="img">
                                </span>
                                <span>
                                  <span>Olusola Example</span>
                                  <span class="time">3 mins ago</span>
                                </span>
                                <span class="message">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet animi beatae ducimus  perspiciatis quas ratione repudiandae similique sunt?
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
