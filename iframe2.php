<?php

include('connections/connection.php');

$things = $_GET['person'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>fancyBox - iframe demo</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <style>

	html {
	    font-family:Verdana,Geneva,sans-serif;
	    font-weight:700;
	    background-color: #39494e;

	}
	
	figure img {
	    width:230px;
	    height:230px;
	    border-radius:50%
	}
	
	.text_description {
	    float:left;
	    width:480px;
	    background-color:#CFF0FF;
	    height: 365px;
	    margin-top: 10px;
	}
	
	.text_description h1 {
	    width:400px;
	    text-align:left;
	    color:#39494e;
	    font-size: 30px;
	    margin-top: 5px;
	    padding-left: 10px;
	}
	
	.text_description p {
	    width:400px;
	    text-align:left;
	    font-size:16px;
	    color:#39494e;
	    padding-left:40px;
	    padding-right:40px;
	}
	
	.insiders {
	    width:750px;
	    margin:0 auto
	}
	
	.clear {
	    clear:both
	}
	
	figure {
	    float: left;
	    margin: 0;
	    margin-right: 40px;
	    margin-top: 30px;
	}
	
	figcaption {
	    text-align:center;
	    color: #CFF0FF;
	    font-size: 21px;
	}
	
	.fancybox-inner {
	    height:450px!important
	}
	
	.personT {
	    margin-left:-284px;
	    width:260px;
	    float:left;
	    margin-top: 30px;
	}
	
	.personT img {
	    width:280px;
	    height:260px
	}
	
	@media (max-width: 499px){
	    
	    html {
		overflow-x: hidden;
	    }
	    
	    figure img {
		width:230px;
		height:230px;
		background-color:#f1f780;
		border:solid 15px #39494e;
		border-radius:50%
	    }
	    
	    .text_description {
		width:100%;
		background-color:#39494e;
		padding-left:0px;
		padding-right:0px;
		min-height:430px;
		display: none;
		
	    }
	    
	    .text_description h1 {
		width:100%;
		text-align:center;
		color:#fffd88
	    }
	    
	    .text_description p {
		width:100%;
		text-align:justify;
		font-size:14px;
		color:#CFF0FF
		padding-left:5%;
		padding-right:5%;
	    }
	    
	    .insiders {
		width:100%;
		margin:0 auto
	    }
	    
	    .clear {
		clear:both
	    }
	    
	    figure {
		width:260px;
		float:left;
		margin:0;
		margin-right:10px
	    }
	    
	    figcaption {
		text-align:center
	    }
	    
	    .fancybox-inner {
		height:250px!important
	    }
	    
	    .personT {
		margin-left:-284px;
		width:260px;
		float: none;
	    }
	}
    </style>
</head>

<body>
    <div class="insiders">
        <div>
            <figure>
                <img alt="person" class="peep1 peeps_1" src=
                "images/icons/<?php echo $things;?>.png">

                <figcaption>
                <?php 
                   $query = "SELECT employee_position FROM employee WHERE picture_extension = '$things'"; 
                    $result = mysql_query($query);

                    while($row = mysql_fetch_array($result)){ $number = $row['employee_position']; }
                                                
                    echo $number;
                ?>
                </figcaption>
            </figure>	    
        </div>

        <div class="text_description">
	    <h1>                <?php 
                   $query = "SELECT employee_name FROM employee WHERE picture_extension = '$things'"; 
                    $result = mysql_query($query);

                    while($row = mysql_fetch_array($result)){ $number = $row['employee_name']; }
                                                
                    echo $number;
                ?></h1>
	    
            <p>                <?php 
                   $query = "SELECT information FROM employee WHERE picture_extension = '$things'"; 
                    $result = mysql_query($query);

                    while($row = mysql_fetch_array($result)){ $number = $row['information']; }
                                                
                    echo $number;
                ?></p>
        </div>

        <div class="clear"></div>
    </div>
</body>
</html>