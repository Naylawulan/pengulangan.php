<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title> Belajar PHP</title>
    </head>
    <body>
    	
    <h1>Loop PHP</h1>
    
    <?php
    //-----pengulangan-----
   //for (variabel awal(mulai); batas (syarat); perubahan )

   $hewan = [ 'anjing', 'babi', 'cicak', 'domba'];
   
   //----------1)for loop----------
   
   //for($i=0; $i<count($hewan); $i++)
  // {
  //	echo "------------------------";
  //   echo $hewan[$i];
  //    echo "------------------------<br>";
   //
  //   }
  
  
    //------------ 2)for foreach ------------
   // foreach ($hewan as $h) {
   //echo "------------";
   //echo $h;
   //echo "------------<br>";
   //
   //}
   
   
    //$data = ['nama' => 'hilman', 'umur' => 24, 'sifat' =>'malas'];
    
    //foreach ($data as $key => $value){
    	//echo $value "<br>";
    //}
    
    
    //------------ 3) while dan do while --------------
    //while(syarat)
    
    $i =5;
    
    
    //while ($i < count ($hewan) ){
    //echo $hewan [$i]. "<br>";
    //$i++;
    //}
    
   do{
    	echo'- - - - - - -';
        echo $hewan [$i]. "<br>";
        $i++;
    } while( $i <count($hewan) );
   
   
      ?>
   	
   </body>
   </html>