<template>
  <div id="main-content">
    <div class="block-header">
      <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1>Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-cube"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>            
        <div class="col-md-6 col-sm-12 text-right hidden-xs">
            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
        </div>
      </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">5,2,3,6,9,8,4,1,2,8</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$15K</h2>
                                <span>67% <i class="fa fa-level-up text-success"></i> Total income</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">6,3,2,5,8,9,5,4,2,3</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1258</h2>
                                <span>15% <i class="fa fa-level-up text-success"></i> Total Expense</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">3,5,1,6,2,4,8,5,3,2</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$2315</h2>
                                <span>23% <i class="fa fa-level-up text-success"></i> Total Growth</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">8,5,2,9,6,3,4,5,6,7</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1025</h2>
                                <span>52% <i class="fa fa-level-up text-success"></i> Bounce Rate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Sales Reports</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another Action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <small class="text-muted">Sales Performance for Online and Offline Revenue</small>
                        <div id="flotChart" class="flot-chart"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Page Views(Avg)</h2>
                    </div>
                    <div class="body text-center">
                        <h4>6.25</h4>
                        <p class="mb-2"><span><i class="fa fa-caret-up text-success ml-1"></i> +1.12</span> vs last month (4.0)</p>
                        <div id="Page_Views" style="height: 140px"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div class="card-value float-right text-muted"><i class="icon-bubbles"></i></div>
                        <h3 class="mb-1">2,54,021</h3>
                        <div>Total Clicks</div>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>Order status</h2>
                    </div>
                    <div class="body text-center">
                        <div id="Order_status" style="height: 268px"></div>
                        <hr>
                        <div class="row clearfix">
                            <div class="col-6">
                                <h6 class="mb-0">$3,095</h6>
                                <small class="text-muted">Last Month</small>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$2,763</h6>
                                <small class="text-muted">This Month</small>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>                
        </div>


        <div class="row clearfix">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Product Summary</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5 mb-0">
                            <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Client Name</th>
                                    <th>Product ID</th>
                                    <th>Product</th>
                                    <th>Product Cost</th>
                                    <th>Payment Mode</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#01</td>
                                    <td>Sean Black</td>
                                    <td>PRO12345</td>
                                    <td>Mi LED Smart TV 4A 80</td>
                                    <td>$14,500</td>
                                    <td>Online Payment</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td>#02</td>
                                    <td>Evan Rees</td>
                                    <td>PRO8765</td>
                                    <td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
                                    <td>$30,000</td>
                                    <td>Cash on delivered</td>
                                    <td><span class="badge badge-primary">Add Cart</span></td>
                                </tr>
                                <tr>
                                    <td>#03</td>
                                    <td>David Wallace</td>
                                    <td>PRO54321</td>
                                    <td>Vu 80cm (32 inch) HD Ready LED TV</td>
                                    <td>$13,200</td>
                                    <td>Online Payment</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>#04</td>
                                    <td>Julia Bower</td>
                                    <td>PRO97654</td>
                                    <td>Micromax 81cm (32 inch) HD Ready LED TV</td>
                                    <td>$15,100</td>
                                    <td>Cash on delivered</td>
                                    <td><span class="badge badge-secondary">Delivering</span></td>
                                </tr>
                                <tr>
                                    <td>#05</td>
                                    <td>Kevin James</td>
                                    <td>PRO4532</td>
                                    <td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
                                    <td>$5,987</td>
                                    <td>Online Payment</td>
                                    <td><span class="badge badge-danger">Shipped</span></td>
                                </tr>
                                <tr>
                                    <td>#06</td>
                                    <td>Theresa Wright</td>
                                    <td>PRO6789</td>
                                    <td>Digisol DG-HR3400 Router </td>
                                    <td>$11,987</td>
                                    <td>Cash on delivered</td>
                                    <td><span class="badge badge-success">Delivering</span></td>
                                </tr>
                                <tr>
                                    <td>#07</td>
                                    <td>Sebastian Black</td>
                                    <td>PRO4567</td>
                                    <td>Dell WM118 Wireless Optical Mouse</td>
                                    <td>$4,700</td>
                                    <td>Online Payment</td>
                                    <td><span class="badge badge-secondary">Add to Cart</span></td>
                                </tr>
                                <tr>
                                    <td>#08</td>
                                    <td>Kevin Glover</td>
                                    <td>PRO32156</td>
                                    <td>Dell 16 inch Laptop Backpack </td>
                                    <td>$678</td>
                                    <td>Cash On delivered</td>
                                    <td><span class="badge badge-cyan">Delivered</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>            
    </div>
  </div>
</template>

<script>
export default {
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('home') }
  },
  mounted() {
    this.initOrderStatusChart()
  },
  methods: {
    initOrderStatusChart() {
      var chart = c3.generate({
          bindto: '#Order_status', // id of chart wrapper
          data: {
              columns: [
                  // each columns data
                  ['data1', 63],
                  ['data2', 37]
                  ],
                  type: 'donut', // default type of chart
                  colors: {
                      'data1': '#5CB65F',
                      'data2': '#395bb6',
                  },
                  names: {
                      // name of each serie
                      'data1': 'This Month',
                      'data2': 'Last Month'
                  }
              },
              axis: {
              },
              legend: {
                  show: false, //hide legend
              },
              padding: {
                  bottom: 20,
                  top: 0
              },
      });
    },
  }
}
</script>
