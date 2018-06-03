<!DOCTYPE html>
<html>
<head>
 <title>CountDown</title>
 <!--Import Google Icon Font-->
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!--Import materialize.css-->
 <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
 <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/chingyawhao/materialize-clockpicker/master/dist/css/materialize.clockpicker.css"/>
</head>
<body>
 <!--Import jQuery before materialize.js-->
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>/assets/materialize/js/materialize.js"></script>
 <script type="text/javascript" src="https://cdn.rawgit.com/chingyawhao/materialize-clockpicker/master/dist/js/materialize.clockpicker.js"></script>
 <div class="container">
 <div class="row">
 <div class="card">
 <div class="card-panel">
 <?php echo form_open('countdown/time');?>
 <div class="row">
 <div class="col s6 offset-s2">
 <label for="start">Start</label>
 <input type="date" class="datepicker" name="start" id="start">
 </div>
 <div class="col s2">
  <label for="timepicker_ampm_dark">Jam</label>
 <input id="timepicker_ampm_dark" class="timepicker" type="time" name="waktu_start">
 </div>

 <div class="col s6 offset-s3 center">
 <button class="btn waves-effect waves-light #1976d2 blue darken-2 submit" type="submit">Submit</button>
 <a href="<?php echo site_url('countdown/lihat_countdown')?>" class="btn waves-effect waves-light #1976d2 blue darken-2">Lihat</a>
 </div>
 </div>
 <?php echo form_close();?>
 </div>
 </div>
 </div>
 </div>

 <script type="text/javascript:">
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15,// Creates a dropdown of 15 years to control year
  });
</script>
<script type="text/javascript">
 $('.timepicker').pickatime({
    default: 'now',
    timeFormat: 'HH:mm:ss',
    twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
    donetext: 'OK',
  autoclose: false,
  vibrate: true // vibrate the device when dragging clock hand
});
</script>
</body>
</html>