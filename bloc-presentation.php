<?php
/**
 * Bloc de présentation de la page d'accueil.
 *
 * PHP Version 5.4
 *
 * @category Theme
 *
 * @author   Damien Senger <mail@damiensenger.me>
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GPL https://raw.githubusercontent.com/TC-Alsace/tcalsace-template/master/LICENSE
 *
 * @link     https://github.com/TC-Alsace/tcalsace-template
 * */
?>
<section id="bloc-presentation">
    <div id="kesako">
        <h2 class="lettrine">TC Alsace, késako ?</h2>
        <p>&Agrave; l’heure où les citoyens
        tendent à montrer a minima du scepticisme,
        au pire du dégout, vis-à-vis du débat politique partisan
        et de la conduite des affaires publiques, nous,
        membres de TC&nbsp;Alsace, sommes convaincus que l’intérêt des citoyens
        ne pourra qu’être suscité par la démonstration du caractère concret
        et constructif du débat politique.</p>
    </div><!--
 --><div id="next">
        <h2 class="lettrine">Prochaines dates</h2>
<?php echo do_shortcode(
    '[ics_events
    url="https://www.google.com/calendar/ical/'.
    'c6onmmlfu8h34a6mh8mmrh2q48%40group.calendar.google.com/public/basic.ics"
    nb="2" locale="fr_FR.utf8"
    noeventsmsg="Pas d\'événement prévu pour l\'instant."]'
); ?>
    </div>
</section>
