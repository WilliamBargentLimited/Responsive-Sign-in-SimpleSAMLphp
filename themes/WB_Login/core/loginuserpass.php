<?php $this->includeAtTemplateBase('includes/header.php'); ?>
    <div class="signin-container">
        <div class="signin-body">
            <?php if ($this->data['errorcode'] !== null) { ?>
                <div class="alert alert-dark text-center" role="alert">
                    Username or password incorrect.
                </div> <!-- END alert -->
                <style type="text/css" rel="stylesheet">
                    form.signin .form-label-group input#username {
                        border: 1px solid #f00;
                    }
                    form.signin .form-label-group input#password {
                        border: 1px solid #f00;
                    }
                </style>
            <?php } ?>
            <form class="signin" action="?" method="post" name="f">
                <div class="form-label-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" tabindex="1" required autofocus>
                    <label for="username">Username</label>
                </div> <!-- END form-label-group -->
                <div class="form-label-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" tabindex="2" required>
                    <label for="password">Password</label>
                </div> <!-- END form-label-group -->
                <button class="btn btn-dark btn-block" type="submit" tabindex="3">Sign-in</button>
                <br>
                <a href="https://identity.williambargent.co.uk/account/forgot">Forgotten username or password?</a>						
                <input type="hidden" id="processing_trans" value="<?= $this->t('{login:processing}'); ?>" />
                <?php
                    foreach ($this->data['stateparams'] as $name => $value) {
                        echo '<input type="hidden" name="' . htmlspecialchars($name) . '" value="' . htmlspecialchars($value) . '" />';
                    }
                ?>
            </form>
        </div> <!-- END signin-body -->
    </div> <!-- END signin-container -->
<?php $this->includeAtTemplateBase('includes/footer.php');
