<!-- Login / Register Modal-->
<div class="modal" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close position-absolute right-0 top-0" data-dismiss="modal" aria-label="Close">
                <i data-feather="x"></i>
            </button>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <form>
                                <div class="md-form mb-5">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="login-username" name="login-username" class="form-control">
                                    <label for="login-username">Your
                                        username</label>
                                </div>

                                <div class="md-form mb-4">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" id="login-pass" name="login-pass" class="form-control">
                                    <label for="login-pass">Your
                                        password</label>
                                </div>

                                <div class="alert alert-danger" id="log_error"></div>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-default" id="log_user">LOGIN</a>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <form>
                                <div class="md-form mb-5">
                                    <i class="fas fa-signature prefix grey-text"></i>
                                    <input type="text" id="signup-firstname" name="signup-firstname"
                                        class="form-control">
                                    <label for="signup-firstname">Firstname</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-signature prefix grey-text"></i>
                                    <input type="text" id="signup-lastname" name="signup-lastname" class="form-control">
                                    <label for="signup-lastname">Lastname</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="signup-username" name="signup-username" class="form-control">
                                    <label for="signup-username">Username</label>
                                </div>
                                <div class="md-form mb-5">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="email" id="signup-email" name="signup-email"
                                        class="form-control validate">
                                    <label data-error="wrong" for="signup-email">Email</label>
                                </div>

                                <div class="md-form mb-4">
                                    <i class="fas fa-lock prefix grey-text"></i>
                                    <input type="password" id="signup-pass" name="signup-pass" class="form-control">
                                    <label for="signup-pass">Password</label>
                                </div>
                                <div class="alert alert-danger" id="reg_error"></div>
                                <div class="alert alert-success" id="reg_success">Success! Please Sign In!</div>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-default" id="reg_user">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login / Register Modal-->

<script>
$('#reg_user').click(function() {
    var reg_firstName = $('#signup-firstname').val();
    var reg_lastName = $('#signup-lastname').val();
    var reg_userName = $('#signup-username').val();
    var reg_email = $('#signup-email').val();
    var reg_pass = $('#signup-pass').val();

    $.ajax({
        url: 'modules/authorization/signup.php',
        type: 'POST',
        cache: false,
        data: {
            'signup-firstname': reg_firstName,
            'signup-lastname': reg_lastName,
            'signup-username': reg_userName,
            'signup-email': reg_email,
            'signup-pass': reg_pass
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'SUCCESS') {
                $('#reg_user').text('Success');
                $('#reg_error').hide();
                $('#reg_success').show();
                $('#signup-firstname').val('');
                $('#signup-lastname').val('');
                $('#signup-username').val('');
                $('#signup-email').val('');
                $('#signup-pass').val('');
            } else {
                $('#reg_error').show();
                $('#reg_error').text(data);
            }
        }
    });
});

$('#log_user').click(function() {
    var log_userName = $('#login-username').val();
    var log_pass = $('#login-pass').val();

    $.ajax({
        url: 'modules/authorization/signin.php',
        type: 'POST',
        cache: false,
        data: {
            'login-username': log_userName,
            'login-pass': log_pass
        },
        dataType: 'html',
        success: function(data) {
            if (data == 'SUCCESS') {
                $('#log_user').text('Success');
                $('#log_error').hide();
                document.location.reload(true);

            } else {
                $('#log_error').show();
                $('#log_error').text(data);
            }
        }
    });
});

$('#exit_btn').click(function() {

    $.ajax({
        url: 'modules/authorization/exit.php',
        type: 'POST',
        cache: false,
        data: {},
        dataType: 'html',
        success: function(data) {
            document.location.reload(true);
        }
    });
});
</script>