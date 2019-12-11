
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
		max-width: 150px;
		max-height: 150px;
		width: auto;
		height: auto;
		text-align: center
		width: 50%;
		margin: 0 auto;
	}

	ul.items li{
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
		text-align: center
		width: 50%;
		margin: 0 auto;

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
    <h2>Find a Combination</h2>
    <div class="drinks">
    	<ul class="items">
    		<li>
    				<a href ="#" style ="color:black">
    					<img src="https://feelgoodfoodie.net/wp-content/uploads/2019/01/Glowing-Green-Smoothie-7-500x500.jpg">
    					<h4>Green Smoothie</h4>
    					<p>User 1</p>

    				</a>
    				<div class="stars" id="s1">

    					<div class="rate">
						    <input type="radio" id="star5" name="rate1" value="5" />
						    <label for="star5" title="text">5 stars</label>
						    <input type="radio" id="star4" name="rate1" value="4" checked="checked"/>
						    <label for="star4" title="text">4 stars</label>
						    <input type="radio" id="star3" name="rate1" value="3" />
						    <label for="star3" title="text">3 stars</label>
						    <input type="radio" id="star2" name="rate1" value="2" />
						    <label for="star2" title="text">2 stars</label>
						    <input type="radio" id="star1" name="rate1" value="1" />
						    <label for="star1" title="text">1 star</label>
  						</div>
    				</div>
    		</li>
    		<li>
    				<a href ="#" style ="color:black">
    					<img src="https://www.cookingclassy.com/wp-content/uploads/2015/06/double-decker-tropical-avocado-smoothies2-srgb..jpg">
    					<h4>Tropical Avocado Smoothie</h4>
    					<p>User 2</p>
    				</a>
    				<div class="stars" id="s2">
    					<div class="rate">
						    <input type="radio" id="star51" name="rate2" value="5" />
						    <label for="star51" title="text">5 stars</label>
						    <input type="radio" id="star41" name="rate2" value="4" />
						    <label for="star41" title="text">4 stars</label>
						    <input type="radio" id="star31" name="rate2" value="3" />
						    <label for="star31" title="text">3 stars</label>
						    <input type="radio" id="star21" name="rate2" value="2" checked="checked"/>
						    <label for="star21" title="text">2 stars</label>
						    <input type="radio" id="star11" name="rate2" value="1" />
						    <label for="star11" title="text">1 star</label>
						  </div>
    				</div>
    		</li>
    		<li>
    				<a href ="foundDrink.php" style ="color:black">
    					<img src="https://www.spendwithpennies.com/wp-content/uploads/2014/01/SpendWithPennies-2-Strawberry-Banana-Smoothie-23.jpg">
    					<h4>Strawberry Banana Smoothie</h4>
    					<p>User 3</p>
    				</a>
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
    		</li>
    		<li>
    				<a href ="#" style ="color:black">
    					<img src="https://www.savorytooth.com/wp-content/uploads/2017/12/london-fog-13.jpg">
    					<h4>London Fog</h4>
    					<p>User 4</p>
    				</a>
    				<div class="stars" id="s4">
    					<div class="rate">
						    <input type="radio" id="star53" name="rate4" value="5" checked="checked"/>
						    <label for="star53" title="text">5 stars</label>
						    <input type="radio" id="star43" name="rate4" value="4" />
						    <label for="star43" title="text">4 stars</label>
						    <input type="radio" id="star33" name="rate4" value="3" />
						    <label for="star33" title="text">3 stars</label>
						    <input type="radio" id="star23" name="rate4" value="2" />
						    <label for="star23" title="text">2 stars</label>
						    <input type="radio" id="star13" name="rate4" value="1" />
						    <label for="star13" title="text">1 star</label>
						</div>
    				</div>
    		</li>
    		<li>
    				<a href ="#" style ="color:black">
    					<img src="https://assets.marthastewart.com/styles/wmax-300/d20/mld106029_0810_frape/mld106029_0810_frape_vert.jpg?itok=YLf0ensK">
    					<h4>Frappe</h4>
    					<p>User 5</p>
    				</a>
    				<div class="stars" id="s5">
    					<div class="rate">
						    <input type="radio" id="star54" name="rate5" value="5" />
						    <label for="star54" title="text">5 stars</label>
						    <input type="radio" id="star44" name="rate5" value="4" />
						    <label for="star44" title="text">4 stars</label>
						    <input type="radio" id="star34" name="rate5" value="3" checked="checked"/>
						    <label for="star34" title="text">3 stars</label>
						    <input type="radio" id="star24" name="rate5" value="2" />
						    <label for="star24" title="text">2 stars</label>
						    <input type="radio" id="star14" name="rate5" value="1" />
						    <label for="star14" title="text">1 star</label>
						</div>
    				</div>
    		</li>

    	</ul>

	</div>
	<div class="menu">
    <?php include('include/_top_menu.php'); ?>
    <?php include('include/_bottom_menu.php'); ?>
    </div>
  </div>
	</body>
</html>
