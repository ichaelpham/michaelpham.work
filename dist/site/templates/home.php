<?php snippet('header') ?>
<svg class="duotone-filters" xmlns="http://www.w3.org/2000/svg">
    <filter id="duotone_blue">
        <feColorMatrix type="matrix" result="gray"
            values="1 0 0 0 0
                    1 0 0 0 0
                    1 0 0 0 0
                    0 0 0 1 0" >
        </feColorMatrix>
        <feComponentTransfer color-interpolation-filters="sRGB" result="duotone">
            <feFuncR type="table" tableValues="1 0.00392157"></feFuncR>
            <feFuncG type="table" tableValues="1 0.00392157"></feFuncG>
            <feFuncB type="table" tableValues="1 0.21568627"></feFuncB>
            <feFuncA type="table" tableValues="0.5 1"></feFuncA>
        </feComponentTransfer>
    </filter>
</svg>
<div class="container">
    <div class="col__left col">
      <div class="inner-wrapper">
        <div class="browser__wrapper fade-in browser__desktop">
        <?php $counter = 0; ?>
        <?php foreach($page->children()->visible() as $subpage) : ?>
          <?php $counter++; ?>
          <?php if($subpage->img()->isNotEmpty()) : ?>
            <?php
              $image = $subpage->img()->toFile();
              $dataName = $subpage->title();
              $dataName = str_replace(' ', '-', $dataName);
              $dataName = strtolower($dataName);

            ?>
              <?php if($counter == 1) : ?>
                <div class="active <?= $dataName; ?>" title="<?= $image->name(); ?>">
              <?php else : ?>
                <div class="<?= $dataName; ?>" alt="<?= $image->name(); ?>">
              <?php endif ?>
                  <a href="<?= $subpage->link(); ?>" title="<?= $subpage->title(); ?>">
                    <img src="<?= $image->resize(1024, null)->url(); ?>" alt="<?= $image->name(); ?>">
                  </a>
                </div>
          <?php endif ?>
        <?php endforeach ?>
        </div>
        <div class="browser__wrapper fade-in browser__mobile">
          <?php foreach($page->children()->visible() as $subpage) : ?>
            <?php if($subpage->img()->isNotEmpty()) : ?>
              <?
                $image = $subpage->img()->toFile();
                $dataName = $subpage->title();
                $dataName = str_replace(' ', '-', $dataName);
                $dataName = strtolower($dataName);
              ?>
              <div class="slide__item">
                <a href="<?= $subpage->link(); ?>" title="<?= $subpage->title(); ?>">
                  <img src="<?= $image->resize(1024, null)->url(); ?>" alt="<?= $image->name(); ?>">
                </a>
              </div>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <div class="col__right col">
      <div class="inner-wrapper">
      <?php if($page->intro()->isNotEmpty()) : ?>
        <div class="about__wrapper fade-in">
            <?= $page->intro()->kirbytext() ?>
        </div>
      <?php endif; ?>
      <div class="project__wrapper fade-in">
          <!-- Current projects //-->
          <div class="project__list">
            <div class="project__row list__header">
              <div class="project__col">
                Recent projects
              </div>
            </div>
            <?php foreach($page->children()->visible() as $subpage) : ?>
              <div class="project__row list__item">
                  <div class="project__col">
                    <?php if($subpage->title()->isNotEmpty()) : ?>
                      <?php
                        $dataName = $subpage->title();
                        $dataName = str_replace(' ', '-', $dataName);
                        $dataName = strtolower($dataName);
                      ?>
                      <a class="project__url" title="<?= $subpage->title(); ?>" href="<?= $subpage->link(); ?>" id="<?= $dataName; ?>">
                        <?= $subpage->title()->html(); ?>
                    <?php endif ?>
                      <?php
                        $postYear = $subpage->year();
                        $newDate = date("Y", strtotime($postYear));
                      ?>
                      <span>
                        <?=  $newDate; ?>
                      </span>
                    </a>
                  </div>
                  <?php if($subpage->detail()->isNotEmpty()) : ?>
                    <div class="project__col project__design">
                      <?= $subpage->detail()->kirbytext() ?>
                    </div>
                  <?php endif ?>
              </div>
            <?php endforeach ?>
            <!-- Projects to come //-->
            <?php foreach ($page->children()->invisible() as $inv_subpage) :?>
            <div class="project__row list__item tba">
                <div class="project__col">
                  <p>Untitled
                    <?php
                      $postYear = $inv_subpage->year();
                      $newDate = date("Y", strtotime($postYear));
                    ?>
                    <span>
                      <?=  $newDate; ?>
                    </span>
                  </p>
                </div>
                <div class="project__col">
                  <p>Info coming soon</p>
                </div>
            </div>
          <?php endforeach ?>
          </div>
      </div>
    </div>
<?php snippet('footer') ?>
