<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Please Login To use the system </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4> Login using <strong>your account  :</strong></h4>
                <br />
                <?php if($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissable fade in"><a href="#" id="ekis" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $this->session->flashdata('error') ?></div>
                <?php endif; ?>

                <?php if($this->session->flashdata('login_failed')): ?>
                    <script> swal("Notice:", "Wrong Credentials Provided", "error"); </script>
                <?php endif; ?>
                <form action="Login/login_check_" method="post" enctype="multipart/form-data">
                    <label for="uName">Enter Email ID : </label>
                    <input type="text" name="uName" id="userId" class="form-control" required/>
                    <span class="errorUname"></span><br />
                    <label for="uPass">Enter Password :  </label>
                    <input type="password" name="uPass" id="password" class="form-control" required/>
                    <hr />
                    <input type="submit" class="btn btn-info" id="submit" value = "Login"/>
                </form>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info">
                    This is a free bootstrap admin template with basic pages you need to craft your project. 
                    Use this template for free to use for personal and commercial use.
                    <br />
                    <strong> Some of its features are given below :</strong>
                    <ul>
                        <li>
                            Responsive Design Framework Used
                        </li>
                        <li>
                            Easy to use and customize
                        </li>
                        <li>
                            Font awesome icons included
                        </li>
                        <li>
                            Clean and light code used.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var userId = "";

$('#userId').keyup(function()
{
    userId = document.getElementById('userId').value;
    if(userId.length < 5 && userId.length >= 1){
        $(".errorUname").html("<i style='color:red'>Minimum of 5 characters</i>");
        document.getElementById("submit").disabled = true;
    }
    else{
        $(".errorUname").html("");
        document.getElementById("submit").disabled = false;

        $.ajax({
            type: "POST",
            url:"<?php echo base_url(); ?>Login/check_user_login",
            data:{userId},
            cache:false,
            success:function(r){
                if(r == "1"){
                    $(".errorUname").html("<i style='color:red'>Username provided not registered</i>");
                    document.getElementById("submit").disabled = true;
                }
            },
            error:function(r){
                alert("System error. Contact Administrator");
            }
        });
    }
});


</script>