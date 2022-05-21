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
        .footer {
            position: auto;
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
    <!-- nav -->
    <?php include 'navigation.php'; ?>

<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<section>
<div class="container text-center">
</br></br>
       
            <div class="row">
                <h1 class=" py-5 my-5" ALIGN="Center"><u>TRANSACTION</u></h1>
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table my-3 py-3 table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-3">Id</th>
                            <th scope="col" class="text-center py-3">Name</th>
                            <th scope="col" class="text-center py-3">E-Mail</th>
                            <th scope="col" class="text-center py-3">Balance</th>
                            <th scope="col" class="text-center py-3">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($rows=mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td class="  py-4"><?php echo $rows['id'] ?></td>
                                <td class="  py-4"><?php echo $rows['name']?></td>
                            
                                <td class="  py-4"><?php echo $rows['email']?></td>
                                <td class=" py-4"><?php echo $rows['balance']?></td>
                                <td><a href="payment.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class=" text-center py4 btn btn-secondary">Transaction</button></a></td> 
                            </tr>
                            <?php
                                }
                            ?>
            
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 


<!-- footer -->
<section class="footer p-1 bg-dark text-white text-center">
    <p>© 2021-2022 BANK_NAME - ALL RIGHTS RESERVED</br>
            <a href="#">PRIVACY POLICY</a></br>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-whatsapp"></i>
            <i class="fab fa-linkedin-in"></i>
            <i class="fab fa-instagram"></i></p>
    </section>

</body>
</html>