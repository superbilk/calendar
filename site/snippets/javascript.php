<?php echo js(array(
  'assets/js/jquery.min.js',
  'assets/js/bootstrap.min.js',
  'assets/js/imagesloaded.pkgd.min.js',
  'assets/js/masonry.pkgd.min.js'
)) ?>

<?php if($_SERVER["SERVER_NAME"] == 'localhost'): ?>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php endif; ?>
