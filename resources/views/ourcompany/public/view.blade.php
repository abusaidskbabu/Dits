<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
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
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	