<?php
  class DB
  {   
      protected $pdo;
      public function __construct()
      {
        try{
            $this->pdo = new PDO("mysql:dbname=HTI;host=localhost",'root','foethu');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
        }catch(PDOException $e){
            die($e->getLine());
        }catch(Exception $e){
            die($e->getMessage());
        }; 
      }

      public function index()
      { 
        
        $result=$this->pdo->prepare("
        SELECT * FROM `number_table`ORDER BY prize 
        "); 
        
        if($result->execute()){
            $finalresult=$result->fetchAll(PDO::FETCH_OBJ);
            return $finalresult;
         };
      }

      public function indexx()
      { 
        $result=$this->pdo->prepare("
        SELECT * FROM `number_table`ORDER BY letter
        "); 
        
        if($result->execute()){
            $finalresult=$result->fetchAll(PDO::FETCH_OBJ);
            return $finalresult;
         };
      }

      public function indexxx()
      { 
        $result=$this->pdo->prepare("
        SELECT * FROM `number_table`ORDER BY number
        "); 
        
        if($result->execute()){
            $finalresult=$result->fetchAll(PDO::FETCH_OBJ);
            return $finalresult;
         };
      }

      public function show($id)
      {
        
        $result=$this->pdo->prepare("
        SELECT * FROM `number_table` WHERE number_id=:id
        "); 
        $result->bindParam(":id",$id);
        if($result->execute()){
          $finalresult=$result->fetchall(PDO::FETCH_OBJ);
          return $finalresult;
         }
      }

      public function edit()
      {
        
        $result=$this->pdo->prepare("
     UPDATE `number_table`
     SET letter=:letter,number=:number
     WHERE id=:id

    ");

    $letter=$_POST['letter'];
    $number=$_POST['number'];
    $id=$_POST['id'];
    $number_id=$_POST['number_id'];
        $result->bindParam(":letter",$letter);
        $result->bindParam(":number",$number);
        $result->bindParam(":id",$id);
        if($result->execute()){
           header("location:edit_form.php?id=$number_id");
        }
      }


      public function edit_form($id){
      
        $result=$this->pdo->prepare("
        SELECT * FROM `number_table` WHERE number_id=:id
        "); 
        $result->bindParam(":id",$id);
        if($result->execute()){
        $finalresult=$result->fetchall(PDO::FETCH_OBJ);
        return $finalresult;
        }
      }


     public function check()
     {
      
      $result=$this->pdo->prepare("
     SELECT * FROM `number_table`WHERE (letter=:letter)AND ((number=:number) OR (number=:firstfive) OR (number=:firstfour) OR (number=:firstthree) OR (number=:firsttwo));

    ");
        $letter=$_POST['letter'];
        $number=$_POST['number'];
        $firstfive=substr($number,0,5);
        $firstfour=substr($number,0,4);
        $firstthree=substr($number,0,3);
        $firsttwo=substr($number,0,2);
        $result->bindParam(":letter",$letter);
        $result->bindParam(":number",$number);
        $result->bindParam(":firstfive",$firstfive);
        $result->bindParam(":firstfour",$firstfour);
        $result->bindParam(":firstthree",$firstthree);
        $result->bindParam(":firsttwo",$firsttwo);

        
        if($result->execute()){
            $finalresult=$result->fetch(PDO::FETCH_OBJ);
            return $finalresult;
        }
     }

     public function delete($id)
     {
      
      $result=$this->pdo->prepare("
      DELETE  FROM `number_table` WHERE id=:id
      "); 
      $number_id=$_POST['number_id'];
      $result->bindParam(":id",$id);
      if($result->execute()){
          header("location:edit_form.php?id=$number_id");
      }
     }

     public function add()
     {
      
      $result=$this->pdo->prepare("
      INSERT INTO `number_table`(`letter`,`number`,`number_id`,`prize`)VALUES
      (:letter,:number,:number_id,:prize)
 
     ");
     $letter=$_POST['letter'];
     $number=$_POST['number'];
     $number_id=$_POST['number_id'];
     $prize=$_POST['prize'];
    
    
         $result->bindParam(":letter",$letter);
         $result->bindParam(":number",$number);
         $result->bindParam(":number_id",$number_id);
         $result->bindParam(":prize",$prize);
         if($result->execute()){
             header("location:show.php?id=$number_id");
         };
     }
      
  

  public function add_form($id)
  {
    
    $result=$this->pdo->prepare("
    SELECT * FROM `number_table` WHERE number_id=:id
    "); 
    $number_id =$id;
    $result->bindParam(":id",$number_id);
    if($result->execute()){
        $finalresult=$result->fetchall(PDO::FETCH_OBJ);
        return $number_id;
        
    }
  }
}
?>