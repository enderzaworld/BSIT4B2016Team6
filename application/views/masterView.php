<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>TUP Document Tracking System</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/sweetalert.css" />
    
    <script src="<?php echo base_url();?>assets/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body>
    <?php $this->load->view('partials/navBar.php'); ?>
    <?php 
        if(isSet($userLogin)){
            $this->load->view($userLogin);       
        }
        else if(isSet($empHome)){
            if($this->session->userdata('user_id')){
                $this->load->view($empHome);
            }else{
                redirect('Login');
            }
        }
    ?>
    <?php $this->load->view('partials/footer.php'); ?>
</body>
</html>