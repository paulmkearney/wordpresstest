<?php
$templatePart1 = "<h1 class='section-heading'>Casino List PHP Version</h1>
<div class='cmp-casinolist '>
<div class='cmp-casinolist-container'>
<table class='cmp-casinolist-table'>
<thead>
 <tr>
     <th><span class='table-heading'>Casino</span></th>
     <th><span class='table-heading'>Bonus</span></th>
     <th><span class='table-heading'>Features</span></th>
     <th><span class='table-heading'>Play</spa></th>
 </tr>
</thead>
<tbody>
 ";

$templatePart2 = "
</tbody>	
</table>

</div>
</div>";

$threeStars = "<span class='star-rating' aria-label='four star rating'>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path fill='#D29F39' d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path fill='#D29F39' d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
							</span>";
		$fourStars = "<span class='star-rating' aria-label='four star rating'>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path fill='#D29F39' d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
							</span>";
	$fiveStars = "<span class='star-rating' aria-label='five star rating'>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
								<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'>
									<path d='M0 0h24v24H0z' fill='none'></path>
									<path fill='#D29F39' d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'></path>
									<path d='M0 0h24v24H0z' fill='none'></path>
								</svg>
							</span>";
?>