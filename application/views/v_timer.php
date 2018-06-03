<!DOCTYPE html>
<html>
<head>
 <title>CountDown</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <link href="<?php echo base_url();?>assets/awal/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

</head>


<body>
  <center>
 <div class="container-fluid" id="refreshTime">
    <div class="row">
      <div class="col-md-12">
        <h2>MaInBack</h2>
      </div>
    </div>
    <div class="row" >
    <div class="col-sm-3"><h5 id="id1"></h5></div>
 <div class="col-sm-3"><h5 id="id2"></h5></div>
 <div class="col-sm-3"><h5 id="id3"></h5></div>
<div class="col-sm-3"><h5 id="id4"></h5></div>
 </div>
 </div>
</center>
<script>

  function refresh()
{
    setTimeout(function()
    {
        $('#refreshTime').load('<?php echo base_url();?>Countdown/lihat_countdown');
    }, 1000);
};


// Set the date we're counting down to
var countDownDate = '';
var a = '<?php echo $timer->date?>'+' <?php echo $timer->startTime?>';
if (a == ''){
    countDownDate = new Date().getTime();
}else{
    countDownDate = new Date(a).getTime();
}




// Update the count down every 1 second
var x = setInterval(function() {

   

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
      document.getElementById("id1").innerHTML = days +' Hari';
      document.getElementById("id2").innerHTML = hours + ' Jam';
      document.getElementById("id3").innerHTML = minutes + ' Menit';
      document.getElementById("id4").innerHTML = seconds + ' Detik';

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("id1").innerHTML = '0' +' Hari';
        document.getElementById("id2").innerHTML = '0' + ' Jam';
        document.getElementById("id3").innerHTML = '0' + ' Menit';
        document.getElementById("id4").innerHTML = '0' + ' Detik';
        refresh();


    }
}, 1000);
</script>

</body>
</html>
