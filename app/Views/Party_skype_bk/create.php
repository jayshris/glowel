<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <?= $this->include('partials/menu');


    ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">

            <?= $this->include('partials/page-title') ?>
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="settings-sub-header">
                  <h6>Add Party</h6>
                </div>
                <?= $this->include('Party/form.php') ?>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /Page Wrapper -->

  </div>
  <!-- /Main Wrapper -->

  <?= $this->include('partials/vendor-scripts') ?>

  <script>
    jQuery(document).ready(function($) {

      $("#business_type_id").on('change', function() {
        $("#target").empty();
        var level = $(this).val();
        if (level) {
          $.ajax({
            type: 'POST',
            url: 'get_flags_fields',
            data: {
              business_type: '' + level + ''
            },
            success: function(htmlresponse) {
              $('#target').append(htmlresponse);
            }
          });
        }
      });


      $.validate = function(flag_id) {

        $('#span_' + flag_id).html('');
        $('#submit-btn').removeAttr('disabled');

        var numbr = $('#num_' + flag_id).val();

        $.ajax({
          method: 'POST',
          url: 'validate_doc',
          data: {
            flag_id: flag_id,
            number: numbr
          },
          success: function(response) {
            if (response == '1') {
              $('#span_' + flag_id).html(' document number already exists !!');
              $('#submit-btn').attr('disabled', 'disabled');
            }
          }
        });

      }

    });
  </script>
</body>

</html>