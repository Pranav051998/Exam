<?php
 $fetch=new SplFixedArray(3);
$Student_id=array();
 $Student_id["first"]= array
 (
 	"ID"=>1,
 	"Name"=>"Rahul",
 	"Class"=>12,
 	"marks"=>array(
              "hindi"=>90,
              "english"=>90,
              "maths"=>90
              //"totalmarks"=>$marks["hindi"]+$marks["english")+$marks["maths"]
 	)
 );
$Student_id["Second"]= array
(
	"ID"=>2,
 	"Name"=>"Ramesh",
 	"Class"=>11,
 	"marks"=>array(
              "hindi"=>44,
              "english"=>55,
              "maths"=>79
              //"totalmarks"=>$marks["hindi"]+$marks["english")+$marks["maths"];
 	)
 );
 $Student_id["Third"]= array
 (
 	"ID"=>3,
 	"Name"=>"Joy",
 	"Class"=>8,
 	"marks"=>array(
              "hindi"=>50,
              "english"=>75,
              "maths"=>85
              //"totalmarks"=>$marks["hindi"]+$marks["english")+$marks["maths"];
 	)
 );
 
 /*for($int i=0;$i<count($Student_id);$i++)
 {
 	for($int j=0;$j<count($Student_id);$j++)
 	{
 		if($Student_id[0])
 	}
 }*/
 //$fetch=new SplFixedArray(3);
 $totalmarks1=$Student_id['first']['marks']['hindi']+$Student_id['first']['marks']['english']+$Student_id['first']['marks']['maths'];
$totalmarks2=$Student_id['Second']['marks']['hindi']+$Student_id['Second']['marks']['english']+$Student_id['Second']['marks']['maths'];
 $totalmarks3=$Student_id['Third']['marks']['hindi']+$Student_id['Third']['marks']['english']+$Student_id['Third']['marks']['maths'];
 $class1=$Student_id['first']['Class'];
 $class2=$Student_id['Second']['Class'];
 $class3=$Student_id['Third']['Class'];
 if((($totalmarks1>$totalmarks2)&&($class1>$class2))&&(($totalmarks1>$totalmarks3)&&($class1>$class3)))
       {     $fetch[0]=$Student_id['first']['ID'];
                if(($totalmarks2>$totalmarks3)&&($class2>$class3))
                {
                     $fetch[1]=$Student_id['Second']['ID'];
                     $fetch[2]=$Student_id['Third']['ID'];
                }
                else
                {
                    $fetch[1]=$Student_id['Third']['ID'];
                     $fetch[2]=$Student_id['Second']['ID'];  
                }
       }
             /*echo $Student_id['first']['ID']."<br>";
              echo $Student_id['first']['Name']."<br>";
              echo $Student_id['first']['Class']."<br>";
              echo $totalmarks1."<br>";
              echo $Student_id['Second']['ID']."<br>";
              echo $Student_id['Second']['Name']."<br>";
               echo $totalmarks2."<br>";
              echo $Student_id['Third']['ID']."<br>";
              echo $Student_id['Third']['Name']."<br>";
              echo $Student_id['Third']['Class']."<br>";
              echo $totalmarks1."<br>";*/



else if((($totalmarks2>$totalmarks1)&&($class2>$class1))&&(($totalmarks2>$totalmarks3)&&($class2>$class3)))
      {    $fetch[0]=$Student_id['Second']['ID']; 
       /*echo $Student_id['Second']['ID']."<br>";
              echo $Student_id['Second']['Name']."<br>";
               echo $totalmarks2."<br>";}*/
               if(($totalmarks1>$totalmarks3)&&($class1>$class3))
               {     $fetch[1]=$Student_id['first']['ID'];
                     $fetch[2]=$Student_id['Third']['ID'];

               }
               else
               {
                     $fetch[1]=$Student_id['Third']['ID'];
                     $fetch[2]=$Student_id['first']['ID'];
               }
       }
else 
      {
         $fetch[0]=$Student_id['Third']['ID'];
         if(($totalmarks1>$totalmarks2)&&($class1>$class2))
               {     $fetch[1]=$Student_id['first']['ID'];
                     $fetch[2]=$Student_id['Second']['ID'];

               }
               else{
                     
                  $fetch[1]=$Student_id['Second']['ID'];
                  $fetch[2]=$Student_id['first']['ID'];

               }
       }
       for($i=0;$i<=2;$i++)
       {
              for($j=0;$j<=2;$j++)
              {
                  echo $Student_id['$i']['ID']."<br>";
                echo $Student_id['$i']['Name']."<br>";
                echo $Student_id['$i']['Class']."<br>";   
              }
       }



?>
