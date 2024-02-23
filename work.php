<?php
 include('include/header.php');
 ?>
 <!-- work section -->
<div class="w3-container" style="padding:128px 16px " >
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">This are the work we do during processing and after. We also have community services we are engaged in</p>
  <div class="w3-row-padding w3-black" style="margin-top:64px">
    <div class="w3-col  m6 w3-margin-bottom">
      <div class="w3-card">
        <h2>tea plantations</h2>
        <div class="w3-container w3-col m6">
          <p>The tea plantation is located in kericho county in various town that is Chagaik, Kimugu and many mor..</p>
        </div>
      </div>
    </div>
    <div class="w3-col m6 w3-margin-bottom">
    <div class="w3-card">
        <h2>cultivation practices</h2>
        <div class="w3-container w3-col m6">
          <p>we use organic farming, fair trade practices, and they are certifications and awards received.</p>
        </div>
      </div>
    </div>
    <div class="w3-col  m6 w3-margin-bottom">
    <div class="w3-card">
        <h2>processing techniques and quality control</h2>
        <div class="w3-container w3-col m6">
          <p>they are different stages of tea processing, including withering, rolling, oxidation, and drying while to improve quality they are tasting sessions, quality grading, and adherence to international standards.</p>
        </div>
    </div>
    </div>
    <div class="w3-col  m6 w3-margin-bottom">
    <div class="w3-card">
        <h2>commmunity impact</h2>
        <div class="w3-container w3-col m6">
          <p>we are involve supporting local farmers, providing employment, or contributing to social and environmental causes.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center"></h3>
  <p class="w3-center w3-large">images of the things we have done</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="images/tea machine.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="tea machine">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/tea tasting.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="tea tasting">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/factory building.jpg" style="width:100%;height:100%;" onclick="onClick(this)" class="w3-hover-opacity" alt="factory building">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/tea factory.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="tea factory">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="images/peoplechecktea.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="people checking tea">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/different tea.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="different tea">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/tea samples.jpg" style="width:70%" onclick="onClick(this)" class="w3-hover-opacity" alt="tea samples">
    </div>
    <div class="w3-col l3 m6">
      <img src="images/rooftop.jpg" style="width:80%" onclick="onClick(this)" class="w3-hover-opacity" alt="rooftop">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
<?php
 include('include/footer.php');
 ?>