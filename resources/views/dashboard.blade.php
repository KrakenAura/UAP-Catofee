@extends ('dashboard_layouts')

@section('content-header')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  @endsection

  @section('content')
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Monthly Recap Report</h5>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Performance Overview</strong>
                  </p>

                  <div class="chart">
                    <canvas id="lineChart" height="180" style="height: 180px"></canvas>
                  </div>

                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Goal Completion</strong>
                  </p>

                  <div class="progress-group">
                    Total Cats
                    <span class="float-right"><b>8</b>/16</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->

                  <div class="progress-group">
                    Total Customers
                    <span class="float-right"><b>190</b>/300</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-danger" style="width: 75%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Goal Completions
                    <span class="float-right"><b>200</b>/300</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-success" style="width: 66.67%"></div>
                    </div>
                  </div>

                  <!-- /.progress-group -->
                  <div class="progress-group">
                    Total Revenue
                    <span class="float-right"><b>15</b>/30</span>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-warning" style="width: 50%"></div>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
<!-- /.content-wrapper -->

@section('custom-scripts')
<script>
  // Sample data (replace with your actual data)
  var data = {
    labels: ['January', 'February', 'March', 'April', 'May'], // Replace with your time intervals
    datasets: [{
      label: 'Total Cats',
      borderColor: '#3498db',
      data: [3, 4, 6, 7, 8],
      fill: false,
    }, {
      label: 'Total Customers',
      borderColor: '#e74c3c',
      data: [50, 45, 30, 25, 40],
      fill: false,
    }, {
      label: 'Total Revenue per 1000',
      borderColor: '#f39c12',
      data: [20, 25, 18, 22, 26],
      fill: false,
    }],
  };

  // Chart configuration
  var config = {
    type: 'line',
    data: data,
    options: {
      scales: {
        x: {
          beginAtZero: true,
        },
        y: {
          beginAtZero: true,
        },
      },
    },
  };

  // Get the canvas element
  var ctx = document.getElementById('lineChart').getContext('2d');

  // Create the chart
  var myChart = new Chart(ctx, config);
</script>
@endsection