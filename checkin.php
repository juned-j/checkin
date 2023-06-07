   <!--php code-->

<?php
include 'header.php';
error_reporting(0);
$servername = 'localhost';
$username = 'root';
$password ='';
$db = 'reffrel';


/*$conn = new mysqli_connect("localhost", "username", "password", "db");

if (isset($_POST['checkin'])) {

  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("INSERT INTO deposit (amount) VALUES (?)");

  if ($stmt->execute()) {
    echo "Check-in successful";
  } else {
    echo "Check-in failed: " . $stmt->error;
  }
  
  $stmt->close();
  $conn->close();
}*/

$buttonStatus = $_POST['button_status'];
$buttonValue = $_POST['button_value'];


if ($buttonStatus == 1) {
  
  if (!isset($_COOKIE['buttonClicked']) || strtotime($_COOKIE['buttonClicked']) + (24 * 60 * 60) < time()) {
    
    $buttonValue++;
    
    $dataToStore = $_POST['data']; 
    $conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

    $query = "INSERT INTO deposite (account) VALUES ('$account')"; // Replace 'your_table_name' and 'column_name' with your actual table and column names
    mysqli_query($conn, $query);
    mysqli_close($conn);
    
    
    $expiry = time() + (24 * 60 * 60); // 24 hours
    setcookie('buttonClicked', $buttonValue, $expiry);
    
    echo 'Data stored successfully.'; // Optional: Send a response message back to the JavaScript code
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    


<style>
    .checkin-user{
        height: 25px;
        width: 25px;
        margin-right:10px;
    }
</style>

<body class="lg:w-96 md:w-96 sm:w-96 xs:w-full bg-gray-200 mx-auto overflow-auto custom-shadow h-auto bg-white">
    <div class=" inset-x-0 top-0 z-40 lg:w-96 mx-auto bg-white md:w-96 sm:w-96">
        <div class="grid grid-cols-4 mx-auto bg-gray-100">
            <div class="text-left"><a href="index.php"><i class="fa-solid fa-angle-left my-4 pl-2"></i></a></div>
            <div class=" mx-auto col-span-2">
                <h2 class="pt-2 text-md font-500">Check In</h2>
            </div>
            <div class="text-right "><a href="#"><i
             class="fa-solid fa-house my-2 pr-2 text-sm hover:text-green-500"></i></div>


        </div>
    </div>


      <!--html  code-->
    <section class="w-full" style="background-image:url('assets/images/bg-orange.webp'); background-size: cover;">
        <div class="container">
            <div class="grid bg-white rounded">
                <div class="grid grid-cols-4 gap-4 rounded p-3 pb-22">
                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 1</small></p>
                        <p class="text-gray-600"><b>+ ₹1</b></p>



                        <form id="myForm" method="POST" action="">
  <!-- Your form inputs go here -->
  <input type="hidden" name="button_status" id="buttonStatus" value="">
  <button type="submit" class="submitButton" data-value="1">Button 1</button>
 
  



  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>




                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 2</small></p>
                        <p class="text-gray-600"><b>+ ₹2</b></p>
                        <input type="hidden" name="button_status" id="buttonStatus" value="">
                        <button type="submit" class="submitButton" data-value="2">Button 2</button>

    

  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>




                    </div>


                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 3</small></p>
                        <p class="text-gray-600"><b>+ ₹2</b></p>
                        <input type="hidden" name="button_status" id="buttonStatus" value="">
                        <button type="submit" class="submitButton" data-value="3">Button3</button>


  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>




                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 4</small></p>
                        <p class="text-gray-600"><b>+ ₹2</b></p>
                        <input type="hidden" name="button_status" id="buttonStatus" value="">
                        <button type="submit" class="submitButton" data-value="4">Button 4</button>
                       

  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>





                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 5</small></p>
                        <p class="text-gray-600"><b>+ ₹3</b></p>
                        <input type="hidden" name="button_status" id="buttonStatus" value="">
                        <button type="submit" class="submitButton" data-value="5">Button 5</button>
  

  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>




                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 6</small></p>
                        <p class="text-gray-600"><b>+ ₹3</b></p>
                        <button type="submit" class="submitButton" data-value="6">Button 6</button>
                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="assets/images/icon/rupee.png" class="coin-icon">
                        <p><small>Day 7</small></p>
                        <p class="text-gray-600"><b>+ ₹3</b></p>
                        <input type="hidden" name="button_status" id="buttonStatus" value="">
                        <button type="submit" class="submitButton" data-value="7">Button 7</button>
  
</form>
  <!--javascript  code-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.submitButton').on('click', function(e) {
      e.preventDefault();
      var buttonValue = $(this).data('value');
      $(this).prop('disabled', true);
      $('#buttonStatus').val(buttonValue);
      
      $.ajax({
        type: 'POST',
        url: 'store_data.php',
        data: $('#myForm').serialize(),
        success: function(response) {
          console.log(response); // Optional: Handle the response from the PHP script
        }
      });
    });
  });
</script>



                    </div>

                    <div class=" p-2 text-center border-2">
                        <img alt="" draggable="false"
                            src="https://res.cloudinary.com/fiewin/image/upload/images/Treasure_s.png">

                    </div>
                </div>

                <center><button
                    class="w-2/3 justify-center rounded-md text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600  hover:bg-gradient-to-br focus:ring-4
                focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-1 py-2  mr-2 mb-2 relative top-7"
                    type="submit" name="submit">
                    checkin
                </button></center>
            </div>
            <div class="flex mt-8 p-2">
                <span><img src="https://res.cloudinary.com/fiewin/image/upload/images/Key_s.png"></span>
                &nbsp;&nbsp;<p class="text-white text-sm">Check in for 7 consecutive days to get the key, use the key
                    treasure box,
                    and
                    receive mysterious prizes!</p>
            </div>
            <br>

            <section class="w-full mx-auto p-3">

                <div class="grid grid-cols-2 py-2 px-1 text-xs text-center">
                    <div>
                        <h2 class=" text-left text-white">Increase Prize: </h2>
                    </div>
                    <div>
                        <a href="invite-link.php"><h2 class=" text-left bg-white text-center">Invitation Link</h2></a>
                    </div>
                </div>
            </section>
            <div class="justify-center ">

            <center><a href="recharge.php" data-te-toggle="modal" data-te-target="#vipBackdrop" data-te-ripple-init
        data-te-ripple-color="light"><button class="mx-auto text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
           VIP BONUS
            </button></a></center>
            
            <center><div class="swiper mySwiper text-center w-full mt-6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="text-md pl-3">
                        <span class="flex justify-center mt-2"><img src="assets/images/user/user1.png" class="rounded-full checkin-user">
                            <p class="text-sm text-white">****087 Open a treasure chest and gets <span class="text-yellow-500">₹7</span></p>
                        </span>

                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="text-md pl-3">
                        <span class="flex justify-center mt-2"><img src="assets/images/user/user1.png" class="rounded-full checkin-user"> 
                                                  <p class="text-sm text-white">****087 Open a treasure chest and gets <span class="text-yellow-500">₹7</span></p>
</span>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-md pl-3">
                        <span class="flex justify-center mt-2"><img src="assets/images/user/user1.png" class="rounded-full checkin-user">
                                                   <p class="text-sm text-white">****087 Open a treasure chest and gets <span class="text-yellow-500">₹7</span></p>
</span>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="text-md pl-3">
                        <span class="flex justify-center mt-2"><img src="assets/images/user/user1.png" class="rounded-full checkin-user"> 
                                                   <p class="text-sm text-white">****087 Open a treasure chest and gets <span class="text-yellow-500">₹7</span></p>
</span>

                    </div>
                </div>
             
            </div>

        </div>
        </center>
            <div class="mx-auto pb-14 pt-4">
                <img src="assets/images/checkin-box.png" class="h-30 w-40" style="margin:auto">
            </div>
            
            
                 <!-- Static backdrop -->
    <div data-te-modal-init
        class="fixed top-24  z-[1055] p-4 hidden h-100 w-full overflow-y-auto overflow-x-hidden outline-none lg:w-96 md:w-96 sm:w-96 xs:w-full mx-auto "
        id="vipBackdrop" data-te-backdrop="static" data-te-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] h-56 pointer-events-auto  w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none"
                           >
                            <div
                    class="items-center justify-between rounded-t-md p-4 dark:border-opacity-50">
                  
                    <!--<button type="button"-->
                    <!--    class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"-->
                    <!--    data-te-modal-dismiss aria-label="Close">-->
                       
                    <!--</button>-->
                </div>
                <div data-te-modal-body-ref class="relative h-55 bg-white justify-center text-center pb-6">
                      <h1 class="font-bold"><i>Get Unlocked Daily Result</i></h1>
                      
                    <h6 class="vip">Indian Top 500</h6>
                    <center><img src="assets/images/icon/vip.png" class="h-20 w-20"></center>
                    <h6 class="text-red-500">(20-300000) Points</h6>
                    
                    <p>Later</p>
                    <button type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Rank</button>


                </div>
                <section class=" ml-3 mr-3 mt-2">
                   
            </div>
        </div>
    </div>
    </section>
</body>

<?php include 'footer.php';?>
?>
</body>
</html>
<?php



 /*$conn = new mysqli_connect("localhost", "username", "password", "db");

if (isset($_POST['checkin'])) {

  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $stmt = $conn->prepare("INSERT INTO deposit (amount) VALUES (?)");

  if ($stmt->execute()) {
    echo "Check-in successful";
  } else {
    echo "Check-in failed: " . $stmt->error;
  }
  
  $stmt->close();
  $conn->close();
}
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="checkin.php" method="post">
  <input type="submit" name="checkin" value="Check-in">
</form><form action="checkin.php" method="post">
  <input type="submit" name="checkin" value="Check-in">
</form>



<script>
$(document).ready(function() {
  $("input[name='checkin']").click(function() {
    $(this).prop("disabled", true);
  });
});


var checkin = document.querySelector("input[name='checkin']");
checkin.addEventListener("click", function() {
  this.disabled = true;
});
</script>

</body>
</html>*/
