@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'allservices?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Services</legend>
				{!! Form::hidden('id', $row['id']) !!}{!! Form::hidden('category_id', $row['category_id']) !!}{!! Form::hidden('parrent_id', $row['parrent_id']) !!}					
									  <div class="form-group row  " >
										<label for="Service Name" class=" control-label col-md-4 text-left"> Service Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='service_name' id='service_name' value='{{ $row['service_name'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Child Service" class=" control-label col-md-4 text-left"> Child Service </label>
										<div class="col-md-6">
										  <select name='child_id[]' multiple rows='5' id='child_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
										<div class="col-md-6">
										  <textarea name='short_description' rows='5' id='short_description' class='form-control form-control-sm '  
				           >{{ $row['short_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Details" class=" control-label col-md-4 text-left"> Details </label>
										<div class="col-md-6">
										  <textarea name='details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('image', $row['image']) !!}					
									  <div class="form-group row  " >
										<label for="Service Icone" class=" control-label col-md-4 text-left"> Service Icone </label>
										<div class="col-md-6">
										  <input  type='text' name='service_icone' id='service_icone' value='{{ $row['service_icone'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('add_info1', $row['add_info1']) !!}					
									  <div class="form-group row  " >
										<label for="Banner Image" class=" control-label col-md-4 text-left"> Banner Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="banner_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="banner_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["banner_image"],"/uploads/images/services") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Thumbnail" class=" control-label col-md-4 text-left"> Thumbnail </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="thumbnail" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="thumbnail-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["thumbnail"],"/uploads/images/services") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Video" class=" control-label col-md-4 text-left"> Video </label>
										<div class="col-md-6">
										  <input  type='text' name='video' id='video' value='{{ $row['video'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('parrent', $row['parrent']) !!}{!! Form::hidden('button_text', $row['button_text']) !!}{!! Form::hidden('button_url', $row['button_url']) !!}					
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
									  </div> {!! Form::hidden('add_info2', $row['add_info2']) !!}{!! Form::hidden('add_info3', $row['add_info3']) !!}{!! Form::hidden('add_info4', $row['add_info4']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}{!! Form::hidden('created_at', $row['created_at']) !!}</fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#child_id").jCombo("{!! url('allservices/comboselect?filter=child_service:id:title') !!}",
		{  selected_value : '{{ $row["child_id"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("allservices/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop