<?php
require_once"db.php";
$db= new DB();
$finalresult=$db->edit_form($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>edit_form</title>
</head>
<body>
    <div class="container-fluid">
            <div class="col-md-12 ">
                    <?php foreach($finalresult as $finalresults): ?> 
                     <div class="row justify-content-center mt-2">
                        <form action="edit.php"method="POST">
                        <div class="form-group">
                                <div class="form-control-lg">
                                    <select name="letter">
                                        <option value="က"<?php if($finalresults->letter=="က"){echo "selected";} ?> >က</option>
                                        <option value="ကက"<?php if($finalresults->letter=="ကက"){echo "selected";} ?>>ကက</option>
                                        <option value=""disabled>------</option>
                                        <option value="ခ"<?php if($finalresults->letter=="ခ"){echo "selected";} ?>>ခ</option>
                                        <option value="ကခ"<?php if($finalresults->letter=="ကခ"){echo "selected";} ?>>ကခ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဂ"<?php if($finalresults->letter=="ဂ"){echo "selected";} ?>>ဂ</option>
                                        <option value="ကဂ"<?php if($finalresults->letter=="ကဂ"){echo "selected";} ?>>ကဂ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဃ"<?php if($finalresults->letter=="ဃ"){echo "selected";} ?>>ဃ</option>
                                        <option value="ကဃ"<?php if($finalresults->letter=="ကဃ"){echo "selected";} ?>>ကဃ</option>
                                        <option value=""disabled>------</option>
                                        <option value="င"<?php if($finalresults->letter=="င"){echo "selected";} ?>>င</option>
                                        <option value="ကင"<?php if($finalresults->letter=="ကင"){echo "selected";} ?>>ကင</option>
                                        <option value=""disabled>------</option>
                                        <option value="စ"<?php if($finalresults->letter=="စ"){echo "selected";} ?>>စ</option>
                                        <option value="ကစ"<?php if($finalresults->letter=="ကစ"){echo "selected";} ?>>ကစ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဆ"<?php if($finalresults->letter=="ဆ"){echo "selected";} ?>>ဆ</option>
                                        <option value="ကဆ"<?php if($finalresults->letter=="ကဆ"){echo "selected";} ?>>ကဆ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဇ"<?php if($finalresults->letter=="ဇ"){echo "selected";} ?>>ဇ</option>
                                        <option value="ကဇ"<?php if($finalresults->letter=="ကဇ"){echo "selected";} ?>>ကဇ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဈ"<?php if($finalresults->letter=="ဈ"){echo "selected";} ?>>ဈ</option>
                                        <option value="ကဈ"<?php if($finalresults->letter=="ကဈ"){echo "selected";} ?>>ကဈ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ည"<?php if($finalresults->letter=="ည"){echo "selected";} ?>>ည</option>
                                        <option value="ကည"<?php if($finalresults->letter=="ကည"){echo "selected";} ?>>ကည</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဋ"<?php if($finalresults->letter=="ဋ"){echo "selected";} ?>>ဋ</option>
                                        <option value="ကဋ"<?php if($finalresults->letter=="ကဋ"){echo "selected";} ?>>ကဋ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဌ"<?php if($finalresults->letter=="ဌ"){echo "selected";} ?>>ဌ</option>
                                        <option value="ကဌ"<?php if($finalresults->letter=="ကဌ"){echo "selected";} ?>>ကဌ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဍ"<?php if($finalresults->letter=="ဍ"){echo "selected";} ?>>ဍ</option>
                                        <option value="ကဍ"<?php if($finalresults->letter=="ကဍ"){echo "selected";} ?>>ကဍ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဎ"<?php if($finalresults->letter=="ဎ"){echo "selected";} ?>>ဎ</option>
                                        <option value="ကဎ"<?php if($finalresults->letter=="ကဎ"){echo "selected";} ?>>ကဎ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဏ"<?php if($finalresults->letter=="ဏ"){echo "selected";} ?>>ဏ</option>
                                        <option value="ကဏ"<?php if($finalresults->letter=="ကဏ"){echo "selected";} ?>>ကဏ</option>
                                        <option value=""disabled>------</option>
                                        <option value="တ"<?php if($finalresults->letter=="တ"){echo "selected";} ?>>တ</option>
                                        <option value="ကတ"<?php if($finalresults->letter=="ကတ"){echo "selected";} ?>>ကတ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ထ"<?php if($finalresults->letter=="ထ"){echo "selected";} ?>>ထ</option>
                                        <option value="ကထ"<?php if($finalresults->letter=="ကထ"){echo "selected";} ?>>ကထ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဒ"<?php if($finalresults->letter=="ဒ"){echo "selected";} ?>>ဒ</option>
                                        <option value="ကဒ"<?php if($finalresults->letter=="ကဒ"){echo "selected";} ?>>ကဒ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဓ"<?php if($finalresults->letter=="ဓ"){echo "selected";} ?>>ဓ</option>
                                        <option value="ကဓ"<?php if($finalresults->letter=="ကဓ"){echo "selected";} ?>>ကဓ</option>
                                        <option value=""disabled>------</option>
                                        <option value="န"<?php if($finalresults->letter=="န"){echo "selected";} ?>>န</option>
                                        <option value="ကန"<?php if($finalresults->letter=="ကန"){echo "selected";} ?>>ကန</option>
                                        <option value=""disabled>------</option>
                                        <option value="ပ"<?php if($finalresults->letter=="ပ"){echo "selected";} ?>>ပ</option>
                                        <option value="ကပ"<?php if($finalresults->letter=="ကပ"){echo "selected";} ?>>ကပ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဖ"<?php if($finalresults->letter=="ဖ"){echo "selected";} ?>>ဖ</option>
                                        <option value="ကဖ"<?php if($finalresults->letter=="ကဖ"){echo "selected";} ?>>ကဖ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဗ"<?php if($finalresults->letter=="ဗ"){echo "selected";} ?>>ဗ</option>
                                        <option value="ကဗ"<?php if($finalresults->letter=="ကဗ"){echo "selected";} ?>>ကဗ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဘ"<?php if($finalresults->letter=="ဘ"){echo "selected";} ?>>ဘ</option>
                                        <option value="ကဘ"<?php if($finalresults->letter=="ကဘ"){echo "selected";} ?>>ကဘ</option>
                                        <option value=""disabled>------</option>
                                        <option value="မ"<?php if($finalresults->letter=="မ"){echo "selected";} ?>>မ</option>
                                        <option value="ကမ"<?php if($finalresults->letter=="ကမ"){echo "selected";} ?>>ကမ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ယ"<?php if($finalresults->letter=="ယ"){echo "selected";} ?>>ယ</option>
                                        <option value="ကယ"<?php if($finalresults->letter=="ကယ"){echo "selected";} ?>>ကယ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ရ"<?php if($finalresults->letter=="ရ"){echo "selected";} ?>>ရ</option>
                                        <option value="ကရ"<?php if($finalresults->letter=="ကရ"){echo "selected";} ?>>ကရ</option>
                                        <option value=""disabled>------</option>
                                        <option value="လ"<?php if($finalresults->letter=="လ"){echo "selected";} ?>>လ</option>
                                        <option value="ကလ"<?php if($finalresults->letter=="ကလ"){echo "selected";} ?>>ကလ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဝ"<?php if($finalresults->letter=="ဝ"){echo "selected";} ?>>ဝ</option>
                                        <option value="ကဝ"<?php if($finalresults->letter=="ကဝ"){echo "selected";} ?>>ကဝ</option>
                                        <option value=""disabled>------</option>
                                        <option value="သ"<?php if($finalresults->letter=="သ"){echo "selected";} ?>>သ</option>
                                        <option value="ကသ"<?php if($finalresults->letter=="ကသ"){echo "selected";} ?>>ကသ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဟ"<?php if($finalresults->letter=="ဟ"){echo "selected";} ?>>ဟ</option>
                                        <option value="ကဟ"<?php if($finalresults->letter=="ကဟ"){echo "selected";} ?>>ကဟ</option>
                                        <option value=""disabled>------</option>
                                        <option value="ဠ"<?php if($finalresults->letter=="ဠ"){echo "selected";} ?>>ဠ</option>
                                        <option value="ကဠ"<?php if($finalresults->letter=="ကဠ"){echo "selected";} ?>>ကဠ</option>
                                        <option value=""disabled>------</option>
                                        <option value="အ"<?php if($finalresults->letter=="အ"){echo "selected";} ?>>အ</option>
                                        <option value="ကအ"<?php if($finalresults->letter=="ကအ"){echo "selected";} ?>>ကအ</option>
                                    </select>
                                    <input type="number"lang="en"name="number"value="<?php echo $finalresults->number ?>" >
                                    
                                    <input type="hidden"name="id"value="<?php echo $finalresults->id ?>">
                                    <input type="hidden"name="number_id"value="<?php echo $finalresults->number_id?>" >
                                   <button class="btn btn-success">Edit</button>
                                   <button class="btn btn-danger"type="submit"formaction="delete.php">delete</button>   
                                </div>
                            </div>
                            </form>
                        </div>
                    <?php endforeach ?>  
                    <a href="admin.php" class="btn btn-primary btn-block">Home</a>
                    <a href="show.php?id=<?php echo $finalresults->number_id ?>"class="btn btn-primary btn-block">Back</a>
            </div>
    </div>
    
</body>
</html>