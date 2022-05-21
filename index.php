<!Doctype html>
<html>
  <head>
      <title> </title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  </head>
  <body>

    <?php include 'navigation.php'; ?>

    <div id="demo" class="carousel slide" data-ride="carousel">

           
      <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="bg2.jpg" alt="background slide 1" width="1100" height="500">
        </div>
        
      </div>
      
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>"
    </div>

    <section class="my-5">
        <div class="py-5">
          <h1 class="text-center">About Us</h1>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-12 ">
              <img src="bg6.jpg" class="img-fluid aboutimg" >
            </div>
            <div class="col-lg-6 col-md-6 col-12">
              <h2 class="display-4"> Our Mission </h2>
            <p class="py-1"> The new brand identity of Panjab National Bank signifies growth and energy. It reflects the progressive spirit of our times. The symbolism behind our new identity is drawn from the theme of ‘progress’. Inspired by a forward-moving bar graph, it embodies a symbol of growth that can be seen and measured. The three bars stand for a threefold purpose - progress of the bank, progress of our customers and progress of the nation. </p>
            <a href="#" class="btn btn-success"> More...</a>
            </div>
          </div>
        </div>
    </section>



    <section class="my-5">
        <div class="py-5">
          <h1 id="contactus" class="text-center">Contact Us</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post"> 
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email ID :</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="on" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-danger">SUBMIT
                </button>
                </form>
                    </div>

                <div class="col-md-4">					
                            <h4 class="classic-title"><span></span></h4>					
                            <div class="hr1" style="margin-bottom:10px;">
                </div>
                <div> 
                    <ul>
                        <li><strong>ADDRESS</strong><br>
                            Panjab National Bank</BR>
                            A/p. Ganesh Nagar Bhokel, Near Sudama Gym </br> tal-khed,
                            Road 18, Pune&nbsp;<br>
                            Maharashtra, India</li>
                        <li><strong>Email-</strong>&nbsp;roshanpatil@mitacsc.edu.in</li>
                        <li><strong>Phone-&nbsp;</strong>+91-8459630639<br>&nbsp;</li>
                    </ul>
                        </div>
                    </div>
                
            </div>
          </div>
        </section>
      </div>
    </div> 
  </div>     
</section> 




    <?php include 'footer.php'; ?>



      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
