@if(session('message'))
	<div class="callout callout-success">
		<p>Successfully {{ session('message') }}</p>
	</div>
@endif