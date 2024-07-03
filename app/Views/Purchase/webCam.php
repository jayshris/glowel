
 

<div class="row">
    <div class="col-md-6">
        <div id="my_camera" class="col-md-6"></div>
        <br/>
        <input type=button class="btn btn-light" value="Take Snapshot" onClick="take_snapshot()">
        <input type="hidden" name="image" id="image-tag" class="image-tag"> 
        <input type="hidden" id="cam_img"> 
    </div>
    <div class="col-md-6">
        <div id="results" style="padding-top: 26px;">Your captured image will appear here...</div>
    </div> 
</div>


<script language="JavaScript">
    Webcam.set({
        width: 200,
        height: 250,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach( '#my_camera' ); 
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $("#image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
    function saveCamImg(){
        var id = $("#cam_img").val();
        $("#input_camera_"+id).val($("#image-tag").val());
        $("#results_camera_"+id).html('<img src="'+$("#image-tag").val()+'"/>');
        $('#cam_modal_close_btn').trigger('click');
    } 
    
</script>