<div id="tf-about">
    <div class="container text-center">
        <div class="col-md-9">
            <div class="section-title ">
                <h3>Mín Síða</h3>
            </div>
            <form class="register" action="<?php echo URL;?>profile/breyta" method="post">

                <label for="nafn">Nafn:</label>
                <input id="nafn" name="nafn" type="text" value=" <?php echo $info[0]->name; ?>" required>
                <label for="user">Notendanafn:</label>
                <input id="user" name="user" type="text" value="<?php echo $info[0]->username;?>" readonly ><br>
                <label for="pass">Lykilorð:</label>
                <input id="pass" name="pass" type="password" required>
                <label for="confpass" >Staðfesta Lykilorð:</label>
                <input id="confpass" name="confpass" type="password" required>
                <input id="btbreyta" name="breyta" type="submit" value="Breyta">
            </form>

        </div>

        <hr>
        <div class="clearfix"></div>
    </div>
</div>