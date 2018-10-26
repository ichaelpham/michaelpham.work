    <footer class="footer fade-in">
      <div class="footer__bar">
        <?php if($page->hasTemplate() == 'home'): ?>
          <div class="footer__link updater">
            <span>&#x270E;</span>
            <?php
            $file = 'assets/css/bundle.css';
            if (file_exists($file)) {
                echo "Last updated: " . date ("F Y", filemtime($file));
            }
            ?>
            </div>
        <?php endif ?>

        </div>
      </div>
    </footer>
  </div>
</div>
<?= js('assets/scripts/bundle.js') ?>
</body>
</html>
