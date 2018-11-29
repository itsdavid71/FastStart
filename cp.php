
    <div class="container">
        <div class="row main" id="main">
            <div class="col-md-12 white">
                <h4 class="ptop"><?php include('hello.php'); ?></h2>
                <h2 class="">Список пользователей сайта</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Login</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php include('get_user.php') ?>
                        <tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    

  <script type="text/javascript" src="mdbootstrap/js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/popper.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="mdbootstrap/js/mdb.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
