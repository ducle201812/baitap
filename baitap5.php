<?php
require ('data.php');
?>


<!DOCTYPE html>

<html>
<head>
        <title>
                
        </title>
</head>
<body>
    <form>
        GOOLES <br>

        <input type="txt" name="id">
        <input type="submit" value="Tiềm kiếm">
    </form>

            <?php
            // cách khác nhưng bị lỗi
            // if (isset($_GET['id'])) {
                //echo 'ID: ' . $_GET['id'] . '<br>';
            // ($_GET['id']); {
            if (empty($_GET['id']))echo "Bạn cần nhập vào ID người dùng :";
            else{
                    $so =$_GET['id'];
                    $temp =0;
                    $x=0;
                    for ($i=0; $i < 5; $i++) 
                        if ($users[$i]['id']==$so)

                   {
                    $temp ++;
                    $x=$i;

                   }
               
          
                   if ($temp==1) 


                    {
                            echo "Tên : ";
                            echo $users[$x]['name'];

                    }
                    else
                    {
                            echo "Không Co Users này:  ";

        
                    }
            
            }
                
        ?>






        <table  width='400' border='3'>

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
                  <?php
                 for ($i=0; $i <5; $i++) { 
                     # code...
                 
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $h++;//bài 5 xuất ra tên và id and  gmail

                                              ?>
                                        </td>
                                        <td>
                                                <?php
                                                echo $users[$i]['name'];

                                                ?>
                                        </td>
                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['yahoo'];
                                                
                                                ?>
                                        </td>
                                </tr>
        <?php
        }
        ?>


        </table>
        <?php
        $temp =0;
        $a=0;
        for ($i=0; $i < 5; $i++) {
                if ($users[$i]['id']==7)

               {
                $temp ++;//xuất ra id và tên cầu thủ
                $a=$i;

               }
           }
      
               if ($temp==1) 


                {
                        echo " có tồn tại id: ";
                        echo $users[$a]['name'];

                }
                else
                {
                        echo "Khong ton tai id : ";
                }
                ?>


         
        <?php
      
            $none =0;
            for ($i=0; $i <5 ; $i++) {
              for ($j=$i+1; $j <5 ; $j++) {

                       if ($users[$i]['id'] > $users[$j]['id']) {
                        $none=$users[$i];
                        $users[$i]=$users[$j];
                        $users[$j]=$none;
                               # code...
                        }
                  }

            } 
        ?>

                <table  width='400' border='3'>

                <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th> Gmail</th>
                        <th>Yahoo</th>


                </tr>
                  <?php
                 for ($i=0; $i <5 ; $i++) { 
                                       
                                ?>
                                <tr>
                                        <td>
                                              <?php
                                              echo $k++;

                                              ?>
                                        </td>
                                        <td>
                                                <?php
   
                                             echo $users[$i]['name'];//bài 5 thứ tự tăng dần

                                                ?>
                                        </td>
                                           <td>
                                                <?php
                                                echo $users[$i]['id'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['gmail'];
                                                
                                                ?>
                                        </td>
                                         <td>
                                                <?php
                                                echo $users[$i]['email']['yahoo'];
                                                
                                                ?>
                                        </td>
                                </tr>
                        <?php
                        }
                        ?>


        </table>
                        
</body>
</html>