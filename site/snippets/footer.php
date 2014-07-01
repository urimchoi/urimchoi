  <footer>
    <?php echo kirbytext($site->copyright()) ?>
    <?php echo kirbytext($site->credit()) ?>
    <div class="clearfix"></div>
  </footer>

  <?php echo js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>
  <?php echo js('assets/scripts/jquery.scrollTo.min.js') ?>
  <?php echo js('assets/scripts/jquery.localScroll.min.js') ?>
  <?php echo js('assets/scripts/script.js') ?>
  <?php echo js('assets/scripts/animation.js') ?>


  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52441712-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

  </script>
</body>

</html>