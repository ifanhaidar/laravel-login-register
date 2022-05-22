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
        <h1>Analytics</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Analytics</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
    <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Company Analytics</h5>

            <div class="box-body">
							<div class="d-flex justify-content-between align-items-center">
							  <div class="user-analytics">
								<i class="me-0 mdi mdi-account"></i>
								<span class="text-muted">Users</span>
								<div class="d-flex align-items-center">
								  <h4>29K</h4>
								</div>
							  </div>
							  <div class="sessions-analytics">
								<i class="me-0 mdi mdi-arrow-up"></i>
								<span class="text-muted">Sessions</span>
								<div class="d-flex">
								  <h4>45K</h4>
								</div>
							  </div>
							  <div class="bounce-rate-analytics">
								<i class="me-0 mdi mdi-chart-pie"></i>
								<span class="text-muted">Bounce Rate</span>
								<div class="d-flex">
								  <h4>72.6%</h4>
								</div>
							  </div>
							</div>
            </div>
            <!-- Bar Chart -->
            <canvas id="barChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#barChart'), {
                  type: 'bar',
                  data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                      label: 'Bar Chart',
                      data: [65, 59, 80, 81, 56, 55, 40],
                      backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                      ],
                      borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              });
            </script>
            <!-- End Bar CHart -->
          </div>
        </div>
      </div>

      
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sales Overview</h5>
            

            <div class="box-body">
							<div class="d-flex justify-content-between align-items-center">
							  <div class="user-analytics">
								<i class="me-0 mdi mdi-account"></i>
								
							  </div>
							  <div class="bounce-rate-analytics">
                  <i class="me-0 mdi mdi-chart-pie"></i>
                  <span class="text-muted">a week</span>
                  <div class="d-flex">
                    <h4>Analytics</h4>
                  </div>
                  </div>
							</div>
            </div>
            

            <!-- Line Chart -->
            <canvas id="lineChart" style="max-height: 400px;"></canvas>
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#lineChart'), {
                  type: 'line',
                  data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                      label: 'Line Chart',
                      data: [65, 59, 80, 81, 56, 55, 40, 97, 103],
                      fill: false,
                      borderColor: 'rgb(75, 192, 192)',
                      tension: 0.1
                    }]
                  },
                  options: {
                    scales: {
                      y: {
                        beginAtZero: true
                      }
                    }
                  }
                });
              });
            </script>
            <!-- End Line CHart -->
          </div>
         
        </div>
      </div>
    </section>
</div>

<section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
        <div class="col-lg-8">
            <div class="row">

                 <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                 <div class="card info-card sales-card">





                <div class="card-body">
                    <h5 class="card-title">Sales Today</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-bag-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>1.26K</h6>
                        
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->
  
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
                  
  
                  <div class="card-body">
                    <h5 class="card-title">Visitor Today</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>16.5K</h6>
                       
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  
              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
  
                <div class="card info-card customers-card">
  
                  
                  <div class="card-body">
                    <h5 class="card-title">Total Earnings</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-coin"></i>
                      </div>
                      <div class="ps-3">
                        <h6>11.3K</h6>
                       
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
            </div>

              <div class="card">

                <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic </h5>
  
               <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
  
               <script>
                document.addEventListener("DOMContentLoaded", () => {
            echarts.init(document.querySelector("#trafficChart")).setOption({
              tooltip: {
                trigger: 'item'
              },
              legend: {
                top: '5%',
                left: 'center'
              },
              series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                label: {
                  show: false,
                  position: 'center'
                },
                emphasis: {
                  label: {
                    show: true,
                    fontSize: '18',
                    fontWeight: 'bold'
                  }
                },
                labelLine: {
                  show: false
                },
                data: [{
                    value: 1048,
                    name: 'Search Engine'
                  },
                  {
                    value: 735,
                    name: 'Direct'
                  },
                  {
                    value: 580,
                    name: 'Email'
                  },
                  {
                    value: 484,
                    name: 'Facebook'
                  },
                  {
                    value: 300,
                    name: 'Youtube'
                  }
                ]
              }]
                   });
               });
               </script>
  
               </div>
              </div><!-- End Website Traffic -->

              </div>

        </div>



                 <!-- Website Traffic -->
             <div class="col-lg-15">
            
            </div>
          </div>
        
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


 

  