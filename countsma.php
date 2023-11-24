<?php
include "connect.php";
$Q = mysqli_query($connect, "select count(name) as sma FROM `air_station`")or die(mysqli_error($connect));
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}
