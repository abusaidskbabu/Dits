

		 {!! Form::open(array('url'=>'ourcompany', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Our Company</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Sub Title" class=" control-label col-md-4 text-left"> Sub Title </label>
										<div class="col-md-6">
										  <input  type='text' name='sub_title' id='sub_title' value='{{ $row['sub_title'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <textarea name='description' rows='5' id='description' class='form-control form-control-sm '  
				         required  >{{ $row['description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Btn Text" class=" control-label col-md-4 text-left"> Btn Text </label>
										<div class="col-md-6">
										  <input  type='text' name='btn_text' id='btn_text' value='{{ $row['btn_text'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Btn Link" class=" control-label col-md-4 text-left"> Btn Link </label>
										<div class="col-md-6">
										  <input  type='text' name='btn_link' id='btn_link' value='{{ $row['btn_link'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Top Left Img" class=" control-label col-md-4 text-left"> Top Left Img </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="top_left_img" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="top_left_img-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["top_left_img"],"/uploads/images/company") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Top Right Img" class=" control-label col-md-4 text-left"> Top Right Img </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="top_right_img" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="top_right_img-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["top_right_img"],"/uploads/images/company") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Midle Img" class=" control-label col-md-4 text-left"> Midle Img </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="midle_img" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="midle_img-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["midle_img"],"/uploads/images/company") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Midle Video" class=" control-label col-md-4 text-left"> Midle Video </label>
										<div class="col-md-6">
										  <input  type='text' name='midle_video' id='midle_video' value='{{ $row['midle_video'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bottom Left Img" class=" control-label col-md-4 text-left"> Bottom Left Img </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="bottom_left_img" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="bottom_left_img-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["bottom_left_img"],"/uploads/images/company") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Bottom Right Img" class=" control-label col-md-4 text-left"> Bottom Right Img </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="bottom_right_img" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="bottom_right_img-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["bottom_right_img"],"/uploads/images/company") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( '1' => 'Active' ,  '2' => 'Inactive' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('created_at', $row['created_at']) !!}</fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
