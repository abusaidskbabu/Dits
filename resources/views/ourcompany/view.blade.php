@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('ourcompany/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('ourcompany?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('ourcompany/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('ourcompany/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
		</div>	

		
		
	</div>
</div>
<div class="p-5">		

	<div class="table-responsive">
		<table class="table table-striped table-bordered " >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sub Title', (isset($fields['sub_title']['language'])? $fields['sub_title']['language'] : array())) }}</td>
						<td>{{ $row->sub_title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['title']['language'])? $fields['title']['language'] : array())) }}</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) }}</td>
						<td>{{ $row->description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Btn Text', (isset($fields['btn_text']['language'])? $fields['btn_text']['language'] : array())) }}</td>
						<td>{{ $row->btn_text}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Btn Link', (isset($fields['btn_link']['language'])? $fields['btn_link']['language'] : array())) }}</td>
						<td>{{ $row->btn_link}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Top Left Img', (isset($fields['top_left_img']['language'])? $fields['top_left_img']['language'] : array())) }}</td>
						<td>{{ $row->top_left_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Top Right Img', (isset($fields['top_right_img']['language'])? $fields['top_right_img']['language'] : array())) }}</td>
						<td>{{ $row->top_right_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Midle Img', (isset($fields['midle_img']['language'])? $fields['midle_img']['language'] : array())) }}</td>
						<td>{{ $row->midle_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Midle Video', (isset($fields['midle_video']['language'])? $fields['midle_video']['language'] : array())) }}</td>
						<td>{{ $row->midle_video}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bottom Left Img', (isset($fields['bottom_left_img']['language'])? $fields['bottom_left_img']['language'] : array())) }}</td>
						<td>{{ $row->bottom_left_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bottom Right Img', (isset($fields['bottom_right_img']['language'])? $fields['bottom_right_img']['language'] : array())) }}</td>
						<td>{{ $row->bottom_right_img}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:status:id:title') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	

	</div>

</div>
@stop
