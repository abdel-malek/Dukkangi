@extends('admin.master')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
<style type="text/css">
    #speedChart {
      height: 500px !important ; 
      width: 700px !important ;
    }
    .card {
        background: #ffffff none repeat scroll 0 0;
        margin: 15px 0;
        padding: 20px;
        border: 0 solid #e7e7e7;
        border-radius: 5px;
        box-shadow: 0 5px 20px 0 rgba(0,0,0,0.15);
        margin-left: 34px;
    }
}
</style>
@endsection

@section('title')
  Admin Home
@endsection

@section('grid')
    <div class="row">
        <canvas id="speedChart" width="600" height="400"></canvas>
        <div class="col-4 card" >
            <div class="row">
                <div class="col-12">
                    <h3> Income Details</h3>
                </div>
                <div class="col-6">
                    <label>This Month: </label> {{$thisMonth}} <br>
                    <label>This year: </label> {{$thisYear}} <br>
                    <label>Over all: </label> {{$overall}} <br>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>

var speedCanvas = document.getElementById("speedChart");
Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
var speedData = {
  labels: ["","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug" ,"Sep", "Oct" ,"Nov","Dec",""],
  datasets: [{
    label: "Monthly Income in This Year",
    data: <?php echo json_encode($arr); ?>,
  }]
};
 
var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};
var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});

</script>
@endsection
