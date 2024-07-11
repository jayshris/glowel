<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('partials/title-meta') ?>
  <?= $this->include('partials/head-css') ?>


</head>

<body>

  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <div class="content">
        <div class="row">
          <div class="col-md-12">

            <?= $this->include('partials/page-title') ?>
            <div class="row">
              <div class="col-xl-12 col-lg-12">

                <div class="settings-sub-header">
                  <h6>Add Business Type</h6>
                </div>
                <?= $this->include('BusinessType/form.php') ?>
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
    $(document).ready(function() {

      $.flags = function() {

        $('input.form-check-input[type="radio"]').removeAttr('required');

        $('input[name="flags[]"]:checked').each(function() {

          console.log($(this).val());

          $('#flag_' + $(this).val() + '_radio1').attr('required', 'required');

        })
      }


      $.flags();

    });
  </script>
</body>

</html>