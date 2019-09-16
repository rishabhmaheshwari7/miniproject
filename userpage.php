<!DOCTYPE html>
<html lang="en">
<head>
<title>user</title>
<link rel = "icon" href =  "icon.png" type = "image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Montserrat', sans-serif;

  margin: 0;
   background-color: #29648a;
}

/* Style the header */
.header {
  background-color: #25274d;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #464866;
  color: white;
  text-align: right;
  font-size: 20px;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}


/* Left and right column */
.column.side {
  width: 50%;
  background-color: #aaabb8;
}

/* Middle column */
.column.middle {
  width: 50%;
  background-color: #29648a;
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
  padding: 10px;
  text-align: center;
}

.card {
  box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.5);
  padding: 16px;
  text-align: left;
  background-color: #9d9e9a;
  border-radius: 5px;
}

input[type=submit] 
  {
    width: 40%;
    padding: 10px 5px;
    margin: 8px 0;
    border:none;
    background-color:dodgerblue; 
    outline: none;
    border-radius: 20px;
    font-size:20px;
    box-shadow: 0 5px 5px 0 rgba(0,0,0,0.7);
  }

input[type=submit]:hover
  {
    background-color: rgb(57, 230, 0);
  }

</style>
</head>
<body>

    <div class="header">
      <img src="user.png" border="3" style="float: left;width: 90px;height: 90px;box-shadow:0 5px 5px 0 rgba(0,0,0,0.7); ">
      <h1 style="color: #2e9cca;">WELCOME TO ASSIGNMENT SUBMISSION<img src="2.png" width="30px" height="30px"></h1>
    </div>

    <div class="topnav">
      <a href="frontpage.html" style="border-left: solid dodgerblue 1px;">Logout</a>
    </div>

    <div class="row">
      <div class="column side">
       <h2 style="text-align: center;">SUBMIT YOUR ASSIGNMENT</h2>
        <div class="card">
          <form action="addanstodb.php" method="post"> 
             <textarea cols="85" rows="50" name="answer"></textarea>
             <p>enter your name</p>
             <input type="text" name="name" style="padding: 5px;border-radius: 5px;">
             <p>enter your roll no</p>
             <input type="number" name="rno" style="padding: 5px;border-radius: 5px;"> <br>
             <input type="submit" name="submit" >
          </form>
        </div>
      </div>
      
      <div class="column middle">
        <h2>QUESTIONS</h2>
                  


                   <div class="card">
                      <p>QUESTIONS FOR TODAY</p>
                       <p>
                         <?php
                          $servername = "localhost";
                          $username = "root";
                          $password = "";
                          $db = "student";
                          // Create connection
                          $conn = mysqli_connect($servername, $username, $password,$db);
                          // Check connection
                          if (!$conn) 
                          {
                             die("Connection failed: " . mysqli_connect_error());
                          }
                    //making a connection to the database     
                    //----------------------------------------------------------------------------------------------

                          $sql="select *from questions";
                          $result=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($result)>0)
                          {
                            //output data of each row
                            while ($row = mysqli_fetch_assoc($result)) 
                            {

                              echo "<br>";
                              echo "<b>Q-</b>".$row["qno"]." " . $row["question"] ;
                                  
                            }
                          }
                          else
                          {
                            echo "table is empty";
                          }
                          mysqli_close($conn);
                          ?>
                       </p>
                  </div>


        <br>
        <div class="card">
            <p><h2 style="font-family: verdana;">Rules of giving answer</h2><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis</p>
       
        </div>
        <br>
      
      </div>
      
    </div>

    <div class="footer">
      <p>Made by- Rishabh Maheshwari</p>
    </div>
  
</body>
</html>
