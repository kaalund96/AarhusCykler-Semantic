<h2>Kontakt </h2>
<section id="alt-kontakt">
<section id="information">
<h3 id="aabning">ÅBNINGSTIDER</h3>
	<table>
		<tr><td><p class="bold">Mandag</p></td><td><p class="bold">Tirsdag</p></td><td><p class="bold">Onsdag</p></td><td><p class="bold">Torsdag</p></td><td><p class="bold">Fredag</p></td><td><p class="bold">Lørdag</p></td><td><p class="bold">Søndag</p></td></tr>
		<tr><td><p>09-18</p></td><td><p>09-18</p></td><td><p><meta itemprop="opens" content="Indsæt en gyldig dato og tid i ISO 8601-datoformat her. Eksempler: 2015-07-27 eller 2015-07-27T15:30">
<meta itemprop="closes" content="Indsæt en gyldig dato og tid i ISO 8601-datoformat her. Eksempler: 2015-07-27 eller 2015-07-27T15:30">09-18</p></td><td><p>09-18</p></td><td><p>09-18</p></td><td><p>10-14</p></td><td><p>Lukket</p></td></tr>	
	</tbody></table>
	
<!-- Her har vi fra google maps, fremskaffet os en iframe, hvor i Aarhus Cyklers position er-->
	<h3 id="info-tekst">FIND OS</h3>
		 <iframe id="google-maps" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJoV-MqpU_TEYRs2K65S5xYRA&key=AIzaSyDVNM6wpwlXn5mnAIX7cJB5yOFbYfuwu2E" allowfullscreen></iframe>
	<p id="information-kontakt">
	<!-- Her under har vi fået en masse kode fra data markuphelper, som er med til at give et bedre overblik for en søgemaskine, hvilket skulle give en god seooptimering-->
<span id="_address5" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span itemprop="streetAddress">Nørre Allé 76</span> • 
<span itemprop="postalCode">8000</span> 
<span itemprop="addressLocality">Aarhus</span> </span>C • <br> 
		<span id="_email4" itemprop="email"><a href="mailto:mail@aarhuscykler.dk">mail@aarhuscykler.dk</a></span> • +
<span id="_telephone3" itemprop="telephone">45 20 13 43 11</span></p>

<!-- Her kommer en kontakt formular, som i selve formularen bliver koblet sammen med filen mail.php, og i den fil, bliver der kodet, hvordan og hvilken email adressen mailen skal sendes til-->
</section>
<section id="kontaktformular">
<h3 id="kontakt-overskrift">SKRIV TIL OS</h3>
<p id="kontakt-tekst">Vi besvarer gerne dine spørgsmål - kom ned i butikken, giv os et kald eller udfyld formularen herunder.
</p><!--action="sektioner/mail.php" method="POST"-->

	<form class="form" id="form" name="e-mailen" method="post" action="sektioner/mail.php">
		<p class="name">
					<label for="name">NAVN</label>
			<input type="text" name="name" id="name" placeholder="Jens Jensen" data-validation="length" data-validation-length="min4" data-validation-error-msg="<br>Du skal angive dit fulde navn"/>
		</p>
		<p class="email">
					<label class="label" for="email">EMAIL</label>
			<input type="text" name="email" id="email" placeholder="mail@eksempel.dk" data-validation="email" data-validation-error-msg="<br>Den angivede mail er ikke korrekt."/>
		</p>
		<p class="phone">
					<label for="Number">TELEFON<br></label>
			<input type="text" name="phone" id="web" placeholder="88 88 88 88" data-validation="number"  data-validation-error-msg="<br>Du skal angive hele dit nummer"/>
		</p>
		<p class="subject">
			<label for="Subject">HENVENDELSEN DREJER SIG OM</label>
			<select name="henvendelse" id="subject">
				<option value="Reparation">Reparation</option>
				<option value="Service">Service</option>
				<option value="Reservedele">Reservedele</option>
				<option value="Ny Cykel">Ny cykel</option>
				<option value="Tilbehør">Tilbehør</option>
				<option value="Andet">Andet</option>
		</select>
		</p>		
		<p class="text">
							<label for="text">BESKED</label>
			<textarea name="message" placeholder="Skriv til os" id="message"></textarea>
		</p>
		<p class="submit">
			<input type="submit" id="submit" value="Send" />
		</p>
	</form>
</section>
</section>
	<p id="copy">2017©Aarhus Cykler</p>
