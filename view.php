<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
<style type="text/css">
   .panel {
      border: 1px solid rgb(237,239,241);
     /* border-top: 1px solid transparent;*/
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .4);
            border: 1px solid rgb(84,105,188);

  }
  .panel-footer .btn:hover {
      border: 1px solid #dddddd;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 28px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
</style>
<body ng-app="">
<div style="margin-top: 70px;" class="row">
<div class="col-md-5 col-sm-4 col-xs-3"></div>
<div class="col-md-2 col-sm-4 col-xs-6">
 Show Details: <input type="checkbox" ng-model="myVar">
 </div></div>
<div class="container-fluid" id="pricing">
  <?php
    $conn = mysqli_connect("localhost", "root", "","project");
  for ($rot=1; $rot < 20; $rot++) { 
    $sql = "SELECT book_title, book_description, price, name,email, contact_no, city FROM new_entry  WHERE userID = $rot";
    $result = mysqli_query($conn, $sql);  
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo"<div class='row'>";
          echo"<div class='col-xs-0 col-sm-1 col-md-2'></div>";
          
          echo"<div class='col-xs-6 col-sm-4 col-md-3'>";
          echo"<div class='panel panel-default text-center' style='height:auto;'>";
          echo"<div class='panel-body'>";
          echo"<img src='images/11.jpg' class='img-responsive' style='margin:auto;'/> "; 
          echo "<h4 class='text-center'>" . $row["book_title"]. "</h4>";
          echo "<h5 class='text-center'>"."Rs ".$row["price"]."</h5>";
          echo"</div>";
          echo"<div class='panel-footer' style='background-color:transparent;'>";
         // echo "<p style= 'word-wrap: break-word';>".$row["book_description"]."</p>";
          echo"<div ng-show='myVar'>";
          echo "<p>"."<p>".$row["name"]."</p>"."</p>";
          echo "<p >".$row["city"]."</p>";
          echo "<p>"."Email:".$row["email"]."</p>";
          echo"<p>"."Contact No:".$row["contact_no"]."</p>";
          echo"</div>";
          echo "</div>";
          echo"</div>";
          echo"</div>";
        }
        $rot = $rot + 1;
        $sql = "SELECT book_title, book_description, price, name,email, contact_no, city FROM new_entry WHERE userID = $rot" ;
        $result = mysqli_query($conn, $sql);  
   
          while($row = mysqli_fetch_assoc($result)){
          echo"<div class='col-xs-0 col-sm-2 col-md-2'></div>";
                  
          echo"<div class='col-xs-6 col-sm-4 col-md-3'>";
          echo"<div class='panel panel-default text-center' style='height:auto;'>";
          echo"<div class='panel-body'>";
          echo"<img src='images/11.jpg' class='img-responsive' style='margin:auto;'/> "; 
          echo "<h4 class='text-center'>" . $row["book_title"]. "</h4>";
          echo "<h5 class='text-center'>"."Rs ".$row["price"]."</h5>";
          echo"</div>";
          echo"<div class='panel-footer' style='background-color:transparent;'>";
      //    echo "<p style= 'word-wrap: break-word';>".$row["book_description"]."</p>";
          echo"<div ng-show='myVar'>";
          echo "<p>"."<p>".$row["name"]."</p>"."</p>";
          echo "<p >".$row["city"]."</p>";
          echo "<p>"."Email:".$row["email"]."</p>";
          echo"<p>"."Contact No:".$row["contact_no"]."</p>";
          echo"</div>";
          echo"</div>";
          echo"</div>";
          echo"</div>";
          
          echo"<div class='col-xs-0 col-sm-1 col-md-2'></div>";
          
          echo"</div>";
          }
      }
  
  }  mysqli_close($conn);
  ?>

</div>

<div class="container">
  <ul class="pagination" style="float: right">
    <li><a href="#">1</a></li>
    <li class="active"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
</div>

</body>