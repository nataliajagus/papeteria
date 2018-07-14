<?php get_header(); ?>

    <section class="main-hero-dodatki">
        <div class="container">
            <div class="row">
                <h1 class="page-hero-title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

<section class="order">
    <div class="container">
        <div class="main-content">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="section-title order-title">Drodzy Państwo Młodzi</h3>
                    <p>Jest nam niezmiernie miło, że zdecydowaliście się na zamówienie.</p><br />
                    <p>Bardzo zależy nam na dostarczaniu usług najwyższej jakości i jak najlepszych doświadczeniach naszych Klientów, dlatego aby uniknąć możliwych nieporozumień, przed ostatecznym złożeniem zamówienia uprzejmie prosimy o zapoznanie się z sekcją <strong><a href="http://localhost:3000/wps/?page_id=87">Pytania i odpowiedzi</a></strong>.</p><br />
                    <p>Aby złożyć zamówienie prosimy o wiadomość mailową na adres <strong>slub@figaro.pl</strong> z następującymi informacjami:<br />
                        - Imię i nazwisko osoby zamawiającej<br />
                        - Numer telefonu<br />
                        - Numer wzoru zaproszenia (np. A01)<br />
                        - Wybrane dodatkowe warianty<br />
                        - Ewentualne uwagi / pytania
                    </p><br />
                    <p>Zwrotnie otrzymacie Państwo finalną wycenę zamówienia oraz dane do przelewu zaliczki. Po zaksięgowaniu zaliczki na koncie (lub otrzymaniu potwierdzenia przelewu) nasz grafik prześle wizualizację zaproszenia, a po jej akceptacji Państwa zamówienie zostanie zrealizowane w terminie wskazanym przy opisie wybranego wzoru.</p>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/document.svg" alt="Zaproszneia ślubne" class="order-img img-responsive" />
                    <h4 class="section-title order-h4">Pamiętajcie o zapoznaniu się z sekcją "Pytania i odpowiedzi"!</h4>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>