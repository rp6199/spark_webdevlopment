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

    <?php include 'navigation.php'; ?>
 
	<div class="container text-center py-4">
   
       <div class="table-responsive-sm">
       
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
        <h1 class="text-center py-4">TRANSACTION HISTORY</h1>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
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