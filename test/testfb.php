<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css"/>
	<title>Real Estate Search</title>
	<style type="text/css">
		body {
			background-image: url("V0779-d9.jpg");
			color: rgb(218,121,46);
		}
		form {
			margin-top: 25px;
		}
		.result {
			background-color: white;
		}
		.out {
			margin: 10px;
			padding-bottom: 10px;
			color: black;
		}

#carousel-example-generic{
    text-align: center;
}
#carousel-example-generic img{
    width:600px;
    height:300px;
}
.carousel-indicators {
    text-align: right;
}
.carousel-caption{
    width:600px;
    /*height:100px;*/
    margin-bottom:-40px; 
    text-align: left;
    width:100%;
    height:100px;
}
.carousel-caption .bg{
    /*width:600px;
    height:60px;*/
    width:100%;
    height:60px;
    margin-left: -170px;
    color:gray;
    background-color:gray; filter:alpha(opacity=60);-moz-opacity:0.6;opacity:0.6; -khtml-opacity: 0.6
}
.carousel-caption .content{
    position:relative;
    margin-top: -75px;
    margin-left: -100px;
    width: 100%; 
    height:100px; 
    text-align: left;
    /*overflow:hidden;*/
}
h3{
  font-size: 20px;
  margin-bottom: -2px;
}
.content .p{
  font-size: 15px;
}
	</style>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '728399437236252',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

    <div class="container">
        <div class="row">              
			<h3>Search Your Property Here</h3>
			<button class="btn btn-facebook" id = "share_button">share</button><!--sadgwgrhnrttresd-->
		</div>

		<div class="row">
			<form id="registrationForm" method="get" class="form-inline">
                <div class="form-group">
                    <div class="col-md-5">
                    	Street Address*: <input type="text" name="street" class="form-control">
                    </div>

			        <div class="col-md-4">
			        	City: <input type="text" name="city" class="form-control">
			        </div>

			        <div class="col-md-3">
			        	State: 
			            <select name="state" class="form-control">
							<option></option>
							<option value="AL">AL</option>
							<option value="AK">AK</option>
							<option value="AZ">AZ</option>
							<option value="AR">AR</option>
							<option value="CA">CA</option>
							<option value="CO">CO</option>
							<option value="CT">CT</option>
							<option value="DE">DE</option>
							<option value="DC">DC</option>
							<option value="FL">FL</option>
							<option value="GA">GA</option>
							<option value="HI">HI</option>
							<option value="ID">ID</option>
							<option value="IL">IL</option>
							<option value="IN">IN</option>
							<option value="IA">IA</option>
							<option value="KS">KS</option>
							<option value="KY">KY</option>
							<option value="LA">LA</option>
							<option value="ME">ME</option>
							<option value="MD">MD</option>
							<option value="MA">MA</option>
							<option value="MI">MI</option>
							<option value="MN">MN</option>
							<option value="MS">MS</option>
							<option value="MO">MO</option>
							<option value="MT">MT</option>
							<option value="NE">NE</option>
							<option value="NV">NV</option>
							<option value="NH">NH</option>
							<option value="NJ">NJ</option>
							<option value="NM">NM</option>
							<option value="NY">NY</option>
							<option value="NC">NC</option>
							<option value="ND">ND</option>
							<option value="OH">OH</option>
							<option value="OK">OK</option>
							<option value="OR">OR</option>
							<option value="PA">PA</option>
							<option value="RI">RI</option>
							<option value="SC">SC</option>
							<option value="SD">SD</option>
							<option value="TN">TN</option>
							<option value="TX">TX</option>
							<option value="UT">UT</option>
							<option value="VT">VT</option>
							<option value="VA">VA</option>
							<option value="WA">WA</option>
							<option value="WV">WV</option>
							<option value="WI">WI</option>
							<option value="WY">WY</option>
						</select>&nbsp;&nbsp;
			        </div>

                    <div class="col-md-1">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" class="btn btn-error">Submit</button>
                    </div>
                </div>
            </form>
        </div>


        <div id="backdata">        	
        </div> 
    </div>

     

    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- BootstrapValidator JS -->
    <script type="text/javascript" src="bootstrap/dist/js/bootstrapValidator.min.js"></script>

<script>
$(document).ready(function() {
    $('#registrationForm').bootstrapValidator({
        fields: {
            street: {
                message: 'The street is not valid',
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'This field is required'
                    }
                }
            }
        }
    });

    $("button").click(function(event){
    	event.preventDefault();
    	//var url = 'ec2-54-148-89-125.us-west-2.compute.amazonaws.com/json.php';
    	//var url = 'ec2-54-148-89-125.us-west-2.compute.amazonaws.com';
    	var url = "http://ec2-54-148-89-125.us-west-2.compute.amazonaws.com/jsonserver.php";
    	var params = $("form").serialize();  
	    $.ajax({
			type: 'get',
   			dataType: "json", 
			url: url, // this is the parameter list
			data: params, 
			success: function(e) {
                var zllwurl = e.result.homedetails;
				var street = e.result.street;
				var city = e.result.city;
				var state = e.result.state;
				var zip = e.result.zipcode;
				var lastSoldPrice = e.result.lastSoldPrice;
				var useCode = e.result.useCode;
				var yearBuilt = e.result.yearBuilt;
				var lastSoldDate = e.result.lastSoldDate;
				var lotSize = e.result.lotSizeSqFt;
				var lstUpdated = e.result.estimateLastUpdate;
				var zamount = e.result.estimateAmount;
				var finishedSqFt = e.result.finishedSqFt;
				var zchange = e.result.estimateValueChange;
				var bathrooms = e.result.bathrooms;
				var prlow = e.result.estimateValuationRangeLow;	//
				var prhigh = e.result.estimateValuationRangeHigh;
				var bedrooms = e.result.bedrooms;
				var rlstUpdated = e.result.restimateLastUpdate;
				var rentamount = e.result.restimateAmount;
				var taxAssessmentYear = e.result.taxAssessmentYear;
				var rvalchange = e.result.restimateValueChange;
				var taxAssessment = e.result.taxAssessment;
				var rlow = e.result.restimateValuationRangeLow;
				var rhigh = e.result.restimateValuationRangeHigh;/**/

				var backdata = "<hr><div class='result'><ul class=\"nav nav-tabs\" role=\"tablist\"><li role=\"presentation\" class=\"active\"><a href=\"#home\" role=\"tab\" data-toggle=\"tab\">Basic Info</a></li><li role=\"presentation\"><a href=\"#profile\" role=\"tab\" data-toggle=\"tab\">Historical Zestimates</a></li></ul>";

				backdata += "<div class=\"tab-content\"><div role=\"tabpanel\" class=\"tab-pane active\" id=\"home\">";
				backdata += "<div class='out'><table class='table table-striped'><tr><td colspan=4>See more details for <a href='"+zllwurl+"'>"+
					street + ", " + city + ", " + state + "-" + zip +
					"</a> on Zillow</td></tr>"+
					"<tr><td>Property Type:</td>"+
					"<td>"+useCode+"</td>"+
					"<td>Last Sold Price:</td>"+
					"<td>"+lastSoldPrice+"</td></tr>"+
					"<tr><td>Year Built:</td>"+
					"<td>"+yearBuilt+"</td>"+
					"<td>Last Sold Date:</td>"+
					"<td>"+lastSoldDate+"</td></tr>"+
					"<tr><td>Lot Size:</td>"+
					"<td>"+lotSize+"</td>"+
					"<td>Zestimate<sup>&reg;</sup> Property Estimate as of "+lstUpdated+"</td>"+
					"<td>"+zamount+"</td></tr>"+
					"<tr><td>Finished Area:</td>"+
					"<td>"+finishedSqFt+"</td><td>30 Days Overall Change</td>";

				var evcs = e.result.estimateValueChangeSign;
				var up = e.result.imgp;
				var down = e.result.imgn;
				if(evcs=="+")
					backdata += "<td><img src='"+up+"'/>&nbsp;";
				else if(evcs=="-")
					backdata += "<td><img src='"+down+"'/>&nbsp;";
				else
					backdata += "<td>";
					
				backdata += zchange+"</td></tr>"+
					"<tr><td>Bathrooms:</td>"+
					"<td>"+bathrooms+"</td>"+
					"<td>All Time Property Range:</td>";
				if(prlow=="N/A"&&prhigh=="N/A")
					backdata += "<td>N/A</td></tr>";
				else
					backdata += "<td>"+prlow+" - "+prhigh+"</td></tr>";
				backdata += "<tr><td>Bedrooms:</td>"+
					"<td>"+bedrooms+"</td>"+
					"<td>Rent Zestimate<sup>&reg;</sup> Rent Valuation as of "+rlstUpdated+"</td>"+
					"<td>"+rentamount+"</td></tr>"+
					"<tr><td>Tax Assessment Year:</td>"+
					"<td>"+taxAssessmentYear+"</td><td>30 Days Rent Change</td>";

				var rvcs = e.result.restimateValueChangeSign;
				var up = e.result.imgp;
				var down = e.result.imgn;
				if(rvcs=="+")
					backdata += "<td><img src='"+up+"'/>&nbsp;";
				else if(rvcs=="-")
					backdata += "<td><img src='"+down+"'/>&nbsp;";
				else
					backdata += "<td>";


				backdata += rvalchange+"</td></tr>"+
					"<tr><td>Tax Assessment:</td>"+
					"<td>"+taxAssessment+"</td>"+
					"<td>All Time Rent Range:</td>";
					if(rlow=="N/A"&&rhigh=="N/A")
						backdata += "<td>N/A</td></tr>";
					else
						backdata += "<td>"+rlow+" - "+rhigh+"</td></tr>";
					backdata+="</table></div>";
				backdata += "</div>";



				backdata += "<div role=\"tabpanel\" class=\"tab-pane\" id=\"profile\">";	
  				var sone = e.chart.oyear;
  				var sfive = e.chart.fyears;
  				var sten = e.chart.tyears;
  				if(sone=="N/A" || sfive=="N/A" || sten=="N/A")
  					backdata += "<center>no graph available</center>";
  				else{

				//graph
				backdata += "<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">";
				//<!-- Indicators -->
  				backdata += "<ol class=\"carousel-indicators\"><li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li><li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li><li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li></ol>";
  				//<!-- Wrapper for slides -->
  				backdata += "<div class=\"carousel-inner\" role=\"listbox\">";
  				var address = street+", "+city+", "+state+"-"+zip;
  				backdata += "<div class=\"item active\"><img class='rimg' src=\""+sone+"\" alt=\"...\"><div class=\"carousel-caption\"><div class=\"bg\"></div><div class=\"content\"><h3>Historical Zestimate for the past 1 year</h3><div class=\"pp\">"+address+"</div></div></div></div>";
  				backdata += "<div class=\"item\"><img class='rimg' src=\""+sfive+"\" alt=\"...\"><div class=\"carousel-caption\"><div class=\"bg\"></div><div class=\"content\"><h3>Historical Zestimate for the past 5 years</h3><p>"+address+"</p></div></div></div>";
  				backdata += "<div class=\"item\"><img class='rimg' src=\""+sten+"\" alt=\"...\"><div class=\"carousel-caption\"><div class=\"bg\"></div><div class=\"content\"><h3>Historical Zestimate for the past 10 years</h3><p>"+address+"</p></div></div></div></div>";
				//<!-- Controls -->
				backdata += "<a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span><span class=\"sr-only\">Previous</span></a>";
				backdata += "<a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span><span class=\"sr-only\">Next</span></a></div>";

			}

				backdata += "</div>"//for panel
				backdata += "</div>";//for tab
				//footer
				backdata += "<div id='footer'>&copy Zillow, Inc., 2006-2014. Use is subject to <a href='http://www.zillow.com/corp/Terms.htm'>Terms of Use</a><br><a href='http://www.zillow.com'> What's a Zestimate?</a></div>";


				$("#backdata").html(backdata);				
			},
			error: function(XMLHttpRequest, textStatus, errorThrown){
				alert(XMLHttpRequest.readyState + XMLHttpRequest.status + XMLHttpRequest.responseText); 
			} 
		});
	});
});  

    $('.carousel-example-generic').carousel();
</script>

<script type="text/javascript">
$(document).ready(function(){

  $('#share_button').click(function(e){
    //e.preventDefault();
    FB.ui({
    	method: 'feed',
      	name: 'This is the content of the "name" field.',
		link: ' http://www.hyperarts.com/',
		picture: 'http://www.hyperarts.com/external-xfbml/share-image.gif',
		caption: 'This is the content of the "caption" field.',
		description: 'This is the content of the "description" field, below the caption.',
		message: ''
    }, function(response){});
  });
});
</script>

</body>
</html>