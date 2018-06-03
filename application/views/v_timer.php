<!DOCTYPE html>
<html>
<head>
 <title>CountDown</title>
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/assets/materialize/js/materialize.js"></script>
 <div class="container" id="refreshTime">
 <div class="row">
 <div class="col s12">
 <h2 class="center blue-text">MaInBack</h2>
 </div>
 </div>
 <div class="row">
 <div class="col s2 offset-s2">
 <div class="card">
 <div class="card-content"><h5 id="id1" class="center"></h5></div>
 </div>
 </div>
 <div class="col s2">
 <div class="card">
 <div class="card-content"><h5 id="id2" class="center"></h5></div>
 </div>
 </div>
 <div class="col s2">
 <div class="card">
 <div class="card-content"><h5 id="id3" class="center"></h5></div>
 </div>
 </div>
 <div class="col s2">
 <div class="card">
 <div class="card-content"><h5 id="id4" class="center"></h5></div>
 </div>
 </div>
 </div>
 </div>

 <div id="demo"></div>

<script>
// Set the date we're counting down to
var countDownDate = '';
var a = '<?php echo $timer->date?>'+' <?php echo $timer->startTime?>';
if (a == ''){
    countDownDate = new Date().getTime();
}else{
    countDownDate = new Date(a).getTime();
}


function refresh()
{
    setTimeout(function()
    {
        $('#refreshTime').innerHTML.load('<?php echo base_url();?>Countdown/lihat_countdown');
    }, 1000);
};

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
    if (distance <= 0) {
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
