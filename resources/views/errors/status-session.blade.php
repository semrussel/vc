@if(session('message'))
	<div class="callout callout-success">
		<p>Successfully added {{ session('message') }}</p>
	</div>
@endif