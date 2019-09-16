<!DOCTYPE html>
<html lang="en">
<head>
<title>QUESTIONS</title>
 <link rel = "icon" href =  "icon.png" type = "image/x-icon">
<style>
* {
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body {
  margin: 0;
  background-color: #29648a;
  font-family: 'Montserrat', sans-serif;
}

/* Style the header */
.header {
  background-color: #25274d;
  font-family: 'Montserrat', sans-serif;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  font-family: 'Montserrat', sans-serif;
  background-color: dodgerblue;
  text-align: right;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  font-family: 'Montserrat', sans-serif;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  font-family: 'Montserrat', sans-serif;
  color: black;
}


/* Create three unequal columns that floats next to each other */
.column {
  padding: 20px;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color:#25274d;
  padding: 8px;
  text-align: center;
  font-family: 'Montserrat', sans-serif;
}

.card {
  box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.5);
  padding: 16px;
  text-align: left;
  background-color: #f1f1f1;
  font-family: 'Montserrat', sans-serif;
}

input[type=submit] 
  {
    width: 20%;
    padding: 10px 5px;
    margin: 8px 0;
    border:none;
    background-color:dodgerblue; 
    outline: none;
    border-radius: 2px;
    font-size:20px;
    box-shadow: 0 5px 5px 0 rgba(0,0,0,0.7);
    font-family: 'Montserrat', sans-serif;
  }

input[type=submit]:hover
  {
    background-color: rgb(57, 230, 0);
    font-family: 'Montserrat', sans-serif;
  }

</style>
</head>
<body>

    <div class="header">
      <img src="user1.png" border="3" style="float: left;width: 90px;height: 90px;box-shadow:0 5px 5px 0 rgba(0,0,0,0.7); ">
      <h1 style="color: #2e9cca;font-family: 'Montserrat', sans-serif;">GIVE QUESTIONS<img src="2.png" width="30px" height="30px"></h1>
    </div>

    <div class="topnav">

      <a href="frontpage.html">Logout</a>
      
    </div>

 
      <div class="column side" style="background-color:rgb(20,20,20);">
        <div class="card">
              <div>  
                <form name="RegForm" action="addquestodb.php" method="post"> 
                  <div style="background-color:rgba(50,50,50,0.7);padding: 5px;"> 
                  <h3 style="font-family:Arial;text-align: center;">ENTER QUESTION</h3>
                  <textarea cols="110" rows="20" name="problem" style="font-size: 20px;"></textarea>
                        <p style="font-size: 15px;">question number :</p>
                        <input type="number" name="qno" style="padding: 5px"> <br>
                        <input type="submit" name="submit">   
                  </div>
                </form>
              </div><br>
      </div>
    </div>
      
     
      
    

    <div class="footer" >
      <p>Made By Rishabh Maheshwari CSE </p>
    </div>
  
</body>
</html>
