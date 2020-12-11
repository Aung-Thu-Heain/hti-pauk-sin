<?php
require_once"db.php";
 $db = new DB();
 $number_id=$db->add_form($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>add_form</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10">
            <form action="add.php"method="POST">        
                <div class="input_fields_wrap" >  
                    <div class="form-group">
                                <div class="form-control-lg">
                                    <select name="letter" required>
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
                                    <input type="number"lang="en"name="number"value=""required>                    
                                </div>
                    </div>
                </div>
                        <div class="form-group">    
                                    <select name="number_id"class="form-control add_form_select"required >
                                        <option disabled selected>choose numbr id</option>
                                        <option value="1"<?php if($number_id==1){echo"selected";} ?> >သိန်းတစ်သောင်းခွဲ</option>
                                        <option value="2"<?php if($number_id==2){echo"selected";} ?> >သိန်းတစ်သောင်း</option>
                                        <option value="3"<?php if($number_id==3){echo"selected";} ?> >သိန်းငါးထောင်</option>
                                        <option value="4"<?php if($number_id==4){echo"selected";} ?> >သိန်းနှစ်ထောင်</option>
                                        <option value="5"<?php if($number_id==5){echo"selected";} ?> >သိန်းတစ်ထောင်</option>
                                        <option value="6"<?php if($number_id==6){echo"selected";} ?> >သိန်းငါးရာ</option>
                                        <option value="7"<?php if($number_id==7){echo"selected";} ?> >သိန်းနှစ်ရာ</option>
                                        <option value="8"<?php if($number_id==8){echo"selected";} ?> >သိန်းတစ်ရာ</option>
                                        <option value="9"<?php if($number_id==9){echo"selected";} ?> >သိန်းငါးဆယ်</option>
                                        <option value="10"<?php if($number_id==10){echo"selected";} ?> >သိန်းနှစ်ဆယ်</option>
                                        <option value="11"<?php if($number_id==11){echo"selected";} ?> >ဆယ်သိန်း</option>
                                        <option value="12"<?php if($number_id==12){echo"selected";} ?> >သုံးသိန်း</option>
                                        <option value="13"<?php if($number_id==13){echo"selected";} ?> >နှစ်သိန်း</option>
                                        <option value="14"<?php if($number_id==14){echo"selected";} ?> >တစ်သိန်း</option>
                                        <option value="15"<?php if($number_id==15){echo"selected";} ?> >ငါသောင်း</option>          
                                    </select>     
                        </div> 
                        <div class="form-group">    
                                    <select name="prize"class="form-control add_form_select" required >
                                    <option disabled selected>ဆုမဲရွေးပေးပါ</option>
                                    <option value="သိန်းတစ်သောင်းခွဲဆုကြီး"<?php if($number_id==1){echo"selected";} ?>>သိန်းတစ်သောင်းခွဲ</option>
                                    <option value="သိန်းတစ်သောင်းဆုကြီး"<?php if($number_id==2){echo"selected";} ?>>သိန်းတစ်သောင်း</option>
                                    <option value="သိန်းငါးထောင်ဆုကြီး"<?php if($number_id==3){echo"selected";} ?>>သိန်းငါးထောင်</option>
                                    <option value="သိန်းနှစ်ထောင်ဆုကြီး"<?php if($number_id==4){echo"selected";} ?>>သိန်းနှစ်ထောင်</option>
                                    <option value="သိန်းတစ်ထောင်ဆုကြီး"<?php if($number_id==5){echo"selected";} ?>>သိန်းတစ်ထောင်</option>
                                    <option value="သိန်းငါးရာဆုကြီး"<?php if($number_id==6){echo"selected";} ?>>သိန်းငါးရာ</option>
                                    <option value="သိန်းနှစ်ရာဆုကြီး"<?php if($number_id==7){echo"selected";} ?>>သိန်းနှစ်ရာ</option>
                                    <option value="သိန်းတစ်ရာဆုကြီး"<?php if($number_id==8){echo"selected";} ?>>သိန်းတစ်ရာ</option>
                                    <option value="သိန်းငါးဆယ်ဆုကြီး"<?php if($number_id==9){echo"selected";} ?>>သိန်းငါးဆယ်</option>
                                    <option value="သိန်းနှစ်ဆယ်ဆုကြီး"<?php if($number_id==10){echo"selected";} ?>>သိန်းနှစ်ဆယ်</option>
                                    <option value="ဆယ်သိန်းဆုကြီး"<?php if($number_id==11){echo"selected";} ?>>ဆယ်သိန်း</option>
                                    <option value="သုံးသိန်းဆုကြီး"<?php if($number_id==12){echo"selected";} ?>>သုံးသိန်း</option>
                                    <option value="နှစ်သိန်းဆုကြီး"<?php if($number_id==13){echo"selected";} ?>>နှစ်သိန်း</option>
                                    <option value="တစ်သိန်းဆုကြီး"<?php if($number_id==14){echo"selected";} ?>>တစ်သိန်း</option>
                                    <option value="ငါသောင်းဆုကြီး"<?php if($number_id==15){echo"selected";} ?>>ငါသောင်း</option>
                                    </select>  
                        </div> 
                   
                    <a href="admin.php" class="btn btn-primary">Home</a>
                    <a href="show.php?id=<?php echo $number_id ?>"class="btn btn-primary">Back</a>  
                    <button  class="btn btn-success">Add</button>  
           </form>
            </div>
        </div>
    </div>   
</body>
</html>