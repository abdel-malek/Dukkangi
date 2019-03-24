@extends('admin.master')

@section('stylesheet')
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="{{url('static/sweetalert/sweetalert2.min.css')}}">

<style type="text/css">
    #speedChart {
      height: 500px !important ; 
      width: 700px !important ;
    }
    .card {
        background: #ffffff none repeat scroll 0 0;
        margin: 10px ;
        padding: 20px;
        border: 0 solid #e7e7e7;
        border-radius: 5px;
        box-shadow: 0 5px 20px 0 rgba(0,0,0,0.15);
        margin-left: 34px;
    }
    .datepicker{
        background-color: #5FA1BA;
    }
    .margin{
        margin-top: 30px;
    }
    .date-label{
        margin-top: 20px;
    }
    .btn {
        margin-top: 20px;    
    }
}
</style>
@endsection

@section('title')
  Admin Home
@endsection

@section('grid')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-8">
                    <canvas id="speedChart" width="600" height="400"></canvas>
                </div>
                <div class="col-3 card" >
                    <div class="row">
                        <div class="col-12">
                            <h3> Income Details</h3>
                        </div>
                        <div class="col-6">
                            <label>This Month: </label> {{$thisMonth}} <br>
                            <label>This year: </label> {{$thisYear}} <br>
                            <label>Over all: </label> {{$overall}} <br>
                            
                        </div>

                        <div class="col-12 margin">
                            <h5> Select a Period </h5>
                            <label >From </label>
                            <input class="form-control datepicker" style="background-color: #fff" type="text" placeholder="Select Date" id="from-date">
                            <label class="date-label">To </label>
                            <input class="form-control datepicker" style="background-color: #fff" type="text" placeholder="Select Date" id="to-date">
                            <button class="btn btn-block btn-default" onclick="checkSpicificDateIncome();"> Check Income</button>
                            <input class="form-control margin" type="text" disabled="disabled" id="res" >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script  src="/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
 // Chart 
    var speedCanvas = document.getElementById("speedChart");
    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;
    var speedData = {
      labels: ["","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug" ,"Sep", "Oct" ,"Nov","Dec",""],
      datasets: [{
        label: "Monthly Income",
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


    // Date Pickers
    

    $.fn.datepicker.defaults.format = "yyyy/mm/dd";
    $( function() {
    $("#to-date").datepicker({
       yearRange: "-3:0",
      changeMonth: true,
      changeYear: true
    });
  });
    $( function() {
    $("#from-date").datepicker({
       yearRange: "-3:0",
      changeMonth: true,
      changeYear: true
    });
  });

    // Form 
    function checkSpicificDateIncome(){
        from = $('#from-date').val();
        to = $('#to-date').val();
        if (from == null  || to == null || from == ""  || to == "" || from > to){
            swal({
              type: 'error',
              title: 'Fill the form',
              text: 'Inputs needs to fill before checking the income!'
            });
        }
         $.ajax({
            url: "/get-income",
            type: "POST",
            data: { "from": from, "to":to },
            dataType: 'json'
        }).done(response => {
            $('#res').val(response);
//            speedCanvas.destroy();
//            speedCanvas.clear();
//             var speedCanvas = document.getElementById("speedChart");
//    Chart.defaults.global.defaultFontFamily = "Lato";
//    Chart.defaults.global.defaultFontSize = 18;
//    var speedData = {
//      labels: ["","Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug" ,"Sep", "Oct" ,"Nov","Dec",""],
//      datasets: [{
//        label: "Monthly Income",
//        data: response,
//      }]
//    };
//     
//    var chartOptions = {
//      legend: {
//        display: true,
//        position: 'top',
//        labels: {
//          boxWidth: 80,
//          fontColor: 'black'
//        }
//      }
//    };
//    var lineChart = new Chart(speedCanvas, {
//      type: 'line',
//      data: speedData,
//      options: chartOptions
//    });
//alert(1);
            // $('#res').attr('placeholder' ,response);
        });

    }
</script>
@endsection
