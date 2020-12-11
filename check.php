<?php
 require_once"db.php";
 $db = new DB();
 $finalresult=$db->check();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b4f9e00100.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> 
    <title>check</title>
</head>
<body>               
                <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:black;border-bottom:1px solid white;border-top:1px solid white">

                <a class="navbar-brand" href="index.php">PAUKP.com</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home </span></a>
                    </li>
                    
                    <li class="nav-item active">
                      <a class="nav-link" href="service.html">Our Service</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="rule.html">Rules</a>
                    </li>

                    <li class="nav-item active">
                      <a class="nav-link" href="maharbote.html">Lucky number</a>
                    </li>
                   
                  </ul> 
                </div>
                </nav>
          <h4>အောင်ဘာလေ သိန်းထီပေါက်စဥ်</h4> 
            <div class="container-fluid mt-5">
              <div class="row justify-content-center ">        
               <?php if($finalresult):?>
                            <?php $id =$finalresult->number_id ?>
                            <?php $number = $finalresult->number ?>
                            <?php if($id==1):?>         
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းတစ်သောင်းခွဲဆုကြီးကိုဆွတ်ခူးပါသည်။</span>
                                    <?php elseif($id==2):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းတစ်သောင်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    <?php elseif($id==3):?>
                                       
                                   <span class="prize-result"> <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းငါးထောင်ဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    <?php elseif($id==4):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းနှစ်ထောင်ဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    <?php elseif($id==5):?>
                                       
                                   <span class="prize-result"> <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းတစ်ထောင်ဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    
                                    <?php elseif($id==6):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းငါးရာဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                   
                                    <?php elseif($id==7):?>
                                     
                                   <span class="prize-result">   <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းနှစ်ရာဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                   
                                    <?php elseif($id==8):?>
                                       
                                   <span class="prize-result"> <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းတစ်ရာဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                
                                    <?php elseif($id==9):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းငါးဆယ်ဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                   
                                    <?php elseif($id==10):?>
                                   <span class="prize-result"> <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သိန်းနှစ်ဆယ်ဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    
                                    <?php elseif($id==11):?>
                                      
                                   <span class="prize-result">  <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်ဆယ်သိန်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                
                                    <?php elseif($id==12):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်သုံးသိန်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                  
                                    <?php elseif($id==13):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်နှစ်သိန်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    <?php elseif($id==14):?>
                                        
                                   <span class="prize-result"><h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်တစ်သိန်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                    <?php elseif($id==15):?>
                                       
                                   <span class="prize-result"> <h2>Congratulation...</h2><?php echo $finalresult->letter ?><?php echo $number ?> သည်ငါးသောင်းဆုကြီးကိုဆွတ်ခူးပါသည်။ </span>
                                 <?php else:?>
                                       <span class="prize-result">System Error!</span>
                                <?php endif;?>
                        <?php else:?>
                          <span class="prize-result"> 
                            <h2>Sorry..<h2>
                            <?php echo"မိတ်ဆွေသည် ထီဆုကြီးနှင့်လွဲချော်သွားပါသည်"?> &nbsp;<i class="fa fa-frown-o" aria-hidden="true"><i class="fa fa-frown-o" aria-hidden="true"></i>
                           </i><i class="fa fa-frown-o" aria-hidden="true"></i><br> နောက်ထပ် ထပ်မံကံစမ်းလိုက်ပါ။  </span>
                    <?php endif; ?>        
              </div>

              <div class="row justify-content-center mt-5">
                           <a href="index.php"class="btn btn-danger button">Return Home</a>
              </div>

              <div class="row justify-content-center  footer mt-5">
                   <div class="col-md-5 col-sm-12 mt-3">
                          <h6>Our Services</h6>
                          <ul>
                                 <li><i class="fas fa-tv"></i>&nbsp;Windows installation,Software installation</li>
                                 <li><i class="fas fa-network-wired"></i>&nbsp;Setup small office network and vpn</li>
                                 <li><i class="fas fa-tools"></i>&nbsp;Monthly,Yearly maintain....</li>
                          </ul>
                   </div>
                   <div class="col-md-5 col-sm-12 mt-3">
                          <h6>Contact Us</h6>
                        <ul>
                               <li><i class="fas fa-map-marked-alt"></i> &nbsp;Yangon,Myanmar</li> 
                               <li><i class="fas fa-envelope-open-text  "> </i> &nbsp; contact@knowledgehostmm.com</li>
                               <li><i class="fas fa-phone-square-alt"></i>&nbsp;+95 09257810043</li>
                               <li><i class="fas fa-phone-square-alt"></i>&nbsp;+95 09697873709</li>
                                      
                               </li>
                        </ul>
                  </div>
                  
                  <div class="row">
                         <footer> Copyright &copy; 2020 All rights reserved by <a href="https://knowledgehostmm.com"> knowledge Host Myanmar</a></footer>
                  </div>
            
            </div>
         
            </div>        
</body>
</html>