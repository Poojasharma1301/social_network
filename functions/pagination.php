<style>
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
	<?php 
	
	$query = "select * from posts";
	
	$result = mysqli_query($con, $query);
	
	// Count the total records
	$total_posts = mysqli_num_rows($result);
	
	//Using ceil function to divide the total records on per page
	$total_pages = ceil($total_posts / $per_page);
	
	//Going to first page
	echo "
	<center>
	<div class='pagination'>
	<a href='home.php?page=1'>First Page</a>
	";
	
	for ($i=1; $i<=$total_pages; $i++) {
	echo "<a href='home.php?page=$i'>$i</a>";
	}
	// Going to last page
	echo "<a href='home.php?page=$total_pages'>Last Page</a></center></div>";
	
	?>