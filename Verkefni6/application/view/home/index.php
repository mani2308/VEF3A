<!-- Home Page -->
<div id="tf-home" class="text-center">
    <div class="overlay">
        <div class="content">
            <h1><strong><span class="color">Verkefni 6</span></strong></h1>
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- About Us Page -->
<div id="tf-about">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>Um okkur</h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro">Komdu og kíktu til okkur í mat!</p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Staðurinn</strong> - <em>Lítið og nýtt fyirtæki fyrir þig og þína</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Matur</strong> - <em>Góðir réttir á sanngjörnu verði</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FOOOOODzz -->
<div id="tf-works">
    <div class="container"> <!-- Container -->
        <div class="section-title text-center center">
            <h2><strong>Dishes</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em></em></small>
        </div>
        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left"><h4>Pick your poison:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".Breakfast">Breakfast</a></li>
                        <li><a href="#" data-filter=".Lunch">Lunch</a></li>
                        <li><a href="#" data-filter=".Dinner" >Dinner</a></li>
                        <li><a href="#" data-filter=".Desserts" >Desserts</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div id="lightbox" class="row">

            <?php $jsonaef = file_get_contents("http://139.59.191.60/JSON/food.JSON");
            $aefingar = json_decode($jsonaef,true);
            foreach ($aefingar as $aef)
            {
                echo '<div class="col-sm-6 col-md-3 col-lg-3 ' . $aef["Group"] . '">';
                echo '<div class="portfolio-item">';
                echo '<div class="hover-bg">';
                echo '<div class="hover-text">';
                echo '<h4>'.$aef["Nafn"].'</h4>';
                echo "<div class=\"clearfix\"></div>";
                echo "<i class=\"fa fa-plus\"></i>";
                echo "</div>";
                echo '<img src="'.$aef["Mynd"].'" class="img-responsive workmynd" alt="...">';
                echo "</a> </div> </div> </div> ";
            }
            ?>



        </div>
    </div>
</div>


<!-- Team Page -->
<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Starfsfólkið okkar</h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div id="team" class="owl-carousel owl-theme row">

                <?php $jsonclient = file_get_contents("http://139.59.191.60/JSON/staff.JSON");
                $clients = json_decode($jsonclient,true);
                foreach ($clients as $client)
                {
                    echo '<div class="item">';
                    echo '<div class="thumbnail">';
                    echo '<img src="'. $client["Mynd"] .'" alt="..." class="img-circle team-img">';
                    echo '<div class="caption">';
                    echo '<h3>'.$client["Nafn"]. '</h3>';
                    echo '<p>'. $client["Stada"] .'<p>';
                    echo '<p>'. $client["Texti"] .'</p>';
                    echo "</div> ";
                    echo "</div>";
                    echo "</div> ";
                }
                ?>


            </div>
        </div>
    </div>
</div>

