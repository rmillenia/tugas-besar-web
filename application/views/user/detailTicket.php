 <section id="body" style="background-color: #efefef">
        <div class="container-fluid" style="padding-left: 10px; padding-right: 10px; padding-top: 30px;background-color:  #e8be04;box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);">
          <br><br><br>
          <div class="row">
            <div class="col-12">
              <div class="single-footer-widget" style=""> 
                    <?php if(is_array($search)){?>
          <?php foreach ($search as $key) { ?>
          <div class="row" data-toggle="modal" data-target="#show-data">
            <div class="col-md-7">
                  <h2><?php echo $key->name;?> In <?php echo $key->city;?></h2><br>
                    <b><font color="black"><?php echo $key->venue;?></font></b>
                    <br>
                    <i style="color: #fff ;"><i class="fa fa-map-marker">&nbsp;</i><?php echo $key->city;?>,&nbsp;<?php echo $key->country;?></i>
              </div>
            </div>
             <?php }}else{?>
                  <h3>Is Empty</h3>
            <?php } ?>
                </div>
              </div>
            </div>
          </div>
    
          <br>
<div class="row">
<div class="col-md-4 card" style="padding-left: 13px">
<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openCity(event, 'London')">A-Z</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Paris')">Lowest Price</a></li>
</ul>

<div id="London" class="tabcontent">
            <table class="table text-left">
          <tbody style="color: black">
            <?php if(is_array($ticket)){?>
            <?php foreach ($ticket as $key) { ?>
              <tr onclick="window.location='<?php echo site_url()?>/Search/detailEvent/<?php echo $key->idSchedule;?>'">
                <th scope="row">
                  <h4><?php echo $key->seatZone ; ?></h4>
                  <br>
                  <h5>Entry Before <?php echo $key->startTime ; ?></h5>
                </th>
                  <td width="100px">
                    <button class="btn btn-outline-info" style="width: 150px">Rp. <?php echo $key->price ; ?></button>
                  </td>
              </tr>
            <?php }}else{?>
              <tr>
                <th scope="row" colspan="3">
                  <h3>Is Empty</h3>
                </th>
              </tr>
            <?php } ?>
            </tbody>
          </table>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p>
</div>

</div>
<div class="col-md-1"></div>
<div class="col-md-7 card" style="padding-top: 50px; padding-bottom: 10px">
 <center><img src="<?php echo base_url()?>assets/imgEvent/<?php echo $search[0]->photo;?>" width = "800" height="370" style="border-radius: 5px;"></center>
</div>

</div>
</div>
<br>
</section>

<!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="show-data" class="modal fade-in">
      <div class="modal-dialog" style="max-width: 700px; max-height: 500px">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"><?php echo $search[0]->name ;?></h4>
              </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <div class="row">
                    <div class="col-6 scroll" style='overflow:auto;width:400px;height:500px;'>
                      <center><img src="<?php echo base_url()?>/assets/imgEvent/<?php echo $search[0]->pict?>" width="200px"></center><br>
                        <p align="justify" style="color: black">
                        MeetUp is a ticket search engine that makes finding tickets to live entertainment a cinch. With the largest ticket selection of any site on the web, we have <?php echo $search[0]->artist ;?> tickets for every fan at every price point. As most concert fans know, <?php echo $search[0]->artist ;?> puts on one of the best performances of any artist currently touring. Fans of pop music won't want to miss this show.

                        This concert takes place at <?php echo $search[0]->startTime ;?> p.m. It is smart to travel to the venue before this start time, however, in order to avoid missing any of the show. The venue will be open ahead of time so that attendees can find their seats, or if the event is general admission, find a good place to stand or sit.

                        <?php echo $search[0]->artist ;?> performance at <?php echo $search[0]->venue ;?> is sure to be memorable. This venue is known to be one of the best in <?php echo $search[0]->city ;?>, if not all of the <?php echo $search[0]->country ;?>. If you have never been to <?php echo $search[0]->venue ;?>, MeetUp’s "View from Seat Zone" feature offers a preview of what your view will look like prior to making a purchase!

                         <?php echo $search[0]->artist ;?> ticket prices can frequently change based on a number of factors, such as time of day, day of week, location, and more. If you see a price point that you are comfortable with right now, we recommend making a purchase while that ticket is still available.

                        Those seeking a better value should consider upper-level seating sections where tickets may be available at a lower price, while those looking for the best seat in the house should explore the lower levels and floor seating. The MeetUp event page shows all available tickets on the market, and fans can sort by either ticket price or our Deal Score feature to find their perfect seat.</p>
                    </div>
                    <div class="col-6">
                      <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col" colspan="2">Event Details</th>
                              </tr>
                            </thead>
                            <tbody style="color: black">
                              <tr class="no-hover">
                                <th scope="row">Venue</th>
                                <td><?php echo $search[0]->venue ;?>,&nbsp;<?php echo $search[0]->city ;?>,&nbsp;<?php echo $search[0]->country ;?></td>
                              </tr>
                              <tr class="no-hover">
                                <th scope="row">Date</th>
                                <td><?php echo $search[0]->date ;?></td>
                            </tr>
                            <tr class="no-hover">
                                <th scope="row">Time</th>
                                <td><?php echo $search[0]->startTime ;?></td>
                              </tr>
                              <tr class="no-hover">
                                <th scope="row">Performer</th>
                                <td><?php echo $search[0]->artist ;?></td>
                              </tr>
                            </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<script>
        document.getElementsByClassName('tablinks')[0].click()
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
      </script>
