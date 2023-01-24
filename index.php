
 <?php 
require_once("connect.php");

if(isset($_POST['submit'])){
  $amount=$_POST['amount'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $donation_type=$_POST['donation_type'];
  $payment_gatway=$_POST['payment_gatway'];
  $date=$_POST['date'];

  $data=array(
    "amount" => $amount,
    "email" => $email,
    "phone_number" => $phone_number,
    "donation_type" => $donation_type,
    "payment_gatway" => $payment_gatway,
    "date" => $date
  );


  QB::table('t_donation')->insert($data);
}

//All data Foundation Meember

$all_foundation_members = QB::query("SELECT * FROM foundation_member")->get();

//All data Foundation Meember Count

// $allMembers = QB::query("SELECT count() as usercount FROM foundation_member ")->first();


//all Donation Data 

$values = QB::query("SELECT * FROM t_donation")->get();
$values = QB::query("SELECT count(id) as usercount FROM t_donation ")->first(); // for user count in dashboard
$valuesW = QB::query("SELECT count(donation_type) as water FROM t_donation WHERE donation_type='water'")->first();

$valuesH = QB::query("SELECT count(donation_type) as health_care FROM t_donation WHERE donation_type='health_care'")->first();

$valuesS = QB::query("SELECT count(donation_type) as sanitization FROM t_donation WHERE donation_type='sanitization'")->first();
 ?>


<?php 
//session start
// include 'session.php';
//session end



 // for user count in dashboard


 ?>
 




<!doctype html>
<html lang="bn-BD">
      <head>
        <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            

            <link rel="stylesheet" type="text/css" href="style.css">

            
            <link rel="stylesheet" type="text/css" href="css/all.min.css">

            <link rel="stylesheet" type="text/css" href="responsive.css">

        
      
                                    <!-- Bootstrap CSS -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
              <title>RKF</title>
      </head>


  <body>


    <div class="container">

      <!-- navbar start -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            
              <a class="navbar-brand logoo" href=""><img src="images/Logo 1.png" width="115px" style="margin-right: 100px"></a>
       

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse ftuti" id="navbarSupportedContent">

                    <ul class="navbar-nav me-0 custom-ms">
                            <li class="nav-item">
                              <a class="nav-link active mx-2" aria-current="page" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php" style="font-weight: bold;">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link mx-2" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php"style="font-weight: bold;">Our Mission</a>
                            </li>     

                            <li class="nav-item">
                              <a class="nav-link mx-2" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php"style="font-weight: bold;">Donate</a>
                            </li> 

                            <li class="nav-item">
                              <a class="nav-link mx-2" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php"style="font-weight: bold;">Fund Distribution</a>
                            </li>


                            <li class="nav-item">
                              <a class="nav-link mx-2" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php"style="font-weight: bold;">Members</a>
                            </li>    

                            <li class="nav-item">
                              <a class="nav-link mx-2" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php"style="font-weight: bold;">Partners</a>
                            </li> 
                            <li class="nav-item dropdown">
                              <a class="nav-link mx-2 dropdown-toggle" href="http://localhost/Rasheda_Khanam_Foundation/asset/index.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="font-weight: bold;">
                                Our Project
                              </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="water.php"style="font-weight: bold;">Water</a></li>
                                <li><a class="dropdown-item" href="health_care.php"style="font-weight: bold;">Health Care</a></li>
                                <li><a class="dropdown-item" href="sanitization.php"style="font-weight: bold;">Sanitization</a></li>
                     </ul>

                     </li>  

                    </ul>
             

      </div>

</nav>

      <!-- navbar End -->

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/sanitization.jpg" class="d-block w-100 carousel_img" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <div class="div_content">
                        <h1>Welcome  to Rashida Khanum Foundation</h1>
                        See your own world that you have not been yet discover. <br>Find out them who are the ornament of your environment,<br> making you happy everyday through a beautiful task.<br> Connect them in a mind.</p>
                         <a href="" class="primary-button causes-donate">Join Us Now!</a>
                    </div>
                </div>
          </div>
      <div class="carousel-item" data-bs-interval="2000">
            <img src="images/slider-2-water.jpg" class="d-block w-100 carousel_img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                      <div class="div_content">
                          <h1>Our Commitments</h1>
                         <p>To reach our vision and implement our mission,<br> we are continuously working according to the <br>community's needs through our core values <br>and capacity. We believe our actions will lead<br>the community in a well-being way.</p>
                         <a href="" class="primary-button causes-donate">Join Us Now!</a>
                    </div>
                </div>
      </div>
      <div class="carousel-item">
            <img src="images/education.jpg" class="d-block w-100 carousel_img" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="div_content">
                  <h1>Activities That Spread Out to the Community </h1>
                  Rashida Khanum Foundation is one of the pioneer non-profit<br> organizations in Bangladesh, working on child health care,<br> hygienic water, sanitization, and women’s education <br>to achieve its goals in the urban and village stages.</p>
                         <a href="" class="primary-button causes-donate">Join Us Now!</a>
                 </div>
            </div>
      </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>



<!---start-->




<div class="container">
  <div class="row">
          <div class="col-md-6 col-sm-6">
            <img src="images/mission2.jpg">
        </div>
        <div class="col-md-6">
          <div >
                            <h5 class="our">
                                OUR   MISSION
                              </h5>
                            
                        </div>
        <h3>
         <h1 class="colll">RAISING AWARENESS AMONG<br> CHILDREN & WOMEN</h1>
                     </h3>
    <div class="col-md-12 col-sm-12">
                         
                
               <div class="d-flex">       
           <div>
                 
                     <p>The main mission of Rashida Khanum Foundation is to reach the light of <br>child health care and women's education among poor and ignorant people in urban and village arena. </p>

                      <p>In fact, our team find out those areas where women are deprived from education, and children are affected non-Hygenic water, unconscious in health care with sanitization.</p>
                     
               </div>
     
  
   
     
      <div>
       <p>About child health care, Hygenic water, sanitization, and women's education, the painful picture comes to us sometimes if we deeply keep attention to the newspaper. </p>

        <p>For this, we are very concerned for them and have taken the necessary steps to go ahead with this helpless minority to ensuring health safty and education expansion.</p>
      
     </div>

     </div>
  

  </div>
</div>
</div>
</div>

  <!--------------------------------------------->

 

<div class="container">
<div class="bg-image p-5 mt-5 text-center shadow-1-strong rounded mb-5 text-white sectionTittle"
    style="background-image: url(images/r.png); background-repeat: no-repeat;background-size: cover;">
        <h1 class="mb-0 h2">Make A Donation</h1>
    
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 DONATE NOW!
</button>

<!-- Modal -->
<div class="row">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
        <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
          <div class="col-md-6">
            <input type="text" name="amount" class="form-control" placeholder="amount" required><br>
          <input type="email" name="email" class="form-control" placeholder="@gmail.com" required><br>
          <input type="text" name="phone_number" class="form-control" placeholder="+088"required><br>
         </div>
          
          <div class="col-md-6">
            <select class="form-select" name="donation_type"  id="inputGroupSelect01" required>

            <option value="0">Donation Type</option>
            <option value="water">Water</option>
            <option value="health_care">Health Care</option>
            <option value="sanitization">Sanitization</option>

          </select><br>

           <select class="form-select" name="payment_gatway" id="inputGroupSelect01" required>
          <option value="0">Payment Getway</option>
          <option value="bkash">bkash</option>
          <option value="DBBL">DBBL</option>
          <option value="Nagad">Nagad</option>
        </select>
          

          <option>Date</option>
         <input type="date" name="date" class="form-control" placeholder="date" required>
         </div>
         
        </div>
        </form>
        <div class="modal-footer">
         <input type="submit" name="submit" class="form-control btn btn-primary">
      </div>
      </div>

         </div>
  </div>
</div>
</div>


    </div>
  </div>







<div class=" container">
  
  <div class="row mt-5">
    <!-- <h1 class="text-center">All Doners </h1>
    <?php foreach ($values as $key => $value) { ?>
       <div class="col customCard  mt-5">
      
        <h3><i class="bi bi-heartbreak"></i> <br><?php echo $value->number; ?><br><?php echo $value->name; ?></h3>
    
      </div>
    <?php } ?>
 -->

 <!---->
    <div class="col customCard mt-5">
      <h6><img src="images/l.png" alt="..."> <br><br><?php echo $values->usercount; ?><br><br>Total Donation</h6>
    </div>

    <div class="col customCard mt-5">
      <h6> <img src="images/water.png" alt="..."> <br><br><?php echo $valuesW->water; ?><br><br>Water</h6>
    </div>

    <div class="col customCard mt-5">
      <h6><img src="images/health.png" alt="..."><br><br><?php echo $valuesH->health_care; ?><br><br>Health Care</h6>
    </div>

    <div class="col customCard mt-5">
      <h6><img src="images/sanitaization.png" alt="..."><br><br><?php echo $valuesS->sanitization; ?><br><br>Sanitization</h6>
    </div>

    <!---->



  </div>
</div>






<!-------------->

     <div class="container">

    
       <div class="row">


         <div class="bg-image col col-md-12 col-sm-6 p-5 mt-5 text-center shadow-1-strong rounded mb-5 text-white sectionTittle"
style="background-image: url(images/ff.png); background-repeat: no-repeat;background-size: cover;">

 
 <div id="demo" class="carousel slide" data-bs-ride="carousel">
   <h1 class="mb-3 h2 ">FOUNDATION MEMBERS</h1>

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
       <?php 
 
       foreach ($all_foundation_members as  $value) {

    ?>
      <div class="row">
              

                         <div class="col-md-4 col col-sm-4">
                         <ul class="d-flex">
                         <li class=""><a href="#"><img src="images/<?php echo $value->image;?>" width="100px" height="100px"alt=""></a><h6><?php echo $value->fname;?></h6></li>
                          </ul>
                          </div>

                         <div class="col-md-5 col col-sm-5">
                          <blockquote>
                            <p class="text-justify"><?php echo $value->designation;?></p>
                           <p class="text-justify"><?php echo $value->description;?></p>
                         </blockquote>
                         </div>
                         </div>
                           <?php } ?> 
    </div>
    <div class="carousel-item">
      <img src="" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

   
  </div>
  
</div>

      
       
</div>
       
<!---Foundation member slider end---->





        <div class="container">
        <div class="sectionTittle text-center ">
            <!--  <img  src="images/u.png"> -->
                <h1>Our Donation Partners</h1> 
        <div class="row">
          <div class="col-md-4">
          
                
                <img  src="images/v.png">
             
              <div class="image_links ">
                <a href="" class="link" target="_blank">
                  <i class="icon-link"></i>
                </a>
              </div>
              </div>

             <div class="col-md-5">
          
                
                <img  src="images/logo 2.png">
              
              <div class="image_links ">
                <a href="" class="link" target="_blank">
                  <i class="icon-link"></i>
                </a>
              </div>
              </div>

              <div class="col-md-3">
          
                
                <img  src="images/g.png">
              
              <div class="image_links ">
                <a href="" class="link" target="_blank">
                  <i class="icon-link"></i>
                </a>
              </div>
              </div>
              </div>

</div>
</div>



    <div class="container">
                <div class="sectionTittle text-center">
                    <h4 class="our">HELP NOW</h4>
                    <h1>CHECK YOUR NEIGHBOURS</h1>
                  
                </div>
             <!--  <div class="row">
                      <div class=" sani col-md-4 ">
                          <div class="bg-image p-5  text-center shadow-1-strong rounded mb-5 text-white sectionTittle"
                          style="background-image: url(images/0.png); background-repeat: no-repeat;background-size: cover;">
                        
            
                       <div class="d-flex">
                          <div>
                            <h5> Women Education</h5>
                            <h6>Spread out your helping hand to women to enhance their strength, knowledge, and skills, for gaining education.</h6>
                          </div>
                       </div>
                          
                           </div>
                       
                      </div>
                         


                   <div class="col-md-4">
                      <div class="bg-image p-5  text-center shadow-1-strong rounded mb-5 text-white sectionTittle"
                      style="background-image: url(images/w.png); background-repeat: no-repeat;background-size: cover;">
                         <div class="d-flex neighbour">
                          <div>
                            <h5 class="fs-3">Child Health Care</h5><br>
                            <h6 class="text-justify">Secure the foundation of all growth and development of the child near you and drive them for the bright of the country.</h6>
                          </div>
                       </div>


                        
                  </div>
        </div>
    </div -->
    <div class="row">
  <div class="col-sm-6 col col-md-6">
    <div class="card">
      <div class="card-body"style="background-color: #dc35bb">
        <h5 class="card-title text-white">Women Education</h5>
        <p class="card-text text-white">Spread out your helping hand to women to enhance their strength, knowledge, and skills, for gaining education.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col col-md-6">
    <div class="card ">
      <div class="card-body"style="background-color: #8026a9">
        <h5 class="card-title text-white">Child Health Care</h5>
        <p class="card-text text-white">Secure the foundation of all growth and development of the child near you and drive them for the bright of the country.</p>
      </div>
    </div>
  </div>
</div>

</div>






<!---add our section card start-->
        <div class="container">
          <div class="col-md-12 col col-sm-12 me-md-3 me-sm-3">
            <div class="bg-image  text-center shadow-1-strong rounded  text-black sectionTittle height:800px;"
            style="background-image: url(images/0urarea.png); background-repeat: no-repeat;background-size: cover;">
            <h4 class="our text-white">OUR AREA</h4>
            <h1 class=" h2 col col-sm-12 me-md-3 me-sm-3 text-white">WHAT WE DO!</h1>
<div class="row">
  <div class="col-sm-6 col-10 col-md-4 p-10">
    <div class="card text-white"style="background-color: #c80dfdad">
      <div class="card-body">
        <h4 class="card-title">Hygienic Water</h4>
        <h6 class="card-text">Lack of hygienic water huge number of children are facing cholera, diarrhea, dysentery, hepatitis A, typhoid, and polio.</h6>
        <a href="#" class=" primary-button">More Info!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 col-10">
    <div class="card text-white"style="background-color: #fd0db8a1">
      <div class="card-body">
        <h4 class="card-title">Sanitization</h4>
        <h6 class="card-text">Due to being unconscious, most poor children suffer from viruses, fungi, harmful bacteria, etc & they are not familiar with sanitization.</h6>
        <a href="#" class="primary-button">More info!</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4 col-10">
    <div class="card text-white"style="background-color: #910dfd75">
      <div class="card-body">
        <h4 class="card-title">Education</h4>
        <h6 class="card-text">An educated woman can affect her family and country through child healthcare that ensures a civilized nation.</h6>
        <a href="" class="primary-button">More Info!</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
        </div>
<!---add our section card end-->
    

<!-- 
<div class="container">

  <div class="row">
  
    
       <div class="col-md-6 col-sm-6">
    

  <div class="mapouter">
  <div class="gmap_canvas">
    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=mohammadpur housing socity,road no.10 ,housing no 6,softlakes ltd&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
      
    </iframe>



</div>
<style>.mapouter{position:relative;text-align:right;width:545px;height:100%;}.gmap_iframe {width:555px!important;height:189px!important;}</style>
</div>

     </div>

    
   
         <div class="col-md-3 col-sm-3">

                               <div class="card pt-2 m-0" style="width: 100%">
                                 <div class="card-body">
                              <h5>Contact Us</h5>
                              <h6>House No: 6, Road No: 10, Mohammadia Housing Society, Dhaka, Bangladesh</h6>
                              <h6>Cell: 01311-704669</h6><br>
                             </div>
                               </div>
                              
                           
                           
                             </div>
     
            <div class="col-md-3 col-sm-3">

                              <div class="card pt-2" style="width: 100%;margin-left:-24px;">
                                 
                              <div class="card-body">
                              <h5>Email To:</h5>
                              <h6>rashidakhanumfoundation@gmail.com</h6><br><br><br>
                            
                              
                             </div>
                               </div>
                    
                             </div>

</div>
</div>

 -->

<!-----start card--->







  








<!-----end card--->
<footer>
<div class="container">
<footer>
  <div class="row foo">
<div class="col-md-6 col-sm-3 col">
    

  <div class="mapouter">
  <div class="gmap_canvas">
    <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=mohammadpur housing socity,road no.10 ,housing no 6,softlakes ltd&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
      
    </iframe>



</div>
<style>.mapouter{position:relative;text-align:right;width:545px;height:100%;}.gmap_iframe {width:555px!important;height:189px!important;}</style>
</div>

     </div>


     <div class="col-md-3 col-sm-3 col">

                               <div class="card pt-2 m-0" style="width: 100%">
                                 <div class="card-body">
                              <h5>Contact Us:</h5>
                              <h6>House No: 6, Road No: 10, Mohammadia Housing Society, Dhaka, Bangladesh</h6>
                              <h6>Cell: 01311-704669</h6><br>
                             </div>
                               </div>
                              
                           
                           
                             </div>
     
            <div class="col-sm-3 col">

                              <div class="card pt-2" style="width: 100%;margin-left:-24px;">
                                 
                              <div class="card-body">
                              <h5>Email Us:</h5>
                              <h6>rashidakhanumfoundation@gmail.com</h6><br><br><br>
                            
                              
                             </div>
                               </div>
                    
                             </div>


<div class="col-md-5 col col-sm-3 me-sm-3">
<div class="footer">
<div class="footer-logo">
<a class="logo sizee" href="#"><img src="images/Logo 1.png" alt=""></a>
<!-- <a class="logo" href="#"><img src="images/e.png" alt=""></a> -->
<!-- <h4>About Us</h4>
<a class="logo" href="#"><img src="images/f.png" alt=""></a> -->
 <!--  -->
 
</div>
<!-- <p class="text-align">Rashida Khanum Foundation is one of the pioneer non-profit organizations in Bangladesh, working on child health care, hygienic water, sanitization, and women’s education to achieve its goals in the urban and village stages.</p>
 -->

</div>
</div>
<!-- <div class="col-md-3 ">
  
    <a class="logo" href="#"><img src="images/h.png" alt=""></a>


  </div> -->




<div class="col-md-4 col col-sm-4 me-md-4 me-sm-4">
<div class="footer">

<h3 class="footer-title">Newsletter</h3>
<form class="footer-newsletter">
<input class="input col-md-8" type="email" placeholder="@gmail.com"><br><br>

</form>
<a href="#" class="btn btn-primary">send</a>
<ul class="footer-social">
<li><a href=""><i class="bi bi-facebook "></i></a></li>
<li><a href=""><i class="bi bi-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>