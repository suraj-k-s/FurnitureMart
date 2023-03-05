


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Furniture Mart:Search Product</title>
<?php
ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
?>
<link rel="stylesheet" href="../Assets/Template/Search/bootstrap.min.css">
<style>
            .custom-alert-box{
				z-index:1;
                width: 20%;
                height: 10%;
                position: fixed;
                bottom: 0;
                right: 0;
                left: auto;
            }

            .success {
                color: #3c763d;
                background-color: #dff0d8;
                border-color: #d6e9c6;
                display: none;
            }

            .failure {
                color: #a94442;
                background-color: #f2dede;
                border-color: #ebccd1;
                display: none;
            }

            .warning {
                color: #8a6d3b;
                background-color: #fcf8e3;
                border-color: #faebcc;
                display: none;
            }
			
			
			

.container price-range {
  max-width: 300px;
  margin-left: auto;
  margin-right: auto;
}

/* Price Range */
price-range {
  --thumb-size: 15px;
  --thumb-color: #000;
  --thumb-shadow-size: 5px;
  --track-size: 1px;
  --track-color: #bbb;
  --track-highlight-color: #000;

  width: 100%;
  display: block;
}

/* Price Range Containers */
price-range > div {
  position: relative;
  width: 100%;
  height: var(--thumb-size);
}
price-range > div > div {
  width: 100%;
  height: var(--track-size);
  background: var(--track-color);
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
}

/* Price Range Input */
price-range input[type="range"] {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width: 100%;
  margin: 0;
  padding: 0;
  background: transparent;
  border: none;
  outline: none;
  pointer-events: none;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
}

/* Price Range Input Track */
price-range input[type="range"]::-webkit-slider-runnable-track {
  -webkit-appearance: none;
  height: 5px;
}
price-range input[type="range"]::-moz-range-track {
  -moz-appearance: none;
  height: 5px;
}
price-range input[type="range"]::-ms-track {
  appearance: none;
  height: 5px;
}

/* Price Range Input Thumb */
price-range input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  margin-top: -5px;
  width: var(--thumb-size);
  height: var(--thumb-size);
  background: var(--thumb-color);
  border: none;
  border-radius: 50%;
  pointer-events: auto;
  cursor: pointer;
  box-shadow: 0 0 0 0 var(--thumb-color);
  transition: box-shadow 0.15s ease;
}
price-range input[type="range"]::-moz-range-thumb {
  -moz-appearance: none;
  width: var(--thumb-size);
  height: var(--thumb-size);
  background: var(--thumb-color);
  border: none;
  border-radius: 50%;
  pointer-events: auto;
  cursor: pointer;
  box-shadow: 0 0 0 0 var(--thumb-color);
  transition: box-shadow 0.15s ease;
}
price-range input[type="range"]::-ms-thumb {
  appearance: none;
  width: var(--thumb-size);
  height: var(--thumb-size);
  background: var(--thumb-color);
  border: none;
  border-radius: 50%;
  pointer-events: auto;
  cursor: pointer;
  box-shadow: 0 0 0 0 var(--thumb-color);
  transition: box-shadow 0.15s ease;
}

price-range input[type="range"]::-webkit-slider-thumb:hover {
  box-shadow: 0 0 0 var(--thumb-shadow-size) var(--thumb-color);
}
price-range input[type="range"]::-moz-range-thumb:hover {
  box-shadow: 0 0 0 var(--thumb-shadow-size) var(--thumb-color);
}
price-range input[type="range"]::-ms-thumb:hover {
  box-shadow: 0 0 0 var(--thumb-shadow-size) var(--thumb-color);
}

/* Price Range Output */
price-range output {
  display: block;
  margin-top: 1rem;
  text-align: center;
}

			
			
        </style>
</head>

<body onload="productCheck()">
        <div class="custom-alert-box">
            <div class="alert-box success">Successful Added to Cart !!!</div>
            <div class="alert-box failure">Failed to Add Cart !!!</div>
            <div class="alert-box warning">Already Added to Cart !!!</div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <h5>Filter Product</h5>
                    <hr>
                    <div class="container">
 
  <price-range currency="₹">
    <div>
      <div>
        <input
          name="price-from"
          type="range"
          min="0"
          max="10000"
          step="1"
          value="250"
          aria-label="From"
        />
        <input
          name="price-to"
          type="range"
          min="0"
          max="50000"
          step="1"
          value="45000"
          aria-label="To"
        />
      </div>
    </div>
    <output>
      output
    </output>
  </price-range>
  
</div>
                    <h6 class="text-info"> Select Category</h6>
                    <ul class="list-group">
                        <?php                           
						 $selCat = "SELECT * from tbl_category";
                            $result = $Conn->query($selCat);
                            while ($row=$result->fetch_assoc()) {
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" onclick="changeSub(),productCheck()" class="form-check-input product_check" value="<?php echo $row["category_id"]; ?>" id="category"><?php echo $row["category_name"]; ?>
                                </label>
                            </div>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                    <br/>
                   
                    <br />
                    <h6 class="text-info"> Select Sub Category</h6>
                    <ul class="list-group" id="subcat">
                       
                    </ul>
                	</div>
                	<div class="col-lg-9">
                    <h5 class="text-center" id="textChange">All Products</h5>
                    <hr>
                    <div class="text-center">
                        <img src="../Assets/Template/Search/loader.gif" id='loder' width="200" style="display: none"/>
                    </div>
                    <div class="row" id="result">
                    </div>

                </div>

            </div>
                        </div>
<script src="../Assets/Template/Search/jquery.min.js"></script>
        <script src="../Assets/Template/Search/bootstrap.min.js"></script>
<script src="../Assets/Template/Search/popper.min.js"></script>
        <script>
		
		var minValue = "0";
		var maxValue = "50000";

class PriceRange extends HTMLElement {
  constructor() {
    super();

    console.log("Price Range: Constructor", this);
  }

  connectedCallback() {
    // Elements
    this.elements = {
      container: this.querySelector("div"),
      track: this.querySelector("div > div"),
      from: this.querySelector("input:first-of-type"),
      to: this.querySelector("input:last-of-type"),
      output: this.querySelector("output")
    };

    // Event listeners
    this.elements.from.addEventListener("input", this.handleInput.bind(this));
    this.elements.to.addEventListener("input", this.handleInput.bind(this));

    // Properties
    this.currency =
      this.hasAttribute("currency") &&
      this.getAttribute("currency") !== undefined &&
      this.getAttribute("currency") !== ""
        ? this.getAttribute("currency")
        : "£";

    // Update the DOM
    this.updateDom();

    console.log("Price Range: Connected", this);
  }

  disconnectedCallback() {
    delete this.elements;
    delete this.currency;

    console.log("Price Range: Disconnected", this);
  }

  get from() {
    return parseInt(this.elements.from.value);
  }
  get to() {
    return parseInt(this.elements.to.value);
  }

  handleInput(event) {
    if (
      parseInt(this.elements.to.value) - parseInt(this.elements.from.value) <=
      1
    ) {
      if (event.target === this.elements.from) {
        this.elements.from.value = parseInt(this.elements.to.value) - 1;
      } else if (event.target === this.elements.to) {
        this.elements.to.value = parseInt(this.elements.from.value) + 1;
      }
    }

    // Update the DOM
    this.updateDom();
	
	minValue = this.elements.from.value;
	maxValue = this.elements.to.value;
	
	
					

                    var action = 'data';
                    var category = get_filter_text('category');
                    var subcategory = get_filter_text('subcategory');
					var brand = get_filter_text('brand');


                    $.ajax({
                        url: "../Assets/AjaxPages/AjaxSearchProduct.php?action=" + action +"&category=" + category+"&subcategory=" + subcategory +"&brand=" + brand+"&min=" + minValue+"&max=" + maxValue,
                        success: function(response) {
                            $("#result").html(response);
                            $("#loder").hide();
                            $("#textChange").text("Filtered Products");
                        }
                    });


	
	
	
	

    console.log("Price Range: Updated!!", {
      from: parseInt(this.elements.from.value),
      to: parseInt(this.elements.to.value)
    });
  }

  updateDom() {
    this.drawFill();
    this.drawOutput();
  }

  drawFill() {
    const percent1 = (this.elements.from.value / this.elements.from.max) * 100,
      percent2 = (this.elements.to.value / this.elements.to.max) * 100;

    this.elements.track.style.background = `linear-gradient(to right, var(--track-color) ${percent1}%, var(--track-highlight-color) ${percent1}%, var(--track-highlight-color) ${percent2}%, var(--track-color) ${percent2}%)`;
  }

  drawOutput() {
    this.elements.output.textContent = `${this.currency}${this.elements.from.value} - ${this.currency}${this.elements.to.value}`;
  }
}

customElements.define("price-range", PriceRange);

function changeSub()
            {
                var cat = get_filter_text('category');
                if (cat.length !== 0)
                {
                    $.ajax({
                        url: "../Assets/AjaxPages/AjaxSearchSubCat.php?data=" + cat,
                        success: function(response) {
                            $("#subcat").html(response);
                        }
                    });

                }
                else
                {
                    $("#subcat").html("");
                }


                function get_filter_text(text_id)
                {
                    var filterData = [];

                    $('#' + text_id + ':checked').each(function() {
                        filterData.push("\'" + $(this).val() + "\'");
                    });
                    return filterData;
                }
            }

            function addCart(id)
            {
                $.ajax({
                    url: "../Assets/AjaxPages/AjaxAddCart.php?id=" + id,
                    success: function(response) {
                        if (response.trim() === "Added to Cart")
                        {
                            $("div.success").fadeIn(300).delay(1500).fadeOut(400);
                        }
                        else if (response.trim() === "Already Added to Cart")
                        {
                            $("div.warning").fadeIn(300).delay(1500).fadeOut(400);
                        }
                        else
                        {
                            $("div.failure").fadeIn(300).delay(1500).fadeOut(400);
                        }
                    }
                });
            }


            function productCheck(){
                    $("#loder").show();
					

                    var action = 'data';
                    var category = get_filter_text('category');
                    var subcategory = get_filter_text('subcategory');
					var brand = get_filter_text('brand');


                    $.ajax({
                        url: "../Assets/AjaxPages/AjaxSearchProduct.php?action=" + action +"&category=" + category+"&subcategory=" + subcategory +"&brand=" + brand+"&min=" + minValue+"&max=" + maxValue,
                        success: function(response) {
                            $("#result").html(response);
                            $("#loder").hide();
                            $("#textChange").text("Filtered Products");
                        }
                    });


                }



                function get_filter_text(text_id)
                {
                    var filterData = [];

                    $('#' + text_id + ':checked').each(function() {
                        filterData.push($(this).val());
                    });
                    return filterData;
                }
            
        </script>
    </body>
<?php
include("Foot.php");
ob_flush();
?>
</html>