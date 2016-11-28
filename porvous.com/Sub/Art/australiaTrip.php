<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Australia | Gallery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <meta HTTP-EQUIV="Expires" CONTENT="-1">
        
        <!-- BOOTSTRAP -->
            <!-- BASICS  -->
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <!-- IMAGE GALLERY -->
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
            <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
        
        
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=IM+Fell+French+Canon:400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
        
        <style>
        </style>
    </head>
    <body>

                            <!-- The Bootstrap Image Gallery lightbox [DON'T MODIFY] -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  GALLERY  IMAGES  -->
                            <div id="links" class="galleryContainer">
                              <?php  
                              
                                 $gallery = 48;
                              
                                 for($i=1; $i<= $gallery; $i++):
                              ?>
                                <div class="img-container"><a href="GFX/artGFX/Australia/trip (<?php echo $i ?>).jpg" data-gallery>
        <figure><img src="GFX/artGFX/Australia/trip (<?php echo $i ?>).jpg" alt="" title="" class="img-responsive" /></figure>
    </a></div>
                                
                             <?php endfor; ?>   
                            </div>
                        </article>
                    </section>   
                </div>
            </div>
        </div>
        
        <!-- IMAGE GALLERY SCRIPT LIBRARIES -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
    </body>
</html>