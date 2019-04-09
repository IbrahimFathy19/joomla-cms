<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!doctype html>
<html lang="en">
    <head>    
    
        <jdoc:include type="head" />

        <!-- Bootstrap core CSS -->
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/template.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
       

  </head>

  <body>

    <!--Header of the page-->
    <header class="" id="header">
        <div class="row flex-nowrap justify-content-between align-items-center w-100">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <h1 class="h1 my-0 py-0">
                    <a class="header-logo text-dark" href="<?php echo $this->params->get('siteTitle'); ?>
                    </a>
                </h1>
            </div>
            <div class="col-4">
                </div>
        </div>
    </header><!-- /.header -->

    <!--Top Navbar-->
    <nav class="navbar navbar-default navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-left">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div id="navbar-left" class="mr-auto navbar-collapse collapse">
                <jdoc:include type="modules" name="menu-left" style="none"/>
            </div>
            
            <div class="d-none d-lg-block">
                <form class="form-inline navbar-nav justify-content-end">
                    <jdoc:include type="modules" name="menu-right" style="none"/>                    
                </form>
            </div>
        </div>
    </nav> <!-- /.nav -->

    <!--Jumbotron-->
    <div class="jumbotron mb-1">
        <div class="container"> 
        <?php if ($this->countModules('showcase')) : ?>
            <jdoc:include type="modules" name="sidebar-left" style="default" />
        <?php endif; ?>
        </div>
    </div><!-- /.Jumbotron -->

   


    <!--Main content-->
    <main role="main" class="container my-5">
        
        
        <div class="row">
            
            <!--Left Column-->
            <?php if ($this->countModules('sidebar-left')) : ?>
            <div class="col-md-3 d-none d-md-block">
                <jdoc:include type="modules" name="sidebar-left" style="default" />
            </div>
            <?php endif; ?>

            
            <!--Content-->
            <div class="col-md-6 d-sm-block main-content">
                    
                <div class="container-component">
                    <jdoc:include type="modules" name="breadcrumbs" style="none" />
                    <jdoc:include type="modules" name="main-top" style="cardGrey" />
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                    <jdoc:include type="modules" name="main-bottom" style="cardGrey" />
                </div>
                    
            </div><!-- /.Content -->


            <!--Right Column-->
            <?php if ($this->countModules('sidebar-right')) : ?>
            <div class="col-md-3 d-none d-md-block">
                <jdoc:include type="modules" name="sidebar-right" style="default" />
            </div>
            <?php endif; ?>

        </div><!-- /.row -->
    </main><!-- /.container -->

    <!--Footer for the page-->
    <?php if ($this->countModules('footer')) : ?>
    <footer class="fixed-buttom footer">
        <p>Bussiness Template built for Joomla! 4 by <a href="mailto:ibrahim_fathy@outook.com"></a>@ibrahim_fathy</a>.</p>
        <p>
            <a href="#header">Back to top</a>
        </p>
        <jdoc:include type="modules" name="footer" style="none" />
    </footer>
	<?php endif; ?>


    <!-- Include Jquery script-->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.min.js"></script>
    <!-- Include Bootstrap JS script-->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>

</body>
</html>