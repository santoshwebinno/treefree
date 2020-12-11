<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/css/bootstrap-slider.css"/>

</head>
<style type="text/css">
  .slider.slider-horizontal {
    width: 510px;
    height: 20px;
}

</style>
<body>
  <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="Polaris-Page" style="padding: inherit;">
    <div class="Polaris-Page-Header Polaris-Page-Header--hasNavigation Polaris-Page-Header--hasActionMenu Polaris-Page-Header--mobileView">
     <div class="Polaris-Page-Header__MainContent">
        <div class="Polaris-Page-Header__TitleActionMenuWrapper">
           <div class="Polaris-Banner Polaris-Banner--statusInfo Polaris-Banner--hasDismiss Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite" aria-labelledby="Banner18Heading" aria-describedby="Banner18Content">
              <div class="Polaris-Banner__ContentWrapper">
                <div class="Polaris-Banner__Content" id="Banner18Content">
                  <p><b>Summary:</b> Offer @if( $text == "Fixed amount")<b>$</b><b id="slider_value"> </b><b> </b>@else <b id="slider_value"> </b><b>% @endif off </b>on all products.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
   
    <form action="{{ url('product')}}">
      <input type="hidden" name="type" value="{{ $percentage }}">
      <input type="hidden" name="title" value="{{ $title }}">
      <input type="hidden" name="description" value="{{ $description }}">
      <input type="hidden" name="min_quantity" value="{{ $quantity }}">
      
    <div class="Polaris-Page__Content">
      <div class="Polaris-Card">
 
    <fieldset id="current" class="Polaris-ChoiceList" aria-invalid="false">
        <div class="Polaris-Card__Header">
          <h2 class="Polaris-Heading"><div class="Polaris-ButtonGroup">
    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--disabled"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Previous</span></span></button></div>

    @if( $text == "Fixed amount")
    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--primary Polaris-Button--disabled" id="nxt_btn"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>
    @else
    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--primary" id="nxt_btn"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>
    @endif
    &nbsp;&nbsp;&nbsp;<p>Creating offer</p>
  </div></h2>
        </div> 
        <div class="Polaris-Card__Section">
          <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
             <div class="Polaris-Layout__AnnotatedSection">
        <div class="">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">

          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">{{ $text }} (product level)
            </h2>
            <div class="Polaris-Layout__AnnotationDescription">
              @if( $text == "Fixed amount")
              <p>
                Set a fixed amount discount that will be deducted from each eligible product in the cart.<br><br>
                Please select the 'Fixed amount off order' template instead to offer a fixed amount off on the total value of the cart.</p>
              @else
              <p>
                Set the percentage discount that will be offered on specific products in the cart.<br><br>
                Please select the 'Percentage off order' template instead to offer a percentage off on the total value of the cart.</p>
              @endif
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
         	<div class="Polaris-Card">
                <div class="Polaris-Card__Header">
                  <h2 class="Polaris-Heading">{{ $text }}</h2>
                  @if( $text == "Fixed amount")
                  <p>Set the amount to discount from each eligible product</p>
                  @else
                  <p>Set the discount to offer</p>
                  @endif
                </div>
                <div class="Polaris-Card__Section">
                </div>
                <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__SectionHeader">
                  <div class="Polaris-Connected">
                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                      </div>
                  </div>
               </div>
                <div class="">
                   @if( $text == "Fixed amount")
                    <div class="Polaris-Connected">
                        <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                       <div class="Polaris-TextField Polaris-TextField--hasValue">
                          <div class="Polaris-TextField__Prefix" id="PolarisTextField28Prefix">$</div><input id="PolarisTextField28" class="Polaris-TextField__Input" type="number" min="1" max="100" required="true" value="" name="slider">
                       </div>
						<div class="Polaris-TextField__Backdrop"></div>
                      </div>
					</div>
			          <div id="myFieldIDError" class="Polaris-InlineError" style="display: none;">
		   				value must be less than or equal to 100
		  				</div>
			    	@else
	                    <div class="Polaris-Connected">
	                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">

                        <input id="ex13" class="custom-range" type="text" data-slider-ticks="[1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]" data-slider-ticks-snap-bounds="1" data-slider-ticks-labels='["$1", "$10", "$20", "$30", "$40", "$50", "$60", "$70", "$80", "$90", "$100"]' name="slider" value=""/>

	                 		<!-- <input type="range" class="custom-range" min="1" max="100" id="customRange" name="slider" value="" required> -->
	                  	</div>
	              		</div>
            		@endif
                        </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
             </div>
          </div>
        </div>
        </div>
       </fieldset>
        </div>
     </div>
    <fieldset id="next" class="Polaris-ChoiceList" aria-invalid="false">
    <div class="Polaris-Page__Content">
      <div class="Polaris-Card">
        <div class="Polaris-Card__Header">
          <h2 class="Polaris-Heading"><div class="Polaris-ButtonGroup">
		    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button" id="prev_btn"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Previous</span></span></button></div>
		    <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary Polaris-Button" ><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>&nbsp;&nbsp;&nbsp;<p>Setting Schedule</p>
		  </div></h2>
        </div>
        <div class="Polaris-Card__Section">
          <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
             <div class="Polaris-Layout__AnnotatedSection">
        <div class="">
        <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
			<div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Start Date
            </h2>
            <p>
              Configure when your discount starts.</p>
         	</div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                <div class="Polaris-Card__Header">
                  <h1 class="Polaris-Heading">When does the discount start?</h1>
                 </div>
                </div>
                <div class="Polaris-Card__Section">
                <div class="">
                  <div class="Polaris-Connected">
                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                    <div class="Polaris-TextField" id="error"><input type="datetime-local" min="{{ $curr_date}}T00:00" id="PolarisTextField3" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-invalid="true" aria-multiline="false" value="" name="start" required>
                        <div class="Polaris-TextField__Backdrop"></div>
                      </div>
                    </div>
                    </div>
                    </div>
                  </div>
              </div>
              </div>
            </div>
          <hr>
        <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">
          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">End Date
            </h2>
            <p>
              Configure when your promotion ends.</p>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                <div class="Polaris-Card__Header">
                  <h1 class="Polaris-Heading">When does the discount end?</h1>
                 </div>
                </div>
                <div class="Polaris-Card__Section">
                
                 <div class="">
                  <div class="Polaris-Connected">
                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                   <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList04" aria-invalid="false">
                       <ul class="Polaris-ChoiceList__Choices">
                          <li><label class="Polaris-Choice" for="never"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="never" name="end" type="radio" class="Polaris-RadioButton__Input" value="none" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Never</span></label></li>

                          <li><label class="Polaris-Choice" for="end"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="end" name="end" type="radio" class="Polaris-RadioButton__Input" value="fixed"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">On a fixed date</span></label></li>
						            </ul>
                        </fieldset>
                    </div>
				          </div>
                </div>
              </div>
              <div class="Polaris-Card__Section" id="display" hidden="true">
                <div class="">
                  <div class="Polaris-Connected">
                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
      				<div class="Polaris-TextField" id="error"><input type="datetime-local" id="PolarisTextField" min="{{ $curr_date}}T00:00" class="Polaris-TextField__Input" aria-describedby="PolarisTextFieldError" aria-labelledby="PolarisTextFieldLabel" aria-invalid="true" aria-multiline="false" value="" name="end">
                        <div class="Polaris-TextField__Backdrop"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
                 </div>
              </div>
             </div>
          </div>
        </div>
      </div>
  </fieldset>
      </form>
      </div>
    </div>
  </div>
</div> 
</body>
</html>


<script type="text/javascript">

  $("#ex13").slider({
    ticks: [1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
    ticks_labels: ['$1', '$10', '$20', '$30', '$40', '$50', '$60', '$70', '$80', '$90', '$100'],
    ticks_snap_bounds: 1
});

//  $(document).on('.tooltip.tooltip-main bs-tooltip-top', function() {
//     console.log($(this).val());
//     $('#slider_value').html( $(this).val() );
// });
 
 $(document).on('input', '#PolarisTextField28', function() {
   // console.log($(this).val());
    $('#slider_value').html( $(this).val() );
});

 var next = $('#next').css("display","none");
 $('#nxt_btn').click(function() {

  var next = $('#next').css("display","block");
  var prev = $('#current').css("display","none");

});

 $('#prev_btn').click(function() {
	var next = $('#next').css("display","none");
  	var prev = $('#current').css("display","block");

});

 $(function() {
        $('#end').click(function() {
            $('#display').attr('hidden',false);
        });           
        $('#never').click(function() {
            $('#display').attr('hidden',true);
        });
    });

 $("#PolarisTextField28").on("keyup", function() {
  	if($("#PolarisTextField28").val() == ''){
       $("#nxt_btn").addClass('Polaris-Button--disabled');
     }else if($('#PolarisTextField28').val()< 1){
        $('#myFieldIDError').css("display","block");
        $("#nxt_btn").addClass('Polaris-Button--disabled');
        
    }else{
      $('#myFieldIDError').css("display","none");
      $("#nxt_btn").addClass('Polaris-Button').removeClass('Polaris-Button--disabled');
    }
});

 $(function() {
 	

        $('#PolarisTextField3').on("keyup", function() {
        	
            console.log("heree");
        });           
       });


</script>