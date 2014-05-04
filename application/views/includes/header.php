<html> <head>
    <meta htt-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
   <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"
  title="no title" charset="utf-8" >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<style type="text/css">
.style1 {
	width: 800px;
	height: 239px;
	border-top: #666666 1px solid;
	border-bottom: #666666 1px solid;
	text-align: center;
}
.style2 {
	font-size: xx-large;
	font-family: "Bauhaus 93";
}
.style3 {
	font-size: xx-large;
	color: #FF0000;
	font-family: "Arial Black";
}
.style4 {
	font-size: medium;
}

  
            #gallery, #upload{
                border: 1px solid #ccc; margin: 10px auto; width: 570px;
        padding: 10px;
            }
            #blank_gallery{
                font-family: Arial; font-size: 18px; font-weight: bold;
                text-align: center;
            }
            .thumb {
                float: left; width: 150px; height: 100px; padding: 10px;margin:
                    10px; background-color:#ddd;
            }
            .thumb:hover{
                outline: 1px solid #999;
            }
            imag {
                border: 0;
            }
            #gallery:after {
                content: "."; visibility: hidden; display: block; clear: both;
                height: 0; font-size: 0;
            }
            </style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header1"><strong><span class="style2">Family</span></strong>
		<span class="style3">Living</span></div>
    <div class="header2">
      <div id="container">
        <div id="mainmenu">
          <ul>
            <li><a class="a" <?php echo anchor('site','Home');?></li>
            <li><a class="a" <?php echo anchor('site/aboutus','Aboutus');?></li>
            <li><a class="a" <?php echo anchor('site/gallery','Rentals');?></li>
            <li><a class="a" <?php echo anchor('site/gallery','To Buy');?></li>
            <li><a class="a" <?php echo anchor('site/contactus','Contact us');?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

        

