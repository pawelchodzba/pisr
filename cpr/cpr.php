
<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
	header('Location: ../index.php');
	exit();
}

?>

<!DOCTYP HTML>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<tilte><tilte/>
	<meta name="description" content=""/>
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="author" content="Paweł Chodźba"/>
	
	<link rel="stylesheet" href="stylcpr.css" type= "text/css"/>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>$(document).ready(function() { 
	
	$('.tabs a').click(function(){
		$this=$(this);
		$('.panel').hide();
		$('.tabs a.active').removeClass('active');
		$this.addClass('active').blur();
		var panel = $this.attr('href');
		$(panel).fadeIn(250);
		return false;
		});
		$('.tabs li:first a').click();
		});</script>
	
	</head>
	
	

<body >

<div id="ramka">

	<div id="naglowek">
		
		<div id="logo"><img src="logo.png"/></div>
		<div id="glowa" > Centrum Powiadamiania Ratunkowego </div>
		<div style= "clear: both;"></div>
	</div>
	
	<div class= "tabbePanels">
		<ul class="tabs">
			<li><a href="#panel1">struktura</a></li>
			<li><a href="#panel2">procedury</a></li>
			<li><a href="#panel3">informacje</a></li>
			<li><a href="#panel4">akty prawne</a></li>
			<li><a href="#panel5"></a></li>
		</ul>

		<div class="panelContainer">
			<div class="panel" id="panel1"><br/>
			
			
				<div id="tytul">Siedziba Centrum Powiadamiania Ratunkowego znajduje się w Rzeszowie na ulicy Gruwaldzkiej 15 w pokoju numer 18.
				Podlega pod wydział Bezpieczeństwa i Zarządzania Kryzysowego.</div>
				
				
				<table>
				<tr>	<td>	Dyrektor Wydziału: Piotr Skworzec<br/>zk@rzeszow.uw.gov.pl<br/>nr pokoju: 711 	</td>	<td>	<a href ="skype:+48178671917?call">178671917</a>	</td>	</tr>
				<tr>	<td>	Zastępca Dyrektora: Jakub Dzik<br/>zk@rzeszow.uw.gov.pl<br/>nr pokoju: 711 	</td>	<td>	<a href ="skype:+48178671917?call">178671917</a>	</td>	</tr>
				<tr>	<td>	Kierownik CPR: Ewelina Czenczek<br/><br/>	</td>	<td>	brak
				<!-- <a href ="skype:+48602225206?call">602225206</a> -->
				</td>	</tr>
				<tr>	<td>	Zastępca Kierownika CPR: Bogusław Broda<br/><br/>	</td>	<td>	<a href ="skype:+48783934484?call">783934484</a>	</td>	</tr>


				</table>
			
			</div>
			
				
			
	<div class="panel" id="panel2"><br/>
			
			<div id="spis">
				
				 <ol>
					<li><a href="#s1">CEL PROCEDURY</a></li>
					<li><a href="#s2">PODSTAWA OPRACOWANIA.</a></li>
					<li><a href="#s3">ZAKRES STOSOWANIA.</a></li>
					<li><a href="#s4">OBSŁUGA STANDARDOWEGO ZGŁOSZENIA ALARMOWEGO.</a>
						<ul>
							<li><a href="#s41">Standardowe czynności związane z odbiorem i przekazaniem zgłoszenia.</a></li>
							<li><a href="#s42">Weryfikacja dostarczenia formatki.</a></li>
							<li><a href="#s43">Postępowanie w przypadku gwałtownego wzrostu liczby zgłoszeń</a></li>
							<li><a href="#s44">Postępowanie w przypadku przekazania połączenia wraz z formatką.</a></li>
							<li><a href="#s45">Postępowanie w przypadku zgłoszenia związanego z bezpośrednim zagrożeniem życia.</a></li>
							<li><a href="#s46">Postępowanie w przypadku zgłoszeń dotyczących zdarzeń mających miejsce na autostradzie A4.</a></li>
							<li><a href="#s47">Monitorowanie statusu zdarzenia.</li>
						</ul>
					
					</li>
					<li><a href="#s5">POSTĘPOWANIE W SYTUACJACH SZCZEGÓLNYCH.</a>
						<ul>
							<li><a href="#s51">Dyspozytor służby nie odbiera telefonu.</a></li>
							<li><a href="#s52">Zgłoszenie nie jest zgłoszeniem alarmowym.</a></li>
							<li><a href="#s53">Zdarzenia masowe.</a></li>
							<li><a href="#s54">Zgłoszenia wymagające podtrzymania rozmowy</a></li>
							<li><a href="#s55">Zgłoszenia dotyczące tego samego zdarzenia (zdarzenia podobne).</a></li>
							<li><a href="#s56">Udzielanie informacji telefonicznych o zdarzeniu dyspozytorom służb.</a></li>
							<li><a href="#s57">Przekazanie formatki do niewłaściwego dyspozytora.</a></li>
							<li><a href="#s58">Przekazanie formatki do niewłaściwej służby (odrzucanie formatek).</a></li>
							<li><a href="#s59">Utworzenie formatki w SWD służby.</a></li>
							<li><a href="#s510">Zgłoszenie alarmowe z Polski, dotyczące zdarzenia w innym kraju.</a></li>
							<li><a href="#s511">Zgłoszenie alarmowe obcojęzyczne.</a></li>
						</ul>
					</li>
					<li><a href="#s6">POSTĘPOWANIE W PRZYPADKU PROBLEMÓW TECHNICZNYCH.</a>
						<ul>
							<li><a href="#s61">Brak możliwości przekazania formatki z powodu wystąpienia trybu offline.</a></li>
							<li><a href="#s62">Niedostarczenie formatki w trybie online.</li>
							<li><a href="#s63">Brak możliwości dodzwonienia się do służb.</li>
						</ul>
					</li>
					<li><a href="#s7">WYBRANE NUMERY TELEFONÓW WŁAŚCIWE W SPRAWACH ZGŁOSZEŃ ALARMOWYCH.</a></li>
				 </ol>
			</div>
		
		<div id="proc">
		
								<div class="s" id="s1"><h3>1.	CEL PROCEDURY.</h3>
					Standaryzacja obsługi zgłoszeń alarmowych w Centrum Powiadamiania Ratunkowego  w Rzeszowie.</div>

					<div class="s" id="s2"><h3>2.	PODSTAWA OPRACOWANIA.</h3>
						<div class="s0" id="s">
						2.1.	Wytyczne do obsługi zgłoszeń alarmowych do numeru 112 w modelu telefonicznym SI CPR przesłane przez Ministerstwo Administracji Cyfryzacji w dniu 06.06.2014 r.<br/>
						</div><div class="s0" id="s">
						2.2.	Wytyczne do obsługi zgłoszeń alarmowych kierowanych do numeru 112 w pilotażu integracji SI CPR z SWD służb przesłane przez Ministerstwo Administracji Cyfryzacji w dniu 22.10.2015 r.<br/>
						</div><div class="s0" id="s">
						2.3.	Wytyczne Ministerstwa Spraw Wewnętrznych i Administracji z dnia 23.12.2015 r., w zakresie sposobu obsługi zgłoszeń alarmowych w sytuacji zdarzeń mających miejsce za granicą,   z wykorzystaniem bazy danych Europejskiego Stowarzyszenia Numeru Alarmowego 112 (EENA).<br/>
						</div>
					</div>
					<div class="s" id="s3"><h3>3.	ZAKRES STOSOWANIA.</h3>
						Niniejszą procedurę stosują operatorzy numerów alarmowych Centrum Powiadamiania Ratunkowego w Rzeszowie.
					</div>
					<div class="s" id="s4"><h3>4.	OBSŁUGA STANDARDOWEGO ZGŁOSZENIA ALARMOWEGO.<br/></h3>
						<div class="s0" id="s41">
						4.1.	Osoba dzwoniąca (AbA) wykonuje połączenie alarmowe na numer 112.<br/>
						</div><div class="s0" id="s">
						4.2.	System telefoniczny zgłasza się komunikatem: Numer alarmowy 112, proszę czekać na zgłoszenie się operatora.<br/>
						</div><div class="s0" id="s">
						4.3.	Operator numerów alarmowych przyjmuje zgłoszenie i mówi: Operator numer ....., w czym mogę pomóc?<br/>
						</div><div class="s0" id="s">
						4.4.	Jeżeli osoba dzwoniąca nie podejmuje rozmowy, operator numerów alarmowych po dwukrotnym powtórzeniu zwrotu Halo rozłącza się (próba nawiązania rozmowy przez operatora numerów alarmowych powinna trwać min. 8s). Jeżeli operator oceni, że osoba, która dzwoniła, może znajdować się w sytuacji uniemożlwiającej podjęcie rozmowy, wykonuje dodatkowo połączenie zwrotne o ile znany jest numer, z którego pochodziło zgłoszenie.<br/>
						</div><div class="s0" id="s">
						4.5.	Jeżeli osoba dzwoniąca nawiązuje kontakt, operator numerów alarmowych podczas rozmowy wypełnia formatkę oraz określa odpowiednie służby, pozyskując następujące informacje:<br/>
						
						4.5.1.	miejsce zdarzenia (w zależności od wiedzy zgłaszającego: województwo, miejscowość, nazwa przysiółka, powiat, gmina, ulica, nr budynku i lokalu, piętro, numer i rodzaj drogi oraz jej kilometr),<br/>
						
						4.5.2.	rodzaj zdarzenia lub zagrożenia,<br/>
						
						4.5.3.	czy są osoby poszkodowane, jeśli tak to ilu jest poszkodowanych – jeżeli rodzaj zdarzenia daje taką możliwość,<br/>
						
						4.5.4.	dane osoby zgłaszającej i potwierdzony nr telefonu do kontaktu zwrotnego. W przypadku braku numeru telefonu osoby dzwoniącej lub wyświetlenia na konsoli operatora numerów alarmowych numeru podkładowego wskazującego na użycie telefonu GSM bez karty SIM, ustalenie sposobu, w jaki można się z nią skontaktować,<br/>
						
						4.5.5.	informacje na temat innych istotnych okoliczności zdarzenia lub zagrożenia, umożliwiające podjęcie czynności przez podmioty ratownicze oraz ewentualne dodatkowe szczegóły ułatwiające lokalizację miejsca zdarzenia i szybkie dotarcie właściwych podmiotów ratowniczych (np. charakterystyczne punkty).<br/>
						</div><div class="s0" id="s">
						4.6.	Operator numerów alarmowych potwierdza przyjęcie zgłoszenia słowami: "zgłoszenie zostało przyjęte, przekazuję je do …… (określa służbę) i rozłącza się.<br/>
						</div><div class="s0" id="s">
						4.7.	Przed wysyłaniem formatki do SWD służb (Policja i/lub PSP i/lub PRM), operator numerów alarmowych upewnia się, że formatka zawiera wszystkie niezbędne informacje, tj.:<br/>
						
						4.7.1.	opis zgłoszenia/zdarzenia niezbędny do oceny zaistniałej sytuacji przez dyspozytora, <br/>
						
						4.7.2.	lokalizację osoby dzwoniącej/lokalizację miejsca zdarzenia,<br/>
						
						4.7.3.	kategorię i podkategorię zdarzenia, zgodnie z katalogiem zdarzeń,<br/>
						
						4.7.4.	określenie dyspozytorni (jednej lub kilku), do której należy przesłać formatkę, wraz ze wskazaniem służby wiodącej,<br/>
						
						4.7.5. dane osoby zgłaszającej ( wg. ppkt.4.5.4).<br/>
						</div><div class="s0" id="s">
						4.8.	W odniesieniu do ratownictwa medycznego, formatki są obsługiwane wyłącznie przez Dyspozytornie Medyczne w Krakowie i Tarnowie (połączenia przekazywane są również głosowo). Pozostałe Dyspozytornie PRM w kraju nie otrzymują formatek, mimo użycia klawisza Wyślij. 
						W związku z tym połączenia należy przekazywać jedynie głosowo, w następujący sposób:<br/>
						
						4.8.1.	 Zdarzenia w ruchu drogowym.				
						Operator numerów alarmowych wypełnia dane wymagane w formatce. Po wypełnieniu formatki, operator informuje Zgłaszającego mówiąc: proszę się nie rozłączać, łączę 
						z ratownictwem medycznym. Następnie wybiera opcję Trójpołączenie - zapowiedź. Zgłaszający słyszy zapowiedź proszę czekać, nawiązane zostaje połączenie operator - dyspozytor. Operator przedstawia się mówiąc: CPR Rzeszów, operator nr …, przekazuję rozmowę, a następnie dołącza do rozmowy Zgłaszającego w trybie trójpołączenia i dodaje: Proszę mówić. Po upewnieniu się, że kontakt pomiędzy zgłaszającym i dyspozytorem został nawiązany, operator numerów alarmowych odłącza się używając klawisza Przekaż. Wypełnioną formatkę operator numerów alarmowych wysyła do służb (Policja i/lub PSP).<br/>
						
						4.8.2. Zdarzenia medyczne - zasłabnięcia, złamania, bóle itp. (PRM służba wiodąca).<br/>
						Operator numerów alarmowych wpisuje w formatce lokalizację miejsca zdarzenia, w celu ustalenia do której skoncentrowanej dyspozytorni medycznej ma być przełączone zgłoszenie, ustala co się stało oraz uzgadnia/potwierdza numer do kontaktu ze zgłaszającym, w przypadku gdy nie wyświetlił się w formatce. Następnie informuje zgłaszającego mówiąc: proszę się nie rozłączać, łączę z ratownictwem medycznym. Operator numerów alarmowych wybiera opcję trójpołączenie - z zapowiedzią, przedstawia się: CPR Rzeszów, operator nr… przekazuję rozmowę, a po upewnieniu się, że kontakt pomiędzy zgłaszającym 
						i dyspozytorem został nawiązany, jak najszybciej odłącza się, używając klawisza Przekaż. Wypełnioną formatkę, po wybraniu służby wiodącej Operator numerów alarmowych za pomocą klawisza Wyślij zapisuje w zasobach CPR. W przypadku połączeń z telefonów bez karty należy postępować zgodnie z ppkt.4.5.4.
						Jeżeli po przyjeździe na miejsce zdarzenia zespół ratownictwa medycznego uzna, że należy
						wezwać dodatkowe służby (Policja i/lub PSP) – leży to w gestii dyspozytora medycznego.<br/>
						
						4.8.3. Zerwanie połączenia.<br/>
						W przypadku zerwania połączenia w trakcie zestawiania trójpołączenia zgłaszający – operator - dyspozytor medyczny do Zgłaszającego oddzwania operator numerów alarmowych. Gdy natomiast połączenie zostanie zerwane już podczas rozmowy zgłaszającego z dyspozytorem medycznym do zgłaszającego oddzwania dyspozytor medyczny.
						</div><div class="s0" id="s42">
						4.9.	W celu weryfikacji dostarczenia formatki, operator numerów alarmowych wykonuje kolejno połączenia telefoniczne do służb wybranych w formatce – zaczynając od służby wiodącej. Jeśli uzasadniają to okoliczności, np. zagrożenie zdrowia i życia, informuje także o pilności zgłoszenia.<br/>
						</div><div class="s0" id="s43">
						4.10.	W przypadku gwałtownego wzrostu liczby zgłoszeń przekazywanych za pośrednictwem formatek do służb PSP/Policji (spowodowanego np. warunkami atmosferycznymi), operator numerów alarmowych nie musi potwierdzać telefonicznie dostarczenia formatki. Wyjątkiem są zdarzenia PILNE, zagrażające życiu lub zdrowiu, co do których w dalszym ciągu obowiązuje tryb określony  w pkt. 4.9.<br/>
						</div><div class="s0" id="s44">
						4.11.	Postępowanie w przypadku przekazania połączenia wraz z formatką.
						W przypadku, gdy operator numerów alarmowych oceni, że oprócz formatki konieczne jest przełączenie  zgłaszającego do dyspozytora, informuje o tym zgłaszającego mówiąc: proszę się nie rozłączać, łączę z Ratownictwem Medycznym/Policją/Strażą Pożarną. Następnie wybiera opcję Przekaż zdarzenie z trójpołączeniem z zapowiedzią. Formatka zostaje wysłana do służby, Zgłaszający słyszy zapowiedź proszę czekać, nawiązane zostaje połączenie operator -dyspozytor. Operator numerów alarmowych przedstawia się mówiąc: CPR Rzeszów, operator nr …, przekazuję rozmowę razem z formatką (z zastrzeżeniem uwagi w pkt. 4.8) a następnie dołącza do rozmowy zgłaszającego w trybie trójpołączenia i dodaje: Proszę mówić. W celu upewnienia się, że kontakt pomiędzy zgłaszającym a dyspozytorem został nawiązany, operator numerów alarmowych pozostaje przez chwilę na linii, po czym odłącza się używając klawisza Przekaż. <br/> 
						</div><div class="s0" id="s45">
						4.12.	W przypadku bezpośredniego zagrożenia życia, po uzupełnieniu formatki (lokalizacja zgłaszającego) należy bezzwłocznie przełączyć zgłaszającego do dyspozytora służby mówiąc: proszę się nie rozłączać, łączę z Policją/Państwową Strażą Pożarną/Ratownictwem Medycznym operator numerów alarmowych wybiera opcję Trójpołączenie - z zapowiedzią, przedstawia się: CPR Rzeszów, operator nr… przekazuję rozmowę, a po upewnieniu się, że kontakt pomiędzy zgłaszającym i dyspozytorem został nawiązany, odłącza się używając klawisza Przekaż. Formatkę należy przesłać do dyspozytorni, do której przekazano połączenie telefoniczne z bezwzględną adnotacją w polu opisowym o występującym zagrożeniu dla zdrowia i życia. Operator numerów alarmowych ma obowiązek wykonania kontrolnego połączenia do dyspozytorni w celu upewnienia się, że zgłoszenie zostało przyjęte przez dyspozytora.<br/>
						</div><div class="s0" id="s46">
						4.13.	Postępowanie w przypadku zgłoszeń dotyczących zdarzeń mających miejsce na autostradzie A4.
						Informując służby o zaistniałym zdarzeniu, należy postępować w następujący sposób:<br/>
						
						4.13.1. Policja, Państwowa Straż Pożarna.
						Formatkę należy wysłać do właściwej terytorialnie, przewidzianej do obsługi zdarzenia komendy miejskiej/powiatowej Policji i/lub Państwowej Straży Pożarnej (zał. nr1, zał. nr 2). Dodatkowo operatorzy numerów alarmowych o każdym zdarzeniu na autostradzie informują dyżurnego Komendy Wojewódzkiej Policji w Rzeszowie oraz dyżurnego na stanowisku kierowania Podkarpackiego Komendanta Wojewódzkiego Państwowej Straży Pożarnej. <br/>
						
						4.13.2. Państwowe Ratownictwo Medyczne.
						Operator numerów alarmowych przekazuje zgłoszenie głosowo do właściwej skoncentrowanej dyspozytorni medycznej, przewidzianej do obsługi danego odcinka autostrady, zgodnie z zał. 
						nr 3. Wypełnioną formatkę, po wybraniu służby wiodącej operator numerów alarmowych za pomocą klawisza Wyślij zapisuje w zasobach CPR.<br/>
						W przypadkach, gdzie teren działania skoncentrowanej dyspozytorni medycznej nie pokrywa się z przypisanym w formatce, w polu dotyczącym wyboru służby nie zaznaczamy dyspozytorni PRM, a jedynie w polu opisowym wpisujemy do jakiej skoncentrowanej dyspozytorni medycznej zostało przełączone zgłoszenie.<br/>
						</div><div class="s0" id="s47">
						4.14. Monitorowanie statusu zdarzenia.<br/>
						
						4.14.1. Każdemu zdarzeniu zarejestrowanemu przez operatora numerów alarmowych w SIPR, nadawany jest status, mówiący o stanie obsługi zdarzenia. Status jest automatycznie uaktualniany stosownie do czynności podejmowanych przez dyspozytora służby. Status zdarzenia widoczny jest w formatce zdarzenia oraz na zbiorczej liście zgłoszeń/zdarzeń. Rodzaje statusów:<br/>
						-	dostarczono do SWD,<br/>
						-	obsługiwane,<br/>
						-	zespół na miejscu,<br/>
						-	przekazane,<br/>
						-	zakończone,<br/>
						-	odrzucone.<br/>
						
						4.14.2. Operator numerów alarmowych jest zobowiązany do monitorowania statusu przekazanego<br/>
						do SWD służby zdarzenia.<br/>
						
						4.14.3. Operator numerów alarmowych ma możliwość monitorowania formatki utworzonej
						 w SWD służb.<br/>
						 </div>
					</div>
					 <div class="s" id="s5"><h3>5. POSTĘPOWANIE W SYTUACJACH SZCZEGÓLNYCH.</h3>
						<div class="s0" id="s51">
						5.1.	Dyspozytor służby nie odbiera telefonu.<br/>
						
						5.1.1.	Po wysłaniu formatki do Policji/PSP, w przypadku nieodbierania telefonu powyżej 45sek. operator numerów alarmowych łączy się z nadrzędnym dyspozytorem w Komendzie Wojewódzkiej, informuje o braku możliwości potwierdzenia otrzymania formatki przez dyspozytora powiatowego/miejskiego i przekazuje dane o zdarzeniu, podając numer zdarzenia, lokalizację miejsca zdarzenia, rodzaj zdarzenia, liczbę osób poszkodowanych oraz dane osoby zgłaszającej. W polu opis operator numerów alarmowych wpisuje komentarz: telefonicznie przekazano do dyżurnego Komendy Wojewódzkiej.<br/>
						
						5.1.2.	W przypadku nieodbierania telefonu przez dyspozytora PRM, operator numerów alarmowych powinien podtrzymać kontakt z osobą zgłaszającą i do skutku próbować nawiązywać połączenie z dyspozytorem. Jeśli ze zgłoszenia wynika, że osoba znajduje się w stanie zagrożenia życia, operator numerów alarmowych powinien udzielić porad w zakresie pierwszej pomocy do czasu nawiązania połączenia z dyspozytorem PRM lub do przyjazdu zespołu ratownictwa medycznego na miejsce zdarzenia. W tym czasie inny wolny operator numerów alarmowych (najbliżej siedzący) powinien próbować przekazać telefonicznie zgłoszenie do dyspozytora PRM (np. numery alternatywne).
						</div><div class="s0" id="s52">
						5.2.	Zgłoszenie nie jest zgłoszeniem alarmowym.<br/>
						
						5.2.1	W przypadku, gdy operator numerów alarmowych oceni, że zgłoszenie nie jest zgłoszeniem alarmowym ale znajduje się w kompetencji merytorycznej danej służby lub instytucji, przekazuje zgłaszającemu właściwy numer telefoniczny, jeżeli taki jest dostępny (w przypadku Policji należy podawać numer na stanowisko telefonistki KWP - 17 858 29 00). Operator wypełnia formatkę (lokalizacja zdarzenia-w niezbędnym zakresie, kategoria-niezasadne, podkategoria-blokowanie numeru alarmowego, opis zdarzenia), odznacza służbę Policja (jeśli system podpowiedział), wybiera z listy odpowiednią służbę pomocniczą i wysyła formatkę. Jeśli na liście nie ma właściwej służby pomocniczej, należy użyć „CPR w Rzeszowie”.<br/>
						
						5.2.2	W przypadku gdy zgłoszenie nie jest zgłoszeniem alarmowym i nie znajduje się w kompetencji merytorycznej danej służby lub instytucji, Operator informuje zgłaszającego, żeby nie dzwonić na numery alarmowe w sytuacjach tego niewymagających. Następnie kończy połączenie słowami: "połączenie nie wymaga interwencji i zostanie zakończone". Operator wypełnia formatkę (kategoria-niezasadne, podkategoria-blokowanie numeru alarmowego, opis zdarzenia - w niezbędnym zakresie). Następnie wybiera opcję Zgłoszenie fałszywe.<br/>
						
						5.2.3	W przypadku gdy dzwoniący nie podejmuje rozmowy lub rozłączy się przed podjęciem zgłoszenia, Operator  wypełnia formatkę (kategoria-niezasadne, podkategoria-głuche), następnie wybiera opcję Zgłoszenie fałszywe.
						</div><div class="s0" id="s53">
						5.3.	Zdarzenia masowe.<br/>
						
						Operator numerów alarmowych po przyjęciu i przekazaniu zgłoszenia o zdarzeniach masowych lub zagrożeniach mienia i środowiska w znacznych rozmiarach lub zagrożeniach terrorystycznych, niezwłocznie powiadamia, o tym dyżurnego Wojewódzkiego Centrum Zarządzania Kryzysowego.
						</div><div class="s0" id="s54">
						5.4.	Zgłoszenia wymagające podtrzymania rozmowy.
						W przypadku zgłoszeń wymagających podtrzymania rozmowy przez operatora numerów alarmowych do czasu przybycia na miejsce służb (np. połączenia od małych dzieci -zasłabnięcie rodzica, brak opieki, przemoc w rodzinie lub połączenia od osób przejawiających skłonności samobójcze), informowaniem służb o tym zdarzeniu zajmuje się inny, wolny operator numerów alarmowych (najbliżej siedzący).
						</div><div class="s0" id="s55">
						5.5.	Zgłoszenia dotyczące tego samego zdarzenia (zdarzenia podobne).
						Kolejne zgłoszenie dotyczące tego samego zdarzenia należy traktować jako informacje uzupełniające. Operator numerów alarmowych informuje wtedy zgłaszającego 
						o wcześniejszym wpłynięciu zgłoszenia w tej samej sprawie do CPR i przekazaniu go do odpowiednich służb. W przypadku nowych informacji mogących mieć znaczenie dla prowadzonych działań ratowniczych, operator numerów alarmowych informuje o tym służby, aktualizując formatkę oraz wykonując połączenie telefoniczne.
						</div><div class="s0" id="s56">
						5.6.	Udzielanie informacji telefonicznych o zdarzeniu Dyspozytorom służb.
						Operator numerów alarmowych może przekazywać dodatkowe informacje o zdarzeniu wyłącznie dyspozytorom służb i wyłącznie w przypadku tych zdarzeń, co do których prowadzone są działania. W przypadku zgłoszenia takich potrzeb przez służby będące na miejscu zdarzenia, uprawnionym do przekazywania im informacji jest dyspozytor właściwej służby.
						</div><div class="s0" id="s57">
						5.7.	Przekazanie formatki do niewłaściwego dyspozytora (ale właściwej służby).
						W przypadku przekazania formatki do niewłaściwego terytorialnie dyspozytora służby (służba wybrana prawidłowo ale niewłaściwa dyspozytornia), dyspozytor w ramach własnego SWD, jest zobowiązany przekazać zdarzenie do właściwego terytorialnie dyspozytora. Dyspozytor powinien zaznaczyć zmianę w formatce a w polu opis wpisać podstawę zmiany. UWAGA! Niewłaściwość terytorialna nie może być powodem odrzucenia formatki.
						</div><div class="s0" id="s58">
						5.8.	Przekazanie formatki do niewłaściwej służby.
						Niewłaściwość merytoryczna dyspozytora służby, do którego została przekazana formatka, może być przyczyną jej odrzucenia. Dyspozytor powinien wpisać przyczynę odrzucenia w polu opis oraz poinformować operatora numerów alarmowych o odrzuceniu formatki. Wyróżnić można dwa przypadki postępowania w związku z odrzuceniem formatki:<br/>
						
						5.8.1.	Odrzucenie formatki przez służbę i przydzielenie jej do realizacji innej służbie według następującego scenariusza:
						-	formatka zostaje odrzucona przez służbę,
						-	zgłoszenie z którego zostało utworzone zdarzenie, jest ponownie wrzucane do kolejki alarmowej,
						-	zgłoszenie jest przydzielane do pierwszego wolnego Operatora,
						-   na stanowisku operatora numerów alarmowych zostaje otworzone zdarzenie, które zostało odrzucone przez służbę,
						-	Operator numerów alarmowych na formatce zdarzenia przechodzi do sekcji Przydzielone służby,
						-	Operator numerów alarmowych wyznacza do realizacji służbę innego typu niż służba, która odrzuciła zdarzenie,
						-	Operator numerów alarmowych odznacza służbę, która odrzuciła zdarzenie,
						-	Operator numerów alarmowych poprzez użycie przycisku Przekaż ponownie kieruje zdarzenie do obsługi przez nowo wybraną służbę SWD,
						-	zdarzenie zostaje skierowane do obsługi przez dodaną służbę,
						-	aktualizacja zdarzenia zostaje zapisana i przesłana do wszystkich służb zdefiniowanych 
						w sekcji Przydzielone służby.<br/>
						
						5.8.2.	Odrzucenie formatki przez służby/służbę i ponowne przydzielenie służb/służby według następującego scenariusza:
						-	zdarzenie jest odrzucane po kolei przez wszystkie służby SWD,
						-	w momencie odrzucenia zdarzenia przez ostatnią ze służb, zgłoszenie z którego zostało utworzone zdarzenie jest ponownie wrzucane do kolejki alarmowej. Uwaga! Formatka odrzucona wróci do kolejki gdy zostanie odrzucona przez wszystkie służby. Jeżeli chociaż jedna z podłączonych służb podejmie zdarzenie, zdarzenie nie wraca na kolejkę,
						-	zgłoszenie wrzucone do kolejki jest przydzielane do pierwszego wolnego operatora numerów alarmowych,
						-	w momencie przydzielenia zgłoszenia do operatora numerów alarmowych, na stanowisku operatora numerów alarmowych zostaje otworzone zdarzenie, które zostało odrzucone przez wszystkie służby wybrane do realizacji zdarzenia,
						-	Operator numerów alarmowych na formatce zdarzenia przechodzi do sekcji Przydzielone służby,
						-	Operator numerów alarmowych dla wybranych służb, które odrzuciły zdarzenie zmienia status obsługi na wartość Ponownie otwarte,
						-	Operator numerów alarmowych z poziomu menu bocznego wybiera przycisk Przekaż ponownie,
						-	zdarzenie zostaje ponownie skierowane do obsługi do tych służb, dla których status obsługi został zmieniony na Ponownie otwarte,
						-	aktualizacja zdarzenia zostaje zapisana i przesłana do wszystkich służb zdefiniowanych 
						w sekcji Przydzielone służby.<br/>
						
						5.8.3.	SWD Policji nie przyjmie raz odrzuconego zdarzenia, wobec czego nie ma żadnej możliwości ponownego dostarczenia odrzuconej przez tę służbę formatki. Jeżeli istnieje jednak konieczność ponownego przekazania zdarzenia tej służbie, należy zrobić to telefonicznie. W polu opis wpisać informację o przekazaniu zdarzenia do Policji telefonicznie oraz użyć klawisza Przekaż ponownie, co zapobiegnie powrotowi formatki do kolejki.
						UWAGA! Może się zdarzyć, że po użyciu klawisza Przekaż ponownie, na ekranie pojawia się komunikat Proszę ponownie wykonać operację. Uniemożliwia to przyjmowanie kolejnych zgłoszeń. Przelogowanie stacji nie przyniesie efektu, spowoduje jedynie, że formatka wróci                    i unieruchomi inne stanowisko. W tej sytuacji aby zakończyć proces obsługi, formatkę należy przekazać do służby pomocniczej zdefiniowanej w tym celu a zdarzenie przekazać telefonicznie.
					
						</div><div class="s0" id="s59">
						5.9.	Utworzenie formatki w SWD służby.
						W przypadku utworzenia formatki przez dyspozytora we własnym SWD, dyspozytor, który utworzył formatkę i określił służbę współdziałającą, odpowiedzialny jest za poinformowanie tej służby o utworzeniu formatki oraz weryfikację jej prawidłowego dostarczenia. Dyspozytor nie ma obowiązku informowania operatora numerów alarmowych o utworzeniu formatki.
						</div><div class="s0" id="s510">
						5.10.	Zgłoszenie alarmowe z Polski, dotyczące zdarzenia w innym kraju.<br/>
						5.10.1.	Zdarzenie, które ma miejsce w jednym z państw należących do europejskiego Stowarzyszenia Numeru Alarmowego 112 (EENA) – zgodnie z wykazem znajdującym się na wewnętrznej stronie internetowej CPR. <br/>
						
						5.10.1.1.	Operator numerów alarmowych, który otrzymał zgłoszenie, zbiera niezbędne informacje, zgodnie z ogólnymi zasadami obsługi zgłoszeń alarmowych i wypełnia formatkę.<br/>
						
						5.10.1.2.	Po upewnieniu się, że kraj zdarzenia znajduje się na liście państw EENA, operator numerów alarmowych przełącza rozmowę do CPR w Poznaniu (lub Radomiu), informując zgłaszającego konieczności kontynuowania obsługi zgłoszenia w CPR posiadającym dostęp do centrów powiadamiania ratunkowego w innych państwach, operator numerów alarmowych korzysta przy tym z funkcji przekaż do innego operatora numerów alarmowych.<br/>
						
						5.10.1.3.	Operator numerów alarmowych w CPR w Poznaniu (lub Radomiu), informuje zgłaszającego o przejęciu obsługi zdarzenia i kontynuuje obsługę we własnym zakresie.<br/>
						
						5.10.2.	Zdarzenie ma miejsce w państwie niezrzeszonym w EENA.
						W przypadku jeśli kraj zdarzenia nie należy do EENA, w obsłudze zdarzenia nie pośredniczy CPR Poznań (ani Radom). Operator numerów alarmowych, który przyjął zgłoszenie, za pomocą wszelkich dostępnych środków (Internet, telefon, SMS), ustala dane zmierzające do udzielenia pomocy osobie znajdującej się w stanie zagrożenia życia lub zdrowia. Operator numerów alarmowych w takim przypadku ma prawo do używania dostępnych środków łączności 
						w relacjach krajowych i międzynarodowych oraz żądania od innych operatorów numerów alarmowych CPR, udzielenia pomocy w obsłudze zgłoszenia.
						</div><div class="s0" id="s511">
						5.11.	Zgłoszenie alarmowe obcojęzyczne.<br/>
						
						5.11.1.	Po otrzymaniu zgłoszenia alarmowego w języku obcym, operator numerów alarmowych zbiera niezbędne informacje na temat zgłoszenia, uzupełnia formatkę i przekazuje ją 
						w języku polskim właściwemu terytorialnie dyspozytorowi służby. W razie potrzeby, gdy niezbędne jest uzyskanie od zgłaszającego dodatkowych informacji dotyczących zdarzenia, operator numerów alarmowych służy dyspozytorowi pomocą językową.<br/>
						
						5.11.2.	W przypadku gdy operator numerów alarmowych przyjmujący zgłoszenie nie zna języka, którym posługuje się Zgłaszający, powinien przekazać zgłoszenie innemu operatorowi numerów alarmowych znającemu ten język lub korzystając z aplikacji SIPR, odnaleźć operatora numerów alarmowych w kraju, który zna język i przekazać mu obsługę zgłoszenia.
						</div>
					</div>
					<div class="s" id="s6"><h3>6.POSTĘPOWANIE W PRZYPADKU PROBLEMÓW TECHNICZNYCH.</h3>
						<div class="s0" id="s61">
						6.1.	Brak możliwości przekazania formatki z powodu wystąpienia trybu offline.
						W przypadku braku możliwości przekazania formatki na skutek trybu offline, zdarzenie należy przekazać telefonicznie. Po przywróceniu komunikacji z Ośrodkiem Krajowym, formatki wytworzone w trakcie offline, nie będą przesłane do zaznaczonych dyspozytorni. Uzyskają status Dostarczone do SWD z informacją Przekazano telefonicznie.
						</div><div class="s0" id="s62">
						6.2.	Niedostarczenie formatki w trybie online.
						Jeżeli zdarzy się przypadek (w sytuacji online) niedostarczenia formatki do służb, operator powinien 2-krotnie wykonać próbę przekazania ponownego. Jeżeli to nie przyniesie skutku, należy zaznaczyć opcję Przekazano telefonicznie i zadzwonić do służb.
						Jeżeli okaże się, że mimo komunikatów o niedostarczeniu, formatka dotarła (może zdarzyć się tak przy opóźnieniach na sieci) i SWD nawiąże komunikację tzn. np. przyśle status lub modyfikację,  komunikaty będą wymieniane, a jednocześnie w bazie pozostanie zapis, że  miała miejsce operacja przekazania telefonicznego.
						</div><div class="s0" id="s63">
						6.3.	Brak możliwości dodzwonienia się do służb.
							Jeśli operator numerów alarmowych nie  może połączyć się z Dyspozytornią PSP/Policji/PRM korzystając z numerów będących w systemie, tzn. zaprogramowanych w SIPR lub na konsoli, korzysta z numerów rezerwowych, będących poza systemem, uzgodnionych wcześniej ze służbami. W pierwszej kolejności należy wykorzystywać numery, co do których operator numerów alarmowych ma pewność, że są rejestrowane w Dyspozytorniach służb.
							</div>
					</div>
					<div class="s" id="s7"><h3>7.	WYBRANE NUMERY TELEFONÓW WŁAŚCIWE W SPRAWACH ZGŁOSZEŃ ALARMOWYCH.</h3>
						<div class="s0" id="s">
						7.1.	KW PSP w Rzeszowie
						
						-	821 70 03 - numer po sieci OST 112 na stanowisko kierowania.<br/>
						-	17 852 36 02 - numer po sieci publicznej na stanowisko kierowania.<br/>
						</div><div class="s0" id="s">
						7.2.	KW Policji w Rzeszowie<br/>
						-	821 31 12 - numer po sieci OST 112 na stanowisko kierowania.<br/>
						-	17 862 81 50 - numer po sieci publicznej na stanowisko kierowania.<br/>
						</div><div class="s0" id="s">
						7.3.	CPR w Rzeszowie<br/>
						-	825 09 99 - numer po sieci OST112 na stanowisko operatorskie, służący przekazywaniu zgłoszeń alarmowych (np. obcojęzycznych). <br/>Połączenie na ten numer wywołuje automatyczną aktywację formatki.
						-	825 02 01 (OST112) - numery na stanowiska operatorskie, służące do wymiany informacji pomiędzy służbami.<br/>
						-	17 867 18 73 (sieć publiczna) - rezerwowy numer informacyjny na stanowiska operatorskie.<br/>
						<div class="s0" id="s">
						   7.4.    Wojewódzkie Centrum Zarządzania Kryzysowego<br/>
						-	17 867 12 38 (sieć publiczna) – stanowisko dyżurnego WCZK.<br/>
						-	8250 325 (sieć OST 112) – stanowisko dyżurnego WCZK.<br/>
							</div>
					</div>
			
				</div>
		</div>
	</div>
		<div class="panel" id="panel3"><br/>
			<div id="info"	>
				<ul>
					<li><a href="#i1">Operatorzy</a></li>
					<li><a href="#i2">Informatycy</a></li>
					<li><a href="#i3">Awarie</a></li>
					<li><a href="#i4">Bramka SMS</a></li>
					<li><a href="#i5">Urząd</a></li>
				</ul>
			</div>

			<div id="i1">
						<table>
						<caption>OPERATORZY</caption> 
							<tr>	<th>Nazwisko Imię	</th>	<th>	Telefon	</th>	<th>	Numer<br/>operatora</th>	<th>kod<br/>grafiku</th>	<th>	Uwagi	</th>	</tr>
							<tr>	<td>	Bałchan Krzysztof	</td>	<td>	<a href ="skype:+48721829370?call">721829370</a>	</td>	<td>	10	</td>	<td>	3B	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Barć Paweł	</td>	<td>	<a href ="skype:+48737900959?call">737900959</a>	</td>	<td>		</td>	<td>	5K	</td>	<td>		</td>	</tr>
							<tr>	<td>	Bereś Krzysztof	</td>	<td>	<a href ="skype:+48792302084?call">792302084</a>	</td>	<td>	21	</td>	<td>	5D	</td>	<td>		</td>	</tr>
							<tr>	<td>	Bielecka Ewelina	</td>	<td>	<a href ="skype:+48664251442?call">664251442</a>	</td>	<td>	1	</td>	<td>	5A	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Cardenas-Słowik Sabina	</td>	<td>	<a href ="skype:+48783144556?call">783144556</a>	</td>	<td>	22	</td>	<td>	A	</td>	<td>		</td>	</tr>
							<tr>	<td>	Chodźba Paweł	</td>	<td>	<a href ="skype:+48691896055?call">691896055</a>	</td>	<td>	23	</td>	<td>	4C	</td>	<td>		</td>	</tr>
							<tr>	<td>	Członka Karolina	</td>	<td>	<a href ="skype:+48530036057?call">530036057</a>	</td>	<td>	59	</td>	<td>	4J	</td>	<td>		</td>	</tr>
							<tr>	<td>	Członka Mateusz	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>		</td>	<td>	2C	</td>	<td>		</td>	</tr>
							<tr>	<td>	Deręgowski Szymon	</td>	<td>	<a href ="skype:+48792504919?call">792504919</a>	</td>	<td>	49	</td>	<td>	4I	</td>	<td>		</td>	</tr>
							<tr>	<td>	Drozd Małgorzata	</td>	<td>	<a href ="skype:+48506507566?call">506507566</a>	</td>	<td>	25	</td>	<td>	3F	</td>	<td>		</td>	</tr>
							<tr>	<td>	Drzał Joanna	</td>	<td>	<a href ="skype:+48606219998?call">606219998</a>	</td>	<td>	26	</td>	<td>	1D	</td>	<td>		</td>	</tr>
							<tr>	<td>	Dybowski Przemysław	</td>	<td>	<a href ="skype:+48511232385?call">511232385</a>	</td>	<td>	31	</td>	<td>	2F	</td>	<td>		</td>	</tr>
							<tr>	<td>	Dziedzio Tomasz	</td>	<td>	<a href ="skype:+48608252941?call">608252941</a>	</td>	<td>	27	</td>	<td>	5E	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Figiel Łukasz	</td>	<td>	<a href ="skype:+48737485356?call">737485356</a>	</td>	<td>	15	</td>	<td>	4E	</td>	<td>	koordynator</td>	</tr>
							<tr>	<td>	Filiks Magdalena	</td>	<td>	<a href ="skype:+48?call"></a>	</td>	<td>	60	</td>	<td>	3K	</td>	<td>		</td>	</tr>
							<tr>	<td>	Gawlik Marzena	</td>	<td>	<a href ="skype:+48601748018?call">601748018</a>	</td>	<td>	46	</td>	<td>	2J	</td>	<td>		</td>	</tr>
							<tr>	<td>	Głowacka Agata	</td>	<td>	<a href ="skype:+48518031289?call">518031289</a>	</td>	<td>	2	</td>	<td>	1A	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Gotkowski Bartłomiej	</td>	<td>	<a href ="skype:+48698237759?call">698237759</a>	</td>	<td>		</td>	<td>	1J	</td>	<td>		</td>	</tr>
							<tr>	<td>	Górska Anna	</td>	<td>	<a href ="skype:+48513361841?call">513361841</a>	</td>	<td>	11	</td>	<td>	5G	</td>	<td>		</td>	</tr>
							<tr>	<td>	Górski Grzegorz	</td>	<td>	<a href ="skype:+48508758839?call">508758839</a>	</td>	<td>	28	</td>	<td>	5F	</td>	<td>		</td>	</tr>
							<tr>	<td>	Groszek Anna	</td>	<td>	<a href ="skype:+48737481722?call">737481722</a>	</td>	<td>	29	</td>	<td>	4F	</td>	<td>		</td>	</tr>
							<tr>	<td>	Guzek Wiktor	</td>	<td>	<a href ="skype:+48607441138?call">607441138</a>	</td>	<td>	30	</td>	<td>	3G	</td>	<td>		</td>	</tr>
							<tr>	<td>	Inglot Magdalena	</td>	<td>	<a href ="skype:+48787928598?call">787928598</a>	</td>	<td>	9	</td>	<td>	1H	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Jakiemczuk Paweł	</td>	<td>	<a href ="skype:+48785680589?call">785680589</a>	</td>	<td>	62	</td>	<td>	1L	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kania Mateusz	</td>	<td>	<a href ="skype:+48695067177?call">695067177</a>	</td>	<td>	32	</td>	<td>	2D	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kiszka Piotr	</td>	<td>	<a href ="skype:+48795275756?call">795275756</a>	</td>	<td>	3	</td>	<td>	3A	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Knurek Tomasz	</td>	<td>	<a href ="skype:+48605426637?call">605426637</a>	</td>	<td>	33	</td>	<td>	1F	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kocaj Artur	</td>	<td>	<a href ="skype:+48782283038?call">782283038</a>	</td>	<td>	18	</td>	<td>	3C	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kokoszka Jakub	</td>	<td>	<a href ="skype:+48884329593?call">884329593</a>	</td>	<td>		</td>	<td>	1Ł	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kosak Natalia	</td>	<td>	<a href ="skype:+48536383438?call">536383438</a>	</td>	<td>	34	</td>	<td>	5H	</td>	<td>		</td>	</tr>
							<tr>	<td>	Krenzel Regina	</td>	<td>	<a href ="skype:+48604584225?call">604584225</a>	</td>	<td>	13	</td>	<td>	5C	</td>	<td>		</td>	</tr>
							<tr>	<td>	Krowicka Magdalena	</td>	<td>	<a href ="skype:+48722102162?call">722102162</a>	</td>	<td>	50	</td>	<td>	2I	</td>	<td>		</td>	</tr>
							<tr>	<td>	Kustra Kamil	</td>	<td>	<a href ="skype:+48530830040?call">530830040</a>	</td>	<td>	51	</td>	<td>	3H	</td>	<td>		</td>	</tr>
							<tr>	<td>	Ladzińska Klaudia	</td>	<td>	<a href ="skype:+48882155490?call">882155490</a>	</td>	<td>		</td>	<td>	3D	</td>	<td>		</td>	</tr>
							<tr>	<td>	Lisowska Monika	</td>	<td>	<a href ="skype:+48605046223?call">605046223</a>	</td>	<td>	4	</td>	<td>	5B	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Micał Ewelina	</td>	<td>	<a href ="skype:+48501433260?call">501433260</a>	</td>	<td>	36	</td>	<td>	4G	</td>	<td>		</td>	</tr>
							<tr>	<td>	Mielcarek Karol	</td>	<td>	<a href ="skype:+48791339475?call">791339475</a>	</td>	<td>	12	</td>	<td>	1B	</td>	<td>		</td>	</tr>
							<tr>	<td>	Moskwa Marcin	</td>	<td>	<a href ="skype:+48606722660?call">606722660</a>	</td>	<td>	37	</td>	<td>	2E	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Nguyen Van	</td>	<td>	<a href ="skype:+48691234226?call">691234226</a>	</td>	<td>	17	</td>	<td>	1C	</td>	<td>		</td>	</tr>
							<tr>	<td>	Nowak Maria	</td>	<td>	<a href ="skype:+48785309293?call">785309293</a>	</td>	<td>	5	</td>	<td>	2B	</td>	<td>		</td>	</tr>
							<tr>	<td>	Orzechowski Tomasz	</td>	<td>	<a href ="skype:+48608329783?call">608329783</a>	</td>	<td>	6	</td>	<td>	2A	</td>	<td>		</td>	</tr>
							<tr>	<td>	Pado Katarzyna	</td>	<td>	<a href ="skype:+48664937376?call">664937376</a>	</td>	<td>	56	</td>	<td>	1K	</td>	<td>		</td>	</tr>
							<tr>	<td>	Pierzchała Monika	</td>	<td>	<a href ="skype:+48667814763?call">667814763</a>	</td>	<td>	19	</td>	<td>	2H	</td>	<td>		</td>	</tr>
							<tr>	<td>	Pietrzak Grzegorz	</td>	<td>	<a href ="skype:+48739287997?call">739287997</a>	</td>	<td>	7	</td>	<td>	4A	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Pietrzak Iga	</td>	<td>	<a href ="skype:+48667878621?call">667878621</a>	</td>	<td>	7	</td>	<td>	4A	</td>	<td>		</td>	</tr>
							<tr>	<td>	Prucnal Elżbieta	</td>	<td>	<a href ="skype:+48668502270?call">668502270</a>	</td>	<td>		</td>	<td>	1I	</td>	<td>		</td>	</tr>
							<tr>	<td>	Reptak Aneta	</td>	<td>	<a href ="skype:+48883601200?call">883601200</a>	</td>	<td>	39	</td>	<td>	3E	</td>	<td>		</td>	</tr>
							<tr>	<td>	Sikora Wojciech	</td>	<td>	<a href ="skype:+48668422774?call">668422774</a>	</td>	<td>	57	</td>	<td>	5L	</td>	<td>		</td>	</tr>
							<tr>	<td>	Sitek Marek	</td>	<td>	<a href ="skype:+48724375643?call">724375643</a>	</td>	<td>	41	</td>	<td>	3I	</td>	<td>		</td>	</tr>
							<tr>	<td>	Sitek Wojciech	</td>	<td>	<a href ="skype:+48606964991?call">606964991</a>	</td>	<td>	40	</td>	<td>	4D	</td>	<td>		</td>	</tr>
							<tr>	<td>	Solecki Mariusz	</td>	<td>	<a href ="skype:+48884855303?call">884855303</a>	</td>	<td>	42	</td>	<td>	4H	</td>	<td>		</td>	</tr>
							<tr>	<td>	Stefanek Magdalena	</td>	<td>	<a href ="skype:+48606946275?call">606946275</a>	</td>	<td>	20	</td>	<td>	B	</td>	<td>		</td>	</tr>
							<tr>	<td>	Szczepańska Aneta	</td>	<td>	<a href ="skype:+48604511700?call">604511700</a>	</td>	<td>		</td>	<td>	1G	</td>	<td>		</td>	</tr>
							<tr>	<td>	Tyczyński Cezary	</td>	<td>	<a href ="skype:+48792979658?call">792979658</a>	</td>	<td>	16	</td>	<td>	5J	</td>	<td>		</td>	</tr>
							<tr>	<td>	Urbanik Krzysztof	</td>	<td>	<a href ="skype:+48888105216?call">888105216</a>	</td>	<td>	8	</td>	<td>	4B	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Witek Sabina	</td>	<td>	<a href ="skype:+48669976760?call">669976760</a>	</td>	<td>	43	</td>	<td>	3J	</td>	<td>		</td>	</tr>
							<tr>	<td>	Wruszak Dorota	</td>	<td>	<a href ="skype:+48737451994?call">737451994</a>	</td>	<td>	44	</td>	<td>	1E	</td>	<td>	koordynator	</td>	</tr>
							<tr>	<td>	Ziobro Tomasz	</td>	<td>	<a href ="skype:+48788982740?call">788982740</a>	</td>	<td>	45	</td>	<td>	2G	</td>	<td>		</td>	</tr>
							
							<tr>	<td>	Goławska Aneta	</td>	<td>	<a href ="skype:+48693622794?call">693622794</a>	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
							<tr>	<td>	Górecka  Oksana	</td>	<td>	<a href ="skype:+48784600982?call">784600982</a>	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
							<tr>	<td>	Nowak  Małgorzata	</td>	<td>	<a href ="skype:+48790295073?call">790295073</a>	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
							<tr>	<td>	Pacuła  Daniel	</td>	<td>	<a href ="skype:+48884700495?call">884700495</a>	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>
							<tr>	<td>	Pociask  Jakub	</td>	<td>	<a href ="skype:+48509737741?call">509737741</a>	</td>	<td>		</td>	<td>		</td>	<td>		</td>	</tr>

												
						</table>
				
				
			</div>
			

			<div id="i2">
				<table>
				<caption>INFORMATYCY</caption> 
				<tr>	<td>	Lizut  Andrzej 	</td>	<td>	<a href ="skype:+48667432417?call">667432417</a>	</td>	</tr>
				<tr>	<td>	Wnęk Zbigniew 	</td>	<td>	<a href ="skype:+48662108849?call">662108849</a>	</td>	</tr>
				</table>
			</div>	
			
			
			
			<div id="i3">
				<table>
				<caption>AWARIE</caption> 
					<tr>	<td rowspan="2">	Centrum Techniczne Systemu Powiadamiania Ratunkowego 	</td>	<td>	<a href ="skype:+48664782619?call">664782619</a>	</td>	<td rowspan="2">	7059290 – DODATKWOY nr przez OST,(nie wpisujemy 0 przed numerem)	</td>	</tr>
					<tr><td>	<a href ="skype:+48795463901?call">795463901</a>	</td></tr>
										
					<tr>	<td rowspan="2">	DGT 	</td>	<td>	<a href ="skype:+48502198615?call">502198615</a>	</td>	<td>	8:00 – 16:00	</td>	</tr>
					<tr>				<td>	<a href ="skype:+48502198603?call">502198603</a>	</td>	<td>	16:00 – 8:00	</td>	</tr>
															
					<tr>	<td>	WASCO 	</td>	<td>	<a href ="skype:+48500114518?call">500114518</a>	</td>	<td>		</td>	</tr>

				
				</table>
			
			</div>
			
			
			<div id="i4">
				<table>
			
				<td>	Bramka SMS CPR 	</td>	<td>	<a href ="skype:+48662108263?call">662108263</a>	</td>	</tr>

				</table>
			
			</div>
			
			<div id="i5">
				<table>
				
				
				</table>
			
			</div>
			
			
			
			
			
		</div>
			<div class="panel" id="panel4">


									
					<table><tr><td><a href="ustaw_pow.pdf">Ustawa z dnia 22 listopada 2013 r.
					o systemie powiadamiania ratunkowego</a></td></tr></table>

			</div>
			<div class="panel" id="panel5">5bla bla bla </div>
		</div>



	</div> 
</div>

</body>



</html>