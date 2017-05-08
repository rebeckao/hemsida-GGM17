<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="sv"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="sv"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="sv"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="sv"> <!--<![endif]-->
<head>
	<title>GGM17 - Geek Evolution</title>
  <?php include 'includes/head.html';?>
</head>

<body>
  <?php include 'includes/nav-main.php';?>

   <!-- Homepage intro
   ================================================== -->
  <section id="intro" class="top-of-page">
    <img src="images/top_banner.jpg">
  </section>

   <!-- Tickets
   ================================================== -->
  <section id="tickets" class="whiteish">
    <h1 class="responsive-headline">Geek Evolution</h1>
    <h2>Geek Girl Meetup &bull; 13 maj 2017 &bull; Stockholm</h2>
    <div id="ticket_button">
      <a class="button" href="https://www.picatic.com/geekevolution?utm_source=promotion&utm_medium=button&utm_campaign=105221" target="_blank">Köp biljett</a>
    </div>
  </section>

   <!-- Description
   ================================================== -->
  <section id="description" class="whiteish">
    <div class="row section-head">
      <div class="row design">
        <p><i>Vi rör oss allt snabbare in i framtiden. Med artificiell intelligens och nanoteknik har vi gjort science fiction till vardag och vi hittar ständigt nya sätt att leva, uppleva världen på och connecta med varandra. Årets tema är Geek Evolution och på rikseventet för Geek Girl Meetup 2017 samlas vi för att diskutera, utmana och utveckla vad vi vet om teknikens nuvarande roll och framtida möjligheter.</i></p>
        <p>Välkomna! Den 13 maj träffas vi <a href="#lokal" class="smoothscroll">på A-house i Stockholm</a>. Vi fokuserar på framtiden och ny teknik som artificiell intelligens (AI), virtuell verklighet (VR), förstärkt verklighet (AR), och robotics, och träffar kvinnorna som skapar förutsättningarna för vår tids geek evolution.</p>
        <p>Vi kommer att uppdatera <a href="#program" class="smoothscroll">programmet</a> löpande fram tills startdatum och ser fram emot en heldag fylld av intressanta föreläsningar, spaningar och chansen att få nätverka tillsammans med andra geeks. </p>
      </div>
    </div>
  </section>

   <!-- Talare
   ================================================== -->
  <section id='talare' class="darkgrayish">
    <div class="row responsive-headline">
      <h1>Talare</h1>
    </div>
  <div class="row responsive">
    <div class="three columns feature item">
	  <a href="#" onclick="openOverlay('sarkeesianoverlay', event)" >
		<div class="item-wrap">
			<img src="images/geeks/Anita-Sarkeesian.jpg" alt="Anita Sarkeesian" />
		</div>
		<h3 class="image-headline">Anita Sarkeesian</h3>
	  </a>
    </div>
    <div class="three columns feature item">
	  <a href="geeks/ceciliabeckfriis.php" onclick="openOverlay('beckfriisoverlay', event)" >
		<div class="item-wrap">
			<img src="images/geeks/friis.jpg" alt="Cecilia Beck-Friis" />
		</div>
		<h3 class="image-headline">Cecilia Beck-Friis</h3>
        <h4>Immersiv teknologi – från förändring till förnyelse</h4>
	  </a>
    </div>
    <div class="three columns feature item">
      <a href="geeks/mariakareliusson.php" onclick="openOverlay('kareliussonoverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/kareliusson_square.jpg" alt="Maria Kareliusson" />
		</div>
        <h3 class="image-headline">Maria Kareliusson</h3>
        <h4>Hack yourself – biohacking och mänsklig evolution</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('hofvanderoverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/siren.jpg" alt="Siren Hofvander"/>
		</div>
        <h3 class="image-headline">Siren Hofvander</h3>
        <h4>Säkerhet för alla</h4>
      </a>
    </div>
  </div>
	
  <h3>
		<a id="showSpeakers" href="#" onclick="toggleSpeakers(event);event.preventDefault();"><i class="icon-right-open"></i>Visa fler talare</a>
		<a id="hideSpeakers" href="#" onclick="toggleSpeakers(event);event.preventDefault();" class="hiddenByDefault"><i class="icon-down-open"></i>Visa färre talare</a>
	</h3>
  
	<div id="moreSpeakers" class="hiddenByDefault">
  <div class="row responsive">
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('demredoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/Annelie Demred.jpg" alt="Annelie Demred" />
        </div>
        <h3 class="image-headline">Annelie Demred</h3>
        <h4>Framtiden för live-video</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('idebrooverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/Idebro.jpg" alt="Maria Idebro"/>
		</div>
        <h3 class="image-headline">Maria Idebro</h3>
        <h4>Om världen varit jämställd hade jag hållit det här talet på Mars</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="geeks/siduripoli.php" onclick="openOverlay('polioverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/siduri_square.jpg" alt="Siduri Poli" />
		</div>
        <h3 class="image-headline">Siduri Poli</h3>
		<h4>Hur vi skapar en inkluderande framtid</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('kindlundhoverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/Eva-Kindlundh.jpg" alt="Eva Kindlundh" />
		</div>
        <h3 class="image-headline">Eva Kindlundh</h3>
        <h4>Kina – världens hetaste VR-marknad</h4>
      </a>
    </div>
  </div>
  
  <div class="row responsive">
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('nuzhdinaoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/nataliianuzhdina.jpg" alt="Nataliia Nuzhdina" />
        </div>
        <h3 class="image-headline">Nataliia Nuzhdina</h3>
        <h4>Why you will never call your grandma from Mars and other news from computer science</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('torneusoverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/Mimmi Torneus (Iteam).jpg" alt="Mimmi Torneus" />
		</div>
        <h3 class="image-headline">Mimmi Torneus</h3>
        <h4>Teknologi för hjärta och hjärna</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('evertssonverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/norrevik.jpg" alt="Lisa Evertsson Norrevik"/>
		</div>
		<h3 class="image-headline">Lisa Evertsson Norrevik<br/>(Geek Girl StartUp)</h3>
		<h4>Pitcha ditt företag till Geek Girls!</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('sandberglindhoverlay', event)">
		<div class="item-wrap">
			<img src="images/geeks/Linda Sandberg Helena Lindh.jpg" alt="Linda Sandberg & Helena Lindh" />
		</div>
        <h3 class="image-headline">Linda Sandberg<br/>& Helena Lindh</h3>
        <h4>Geek Evolution Quiz</h4>
      </a>
    </div>
  </div>
  
  <div class="row responsive">
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('hakanssonoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/hakansson.jpg" alt="Anne Håkansson"/>
        </div>
        <h3 class="image-headline">Anne Håkansson</h3>
        <h4>AI och framtiden</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('lindstromoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/lindstrom.jpg" alt="Nina Lindström" />
        </div>
        <h3 class="image-headline">Nina Lindström</h3>
        <h4>Growth by Making Technology</h4>
        <h4>Workshop: Skapa med kreativ teknik</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('borgenstiernaoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/borgenstierna.jpg" />
        </div>
        <h3 class="image-headline">Catharina Borgenstierna</h3>
        <h4>Robotik inom vård och omsorg</h4>
      </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('hallstromoverlay', event)">
        <div class="item-wrap">
          <img src="images/geeks/emma-hallstrom.jpg" alt="Emma Hällström"/>
        </div>
        <h3>Emma Hällström</h3>
        <h4>Från utbränd till entreprenör</h4>
      </a>
    </div>
  </div>
  
  <div class="row responsive">
    <div class="three columns feature item">
		<img src="images/geeks/Eyevinntalare.jpg" alt="Isebelle Jouper & Marilia Bognandi"/>
        <h3>Isabelle Jouper & Marilia Bognandi</h3>
        <h4>Videoteknik bakom kulisserna - utvecklingen och möjligheterna</h4>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('saraleioverlay', event)">
        <div class="item-wrap">
			<img src="images/geeks/saralei.jpg" alt="Sara Lei"/>
		</div>
		<h3>Sara Lei</h3>
		<h4>Framtidens arbetssätt i sjukvården</h4>
	  </a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('claudiaoverlay', event)">
        <div class="item-wrap">
					<img src="images/geeks/Olsson.jpg" alt="Claudia Olsson"/>
				</div>
				<h3>Claudia Olsson</h3>
				<h4>Exponential Technologies</h4>
			</a>
    </div>
    <div class="three columns feature item">
      <a href="#" onclick="openOverlay('geekgirlminioverlay', event)">
        <div class="item-wrap">
					<img src="images/geeks/geekgirlmini.jpg" alt="Geek Girl Mini-gänget"/>
				</div>
				<h3>Geek Girl Mini Sundsvall Crew</h3>
				<h4>We build the future!</h4>
			</a>
    </div>
  </div>
  <div class="row responsive">
    <div class="three columns feature item">
			<a href="#" onclick="openOverlay('whitehouseoverlay', event)">
        <div class="item-wrap">
					<img src="images/9.jpg"/>
				</div>
				<h3>Olivia Whitehouse</h3>
				<h4>Genus i entreprenörsskap</h4>
			</a>
    </div>
    <div class="five columns left">
      <h3>Hålla en programpunkt</h3>
      <p>Geek Evolution är en unconference, vilket innebär att deltagarna är med och skapar programmet! Schemat börjar bli fullt så vi kan inte garantera något, men om du har något intressant du vill berätta om i ett snabbt lightning talk, en skill du kan lära ut i en workshop eller något annat du vill dela med dig av till fellow geeks, <a href="#contact" class="smoothscroll">kontakta oss</a> så ser vi om det dyker upp en lucka!</p>
      <p>Du behöver inte ha någon scenvana, vi strävar efter att skapa en så peppig och trygg miljö som möjligt för de som vill testa stå på scen för första gången.</p>
    </div>
    <div class="four columns">
       <img width="256" alt="We Can Do It!" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/We_Can_Do_It%21.jpg/256px-We_Can_Do_It%21.jpg" alt="We Can Do It, via Wikimedia Commons"/>
    </div>
  </div>
	
	<h3>
		<a href="#stipendiet" onclick="toggleSpeakers(event)"><i class="icon-up-open"></i></i>Visa färre talare</a>
	</h3>
	
	</div>

  </section>
	
	<?php include 'includes/overlays.html';?>
   
   <!-- Elisabeth Tegner-stipendiet
   ================================================== -->
  <section id="stipendiet" class="lightgrayish">
    <div class="row responsive section-head">
      <div class="six columns right">
        <a href="http://cmeducations.se/elisabethtegner" target="_blank"><img src="../images/geeks/Elisabeth-Tegner.jpg" alt="Elisabeth Tegner-stipendiet" /></a>
      </div>
      <div class="six columns left">
        <h1>Elisabeth Tegner-stipendiet</h1>
        <p>Changemaker Educations stiftar i år Elisabeth Tegner Stipendiet – en utmärkelse som kommer att gå till en ung kvinna som gjort skillnad inom IT- eller spel-världen, och som inspirera andra att göra detsamma. Stipendiaten kommer tillkännages under Geek Girl Meetups riksevent och tilldelas en prissumma på 10 000 kr. <a href="http://cmeducations.se/elisabethtegner" target="_blank">Nominera din förebild här!</a></p>
      </div>
    </div>
  </section>
  
    <!-- Program
   ================================================== -->
  <section id="program" class="black">
    <div class="row section-head">
      <h1>Program</h1>
			<p>OBS: Programmet är preliminärt, allt kan förändras, uppdateras löpande!</p>
			<h3>
				<a id="showProgram" href="#" onclick="toggleProgram(event);event.preventDefault();"><i class="icon-right-open"></i>Visa programmet</a>
				<a id="hideProgram" href="#" onclick="toggleProgram(event);event.preventDefault();" class="hiddenByDefault"><i class="icon-down-open"></i>Dölj programmet</a>
			</h3>
			<div id="fullProgram" class="hiddenByDefault">
				<?php include 'includes/program.html';?>
				<h3>
					<a href="#moderatorer" onclick="toggleProgram(event)"><i class="icon-up-open"></i></i>Dölj programmet</a>
				</h3>
			</div>
		</div>  
  </section>
   
  <!-- Moderatorer
   ================================================== -->
  <section id="moderatorer" class="escheresque">
    <div class="row section-head">
      <h1>Moderatorer</h1>
    </div>
		<div class="row responsive">
			<div class="two columns feature item">
				<a href="#" onclick="openOverlay('schedvinoverlay', event)">
					<div class="item-wrap">
						<img src="images/geeks/schedvin.jpg" alt="Cecilia von Schedvin" />
					</div>
					<h3 class="image-headline">Cecilia von Schedvin</h3>
				</a>
			</div>
			<div class="two columns feature item">
				<a href="#" onclick="openOverlay('marianneolssonoverlay', event)">
					<div class="item-wrap">
						<img src="images/geeks/marianneolsson.jpg" alt="Marianne Olsson"/>
					</div>
					<h3 class="image-headline">Marianne Olsson</h3>
				</a>
			</div>
			<div class="two columns feature item">
				<a href="#" onclick="openOverlay('cronaoverlay', event)">
					<div class="item-wrap">
						<img src="images/geeks/crona.jpg" alt="Malin Crona"/>
					</div>
					<h3>Malin Crona</h3>
				</a>
			</div>
			<div class="two columns feature item">
				<a href="#" onclick="openOverlay('wilenoverlay', event)">
					<div class="item-wrap">
						<img src="images/geeks/Gitta.jpg" alt="Gitta Wilén"/>
					</div>
					<h3>Gitta Wilén</h3>
				</a>
			</div>
			<div class="two columns feature item">
				<a href="#" onclick="openOverlay('turessonoverlay', event)">
					<div class="item-wrap">
						<img src="images/geeks/petronella.jpg" alt="Petronella Turesson"/>
					</div>
					<h3>Petronella Turesson</h3>
				</a>
			</div>
			<div class="two columns feature item">
				<img src="images/11.jpg"/>
			</div>
		</div>
  </section>
   
   <!-- Sponsors
   ================================================== -->
  <section id="sponsors" class="whiteorange">
    <div class="row section-head ">
      <div class="twelve columns">
        <h1>Våra sponsorer</h1>
		<!--h2>Big Sister</h2>
        <div class="twelve columns sisters">
			<div class="twelve columns item">
				<a href="#" data-imagelightbox="a" target="_blank" >
					<img src="" alt="">
				</a>
			</div>
        </div-->
		<div class="row">
			<h3>Middle Sisters</h3>
			<div class="six columns sponsor">
				<a href="https://iteam.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/Iteam_black.png" alt="Iteam">
				</a>
			</div>
			<div class="six columns sponsor">
				<a href="https://www.academicwork.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/academic work_standard.png" alt="Academic Work">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="four columns sponsor">
				<a href="https://www.ideoninnovation.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/ideon_black.png" alt="Ideon Innovation">
				</a>
			</div>
			<div class="six columns">
				<div class="sponsor">
					<a href="https://www.klarna.com/se" data-imagelightbox="a" target="_blank" >
						<img src="images/sponsorer/Klarna-logo-blue.png" alt="Klarna">
					</a>
				</div>
				<div class="sponsor">
					<a href="http://www.eyevinntechnology.se/" data-imagelightbox="a" target="_blank" >
						<img src="images/sponsorer/eyevinn_black.png" alt="Eyevinn Technology">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="six columns sponsor centered">
				<a href="http://www.hiq.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/HiQ.png" alt="HiQ">
				</a>
			</div>
		</div>
		<div class="row">
			<h4>Little Sisters</h4>
			<div class="three columns sponsor">
				<a href="http://www.linkon.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/linkon.png" alt="Linkon">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="http://www.dynabyte.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/dynabyte_new.png" alt="Dynabyte">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="http://www.frojd.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/frojd.png" alt="Fröjd">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="https://www.knowit.se/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/Knowit.png" alt="Knowit">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="three columns sponsor">
				<a href="https://gastronaut.me/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/gastronaut.png" alt="Gastronaut">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="https://www.nordnet.se/mux/web/nordnet/index.html" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/nordnet.png" alt="Nordnet">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="https://www.google.com/intl/sv/about/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/google.png" alt="Google">
				</a>
			</div>
			<div class="three columns sponsor">
				<a href="http://www.aifloo.com/" data-imagelightbox="a" target="_blank" >
					<img src="images/sponsorer/aifloo.png" alt="Aifloo">
				</a>
			</div>
		</div>
        <div class="row twelve columns">
          <p>Vill du bli sponsor för Geek Evolution? <a href="#contact" class="smoothscroll">Kontakta oss!</a>
        </div>
      </div>
    </div>
  </section>
	
	<section id="festen" class="darkgrayish top-of-page">
		<div class="row responsive">
      <div class="seven columns right ">
        <h1>Festen</h1>
        <p><i>Efter att sista talaren tystnat lägger vi ner anteckningsblocken för en magisk kväll där vi kan dansa och mingla, nätverka med varandra och uppfinna nya sätt att pusha utvecklingen, förutse framtiden och göra science fiction till vardag.</i></p>
				<p>Nytt för i år är att festen är i samma lokaler, och vi håller det mer till ett mingel så våra geeks verkligen kan/hinner nätverka med varandra. Det innebär att vi inte släpper specifika festbiljetter, utan hela dagen och kvällen är enbart tillägnad våra geeks som <a href="https://www.picatic.com/geekevolution?utm_source=promotion&utm_medium=button&utm_campaign=105221" target="_blank">köper biljett</a> till eventet.</p>
				<p>Under kvällen blir vi underhållna av komikergruppen <a href="#" onclick="openOverlay('standupyoursoverlay', event)">Stand Up Yours</a>!</p>
      </div>
      <div class="five columns last-item item">
				<a href="#" onclick="openOverlay('standupyoursoverlay', event)">
					<div class="item-wrap">
						<img src="images/standupyours.jpg" alt="Stand Up Yours">
					</div>
				</a>
			</div>
		</div>
	</section>
   
   <!-- Lokal
   ================================================== -->
  <section id="lokal">
    <div class="row responsive">
      <div class="six columns left">
        <h1>Plats</h1>
        <p>I år kommer vi att hålla till i arkitektskolans gamla lokaler - <a href="http://www.ahousestockholm.com/" target="_blank">A house Stockholm</a>, Östermalmsgatan 26A. Enklaste sättet att ta sig hit är tunnelbanans röda linje till <b>Tekniska Högskolan</b>, södra uppgången.</p>
      </div>
      <div class="six columns right last-item">
        <iframe
          width="100%"
          height="auto"
          frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBRiXh_K4BuISkl9UQ-WMSag5spV1sysCo
          &q=A+house+Stockholm" allowfullscreen
          target="_blank">
        </iframe>
      </div>
    </div>
  </section>

   <!-- Footer
   ================================================== -->
  <footer>
    <div class="row">    
      <section id="ggmif" class="six columns">
        <div class="footer-logo">
          <a href="http://www.ggmif.com"><img src="images/ggm_logo.png" alt="GGMIF" /></a>
        </div>
        <p>Geek Girl Meetup Ideella Förening arbetar aktivt med att skapa och lyfta kvinnliga förebilder inom IT-branschen. Vårt mål är att skapa ett brett nätverk inom bland annat IT, spel och startup-världen. Och att ha kul såklart!</p>
        <p>Vi gör detta genom att låta våra medlemmar dela med sig av kunskap till andra. På så sätt vill vi skapa rätt förutsättningar för kunskapsutbyte och förhoppningsvis fler kontakter eller vänner inom sitt yrke eller hobby. Läs mer om Geek Girl Meetup Ideella Förening och tidigare års event på <a href="http://www.ggmif.com">ggmif.com</a>
        </p>
		<p>Självklart kan vi inte neka någon att köpa biljett, men vi vill att alla ska vara medvetna om att eventet riktar sig specifikt till kvinnor och geeks som inte är män. Eftersom stora delar av teknikvärlden (idag) är mansdominerad så vill vi gärna att män respekterar att vi strävar efter att skapa ett event och ett safe space för kvinnliga och geeky personer som har behov av just detta.</p>
      </section>
      <section id="contact" class="six columns">
        <p>Vill du nå oss? Skicka ett mail till <a href="mailto:info@ggmif.se">info@ggmif.se</a> eller använd kontaktformuläret.</p>
        <?php
        $action=$_REQUEST['action'];
        if ($action=="")    /* display the contact form */
        {
          ?>
          <form  action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="submit">
          <input name="email" type="text" value="" size="30" placeholder="Din epost"/><br>
          <textarea name="message" placeholder="Ditt meddelande"></textarea><br>
          <input type="submit" value="Kontakta oss"/>
          </form>
          <?php
        } 
        else                /* send the submitted data */
        {
          $email=$_REQUEST['email'];
          $message=$_REQUEST['message'];
          if (($email=="")||($message==""))
          {
            echo "Alla fält är obligatoriska, fyll i <a href=\"#contact\">formuläret</a> igen.";
          }
          else{        
            $from="From: $email\r\nReturn-path: $email";
            $subject="Meddelande från kontaktformulär på Geek Evolution-hemsidan";
            mail("rebecka.oefverholm@gmail.com", $subject, $message, $from);
            echo "Meddelande skickat!";
          }
        }  
        ?>
      </section>
      <p class="copyright">&copy; 2014 Woo | Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a> and <a href="http://www.linkedin.com/in/rebeckao">Rebecka Öfverholm</a></p>
      <div id="go-top">
        <a class="smoothscroll" title="Back to Top" href="#intro"><i class="icon-up-open"></i></a>
      </div>
    </div>
  </footer>

  <?php include 'includes/scripts.html';?>
</body>
</html>
