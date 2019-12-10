
<head>
  <?php include('include/_imports.php'); ?>
  
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	h2 {
    background-color: white;
		text-align: center;
		position: sticky;
		margin: 0;
		padding: 1%;
		top: 0px;
		width: 100%;

	}
	.drinks {
		padding: 0%;
		height: calc(100% - 60px - 4em);
		overflow-y: scroll;
	}

	.drinks img{
		display: block;
		max-width: 200px;
		max-height: 200px;
		width: auto;
		height: auto;
		text-align: center
		width: 50%;
		margin: 0 auto;
		float: left;
		padding: 0 15px;
	}

	.drinks li{
		text-align: left;
		margin-left: 175px;

	}

	.found{
		width: 100%;
		display: inline-block;
		text-align: center;
		border-bottom: 3px solid gray;
	}

	.stars {
		display: block;
		max-width: 172px;
		max-height: 172px;
		width: auto;
		height: auto;
		text-align: left;
		width: 100%;
		clear: left;
	}

	*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}



	
</style>
<html>
	<body>
  <div class="content">
    <h2>Strawberry Banana Smoothie</h2>
    <div class="drinks">
    	<div class="found">
    		
    				
    					<img src="https://www.spendwithpennies.com/wp-content/uploads/2014/01/SpendWithPennies-2-Strawberry-Banana-Smoothie-23.jpg">
    					<h4>Ingredients</h4>
    					<ul>
    						<li>1/2 Banana</li>
    						<li>10 Strawberries</li>
    						<li>1 cup Milk</li>
    						<li>2 Tbsp Sugar</li>
    						<li>Blend until satisfaction</li>
    					</ul>
    				
    				<div class="stars" id="s3">
    					<div class="rate">
						    <input type="radio" id="star52" name="rate3" value="5" />
						    <label for="star52" title="text">5 stars</label>
						    <input type="radio" id="star42" name="rate3" value="4" checked="checked"/>
						    <label for="star42" title="text">4 stars</label>
						    <input type="radio" id="star32" name="rate3" value="3" />
						    <label for="star32" title="text">3 stars</label>
						    <input type="radio" id="star22" name="rate3" value="2" />
						    <label for="star22" title="text">2 stars</label>
						    <input type="radio" id="star12" name="rate3" value="1" />
						    <label for="star12" title="text">1 star</label>
						</div>
    				</div>
    		

    	</div>
    	<div class="description">
    		<h5>About this Drink</h3>
    		<p>
    			This recipe is a fresh, delicious, and healthly version of a classic.  Quick and easy to make with common household ingredients!
    		</p>
    	</div>
    	<div class="calc">
    		
    	</div>


	</div>
	<div class="menu">
    <?php include('include/_menu.php'); ?>
    </div>
  </div>
	</body>
</html>
