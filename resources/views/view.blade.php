Here is view page, hello 
<?php 
	echo $hoten;
?>
{{ $tuoi }}
{{ asset('public/poster.jpg') }}
The current UNIX timestamp is {{ time() }}.
<img src="{{ asset('public/poster.jpg') }}" />
<marquee>{{ $tuoi }}</marquee>