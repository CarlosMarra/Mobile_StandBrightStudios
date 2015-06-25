<?php

if (isset($_POST["submit"])){
 
    $stylers = $_POST['animation_style'];           
    $reals = $_POST['realism'];
    $script = $_POST['choice'];          


    $c_first= trim(stripslashes(htmlspecialchars($_POST['company_first'])));          
    $c_last = trim(stripslashes(htmlspecialchars($_POST['company_last']))); 
    $c_name= trim(stripslashes(htmlspecialchars($_POST['company_name'])));          
    $c_email = trim(stripslashes(htmlspecialchars($_POST['company_email'])));         
    $c_phone = trim(stripslashes(htmlspecialchars($_POST['company_number'])));         
    $c_budget = trim(stripslashes(htmlspecialchars($_POST['company_budget'])));
    $c_details= trim(stripslashes(htmlspecialchars($_POST['company_details'])));     
    $c_know= trim(stripslashes(htmlspecialchars($_POST['company_know'])));     

    $emaillist = 'sidney@standbrightstudios.com, omer@standbrightstudios.com, aphymas@gmail.com, findme@carlosamarra.com';
    
                $to      = $c_email;
                $subject = $c_name." inquired about a video.";
                $message = "<html><body>";
                $message .= "<table>";
                $message .= "<tr><th colspan=2 style='background-color: #405159; color: #CFF0FF; padding: 20px; font-family:Verdana,Geneva,sans-serif; font-weight: bold; font-size: 30px;'>LikeWise Studios Recipt</th></tr>";
                $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>First Name</td><td>$c_first</td></tr>";
                $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Last Name</td><td>$c_last</td></tr>";
                $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Animation-style</td><td>$stylers</td></tr>";
                $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Aesthetic</td><td>$reals</td></tr>";
                $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Writing Package</td><td>$script</td></tr>";
                $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Phone Number</td><td>$c_phone</td></tr>";
                $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Budget</td><td>$c_budget</td></tr>";
                $message .= "<tr style='background-color: #CFF0FF; color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>Additional Details</td><td style='max-width:200px!important;'>$c_details</td></tr>";
                $message .= "<tr style='color: #405159; font-family:Verdana,Geneva,sans-serif; font-weight: bold;'><td style='padding: 10px;'>How you found us:</td><td style='max-width:200px!important;'>$c_know</td></tr>";
                $message .= "<tr><th colspan=2 style='background-color: #CFF0FF; color: #405159; padding: 20px; font-family:Verdana,Geneva,sans-serif; font-weight: bold; font-size: 20px;'>Thank You For Contacting Us!</th></tr>";
                $message .= "</table>";
                $message .= "</body></html>";

                $headers = "From: hello@standbrightstudios.com\r\n";
                $headers .= "Bcc: $emaillist\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


                
                mail($to, $subject, $message, $headers);
                
                echo '<style type="text/css">
                html {
                    display: none;
                }
                </style>';
                                
                echo '<script language="javascript">';
                echo 'window.location.href="index.php";';
                echo '</script>';
    
}

if (isset($_POST["submit2"])){
    
        include('connection.php');
    
        $sub_email = trim(stripslashes(htmlspecialchars($_POST['mail'])));         
       
        $query = "INSERT INTO sub_list (email) VALUES ('$sub_email')"; 
        $result = mysql_query($query);

        echo '<style type="text/css">
        html {
            display: none;
        }
        </style>';
                                
        echo '<script language="javascript">';
        echo 'window.location.href="index.php";';
        echo '</script>';
}
?>
