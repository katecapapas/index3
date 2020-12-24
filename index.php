<!DOCTYPE html>
<html>
<style>
* {
	box-sizing: border-box;
}
h1{
	text-align: center;
	background-color: beige;
	color: black;
	font-family: Calibri;
	padding: 20px;

}
a{
	text-decoration:none;
	color: white;
	transition: 0.6s ease;
}
p{
	text-align: center;
	background-color: beige;
	color: black;
	font-family: Calibri;
	padding: 10px;

}
.outer-grid{
	display: flex;
	flex-wrap: wrap;
	padding: 0 4px;
}
.inner-grid{
	flex: 25%;
	max-width: 25%;
	padding: 0 4px;
}
.inner-grid img{
	margin-top: 8px;
	width: 100%;
	padding: 10px;
}
@media screen and (max-width: 800px){
	.inner-grid{
		flex: 50%;
		max-width: 50%;
	}
}
@media screen and (max-width: 600px){
	.inner-grid{
		flex: 100%;
		max-width: 100%;
	}
}
</style>
<body>
<h1>My Personal Photo Album</h1>
<div class ="outer-grid">
<div class ="inner-grid">
<a href ="hoami2.html">
<img src="image3.jpg">
<img src="elem1.jpg" height="400">
</div>

<div class="inner-grid">
<a href ="hoami3.html">
<img src="image2.jpg">
<img src="jhs.jpg" height="400">
</div>

<div class="inner-grid">
<a href ="hoami4.html">
<img src="image1.jpg">
<img src="shs.jpg" height="400">
</div>

<div class="inner-grid">
<a href ="hoami5.html">
<img src="image4.jpg">
<img src="college.jpg" height="400">
</div>
</div>
</body>
</html>