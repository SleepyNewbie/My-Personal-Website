<!DOCTYPE html>
<html>
<head>
<title>My Personal Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: SlateBlue;}
#SocialMedia {background-color: green;}
#TimeTable{background-color: MediumSeaGreen;}
#Login {background-color: orange;}
</style>
<style>
table {
  width: 100%;
  border: 2	px solid #ddd;
}

th, td {
  padding: 16px;
}
</style>

</head>

<body>

<div style="text-align:center;">
			<img src="image/Logo.png" alt="Logo" style="width:256px;height:256px;">
		</div>
<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
			<h1>WELCOME TO MY LIFE	</h1>
		</div>
<button class="tablink" onclick="openPage('Home', this, 'SlateBlue')">Home</button>
<button class="tablink" onclick="openPage('SocialMedia', this, 'green')" id="defaultOpen">Social Media</button>
<button class="tablink" onclick="openPage('TimeTable', this, 'MediumSeaGreen')">Time Table</button>
<button class="tablink" onclick="openPage('Login', this, 'orange')">Login</button>
<div id="Home" class="tabcontent">
  <h3>Biography</h3>
  <p>My name is Imran Naufal Bin M Syukrazmar. I am 20 years old. 
			   I live in Taman Kajang Perdana. I'm studying in KPPIM, UiTM Shah Alam majoring Netcentric Computing. 
		       My hobby is learning and doing something that can improve myself. 
		       From now on, I want to get dean list every semester and being a Great Commander in Kesatria Negara. 
		       In another 10 years, I'll find myself as a kind and healthy lecturer.</p>

  <h3>Audio</h3>
	<a href="audio.html" target="_blank" class="w3-button w3-block w3-black">Audio</a>
	
	<h3>Video</h3>
	<a href="video.html" target="_blank" class="w3-button w3-block w3-black">Video</a>
	
	<h3>Image</h3>
	<a href="image.html" target="_blank" class="w3-button w3-block w3-black">Image</a>
	<h3>Resume</h3>
	<a href="Resume.html" target="_blank" class="w3-button w3-block w3-black">Resume</a>
 
</div>
<div style="text-align:center;" id="SocialMedia" class="tabcontent"> 
<a href="https://www.instagram.com/iimrannaufal/" target="_blank"><img src="image/ig.jpg"  style="width:84px;height:84px;"></a>	
<a href="https://www.facebook.com/imrannaufal/" target="_blank"><img src="image/fb.jpg"  style="width:84px;height:84px;"></a>
<a href="https://www.youtube.com/@naufal1834/" target="_blank"><img src="image/youtube.jpg"  style="width:84px;height:84px;"></a>
<h2>“Be careful not to let a negative social media life attract you to a dark way of thinking.”</h2>
</div>
<div id="TimeTable" class="tabcontent">
	<p><table border="5" cellspacing="0" align="center">
		
		<tr>
			<td align="center" height="50"
				width="100"><br>
				<b>Day/Period</b></br>
			</td>
			<td align="center" height="50"
				width="100">
				<b>8:00 - 10:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>10:00 - 12:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>12:00 - 2:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>2:00 - 4:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>4:00 - 6:00</b>
			</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Monday</b></td>
			<td align="center" height="50">-</td>
			<td align="center" height="50"><a href="ICT450.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">ICT450</a></td>
			<td rowspan="5" align="center" height="50">
				<h2>L<br>U<br>N<br>C<br>H</h2>
			</td>
			<td align="center" height="50">-</td>
            <td align="center" height="50"><a href="MAT421.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">MAT421</a></td>
		</tr>
        <tr>
			<td align="center" height="50">
				<b>Tuesday</b></td>
			<td align="center" height="50"><a href="CSC574.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC574</a></td>
			<td align="center" height="50"><a href="CSC520.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC520</a></td>
			<td align="center" height="50">-</td>
            <td align="center" height="50"><a href="ICT450.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">ICT450</a></td>
		</tr>
        <tr>
			<td align="center" height="50">
				<b>Wednesday</b></td>
			<td align="center" height="50"><a href="CSC574.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC574</a></td>
			<td align="center" height="50"><a href="CSC404.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC404</a></td>
			<td align="center" height="50"><a href="CSC520.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC520</a></td>
            <td align="center" height="50">-</td>
		</tr>
        <tr>
			<td align="center" height="50">
				<b>Thursday</b></td>
			<td align="center" height="50"><a href="MAT421.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">MAT421</a></td>
			<td align="center" height="50">-</td>
			<td align="center" height="50"><a href="STA416.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">STA416</a></td>
            <td align="center" height="50">-</td>
		</tr>
        <tr>
			<td align="center" height="50">
				<b>Friday</b></td>
			<td align="center" height="50"><a href="CSC404.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">CSC404</a></td>
			<td align="center" height="50"><a href="STA416.2.html" target="_blank" class="w3-btn w3-white w3-border w3-round-large">STA416</a></td>
			<td align="center" height="50">-</td>
            <td align="center" height="50">-</td>
		</tr>
        
        
		
	</table>
	
</p>
	<a href="image/Time Table.pdf" download>
<button class="btn" style="width:100%"><i class="fa fa-download"></i> Download</button>
</a>
</div>
<div style="text-align:center;" id="Login" class="tabcontent">
<a href="https://ufuture.uitm.edu.my/login"  target="_blank"><img src="image/ufuture.jpg"  style="width:168px;height:84px;"></a>	
<a href="https://istudent.uitm.edu.my/index_isp.htm" target="_blank"><img src="image/istudent.jpg"  style="width:168px;height:84px;"></a>
<a href="https://fskm.uitm.edu.my/v5/index.php/en/" target="_blank"><img src="image/fskm.jpg"  style="width:168px;height:84px;"></a>
<br></br>
<div class="w3-container">
<a href="login.html" target="_blank" class="w3-button w3-block w3-black">Login</a>
<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
<br>
Disclaimer</span></br>
<p style="font-size:8pt; line-height:10pt; font-family: 'Cambria','times roman',serif;">The information contained on this website is provided for general informational purposes only. The website owner assumes no responsibility for errors or omissions in the information provided. The website owner makes no warranties or representations of any kind, express or implied, about the completeness, accuracy, reliability, suitability or availability with respect to the website or the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk. If you are not the named addressee, you should not disseminate, distribute, or copy this e-mail. If you are not the intended recipient, you are notified that disclosing, distributing, or copying this e-mail is strictly prohibited.  </p></span></br></br>
</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
