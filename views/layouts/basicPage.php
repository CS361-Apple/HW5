<?php require_once("header.php"); ?>
<?php require_once("nav.php"); ?>

<body>
<!-- Page Intro -->
<div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="page-header">
          <h1><?php echo $pageName ?><small><?php if(isset($pageNameSmall)) { echo $pageNameSmall; } ?></small></h1>
        </div>
<!-- End Page Intro -->

<!-- Content -->
        <div id="content">
            <?php echo $layoutContent ?>
        </div>
    </div>
<div class="col-md-1"></div>
<!-- End Content -->



<?php require_once("footer.php"); ?>
