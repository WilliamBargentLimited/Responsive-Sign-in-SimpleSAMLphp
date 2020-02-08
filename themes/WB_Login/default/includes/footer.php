<?php
    if (!empty($this->data['htmlinject']['htmlContentPost'])) {
        foreach ($this->data['htmlinject']['htmlContentPost'] as $c) {
            echo $c;
        }
    }
?>

                                    </div> <!-- END col-sm-6 -->
                                    <div class="col-sm-6">
                                        <h2>SSO Sign-in</h2>
                                        <p>To access this resource you are required to sign-in with a valid account.</p>
                                        <br>
                                        <a href="https://identity.williambargent.co.uk/account/register">Register for an account</a>
                                    </div> <!-- END col-sm-6 -->
                                </div> <!-- END row -->
                            </div> <!-- END container -->
                        </div> <!-- END card-body -->
                    </div> <!-- END card -->
                    <div class="toast-container">
                        <div class="toast alert-security" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <i class="fas fa-info-circle mr-2"></i>
                                <strong class="mr-auto">Security Alert</strong>
                            </div> <!-- toast-header -->
                            <div class="toast-body">
                                <span>Never share/write you password down or sign-in to your account for someone else.</span> <br>
                                <a href="https://williambargent.co.uk/help/terms-and-conditions">Terms & Conditions</a>
                            </div> <!-- toast-body -->
                        </div> <!-- toast -->
                    </div> <!-- toast-container -->
                </div> <!-- END fluid-container -->
            </main>
            <footer class="page-footer">
                <div class="footer">
                    <div class="disclamer">
                        <script type="text/javascript">
                            var date = new Date();
                            var dateYear = date.getFullYear();
                            document.write('<a href="https://williambargent.co.uk/help/copyright">&copy; 2020 - ' + dateYear + ' &nbsp; William Bargent &nbsp; </a>');
                        </script>
                        <div class="policies">
                            <a href="https://williambargent.co.uk/help/terms-and-conditions">Terms & Conditions</a>
                            <span> | </span>
                            <a href="https://williambargent.co.uk/help/privacy">Privacy</a>
                            <span> | </span>
                            <a href="https://williambargent.co.uk/help/cookies">Cookies</a>
                        </div> <!-- END policies -->
                    </div> <!-- END disclamer -->
                </div> <!-- END footer -->
            </footer>
        </div> <!-- END page-wrapper -->
        <script src="https://assets.williambargent.co.uk/sign-in/v1/js/main.js"></script>
    </body>
</html>