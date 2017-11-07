
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo @$title;?> </title>


<!--css links-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/developer.css" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/multiple-select.css" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
 
  
</head>
 <body>
<main>
<!--header section start-->
 <header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img style="width:300px"  class="mylogo" src="<?= base_url(); ?>assets/images/allaboutgrossery-logo.png"></a>
    </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav grocerymenu menu-black navbar-right">
        <?php if (!empty($menu_list)) {?>
            <?php foreach ($menu_list as $mm => $val) {?>
             
              <li><a href="<?= $val->menu_url ?>"><?= $val->name?></a></li>
            <?php } ?>
            
        <?php } else {?>
          <li><a href="javascript:void(0)">Leading Through Technology</a></li>
        <?php }?>
       
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>  
     
  </header>  
