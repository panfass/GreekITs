<!DOCTYPE html>
<html>

<head>
<?php include 'res/libs/headLibs.php'; ?>
<?php include 'res/libs/navbar.html'; ?>


<link rel="stylesheet" type="text/css" href="css/sidebar01.css">





</head>

<script>
	function w3_open() {
	    document.getElementById("mySidebar").style.display = "block";
	}
	function w3_close() {
	    document.getElementById("mySidebar").style.display = "none";
	}
</script>
     
	<script
		src="http://maps.googleapis.com/maps/api/js">
	</script>

	<script>
	function initialize() {
	  var mapProp = {
		center:new google.maps.LatLng(37.97532689557135,23),
		zoom:7
	,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "250px";
	    document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	    document.getElementById("main").style.marginLeft= "0";
	}
</script>

<body>



	<div id="mySidenav" class="sidenav w3-theme-dark">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>




	  <div class="w3-section w3-center w3-large">
	  	<b>Δήλωση Προβλήματος</b>
	  </div>


      <form class="w3-container">
        <div class="w3-section ">
          <label><b>Τίτλος</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Εισάγετε Τίτλο Προβλήματος" name="title" required>
          <br>
          <label><b>Περιγραφή</b></label>
          <textarea rows="6" class="w3-input  w3-border w3-margin-bottom"  placeholder="Εισάγετε Περιγραφή" name="description" required></textarea>

      	  <br>
          <label><b>Διεύθυνση</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Εισάγετε Διεύθυνση" name="description" required>
          <br>
          <label><b>Φωτογραφία</b></label>
          <input class="w3-input w3-border" type="file"  accept="image/*" name="image" required>



          <button class="w3-btn-block w3-section w3-padding" type="submit">Υποβολή Προβλήματος</button>
        </div>
      </form>

	</div>

	<!-- Use any element to open the sidenav -->



	<div id="mainSideBarPage">

	<div class="right-arrow" onclick="openNav()"></div>
	<div id="googleMap" style="width:100%;height:1000px;"> 

	</div>






</body>
</html>
