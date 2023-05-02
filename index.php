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
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="./favicon.ico" />
  <link rel="stylesheet" href="./static/css/style.css" />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
  <title>Toon's homepage</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <h1>Welcome!</h1>
        <p>My name is Toon (a Dutch name, pronounced as <a href="https://en.wiktionary.org/wiki/Toon#Dutch">/ton/</a>). I am a mathematician with a profound interest in the intersection between computer science and mathematics. I love taking on challenges, these can be technical (like <a href="/thesis/">my PhD thesis</a> which I will defend at the end of June), or more approachable (like the animations you can find below). Challenges allow me to explore mathematics and computer-science. But they also test my ability to solve problems or explain and visualize ideas clearly.</p>

        <p>If you want to get to know me, let me give you a few suggestions:</p>
        <ul>
          <li>Take a look at <a href="/resume/">my resume</a>.</li>
          <li>I am not that skilled in keeping up with <emph>social media</emph>, but do get in touch on <a href="https://github.com/toonijn">GitHub</a>, <a href="https://twitter.com/toonijn">Twitter</a> or <a href="https://www.linkedin.com/in/toon-baeyens/">LinkedIn</a>.</li>
          <li>Or better yet, if you want to talk, email me: <a href="mailto:toon.baeyens@gmail.com">toon.baeyens@gmail.com</a>!</li>
        </ul>
        <p>Most of my (free) time is spent by exploring new creative ideas. Besides physically making things (origami, 3D-printing, electronics, wood-working, sewing...), I also love bringing virtual ideas to life. Below you can find some of the projects I worked on the last few years. Some of these projects were for a special occasion, others were simply things I wanted to try. They all have in common that I tried to make them visually interesting and let them tell their story. They also share that they are mostly undocumented. If you have any questions: just email me!</p>
        <p>
          I wish you the very best,<br />
          <span class="my-name">Toon Baeyens</span>
        </p>

        <h2 class="mt-5">Some of my projects</h2>
      </div>
    </div>
    <div class="row">
      <?php foreach ($data as $item) : ?>
        <div class="col-md-4 col-lg-3 col-sm-6 mb-3">
          <div class="card">
            <?php
            $image = get_image($item["img"]);
            if ($image) : ?>
              <img src="<?= $image ?>" alt="<?= $item["name"] ?>" class="card-img-top" />
            <?php endif;
            ?>
            <div class="card-body">
              <?php if ($item["info"]) : ?>
                <p><?= $item["info"] ?></p>
              <?php endif; ?>
              <?php if ($item["date"]) : ?>
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