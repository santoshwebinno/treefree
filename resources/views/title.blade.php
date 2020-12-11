@extends('shopify-app::layouts.default')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
/>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>


</head>
<body>
<form action="{{ url('/type') }}">
    @csrf

  <div class="Polaris-Layout">
    <div class="Polaris-Layout__Section">
      <div class="Polaris-Banner Polaris-Banner--hasDismiss Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite" aria-labelledby="Banner4Heading" aria-describedby="Banner4Content">
      
      </div>
    </div>
     <div class="Polaris-Page__Content">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Section">
            <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
              <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">

    <div class="Polaris-Layout__AnnotatedSection">
        <div class="">
      <div class="Polaris-Layout__AnnotationWrapper">
        <div class="Polaris-Layout__Annotation">

          <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Discount Name</h2>
            <div class="Polaris-Layout__AnnotationDescription">
              <p>The internal name of the discount.
                   <br>The name and description of the discount are never displayed to visitors of your store.</p>
            </div>
          </div>
        </div>
        <div class="Polaris-Layout__AnnotationContent">
          <div class="Polaris-Card">
            <div class="Polaris-Card__Section">
              <div class="Polaris-FormLayout">
                <div class="Polaris-Card__Header">
                  <h2 class="Polaris-Heading">Give your discount a name</h2>
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
                  <div class="Polaris-Connected">
                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                      <div class="Polaris-TextField Polaris-TextField--error" id="error"><input id="PolarisTextField3" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" autocomplete="off" aria-invalid="true" aria-multiline="false" value="" name="title" placeholder="New discount">
                        <div class="Polaris-TextField__Backdrop"></div>
                      </div>
                    </div>
                  </div>
                 </div>
                 @if($errors->has('title'))
                    <div id="myFieldIDError" class="Polaris-InlineError">Discount code with this name already exists. Try a new code.</div>
                  @endif
                 </div>
                <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__Subsection">Optionally, provide further information related to this discount.</div>
                  <div class="Polaris-Connected">
                    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                      <div class="Polaris-TextField"><textarea id="PolarisTextField8" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField8Label" aria-invalid="false" aria-multiline="true" style="height: 80px;" name="desc" value=""></textarea>
                        <div class="Polaris-TextField__Backdrop"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__Subsection"></div>
                    <div class="Polaris-Card__Footer">
                    <div class="Polaris-ButtonGroup">
                      <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary Polaris-Button--disabled" id="button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Next</span></span></button></div>
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
</form>
  </body>
</html>

 @section('scripts')
 <script type="text/javascript">
   
  $("#PolarisTextField3").on("keyup", function() {
    if($("#PolarisTextField3").val() == ''){
      $("#button").addClass('Polaris-Button--disabled');
      $("#error").addClass('Polaris-TextField--error');
        
    }else{
        $("#button").addClass('Polaris-Button').removeClass('Polaris-Button--disabled');
        $("#error").addClass('Polaris-TextField').removeClass('Polaris-TextField--error');
        
    }
});

//   $("document").ready(function(){
//     setTimeout(function(){
//        $("div#myFieldIDError").remove();
//     }, 9000 ); // 9 secs

// });

// window.onload = function() {
//  $("div#myFieldIDError").remove();
// }
 </script>
@endsection
