<!-- About Us Page
==========================================-->
<div id="tf-about">
    <div class="container text-center">
        <div class="col-md-6">
            <div class="section-title ">
                <h4>Log In</h4>
            </div>
            <hr>
            <div class="clearfix"></div>
            <form class="register" action="#">
                <label for="username">Username:</label>
                <input id="user" name="user" type="text"><br>
                <label for="pass">Password:</label>
                <input id="pass" type="password"><br>
                <input name="innskra" type="submit" value="Innskrá">
            </form>
        </div>
        <div class="col-md-6">
            <div class="section-title ">
                <h4>Register</h4>
            </div>
            <hr>
            <div class="clearfix"></div>
            <form class="register" action="<?php echo URL;?>Register/Skra" method="post">
                <label for="nafn">Name:</label>
                <input id="nafn" name="nafn" type="text" required>
                <label for="username">Username:</label>
                <span id="user-availability-status"></span>
                <input id="username" name="username" type="text" required onBlur="checkAvailability()"><br>
                <label for="pass">Password:</label>
                <input id="pass" name="pass" type="password" required>
                <label for="confpass" >Confirm Password:</label>
                <input id="confpass" name="confpass" type="password" required>

                <input name="nyskra" type="submit" value="Nýskrá">
            </form>
        </div>
    </div>
</div>

<!-- Hvatningarorðin (Shit 4)-->
<div id="tf-testimonials" class="text-center newpic">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Shit 4</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <?php $json = file_get_contents("http://178.62.25.29/JSON/quotes.JSON");
                            $JSON_dec = json_decode($json,true);
                            $x = random_int(0,count($JSON_dec) -1);
                            $y = random_int(0,count($JSON_dec) -1);
                            $z = random_int(0,count($JSON_dec) -1);
                            while ($y == $x)
                            {
                                $y = random_int(0,count($JSON_dec) -1);
                            }
                            while ($z == $x or $z == $y)
                            {
                                $z = random_int(0,count($JSON_dec) -1);
                            }
                            ?>

                            <h5><?php echo $JSON_dec[$x]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$x]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$y]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$y]['Author'];?></p>
                        </div>

                        <div class="item">
                            <h5><?php echo $JSON_dec[$z]['Quote'];?></h5>
                            <p><?php echo $JSON_dec[$z]['Author'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo URL; ?>js/formvalidate.js" type="text/javascript"></script>


