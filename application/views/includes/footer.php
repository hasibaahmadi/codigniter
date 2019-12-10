//footer.php
<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>"
rel="stylesheet">
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages
load faster -->
<h1> <?php echo mb_convert_case(lang('footer'), MB_CASE_TITLE) ?></h1>
 <!-- js placed at the end of the document so the pages load faster -->
 <script src="<?= base_url()?>file/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>file/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="<?= base_url()?>file/include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?= base_url()?>file/lib/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url()?>file/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="<?= base_url()?>file/lib/common-scripts.js"></script>
  <!--script for this page-->
</body>
</html>