<style type="text/css">
  #img-upload{
    padding:0px;  
    width: 80px;
    height:120px; 
}
</style>
<!--script type="text/javascript">
  $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),  
            log = label;
        
        if( input.length ) {
            input.val(log);
        } 
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });

</script-->
<form class="form-horizontal" action="new_entry.php" method="post" style="margin-top:70px;">
  <fieldset>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="book_title">Title</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="book_title" name="book_title" type="text" placeholder="Your Book Name" class="form-control input-md" required="">
      </div>
    </div> 
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="book_description">Description</label>
      <div class="col-md-3 col-sm-4 col-xs-6">                     
        <textarea class="form-control" id="book_description" name="book_description" placeholder="Include the publisher, edition, subject"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="price">Price</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="price">Name</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="price">Email Id</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="name" name="email" type="text" placeholder="Email Id" class="form-control input-md" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="price">Contact No.</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="contact_no" name="contact_no" type="text" placeholder="Contact Number" class="form-control input-md" required="">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-4 col-sm-4 col-xs-3 control-label" for="price">Enter Your City</label>  
      <div class="col-md-3 col-sm-4 col-xs-6">
        <input id="city" name="city" type="text" placeholder="Your City" class="form-control input-md" required="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-3"></div>
      <input type="submit" class="btn btn-info col-md-2 col-sm-3 col-xs-5" value="Submit Button"/>
      <div class="col-md-6 col-sm-5 col-xs-4"></div>
    </div>
  </fieldset> 
</form>     
    <!--div class="form-group">
        <div class="col-lg-3"></div>
        <label class="col-lg-1">Image</label>
        <div class="input-group">
           
         <span class="btn btn-default btn-file">
          <img src="1.png" id="img-upload"/><input type="file" id="imgInp">
          </span>
        </div>
    </div-->

