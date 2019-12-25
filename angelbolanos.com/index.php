<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Upload Hub</title>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
      <meta http-equiv="Pragma" content="no-cache" />
      <meta http-equiv="Expires" content="0" />

      <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
      <script type="text/javascript" async>
        var div = document.createElement('div');
        return ('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)
        return 'FormData' in window;
        var isAdvancedUpload = function() {
          var div = document.createElement('div');
          return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
        }();
      </script>
      <script type="text/jQuery" async>
        var $form = $('.box');

        if (isAdvancedUpload) {
          $form.addClass('has-advanced-upload');
        }

        if (isAdvancedUpload) {

          var droppedFiles = false;

          $form.on('drag dragstart dragend dragover dragenter dragleave drop', function(e) {
            e.preventDefault();
            e.stopPropagation();
          })
          .on('dragover dragenter', function() {
            $form.addClass('is-dragover');
          })
          .on('dragleave dragend drop', function() {
            $form.removeClass('is-dragover');
          })
          .on('drop', function(e) {
            droppedFiles = e.originalEvent.dataTransfer.files;
          });

        }

      </script>
      <script type="text/jQuery" async>
        $form.on('submit', function(e) {
        if ($form.hasClass('is-uploading')) return false;

        $form.addClass('is-uploading').removeClass('is-error');

        if (isAdvancedUpload) {
          if (isAdvancedUpload) {
            e.preventDefault();

            var ajaxData = new FormData($form.get(0));

            if (droppedFiles) {
              $.each( droppedFiles, function(i, file) {
                ajaxData.append( $input.attr('name'), file );
              });
            }

            $.ajax({
              url: $form.attr('action'),
              type: $form.attr('method'),
              data: ajaxData,
              dataType: 'json',
              cache: false,
              contentType: false,
              processData: false,
              complete: function() {
                $form.removeClass('is-uploading');
              },
              success: function(data) {
                $form.addClass( data.success == true ? 'is-success' : 'is-error' );
                if (!data.success) $errorMsg.text(data.error);
              },
              error: function() {
                // Log the error, show an alert, whatever works for you
              }
            });
          }
        } else {
          if (isAdvancedUpload) {
            // ...
          } else {
            var iframeName  = 'uploadiframe' + new Date().getTime();
              $iframe   = $('<iframe name="' + iframeName + '" style="display: none;"></iframe>');

            $('body').append($iframe);
            $form.attr('target', iframeName);

            $iframe.one('load', function() {
              var data = JSON.parse($iframe.contents().find('body' ).text());
              $form
                .removeClass('is-uploading')
                .addClass(data.success == true ? 'is-success' : 'is-error')
                .removeAttr('target');
              if (!data.success) $errorMsg.text(data.error);
              $form.removeAttr('target');
              $iframe.remove();
            });
          }
        }
        });

        .on('drop', function(e) { // when drag & drop is supported
            droppedFiles = e.originalEvent.dataTransfer.files;
            $form.trigger('submit');
          });

          // ...

          $input.on('change', function(e) { // when drag & drop is NOT supported
            $form.trigger('submit');
          });
      </script>
      <link rel="stylesheet" href="CSS/core.css?v=1.0" type="text/css"/>
  </head>
  <body>
    <form class="box" method="post" action="" enctype="multipart/form-data">
      <div class="box__input">
        <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
        <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
        <button class="box__button" type="submit">Upload</button>
      </div>
      <div class="box__uploading">Uploading&hellip;</div>
      <div class="box__success">Done!</div>
      <div class="box__error">Error! <span></span>.</div>
    </form>

      <?php
        // ...
        die(json_encode([ 'success'=> $is_success, 'error'=> $error_msg]));
      ?>

  </body>
</html>
