<!Doctype html>
<html>
    <head>
        <title> </title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    </head>
    <style>
      .fakeimg {
        border: none;
        color: white;        
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;        
        cursor: pointer;
      }
      .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            }
      .fab {
            font-size: 1rem;
            margin: 0 5px 0 5px;
            }
    </style>
    <body>
    <?php include 'navigation.php'; ?>
            
    <!--<div class="bg-1">
          <img src="bg2.png" alt="background slide 2" width="1519" height="850">
        </div>
-->


<?php
include('config.php');
error_reporting(E_ALL); ini_set('display_errors', 0);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  if (isset($_POST['submit'])) 
 {
      $from = $_GET['id'];
      $to = $_POST['to'];
      $amount = $_POST['amount'];

      $sql = "SELECT * from users where id=$from";
      $query = mysqli_query($conn, $sql);
      $sql1 = mysqli_fetch_array($query);
      // returns array or output of user from which the amount is to be transferred.

      $sql = "SELECT * from users where id=$to";
      $query = mysqli_query($conn, $sql);
      $sql2 = mysqli_fetch_array($query);



      // constraint to check input of negative value by user
    if (($amount) < 0) 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } 
    else 
    {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='index.php';
                           </script>";
        }
        
        $newbalance = 0;
        $amount = 0;
    }
}


?>


<div class="container">
    <?php
    include 'config.php';
    $sid = isset($_GET['id']) ? $_GET['id'] : '';
    $sql1 = "SELECT * FROM  users where id=$sid";
    $result = mysqli_query($conn, $sql1);
    try { 
      $query = "UPDATE users    
      WHERE id=$sid";
     $result = mysqli_query($conn,$sql1); 
        } 
    catch (mysqli_sql_exception $e) { 
     var_dump($e);
     exit; 
      }
    if (!$result) 
    {
        echo "Error : " . $sql1 . "<br>" . mysqli_error($conn);
    }
    
    $rows = mysqli_fetch_assoc($result);
    ?>
    <form method="post" name="tcredit" class="tabletext"><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr style="color: #fff;">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?>
                  </td>
                    <td class="py-2"><?php echo $rows['name'] ?>
                  </td>
                    <td class="py-2"><?php echo $rows['email'] ?>
                  </td>
                  <td class="py-2"><?php echo $rows['balance'] ?>
                  </td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To</label>
        <select name="to" class="form-control" required style="width:70%">
            <option value="" disabled selected>Select</option>
            <?php
            include 'config.php';
            $sid = $_GET['id'];
            $sql = "SELECT * FROM users where id!=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error " . $sql . "<br>" . mysqli_error($conn);
            }
            while ($rows = mysqli_fetch_assoc($result)) {
            ?>
            <option class="table" value="<?php echo $rows['id']; ?>">

                <?php echo $rows['name']; ?> (Balance:
                <?php echo $rows['balance']; ?> )

            </option>
            <?php
            }
            ?>
            <div>
        </select>
        <br>
        <br>
        <label>Enter Amount</label>
        <input type="number" class="form-control" name="amount" required placeholder="Enter Amount" style="width: 70%;">
        <br><br>
        <div class="text-center">
            <button class="btn btn-danger" name="submit" type="submit" id="btn">Transfer</button>
        </div>
    </form>
</div>
<!-- footer -->
<section class="footer p-1 bg-dark text-white text-center">
    <p>© 2021-2022 PC Bank - ALL RIGHTS RESERVED</br>
            <a href="#">PRIVACY POLICY</a></br>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-whatsapp"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-instagram"></i></p>
    </section>
</body>
</html>