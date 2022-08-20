@extends('admin/layout')

@section('content')
<!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Welcome !</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Broker</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!--Widget-4 -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-info rounded-circle mr-2">
                                <i class="ion-logo-usd avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$collect}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Collection</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase"> <span class="float-right"></span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-purple rounded-circle">
                                <i class="ion-md-cart avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$withdraw}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Withdraw</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase"> <span class="float-right"></span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-primary rounded-circle">
                                <i class=" fas fa-money-check-alt avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$collect-$withdraw}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate"><?php echo (($collect-$withdraw)>0)? 'Cash In Hand' : 'Over Paid'; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase"> <span class="float-right"></span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-success rounded-circle">
                                <i class="ion-md-contacts avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$count}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase"><span class="float-right"></span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    <span class="sr-only">57% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card-box-->
                </div>

                
            </div>
            <!-- end row -->


            <!-- <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-info rounded-circle mr-2">
                                <i class="ion-logo-usd avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$collect}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Collection</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end card-box-->
                <!-- </div> -->

                <!-- <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-purple rounded-circle">
                                <i class="ion-md-cart avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$withdraw}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Withdraw</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase">Target <span class="float-right">90%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <span class="sr-only">90% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end card-box-->
                <!-- </div> -->

                <!-- <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-success rounded-circle">
                                <i class="ion-md-contacts avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">{{$count}}</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Total Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase">Target <span class="float-right">57%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    <span class="sr-only">57% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end card-box-->
                <!-- </div> -->

                <!-- <div class="col-md-6 col-xl-3">
                    <div class="card-box">
                        <div class="media">
                            <div class="avatar-md bg-primary rounded-circle">
                                <i class="ion-md-eye avatar-title font-26 text-white"></i>
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-right">
                                    <h4 class="font-20 my-0 font-weight-bold"><span data-plugin="counterup">20544</span></h4>
                                    <p class="mb-0 mt-1 text-truncate">Unique Visitors</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h6 class="text-uppercase">Target <span class="float-right">60%</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- end card-box-->
                <!-- </div>
            </div> -->
            <!-- end row -->
            <div class="row">
       
       <div class="col-md-12">
           <h1 style="text-align: center;">Expired Deadline</h1>
           <table class="table table-bordered table-hover">
               <tr class="table-primary">
                   <th>Sl</th>
                   <th>Merchant Company</th>
                   <th>Seller Company</th>
                   <th>Machine Name</th>
                   <th>Title</th>
                   <th>Budget</th>
                   <th>Advance Amount</th>
                   <th>Quantity</th>
                   <th>Deadline</th>
                  

                   
               </tr>
               @foreach($deal as $k=>$d) 
               <tr>
                  
                   <td>{{++$k}}</td>
                   <td>{{$d->marchant->name}}</td>
                   <td>{{$d->seller->name}}</td>
                   <td>{{$d->machineID->name}}</td>
                   <td>{{$d->title}}</td>
                   <td>{{$d->budget}}</td>
                   <td>{{$d->advance_amount}}</td>
                   <td>{{$d->quantity}}</td>
                   <td><strong  class="btn" style="background:red" >{{$d->deadline}}</strong></td>
                
                  
               </tr>
               @endforeach
               
           </table>

       </div>
            <!-- End row -->
           
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->


            <!-- chart start  -->
            <!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  scrollbarX: am5.Scrollbar.new(root, { orientation: "horizontal" }),
  scrollbarY: am5.Scrollbar.new(root, { orientation: "vertical" }),
  pinchZoomX:true
}));

chart.get("colors").set("step", 3);


// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, {
  minGridDistance: 15
});

xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: 0
});

xRenderer.grid.template.setAll({
  location: 0.5,
  strokeDasharray: [1, 3]
});

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: "category",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: am5xy.AxisRendererY.new(root, {})
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  categoryXField: "category",
  adjustBulletPosition: false,
  tooltip: am5.Tooltip.new(root, {
    labelText: "{valueY}"
  })
}));
series.columns.template.setAll({
  width: 0.5
});

series.bullets.push(function() {
  return am5.Bullet.new(root, {
    locationY: 1,
    sprite: am5.Circle.new(root, {
      radius: 5,
      fill: series.get("fill")
    })
  })
})


// Set data
var data = [];
var value = 120;

var names = ["Raina",
  "Demarcus",
  "Carlo",
  "Jacinda",
  "Richie",
  "Antony",
  "Amada",
  "Idalia",
  "Janella",
  "Marla",
  "Curtis",
  "Shellie",
  "Meggan",
  "Nathanael",
  "Jannette",
  "Tyrell",
  "Sheena",
  "Maranda",
  "Briana",
  "Rosa",
  "Rosanne",
  "Herman",
  "Wayne",
  "Shamika",
  "Suk",
  "Clair",
  "Olivia",
  "Hans",
  "Glennie",
];

for (var i = 0; i < names.length; i++) {
  value += Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 5);
  data.push({ category: names[i], value: value });
}

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>

            <!-- chart end  -->
@endsection