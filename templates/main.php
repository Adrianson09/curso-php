<main>

    <section>
        <img style="border-radius: 16px;" src="<?= $poster_url; ?>" width=" 300" alt="Poster de <?= $title; ?>">
    </section>

    <hgroup>
        <h3><?= $title; ?> -
            <?= $until_message; ?> </h3>
        <p>Fecha de estreno: <?= $release_date; ?></p>
        <p> La siguiente es: <?= $following_production; ?></p>
    </hgroup>
</main>