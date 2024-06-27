jQuery(document).ready(function($) {
  $("#business_type_id").on('change', function() {
      $("#target").empty();
      var level = $(this).val();
      if(level){
             $.ajax ({
              type: 'POST',
              url: 'get_flags_fields',
              data: { business_type: '' + level + '' },
              success : function(htmlresponse) {
                  $('#target').append(htmlresponse);
               },error:function(e){
               alert("error");}
          });
      }
  });
});
