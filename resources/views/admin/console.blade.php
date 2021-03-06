@extends('base.base')
@section('base')
    <!-- 内容区域 -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
                    统计
                </h3>
                {{--<nav aria-label="breadcrumb">--}}
                {{--<ul class="breadcrumb">--}}
                {{--<li class="breadcrumb-item active" aria-current="page">--}}
                {{--<span></span>Overview--}}
                {{--<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</nav>--}}
            </div>
            <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">文章总数
                                <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5"> 15,0000</h2>
                            <h6 class="card-text">点击1k+的文章1000个</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">爬虫数量
                                <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">45,6334</h2>
                            <h6 class="card-text">源站10个</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                            <h4 class="font-weight-normal mb-3">文章分类
                                <i class="mdi mdi-diamond mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">95</h2>
                            <h6 class="card-text">一级分类10个</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <h4 class="card-title float-left">用户喜好</h4>
                                <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                            </div>
                            <canvas id="visit-sale-chart" class="mt-4"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">用户特征</h4>
                            <canvas id="traffic-chart"></canvas>
                            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection