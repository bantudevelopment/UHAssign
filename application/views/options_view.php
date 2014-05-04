<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled</title>
<meta htt-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
   <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"
  title="no title" charset="utf-8" >
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<style type="text/css">
    label{
        display: block;
    }
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
	font-family: "Arial Black";}

#container{
        width: 600px;
        margin: auto; 
          }
          table {
              width: 600px;
              margin:auto;
          }
          td {
              border-right: 1px solid #aaaaa;
              padding: 1em;
          }
          td:last-child {
              border-right: none;
          }
          th {
              text-align: left;
              padding-left: 1em;
              background: #cac9c9;
              boder-bottom: 1px solid white;
              border-right: 1px solid #cac9c9;
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
            <li><a class="current a" >&nbsp;Home&nbsp;</a></li>
            <li><a href="subpage.html" class="a">About Us</a></li>
            <li><a href="http://www.free-css.com/" class="a">Rentals</a></li>
            <li><a href="http://www.free-css.com/" class="a">Buying</a></li>
            <li><a href="http://www.free-css.com/" class="a">Contact Us</a></li>
          </ul>
        </div> 
      </div>
<div id="container"> 
    <h2>Family Living Customers List</h2>
    <?php echo $this->table->generate($records);?>
        <?php echo $this->pagination->create_links();?>       	
    </div>
        
    </div></div></div></body></html>       

<meta htt-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>untitled</title>
   <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"
  title="no title" charset="utf-8" >

