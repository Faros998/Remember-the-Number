<?php
session_start(); /*zapamatovanoi vsech promenych*/
$nc = mt_rand(10,99); /*generovani nahodneho cisla*/
if (isset($_POST['a']) && $_POST['a'] == "clear") {
   
    header("location:gaa.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>   <!-- zakazani zoomu na mobile -->
    <link rel="stylesheet" href="CSS/a.css">
    <link rel="stylesheet" href="CSS/Dark-mode.css">
    <script src="JS/Dark-mode.js"></script>
    <title>Hra</title>
</head>

<body onload="onload()">  <!-- aktivace darkmode na strance -->

 <div id="ncc">
    <?php echo  $nc; ?>        <!-- vypsani nahodneho cisla -->    
    </br></br>
    </div>

    <script type="text/javascript">    /*zadani hodnoty na numericke klavesnici C a X*/
        function input(val){
        document.getElementById('af').value += val;
             } 
                function clean(){
                 document.getElementById('af').value = '';
                }
     </script>

 </div>

  <form action="gaa.php" method="POST">   <!-- zobrazeni a odeslani zadanych hodnot -->
    <div id="ff">
        <input id='af' type="number" name='a'  placeholder='What was it ?' required></div>
       
            <div id="ke"> <!-- virtualni klavesnice -->
                <table>

                    <input type="hidden" name="c"  value=" <?php echo $nc;?>" required>

                         <tr>
                             <td> <input type='button' onclick='input("1")' value='1'> </td>
                             <td> <input type='button' onclick='input("2")' value='2'> </td>
                             <td> <input type='button' onclick='input("3")' value='3'> </td>
                             </tr>
                             <tr></tr>
                             <td> <input type='button' onclick='input("4")' value='4'> </td>
                             <td> <input type='button' onclick='input("5")' value='5'> </td>
                             <td> <input type='button' onclick='input("6")' value='6'> </td>
                             </tr>
                             <tr></tr>
                             <td> <input type='button' onclick='input("7")' value='7'> </td>
                             <td> <input type='button' onclick='input("8")' value='8'> </td>
                             <td> <input type='button' onclick='input("9")' value='9'> </td>
                             </tr>
                             <tr></tr>
                             <td> <input type='button' onclick='clean("C")' value='C'> </td>
                             <td> <input type='button' onclick='input("0")' value='0'> </td>
                             <td> <input type='submit' value='X'> </td>
                             </tr>
                 </table>
  </form>
 </div>

</body>
</html>


    <?php
        if(isset($_POST['c'])===true) {} // proměnná existuje
        if(isset($_POST['a'])===true) {}   
            else { // proměnná neexistuje
             $_POST['c'] ='';
                $_POST['a'] ='';
            }

                                           
        if(isset($_SESSION['views']))                   // pocet levelu
             $_SESSION['views'] = $_SESSION['views']+1;  
                else
             $_SESSION['views']=1;
                if(isset($_POST['a'])===true){
             $a = htmlspecialchars($_POST['a']);
             }
  
    $html1 = $_SESSION['views'];
    $html2 = "<div id='jj'>SESSION 1 Level ";
    $html3 = "</div>";                                                                                    
    $html4 = ' <div class="bu-se"><a class="but-ses" href="gab.php">Session 2</a></div>';    // skryti mmodulu
    $html5 = '<script type="text/javascript">document.getElementById("ff").style.display = "none";</script>    
              <script type="text/javascript">document.getElementById("ke").style.display = "none";</script>
              <script type="text/javascript">document.getElementById("ncc").style.display = "none";</script>
              <script type="text/javascript">document.getElementById("jj").style.display = "none";</script>';
    $html5a = '<script type="text/javascript">document.getElementById("io").style.display = "none";</script>';       
    $html6 ='<h1>&#x1F4A9;</h1><div id="gg">E R R O R</div>';  // info konec hry
    $html7 = '<div id="gg">Corect number: ';
    $html8 = $_POST['c'];
    $html9 = '</div>';
    $html10 ='<div id="gg">Your number ';
    $html11 = $_POST['a'];
    $html12 = '</div>';
    $html122 = 1;
    $html13 = '<div id="gg">Session 1 Level ';
    $html14 = $_SESSION['views']-1;
    $html15 = '</div>';                                 // navrat home
    $html16 = '<form action="home.php">
               <center><input id ="hh" type="submit" value="Home" /></center></form>';
    $html17 ='<center><div id="oo">Paráda!</br>
                                   ...tohle ale bylo pro děti</br>
                                   Teď trošku přitvrdíme</br>
                                   <h1>&#x1F64A;</h1></br>
             </div></center>';
    $html18 ='<div id="pp"><a href="gaa.php">Try again</a></div>';  // opakovani hry


       if (($_POST['a']) == ($_POST['c'] )){     // pocet levelu 10
            echo "$html2 $html1 $html3 " ;
         if ($_SESSION['views'] == 11){
            echo"$html17  $html5";          
            echo"$html4"; 

           
         session_unset();
           
    }}

    if (($_POST['a']) != ($_POST['c'] )){
        echo "$html5 $html6 $html7 $html8 $html10 $html11 $html13 $html14 $html18 $html16";
        echo "<form  action='lp.php' method='POST'>

                <input type='hidden' name='kl' value='$html14'>
                <input type='hidden' name='klm' value='$html122'>
                <input id='jn' type='text' name='username' placeholder='Name' size='6' maxlength='10' required></br>
                <input  id='jnn' type='submit'  value='Send'>
            </form>";

session_unset();


    }