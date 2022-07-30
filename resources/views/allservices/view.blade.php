@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2></div>

<div class="toolbar-nav">
	<div class="row">
		<div class="col-md-6 ">
			@if($access['is_add'] ==1)
	   		<a href="{{ url('allservices/'.$id.'/edit?return='.$return) }}" class="tips btn btn-default btn-sm  " title="{{ __('core.btn_edit') }}"><i class="fa  fa-pencil"></i></a>
			@endif
			<a href="{{ url('allservices?return='.$return) }}" class="tips btn btn-default  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
		</div>
		<div class="col-md-6 text-right">			
	   		<a href="{{ ($prevnext['prev'] != '' ? url('allservices/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-default  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
			<a href="{{ ($prevnext['next'] != '' ? url('allservices/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-default btn-sm "> <i class="fa fa-arrow-right"></i>  </a>					
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Category Id', (isset($fields['category_id']['language'])? $fields['category_id']['language'] : array())) }}</td>
						<td>{{ $row->category_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Parrent Id', (isset($fields['parrent_id']['language'])? $fields['parrent_id']['language'] : array())) }}</td>
						<td>{{ $row->parrent_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Child Id', (isset($fields['child_id']['language'])? $fields['child_id']['language'] : array())) }}</td>
						<td>{{ $row->child_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Service Name', (isset($fields['service_name']['language'])? $fields['service_name']['language'] : array())) }}</td>
						<td>{{ $row->service_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Service Icone', (isset($fields['service_icone']['language'])? $fields['service_icone']['language'] : array())) }}</td>
						<td>{{ $row->service_icone}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Short Description', (isset($fields['short_description']['language'])? $fields['short_description']['language'] : array())) }}</td>
						<td>{{ $row->short_description}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Details', (isset($fields['details']['language'])? $fields['details']['language'] : array())) }}</td>
						<td>{{ $row->details}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image', (isset($fields['image']['language'])? $fields['image']['language'] : array())) }}</td>
						<td>{{ $row->image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Banner Image', (isset($fields['banner_image']['language'])? $fields['banner_image']['language'] : array())) }}</td>
						<td>{{ $row->banner_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Thumbnail', (isset($fields['thumbnail']['language'])? $fields['thumbnail']['language'] : array())) }}</td>
						<td>{{ $row->thumbnail}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Video', (isset($fields['video']['language'])? $fields['video']['language'] : array())) }}</td>
						<td>{{ $row->video}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Parrent', (isset($fields['parrent']['language'])? $fields['parrent']['language'] : array())) }}</td>
						<td>{{ $row->parrent}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Button Text', (isset($fields['button_text']['language'])? $fields['button_text']['language'] : array())) }}</td>
						<td>{{ $row->button_text}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Button Url', (isset($fields['button_url']['language'])? $fields['button_url']['language'] : array())) }}</td>
						<td>{{ $row->button_url}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:status:id:title') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info1', (isset($fields['add_info1']['language'])? $fields['add_info1']['language'] : array())) }}</td>
						<td>{{ $row->add_info1}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info2', (isset($fields['add_info2']['language'])? $fields['add_info2']['language'] : array())) }}</td>
						<td>{{ $row->add_info2}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info3', (isset($fields['add_info3']['language'])? $fields['add_info3']['language'] : array())) }}</td>
						<td>{{ $row->add_info3}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Add Info4', (isset($fields['add_info4']['language'])? $fields['add_info4']['language'] : array())) }}</td>
						<td>{{ $row->add_info4}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
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
