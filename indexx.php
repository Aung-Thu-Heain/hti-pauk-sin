<?php
require_once"db.php";
$db = new DB();
$finalresult=$db->indexx();

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
    <title></title>
</head>
<body>
       <nav class="navbar navbar-dark navbar-expand-sm " style="background-color:rgb(93, 93, 251);border-bottom:1px solid white;border-top:1px solid white">

                     <a class="navbar-brand " href="index.php">PAUKP.com</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home </a> </li>
                            <li class="nav-item active"><a class="nav-link" href="rule.html">Rules</a></li>

                            <li class="nav-item active"> <a class="nav-link" href="maharbote.html">Lucky number</a> </li>
                     
                     </ul> 
              </div>
       </nav>
        <h4>အောင်ဘာလေ သိန်းထီပေါက်စဥ်</h4> 
        <h5>" 2020 ပြည့်နှစ် စက်တင်ဘာလ 1 ရက်/12 ကြိမ်မြောက်ထီပေါက်စဉ် " </h5>
        <div class="container-fluid mt-3">
            <form action="check.php"method="POST">
                <div class="row justify-content-center mt-2 ">   
                        <div class="form-group-lg">
                            <div class="form-control-lg  ">
                                <select name="letter">
                                    <option value="က">က</option>
                                    <option value="ကခ">ကခ</option>
                                    <option value="ခ">ခ</option>
                                    <option value="ကခ">ကခ</option>
                                    <option value="ဂ">ဂ</option>
                                    <option value="ကဂ">ကဂ</option>
                                    <option value="ဃ">ဃ</option>
                                    <option value="ကဃ">ကဃ</option>
                                    <option value="င">င</option>
                                    <option value="ကင">ကင</option>
                                    <option value="စ">စ</option>
                                    <option value="ကစ">ကစ</option>
                                    <option value="ဆ">ဆ</option>
                                    <option value="ကဆ">ကဆ</option>
                                    <option value="ဇ">ဇ</option>
                                    <option value="ကဇ">ကဇ</option>
                                    <option value="ဈ">ဈ</option>
                                    <option value="ကဈ">ကဈ</option>
                                    <option value="ည">ည</option>
                                    <option value="ကည">ကည</option>
                                    <option value="ဋ">ဋ</option>
                                    <option value="ကဋ">ကဋ</option>
                                    <option value="ဌ">ဌ</option>
                                    <option value="ကဌ">ကဌ</option>
                                    <option value="ဍ">ဍ</option>
                                    <option value="ကဍ">ကဍ</option>
                                    <option value="ဎ">ဎ</option>
                                    <option value="ကဎ">ကဎ</option>
                                    <option value="ဏ">ဏ</option>
                                    <option value="ကဏ">ကဏ</option>
                                    <option value="တ">တ</option>
                                    <option value="ကတ">ကတ</option>
                                    <option value="ထ">ထ</option>
                                    <option value="ကထ">ကထ</option>
                                    <option value="ဒ">ဒ</option>
                                    <option value="ကဒ">ကဒ</option>
                                    <option value="ဓ">ဓ</option>
                                    <option value="ကဓ">ကဓ</option>
                                    <option value="န">န</option>
                                    <option value="ကန">ကန</option>
                                    <option value="ပ">ပ</option>
                                    <option value="ကပ">ကပ</option>
                                    <option value="ဖ">ဖ</option>
                                    <option value="ကဖ">ကဖ</option>
                                    <option value="ဗ">ဗ</option>
                                    <option value="ကဗ">ကဗ</option>
                                    <option value="ဘ">ဘ</option>
                                    <option value="ကဘ">ကဘ</option>
                                    <option value="မ">မ</option>
                                    <option value="ကမ">ကမ</option>
                                    <option value="ယ">ယ</option>
                                    <option value="ကယ">ကယ</option>
                                    <option value="ရ">ရ</option>
                                    <option value="ကရ">ကရ</option>
                                    <option value="လ">လ</option>
                                    <option value="ကလ">ကလ</option>
                                    <option value="ဝ">ဝ</option>
                                    <option value="ကဝ">ကဝ</option>
                                    <option value="သ">သ</option>
                                    <option value="ကသ">ကသ</option>
                                    <option value="ဟ">ဟ</option>
                                    <option value="ကဟ">ကဟ</option>
                                    <option value="ဠ">ဠ</option>
                                    <option value="ကဠ">ကဠ</option>
                                    <option value="အ">အ</option>
                                    <option value="ကအ">ကအ</option>
                                </select>
                                <input type="number"maxlength="6"minlength="2"name="number"required placeholder="ထီနံပတ်ထည့်ပါ...">
                            </div>   
                        </div>
                </div>
                <div class="row justify-content-center">
                    <button class="btn btn-primary button"id="check_button">Check number</button>  
                </div>
            </form>     
             <div class="row justify-content-center mt-4 ">
                        <a href="index.php"class="btn btn-dark button">ဆုမဲအလိုက်စဉ်မယ်&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>  
                        <a href="indexxx.php"class="btn btn-dark button ">နံပတ်အလိုက်စဉ်မယ်&nbsp;<i class="far fa-arrow-alt-circle-right"></i></a>         
             </div>
            <?php foreach($finalresult as $finalresults): ?>
                <?php if($finalresults->number_id==1):?>
                
                  <div class="row justify-content-center show-num ">
                          <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?> 
                          </div>
                   </div>

                <?php elseif($finalresults->number_id==2):?>
                  <div class="row justify-content-center show-num">
                    <div class="col-md-6 letter ">
                          <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                    </div>
                  </div>
  
                 <?php elseif($finalresults->number_id==3):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==4):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>
 
                 <?php elseif($finalresults->number_id==5):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==6):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                                <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==7):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                                <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>
 
                 <?php elseif($finalresults->number_id==8):?>
                  <div class="row justify-content-center show-num ">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==9):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                                <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==10):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                                <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==11):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==12):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==13):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number." (" .$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==14):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                 <?php elseif($finalresults->number_id==15):?>
                  <div class="row justify-content-center show-num">
                         <div class="col-md-6 letter ">
                              <?php echo $finalresults->letter." ".$finalresults->number ."(".$finalresults->prize.")"?>
                         </div>
                  </div>

                <?php else: ?>
                    <P>Something went wrong</p>  
              <?php endif; ?>
            <?php endforeach; ?>

            <hr>
            <div class="row justify-content-center  footer">
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