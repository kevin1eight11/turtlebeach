<html>
    <head>
        <title>My Glorious Tutorial</title>
    </head>
    <body>
        <?php
        function output_stats($array){
       $num_of_num = 0;
       $num_of_odd = 0;
       $num_of_even = 0;
       $return_string = "";
       
       for ($i = 0; $i < count($array); $i++){
           $num_of_num++;
           
           if(($array[$i] % 2) == 0){
               $num_of_even++;
           }
           else{
               $num_of_odd++;
           }
           }
           
           $return_string = "Number of Numbers: ". strval($num_of_num);
           $return_string = $return_string . " Number of Even: ". strval($num_of_even);
           $return_string = $return_string . " Number of Odd: ". strval($num_of_odd);
           return ($return_string);
       }
        
       
        ?>
        <h1><?php echo(output_stats(array(0,1,2,3,4,5,6,7,8,9))); ?></h1>
    </body>
</html>