<?php 

session_start();

//$a['3']={'22','25','78','5'};
//echo $a['2'];

if($_SESSION['user']!='0')
{
    
}
else {
   

$_SESSION['user']='0'; 
//$_SESSION['key']='0';
}











if(isset($_GET['keya']))

{
     $_SESSION['user']=$_SESSION['user']+1; 
      print_r($_SESSION['user']);
    $a=$_GET['keya'];
    
    
    
    if($a=='jimgordon' &&  $_SESSION['user']<=2 )
    {
        echo "BGCSSTSGTBKTKBMKXC     KEY= FAST";
        exit();
    }
    
    
    
else if($_SESSION['user']>2){
   echo"<br>";
    print_r($_SESSION['user']);
    echo "game over";echo"<br>";
  echo "<a href=decipher.php>click to go to main page</a>";   
    exit();
}    

else {
  echo "<a href=?0>click to continue</a>";
  exit();
}
    
    
}

if(isset($_GET['keyb']))

{$_SESSION['user']=$_SESSION['user']+1; 
      print_r($_SESSION['user']);
    $a=$_GET['keyb'];
    
    if($a=='smallville' &&  $_SESSION['user']<=2 )
    {
        echo " KEKTCTPGTOHODRBHYIPQUBQS     KEY= BEAUTY";
        exit();
    }
    
 else if($_SESSION['user']>2){
   echo"<br>";
    print_r($_SESSION['user']);
    echo "game over";echo"<br>";
  echo "<a href=decipher.php>click to go to main page</a>";   
    exit();
}    

else {
  echo "<a href=?3>click to continue</a>";
  exit();
}   
    
}






if(isset($_GET['keyc']))

{
    $_SESSION['user']=$_SESSION['user']+1; 
      print_r($_SESSION['user']);
    $a=$_GET['keyc'];
    
    if($a=='shield' &&  $_SESSION['user']<=2)
    {
        echo "MOIUVAHBGNPJATMJ    KEY= EVIL";
        exit();
    }
    
 else if($_SESSION['user']>2){
   echo"<br>";
    print_r($_SESSION['user']);
    echo "game over";echo"<br>";
  echo "<a href=decipher.php>click to go to main page</a>";   
    exit();
}    

else {
  echo "<a href=?4>click to continue</a>";
  exit();
}   
    
}



if(isset($_GET['keyd']))

{
    $_SESSION['user']=$_SESSION['user']+1; 
      print_r($_SESSION['user']);
    $a=$_GET['keyd'];
    
    if($a=='greenarrow' &&  $_SESSION['user']<=2)
    {
        echo " UMZFVRVAQMKQARFVTLVBRAEHQNML      KEY=MARVEL";
        exit();
    }
    
 else if($_SESSION['user']>2){
   echo"<br>";
    print_r($_SESSION['user']);
    echo "game over";echo"<br>";
  echo "<a href=decipher.php>click to go to main page</a>";   
    exit();
}    

else {
  echo "<a href=?5>click to continue</a>";
  exit();
}   
    
}







if(isset($_GET['keye']))

{
    $_SESSION['user']=$_SESSION['user']+1; 
      print_r($_SESSION['user']);
    $a=$_GET['keye'];
    
    if($a=='asgard' &&  $_SESSION['user']<=2 )
    {
        echo " YNFEQBKHVRGPBDPSFMTQ          KEY=CAT";
        exit();
    }
    
 else if($_SESSION['user']>2){
   echo"<br>";
    print_r($_SESSION['user']);
    echo "game over";echo"<br>";
  echo "<a href=decipher.php>click to go to main page</a>";   
    exit();
}    

else {
  echo "<a href=?6>click to continue</a>";
  exit();
}   
    
}

















if(isset($_POST['btn']))
{
$keye=trim($_POST['pass']);

if($keye=='dude')
{





  session_destroy();
  unset($_SESSION['user']);
  

 }
 else{
     echo "wrong password dudee :P ";
 }

}













if(isset($_GET['0']))
{
    
    
        echo "<form method=get>";
        echo "<input type=password name=keya>";
                echo "</form>";
                echo "<img src=0.jpg height=225px width=225px>";
        exit();
   
    
    
}

if(isset($_GET['3']))
{
    
    
        echo "<form method=get>";
        echo "<input type=password name=keyb>";
                echo "</form>";
                echo "<img src=3.jpeg height=225px width=225px>";
        exit();
   
    
    
}
if(isset($_GET['4']))
{
    
    
        echo "<form method=get>";
        echo "<input type=password name=keyc>";
                echo "</form>";
       echo "<img src=4.jpg height=225px width=225px>";
        exit();
   
    
    
}
if(isset($_GET['5']))
{
    
    
        echo "<form method=get>";
        echo "<input type=password name=keyd>";
                echo "</form>";
       echo "<img src=5.jpg height=225px width=225px>";
        exit();
        
   
    
    
}
if(isset($_GET['6']))
{
    
    
        echo "<form method=get>";
        echo "<input type=password name=keye>";
                echo "</form>";
                echo "<img src=6.png height=225px width=225px>";
        exit();
   
    
    
}



echo "<a href=?0><img src=0.jpg height=225px width=225px></a>"; //add photos with questions here


echo "<a href=?3><img src=3.jpeg height=225px width=225px></a>"; //add photos with questions here

echo "<a href=?4><img src=4.jpg height=225px width=225px></a>"; //add photos with questions here


echo "<a href=?5><img src=5.jpg height=225px width=225px></a>"; //add photos with questions here
echo "<a href=?6><img src=6.png height=225px width=225px></a>"; //add photos with questions here






?>
<html>
    <body>
        
        <form method ='post'>
        <input type="password" name="pass">
        <button type="submit" name="btn">CLICK ME BRUH </button>
        </form>
        </body>
