<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <img src="<?php echo base_url(); ?>assets/img/tup-logo.png" height="75" width="75" style="float:left;"/>
            <h1 style="float:right;color:white;">&nbsp Document Tracking System</h1>
        </div>
    </div>
</div>
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <?php if(!$this->session->userdata('user_id')){?>
                            <li><a  href="Login">Login</a></li>
                        <?php }else{    
                        ?>
                            <li><a href="Employee">Dashboard</a></li>
                            <li><a href="ui.html">UI Elements</a></li>
                            <li><a href="table.html">Data Tables</a></li>
                            <li><a href="forms.html">Forms</a></li>
                            <li><a href="login.html">Login Page</a></li>
                            <li><a href="Employee/logout">Logout</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>