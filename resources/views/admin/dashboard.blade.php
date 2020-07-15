
@extends('layouts.adminMaster')

@section('title') Dashboard @endsection

@section('page-title') Dashboard @endsection

@section('dashboard-active') start active open @endsection

@section('content')

<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
	<!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Dashboard
                <small>Statistics</small>
            </h3>
            <!-- END PAGE TITLE-->
        </div>
  

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-film"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1934">0</span>
                </div>
                <div class="desc"> Movies </div>
            </div>
            <a class="more" href="#"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-tv"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="500"></span> 
                </div>
                <div class="desc"> Series </div>
            </div>
            <a class="more" href="#"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-baby"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="300"></span>
                </div>
                <div class="desc"> Animation </div>
            </div>
            <a class="more" href="#"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> +
                    <span data-counter="counterup" data-value="89"></span>% </div>
                <div class="desc"> African Movies </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->    

@endsection