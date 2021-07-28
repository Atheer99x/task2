<?php
include('index.html');


$link = mysqli_connect ('localhost' , 'root','','controlpanel') ;

if(isset($_POST['save']) ){
    $engine1=$_POST['engine1'];
    $engine2=$_POST['engine2'];
    $engine3=$_POST['engine3'];
    $engine4=$_POST['engine4'];
    $engine5=$_POST['engine5'];
    $engine6=$_POST['engine6'];
    $flipswtch=$_POST['statuss'];
    
    $query ="INSERT INTO engines (engine1,engine2, engine3,engine4,engine5,engine6,The_Status) 
    VALUES('$engine1','$engine2','$engine3','$engine4','$engine5','$engine6','$flipswtch')";
    
    $run =mysqli_query($link , $query) or die (mysqli_error($link));

    if($run){
        echo "Form Submitted" ;

        
       }

        else {
        echo " Failed to submit";
        }
    } 
  
if(isset($_POST['forward'])){
    
  $forward=$_POST['forward'];
  
  
  $query ="INSERT INTO directions (Direction) 
  VALUES('$forward')";
  
  $run =mysqli_query($link , $query) or die (mysqli_error($link));

  if($run){
      echo "Form Submitted";
      
     }

      else {
      echo " Failed to submit";
      } }

if(isset($_POST['left'])){
    
        $left=$_POST['left'];
        
        
        $query ="INSERT INTO directions (Direction) 
        VALUES('$left')";
        
        $run =mysqli_query($link , $query) or die (mysqli_error($link));
      
        if($run){
             
           }
      
            else {
            echo " Failed to submit";
            } }
      



if(isset($_POST['right'])){
    
              $right=$_POST['right'];
              
              
              $query ="INSERT INTO directions (Direction) 
              VALUES('$right')";
              
              $run =mysqli_query($link , $query) or die (mysqli_error($link));
            
              if($run){
                  echo "Form Submitted";
                 }
            
                  else {
                  echo " Failed to submit";
                  } }
            

if(isset($_POST['backward'])){
    
                    $backward=$_POST['backward'];
                    
                    
                    $query ="INSERT INTO directions (Direction) 
                    VALUES('$backward')";
                    
                    $run =mysqli_query($link , $query) or die (mysqli_error($link));
                  
                    if($run){
                        echo "Form Submitted";
                        
                       }
                  
                        else {
                        echo " Failed to submit";
                        } }


if(isset($_POST['stop'])){
    
            $stop=$_POST['stop'];
                          
                          
                          $query ="INSERT INTO directions (Direction) 
                          VALUES('$stop')";
                          
                          $run =mysqli_query($link , $query) or die (mysqli_error($link));
                        
                          if($run){
                              echo "Form Submitted";
                              
                             }
                        
                              else {
                              echo " Failed to submit";
                              } }
                        
                  
      
    ?>