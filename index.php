<!DOCTYPE html>
<html>
<head>
	<title>VEF</title>
</head>
<body>
<h1>Halló Heimur</h1>
<p>Máni Karl Guðmundsson - Digital Ocean</p>
<p>46.101.19.194</p>
<p></p>
<h1>Verkefni 2</h1>
<p>1. Munurinn á public, private og protected.<br>Ef að gildi er public geta allir séð gildið, en ef það er private getur
    aðeins sá klasi séð gildið, hinsvegar ef gildið er protected geta undir-klasar séð gildið en ekki aðrir klasar.<br>
    2. Hvað er inheritance?<br>Inheritance er þar sem klasi t.d. klasinn Car er buinn til og svo er Toyota sem inheritar klasann
    Car. Hér er dæmi.</p>
class GrandPa<br>
{<br>
    protected $name = 'Mark Henry';<br>
}<br>
<br>
class Daddy extends GrandPa<br>
{<br>
    function displayGrandPaName()<br>
    {<br>
        return $this->name;<br>
    }<br>
}<br>

</body>
</html>
