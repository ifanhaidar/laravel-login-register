<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sky Security</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/logoaja.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
 
</head>

<body>

    @include('dashboard.header')

  @include('dashboard.sidebar')
  <main id="main" class="main">

 

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  
  
                  <div class="card-body">
                    <h5 class="card-title">Projects</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-file-earmark-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->
  
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
                  
  
                  <div class="card-body">
                    <h5 class="card-title">On Going</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-x-diamond-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>116</h6>
                       
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  
              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
  
                <div class="card info-card customers-card">
  
                  
                  <div class="card-body">
                    <h5 class="card-title">Complate</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-trophy-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>251</h6>
                       
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
  
              <!-- Reports -->
              <div class="col-12">
                <div class="card">
  
                 
  
                  <div class="card-body">
                    <h5 class="card-title">Analytics</h5>
  
                    <!-- Line Chart -->
                    <div id="reportsChart"></div>
  
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [{
                            name: 'Sales',
                            data: [31, 40, 28, 51, 42, 82, 56],
                          }, {
                            name: 'Revenue',
                            data: [11, 32, 45, 32, 34, 52, 41]
                          }, {
                            name: 'Customers',
                            data: [15, 11, 32, 18, 9, 24, 11]
                          }],
                          chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                              show: false
                            },
                          },
                          markers: {
                            size: 4
                          },
                          colors: ['#4154f1', '#2eca6a', '#ff771d'],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100]
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'smooth',
                            width: 2
                          },
                          xaxis: {
                            type: 'datetime',
                            categories: ["2021-01-19T00:00:00.000Z", "2021-02-19T01:30:00.000Z", "2021-03-19T02:30:00.000Z", "2021-04-19T03:30:00.000Z", "2021-05-19T04:30:00.000Z", "2021-06-19T05:30:00.000Z", "2021-07-19T06:30:00.000Z"]
                          },
                          tooltip: {
                            x: {
                              format: 'dd/MM/yy HH:mm'
                            },
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Line Chart -->
  
                  </div>
  
                </div>
              </div><!-- End Reports -->
  
              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
  
                  
  
                  <div class="card-body">
                    <h5 class="card-title">Recent Sales </h5>
  
                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Customer</th>
                          <th scope="col">Product</th>
                          <th scope="col">Price</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><a href="#">#2457</a></th>
                          <td>Sigit Fernandes</td>
                          <td><a href="#" class="text-primary">Kaspersky Total Security</a></td>
                          <td>$30</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2147</a></th>
                          <td>Khairunisa Shafira</td>
                          <td><a href="#" class="text-primary">ESET Smart Security Premium</a></td>
                          <td>$25</td>
                          <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2049</a></th>
                          <td>Ifan Haidar</td>
                          <td><a href="#" class="text-primary">McAfee Total Protection</a></td>
                          <td>$35</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Dede Kurniawan</td>
                          <td><a href="#" class="text-primar">MalwareBytes Premium</a></td>
                          <td>$10</td>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#">#2644</a></th>
                          <td>Fiky Aldy</td>
                          <td><a href="#" class="text-primary">AVG Ultimate</a></td>
                          <td>$10</td>
                          <td><span class="badge bg-success">Approved</span></td>
                        </tr>
                      </tbody>
                    </table>
  
                  </div>
  
                </div>
              </div><!-- End Recent Sales -->
  
              <!-- Top Selling -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
                  <div class="card-body pb-0">
                    <h5 class="card-title">Top Selling </h5>
  
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Preview</th>
                          <th scope="col">Product</th>
                          <th scope="col">Price</th>
                          <th scope="col">Sold</th>
                          <th scope="col">Revenue</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row"><a href="#"><img src="{{ ('img/1.jpg') }}" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold">ESET Smart Security Premium</a></td>
                          <td>$25</td>
                          <td class="fw-bold">124</td>
                          <td>$1,240</td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#"><img src="{{ ('img/2.jpg') }}" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold">Avast Premier</a></td>
                          <td>$35</td>
                          <td class="fw-bold">110</td>
                          <td>$1,540</td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#"><img src="{{ ('img/3.jpg') }}" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold">Panda Antivirus Pro</a></td>
                          <td>$27</td>
                          <td class="fw-bold">99</td>
                          <td>$1,069</td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#"><img src="{{ ('img/4.jpg') }}" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold">MalwareBytes Premium</a></td>
                          <td>$10</td>
                          <td class="fw-bold">95</td>
                          <td>$380</td>
                        </tr>
                        <tr>
                          <th scope="row"><a href="#"><img src="{{ ('img/5.jpg') }}" alt=""></a></th>
                          <td><a href="#" class="text-primary fw-bold">McAfee Total Protection</a></td>
                          <td>$35</td>
                          <td class="fw-bold">88</td>
                          <td>$1,232</td>
                        </tr>
                      </tbody>
                    </table>
  
                  </div>
  
                </div>
              </div><!-- End Top Selling -->
  
            </div>
          </div><!-- End Left side columns -->
  
          <!-- Right side columns -->
          <div class="col-lg-4">
  
            <!-- Recent Activity -->
            <div class="card">
              
  
              <div class="card-body">
                <h5 class="card-title">Recent Activity </h5>
  
                <div class="activity">
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      New order placed #2147
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Order #2453 pending
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Order #2745 Approved
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      New order placed #2653
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">4 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      New order placed #2634
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">5 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Order #2934 Rejected
                    </div>
                  </div><!-- End activity item-->
  
                </div>
  
              </div>
            </div><!-- End Recent Activity -->
  
            <!-- Budget Report -->
            <div class="col-lg-15">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Sales Analytics</h5>
      
                    <!-- Pie Chart -->
                    <canvas id="pieChart" style="max-height: 300px;"></canvas>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#pieChart'), {
                          type: 'pie',
                          data: {
                            labels: [
                              'Online',
                              'in Store',
                              'Marketing'
                            ],
                            datasets: [{
                              label: 'My First Dataset',
                              data: [300, 50, 100],
                              backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                              ],
                              hoverOffset: 4
                            }]
                          }
                        });
                      });
                    </script>
                    <!-- End Pie CHart -->
      
                  </div>
                </div>
              </div>
  
            
  
            
  
          </div><!-- End Right side columns -->
  
        </div>
      </section>

  </main><!-- End #main -->



  @include('dashboard.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>


 

  