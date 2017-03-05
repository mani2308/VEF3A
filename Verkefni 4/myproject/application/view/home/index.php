<div class="container">
    <h1>Spurningarnar - Verkefni 4 - Routing</h1>
    <h2>a. Hver er vandinn við að útfæra MVC fyrir vef (lágmark 100 orð)?</h2>
    <p>Ef að maður klúðrar einhverju við það að setja upp MVC getur verið mjög erfitt að vinna með það því erfitt er að finna villuna.
        Þannig að ef MVC-ið er ekki rétt sett upp að þá skapar það einnig vandamál ef margir eru að vinna að sama MVC "projectinu" því þetta er í
        rauninnni bara 1 stór síða. Það er einnig mjög erfitt að vinna með þetta ef einstaklingur kann tildæmis bara PHP, því það þarf að
        kunna alveg nokkur forritunarmál eða allavegana þá nokkuð solid grunn til þess að skilja allar uppsetningarnar.

    <h2>b. Hvað er og hvernig virkar routing (lágmark 100 orð)? Komdu með skýringardæmi (ekki kóða).</h2>
    <p>Það er hægt að sjá í MINI3 verkefninu hvernig frameworki-ið virkar, eins og þegar notandinn smellir á link eða url og notandinn er redirectaður á einhvern annan stað, það er það sem routing-ið gerir.
        Semsagt að routing-ið redirectar þér á aðra síðu sem gæti þá verið önnur síða eða jafnvel heimasíða. Það er hægt að sjá þetta ef
        að smellt er í gluggann þar sem stendur á hvaða síðu þú ert á, þá kemur kannski upp t.d. visir.is,  að þá ferðu beint inn á visir.is/forsida
        og ef þú ýtir á fréttir sem er menu sem er í headernum kemur upp visir.is/section/FRETTIR. Indexinn fer URL-ið og vinnur úr því með routing sem skilar út miklu snyrtilegri vefslóð.
        Dæmi um endurskrifun á URL-i væri t.d. <u>http://wikipdia.com/wiki/index.php?title=Page_title</u> gæti verið skrifað svona <u>http://wikipedia.com/wiki/Page_title</u>
    </p>
    <h2>c. Hvað er Static routing?</h2>
    <p> Static Routing getur verið mikið vesen og mikil tímasóun ef það er ekki gert rétt en þá er yfirleitt notað gangagrunn eða gagna töflur þar sem notandinn getur notað margar mismunandi leiðir
        til að setja upp gögnin og það getur verið mjög tímafrekt verk og helsti ókosturinn væri að ef það er verið að breyta öllu og það gleymist að uppfæra
        routing töflun að þá fer allt klessu.


    <h2>d. Hvað er Dynamic routing? </h2>
    <p>Flókið en virkar samt. Það er eins og á þessarri síðu þar sem sínan skilar bara URL-inu <a href="http://139.59.191.60/books/index">http://139.59.191.60/books/index</a> en ef notandinn myndi skrifa
        http://139.59.191.60/books/index.php myndi koma upp villa þar sem er verið að kalla í index functionið en ekki í raun indexið sjálft þó svo að það sé verið að kalla í það af controllernum.

    <h2>e. Hvað er Front Controller (lágmark 100 orð)? Komdu með skýringardæmi.</h2>
    <p>Öll "request" fara í gegnum Fron Controlerinn. Á MVC síðunnni er einn front controller eða component sem sér um allt sem gerist á síðunni og er því ábyrgt öllum beiðnum sem vísar á aðrar síður.
        En þegar er veriðað vinna með routing þarf að hafa front controller. (Sýnidæmi fylgir)</p>
    <ul>Demo:</ul>
    if ($_SERVER['REQUIEST_URI'] == '/info') {<br>
    include 'info.php' ;<br>
    } elseif ($_SERVER['REQUEST_URI'] == '/schedule') { <br>
    include 'schedule.php';<br>
    } else { <br>
    include 'error.php';
    }<br>
    <p>Autoloading myndi reyndar hjálpa mjög vel með þetta til að loadingið myndi vera hraðara og meira "smooth".
        Sýnidæmi fengið frá: <a href="http://stackoverflow.com/questions/6890200/what-is-a-front-controller-and-how-is-it-implemented-in-php">Front controller</a></p>
</div>
