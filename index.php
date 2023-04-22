<?php
require_once("lib/spyc.php");

$data = Spyc::YAMLLoad("data.yaml");

function get_image($id)
{
    foreach (["png", "jpg"] as $extension) {
        $name = "static/media/" . $id . "." . $extension;
        if (file_exists($name)) {
            return $name;
        }
    }
    return false;
}
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./favicon.ico" />
    <link
      rel="stylesheet"
      href="./static/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    />
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,shrink-to-fit=no"
    />
    <title>Numerical mathematics</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Mijn kunstwerken</h1>
          <p>
            Welkom!
          </p>
          <p>
            Op deze pagina vindt u een overzicht van enkele van mijn vele projecten. Elk project is uniek, in die zin dat bij elk project een verhaal hoort. Sommige projecten zijn tot stand gekomen voor een speciale gelegenheid, anderen zijn ontwikkeld vanuit mijn eigen nieuwsgierigheid. Daarnaast zijn er ook ideeën die aangebracht zijn door anderen.
          </p>
          <p>
            U zal snel merken dat vele projecten niet zo heel gebruiksvriendelijk zijn (laat staan mobiel werken). Deze applicaties zijn steeds in de eerste plaats voor mezelf ontwikkeld.
          </p>
          <p>
            Mijn interesses liggen in de numerieke wiskunde. Meer bepaald probeer ik (vaak continue) wiskunde in de computer te krijgen. Hiervoor gebruik ik graag de volle rekenkracht die beschikbaar is. Hierbij is dan natuurlijk de GPU onmisbaar. Omdat deze projecten soms gebruik maken van nieuwe webtechnologieën (webgl, webassembly, webworkers...) is het aangeraden om hiervoor een moderne browser te gebruiken (chrome of firefox).
          </p>
          <p>
            Als u vragen of suggesties heeft kan u me steeds contacteren via <a href="mailto:toon.baeyens@ugent.be">toon.baeyens@ugent.be</a>.
          </p>
          <p>
            Veel wiskunde plezier,<br />
            Toon Baeyens
          </p>
        </div>
      </div>
      <div class="row">
        <?php foreach ($data as $item): ?>
          <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
            <div class="card">
              <?php
              $image = get_image($item["img"]);
              if ($image): ?>
                <img src="<?= $image ?>"
                  alt="<?= $item["name"] ?>"
                  class="card-img-top" />
              <?php endif;
              ?>
              <div class="card-body">
                <?php if ($item["info"]): ?>
                  <p><?= $item["info"] ?></p>
                <?php endif; ?>
                <?php if ($item["date"]): ?>
                  <p class="text-right"><small class="text-muted"><?= $item["date"] ?></small></p>
                <?php endif ?>
                <a href="<?= $item['src'] ?>" class="stretched-link">
                  <?= $item['name'] ?>
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>
