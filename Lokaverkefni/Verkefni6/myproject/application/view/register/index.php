<!-- About Us Page -->
<div id="tf-about">
    <div class="container text-center">
        <div class="col-md-6">
            <div class="section-title ">
                <h4>Innskráning</h4>
            </div>
            <hr>
            <div class="clearfix"></div>
            <form class="register" action="<?php echo URL;?>nyskraning/innskra" method="post">
                <label for="username">Notendanafn:</label>
                <input id="username" name="username" type="text"><br>
                <label for="pass">Lykilorð:</label>
                <input id="pass" name="pass" type="password"><br>
                <input name="innskra" type="submit" value="Innskrá">
            </form>
        </div>


        <div class="col-md-6">
            <div class="section-title ">
                <h4>Nýskraning</h4>
            </div>
            <hr>
            <div class="clearfix"></div>
            <form class="register" action="<?php echo URL;?>nyskraning/nyskra" method="post">
                <label for="nafn">Nafn:</label>
                <input id="nafn" name="nafn" type="text" required>
                <label for="username">Notendanafn:</label>
                <span id="user-availability-status"></span>
                <input id="username" name="username" type="text" required onBlur="checkAvailability()"><br>
                <label for="pass">Lykilorð:</label>
                <input id="pass" name="pass" type="password" required>
                <label for="confpass" >Staðfesta Lykilorð:</label>
                <input id="confpass" name="confpass" type="password" required>

                <input id="btnyskra" name="nyskra" type="submit" value="Nýskrá">
            </form>
        </div>
    </div>
</div>
<script src="<?php echo URL; ?>js/formvalidate.js" type="text/javascript"></script>