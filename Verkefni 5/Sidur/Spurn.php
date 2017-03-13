<?php

include "Incl.php";
?>
<h2>Verkefni 5 - API</h2>
<div class="questions">
    <b>1. 1% Útskýrðu eftirfarandi request verbs:</b><br>
    <br>
    <li><b>a) POST</b></li>
    <p>POST skipunin er þegar gögn eru send á serverinn. POST tekur og vinnur með þau gögn, serverinn geymir þau og það er hægt að nota þau með gagnagrunn en virka vel án gagnagrunns.</p>
    <li><b>b) GET</b></li>
    <p>GET er notað þegar að einhvern gögn eru 'actually' til staðar, ef engin gögn eru tilstaðar að þá skikar GET engu. GET skipunin sendir URL slóð á serverinn með upplýsingunum sem serverinn þarf að vita.</p>
    <li><b>c) PUT</b></li>
    <p>PUT skipunin er notuð til að uppfæra gögnin sem eru núþegar til. Virkar mjög svipað og update skipun.</p>
    <li><b>d) DELETE</b></li>
    <p>DELETE gerir næakvæmnlega það sem það heitir, fjarlægir gögn.</p>

    <b>2. 1% Hvað er status code og hvað þýða eftirfarandi status codes?</b><br>
    <p>Status codes lætur vafrann og serverinn tala saman. Vafrinn sendir einhverjar beiðnir á serverinn og serverinn skilar þá einhverju. Hinsvegar ef beiðnin er send á vitlausan server (t.d. 200 en ekki 201) að þá skilast náttúrulega ekkert.
    </p>
    <li><b>a) 200</b></li>
    <p>Að allt hafi gengið upp og allt sé i K-inu.</p>
    <li><b>b) 301</b></li>
    <p>Ef síða sem var á þessu URL-i sé ennþá til en komið á nýtt URL. Nýja URL-ið er oftast látið fyljga með (t.d. ef þú ferð inn á þessa síðu http://thewatchseries.to/ stendur þetta á síðunni Under maintenance, but you can check (new domain)smellt er á "new domain" fyrir URL linkinn) </p>
    <li><b>c) 400</b></li>
    <p>(Bad Request) Ef notandinn sendir inn gallaðar eða vitlausar beiðnir. </p>
    <li><b>d) 404</b></li>
    <p>(Error 404 Page not found) Ef vitlaus slóð er slegin inn. (t.d. ef slegið er inn name.inna.is en ekki nam.inna.is)</p>
    <li><b>e) 500</b></li>
    <p>(Error code 500 Internal server error) Ef t.d. server liggur niðri eða er bilaður. Hefur ekkert með notandann að gera heldur serverinn.</p>

    <b>3. 1% Hverjar eru helstu nýjungar og breytingar með HTTP 2.0?</b>
    <p>Bigger, Better, Faster eins og maður myndi segja. HTTP2 er enn með stuðning við HTTP eða þá þær síður sem eru ekki með
        vottorð fyrir að encrypta eða dulkóða gögn yfir þá munu flestir ef ekki allir vafrar fara fram á það að þeir muni aðeins
        styðja HTTP/2 með HTTPS sem þýðir að dulkóðun verði nauðsynleg sem er örrugara fyrir notendur.</p>

    </p>
</div>
