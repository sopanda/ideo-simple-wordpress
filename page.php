<?php 
/* 
Template name: Pojedyncza strona
*/
?>

<?php 
if(!is_front_page()) {
 get_header('new');
}
else {
 get_header();
}
?>

<div class="wrapper" style="background-color: #fefefe;">
	<div class="center-cont">
		<main>
			<div class="center-cont">
				<div class="text-center">
					<h2 class="subpage-h2-not-post">
					<img src="<?php the_field('icon_for_title'); ?>" alt="icon">
						<span class="subpage-title">
							<?php echo get_the_title(); ?>
						</span>
					</h2>
				</div>
			</div>
			<div class="center-cont wrap-single-page">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<div style="text-align: center;">
							<?php the_post_thumbnail( 'full', array("class" => "page-thumb im-responsive") ); ?>
						</div>
						<article>
							<br>
							<h5>PONAD 24 LATA DOŚWIADCZENIA</h5>
							<p>SIMPLE S.A. jest wiodącym w kraju producentem rozwiązań informatycznych do wspomagania zarządzania przedsiębiorstwami.
								Będąc producentem oprogramowania, dajemy pełną gwarancję dotyczącą jego działania oraz dostosowania do zmieniających
								się warunków biznesowych i przepisów prawa oraz szybkiej reakcji na zmieniające się potrzeby klientów.</p>
							<br>
						</article>
						<article>
							<h5>PONAD 3 500 KLIENTÓW</h5>
							<p>Działamy na polskim rynku producentówrozwiązań klasy ERP już od ponad 24 lat! Dostarczamy rozwiązania, które sprawdziły
								się w wielu zróżnicowanych branżach i doskonale znamy biznes naszych klientów. Nasza oferta dostosowana jest do potrzeb
								głównych sektorów polskiego rynku. Ze współpracy z nami skorzystało już blisko ponad 3,5 tysiąca firm.</p>
							<br>
						</article>
						<article>
							<h5>NASI ODBIORCY</h5>
							<p>Odbiorcami naszych rozwiązań są głównie firmy budowlane,przedsiębiorstwa produkcyjne, uczelnie wyższe, jednostki medyczne oraz firmy usługowe i handlowe. Widzimy i wspólnie
								wykorzystujemy możliwości jakie daje proces integracji Polski z Unią Europejską.
							</p>
							<br>
						</article>
						<article>
							<h5>ZINTEGROWANE ROZWIĄZANIA DLA KAŻDEJ BRANŻY</h5>
							<p>SIMPLE posiada kompleksowe rozwiązania, dedykowane największym sektorom naszej gospodarki. W naszej ofercie znajdą
								Państwo rozwiązania dla firm o różnych profilach działalności (produkcyjnym, budowlanym, usługowym, handlowym), dla
								uczelni wyższych, jednostek medycznych, instytutów badawczych czy jednostek rządowych. Nasze doświadczenia obejmują
								realizacje systemów dedykowanych pod indywidualne potrzeby klientów oraz integrację wszelkich rozwiązań wspomagających
								zarządzanie.
							</p>
							<br>
						</article>
						<article>
							<h5>CERTYFIKATY I REKOMENDACJE</h5>
							<p>SIMPLE S.A. posiada istotne na polskim rynku rekomendacje od Polskiego Towarzystwa Ekonomicznego oraz Stowarzyszenia
								Księgowych w Polsce, które potwierdzają, że oprogramowanie SIMPLE jest dostosowywane do zmieniających się polskich
								przepisów prawnych oraz wymagań Unii Europejskiej. &nbsp;Ponadto SIMPLE S.A. wprowadziło i stosuje system zarządzania
								jakością ISO 90001:2008 w zakresie: projektowania, produkcji i wdrażania systemów informatycznych, a także &nbsp;sprzedaż
								i instalacja sprzętu komputerowego oraz szkolenia.
							</p>
							<br>
							<p>Oprogramowanie SIMPLE zostało wyróżnione również: GAZELĄ BIZNESU, MEDALEM EUROPEJSKIM,&nbsp;statuetką TopBuilder&nbsp;oraz
								posiada status Microsoft Gold Certified Partner oraz BRE Partner Gold CERTIFICATE. &nbsp;Osiągnięte wyniki pozwoliły
								zająć SIMPLE S.A. 30 miejsce w rankingu DIAMENTÓW FORBESA dla województwa mazowieckiego. Firma SIMPLE otrzymała również
								tytuł "Najlepszy dostawca IT dla przemysłu 2010&nbsp;w kategorii ERP/MRP II (system polski)- producent".</p>
							<br>
						</article>
						<article>
							<h5>ZAWSZE BLISKO CIEBIE</h5>
							<p>SIMPLE S.A. wraz z Partnerami prowadzi szeroko zakrojoną sprzedaż do Klientów na terenie całego kraju. Chcemy być
								jak najbliżej naszych klientów, dlatego wciąż dążymy do poszerzania sieci naszej sprzedaży.Unią Europejską.
							</p>
						</article>
					</div>
			</div>
		</main>
	</div>
</div>
<!-- .wrapper-->

<?php get_sidebar(); ?>
<?php get_footer('sub'); ?>