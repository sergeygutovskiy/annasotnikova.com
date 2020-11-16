<meta content="width=device-width, initial-scale=1" name="viewport" />

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- swiper -->
<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- font-awesome -->
<link rel="stylesheet" href="fonts/font-awesome/css/all.css">
<!-- montserrat -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- cormorant -->
<link href="https://fonts.googleapis.com/css2?family=Cormorant:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bundle.css">

<!-- js scripts -->
<script>
	// swiper pagination renderer
	function custom_pagination_render (swiper, current, total) {
		return '<span>' + current + '</span>' 
			+ '<div></div>' 
			+ '<span>' + total + '</span>';
	}
</script>