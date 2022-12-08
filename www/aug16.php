<!DOCTYPE html>

<html>
<body>
  <?php
//*diementional arrays
$district = array(
               array(
                  array(

                        array("BMW" ,25, 30),
                        array("Honda" ,15, 25),
                        array("TATA" ,30, 15),
                        array("mahindra" ,17, 15)
                      ),

                  array(
                       array("BMW" ,10, 25),
                       array("Honda", 27, 13),
                       array("TATA", 19, 18),
                       array("mahindra", 17, 15)
           ),

           ),




            array(
              array(
                    array("BMW" ,25, 30),
                    array("Honda" ,15, 25),
                    array("TATA" ,30, 15),
                    array("mahindra" ,17, 15)
                  ),
                    array(
                     array("BMW" ,10, 25),
                     array("Honda", 27, 13),
                     array("TATA", 19, 18),
                     array("mahindra", 17, 15)

                   ),
                   ),

                    );
                    echo "<hr/>";

                    echo "<hr/>";
                    echo "<br>";
                  //multidiemention loop through
                    $dn[0] = "DK";
                    $dn[1] = "udupi";

                    $tndk[0] = "kadaba";
                    $tndk[1] = "puttur";//adding town name
                    $tnudp[0] = "karkala";
                    $tnudp[1] = "kundhapura";

                    $cn[0] = "Details of BMW";
                    $cn[1] = "Details of Honda";
                    $cn[2] = "Details of TATA";//*adding heading for details for particular string in multidiemintionl 3diemintiol loop ar
                    $cn[3] = "Details of mahindra";

                    for($dist=0;$dist<2; $dist++)

                    {
                               echo "<br>"."<br>".$dn[$dist]."<br>"."<hr>";
                               for($town=0;$town<2;$town++)
                               {

                              if($dist==0)
                              {

                         echo "<br>"."<br>".$tndk[$town]."<br>"."*********" . "<hr>"; //*adding town name and under line with*/
                             }

                         if($dist==1)
                         {
                           echo "<br>"."<br>".$tnudp[$town]."<br>"."*********" . "<hr>"; //*adding town name and under line with*/
                         }

                       for ($carname=0; $carname<4; $carname++)
                       {

                        echo "<br>". "<br>". $cn[$carname]. "<br>". "*****************". "<br>";
                        for ($details=0; $details<3;$details++)
                        {
                          echo $district[$dist][$town][$carname][$details]; echo "    ";
                        }
                       }

                       }
                      }
                      ?>
