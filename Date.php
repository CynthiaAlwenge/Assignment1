<?php
     //php date and time

         $date= date ("d-m-y");
         $time =date ('H:I:s');
          


     //print out the result
         echo ' Current time is ' .$time;
         echo "<br>";
         echo 'Todays date is ' .$date;
         echo "<br>";
         echo date('l jS F (Y-m-d)', strtotime('-100 days'));
         echo "<br>";
         echo date(' jS F (Y-m-d)', strtotime('+100 days'));
?>
