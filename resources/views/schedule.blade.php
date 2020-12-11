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
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
<script>
    $(document).ready(function(){
        // Read value on page load
        $("#result b").html($("#customRange").val());

        // Read value on change
        $("#customRange").change(function(){
            $("#result b").html($(this).val());
        });
    });        
</script> 
</head>
<body>
  <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
    <div class="Polaris-Page" style="padding: inherit;">
    <div class="Polaris-Page-Header Polaris-Page-Header--hasNavigation Polaris-Page-Header--hasActionMenu Polaris-Page-Header--mobileView">
     <div class="Polaris-Page-Header__MainContent">
        <div class="Polaris-Page-Header__TitleActionMenuWrapper">
           <div class="Polaris-Banner Polaris-Banner--statusInfo Polaris-Banner--hasDismiss Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite" aria-labelledby="Banner18Heading" aria-describedby="Banner18Content">
              <div class="Polaris-Banner__ContentWrapper">
                <div class="Polaris-Banner__Content" id="Banner18Content">
                  <p><b>Summary:</b> Offer <b id="slider_value"> </b><b>% off</b> on all products.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
   
    <form action="{{ url('product')}}">

      <fieldset id="fifth" class="Polaris-ChoiceList" aria-invalid="false">
    <div class="Polaris-Page__Content">
      <div class="Polaris-Card">
        <div class="Polaris-Card__Header">
          <h2 class="Polaris-Heading"><div class="Polaris-ButtonGroup">
    <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--disabled"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Previous</span></span></button></div>
    <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>
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
                    <div class="Polaris-TextField" id="error"><input type="datetime-local" id="PolarisTextField3" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-invalid="true" aria-multiline="false" value="" name="start">
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
                          <li><label class="Polaris-Choice" for="never"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="never" name="end" type="radio" class="Polaris-RadioButton__Input" value="" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Never</span></label></li>

                          <li><label class="Polaris-Choice" for="end"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="end" name="end" type="radio" class="Polaris-RadioButton__Input" value=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">On a fixed date</span></label></li>
                        </ul>
                        </fieldset>
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

</body>
</html>


<script type="text/javascript">
 // var value = $("input[name='slider']").val();
 // $('#slider_value').html( value );
 // console.log(value);

 $(document).on('input', '#customRange', function() {
   // console.log($(this).val());
    $('#slider_value').html( $(this).val() );
});

 $(document).on('input', '#PolarisTextField28', function() {
   // console.log($(this).val());
    $('#slider_value').html( $(this).val() );
});
</script>