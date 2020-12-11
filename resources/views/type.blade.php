@extends('shopify-app::layouts.default')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>type</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>
 <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <form action="{{ url('slider')}}">
    <div class="Polaris-Layout">
    <div class="Polaris-Layout__Section">
      <div class="Polaris-Banner Polaris-Banner--hasDismiss Polaris-Banner--withinPage" tabindex="0" role="status" aria-live="polite" aria-labelledby="Banner4Heading" aria-describedby="Banner4Content">
        <div class="Polaris-Banner__Dismiss"></div>
        <div class="Polaris-Banner__ContentWrapper">
          <div class="Polaris-Banner__Heading" id="Banner4Heading">
           </div>
          <div class="Polaris-Banner__Content" id="Banner4Content">
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="Polaris-Layout__AnnotationContent">
  <div class="Polaris-Layout">
    <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
      <div class="Polaris-Card">
        <div class="Polaris-Card__Header" style="background-color: #43467f; color: #fff;padding:1rem 4rem;">
          <h2 class="Polaris-Heading">Offer catalog</h2>
        </div>
      <div class="Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--hasBottomShadow Polaris-Scrollable--verticalHasScrolling" data-polaris-scrollable="true" style="height: 300px;">
        <div class="Polaris-Card__Section">
          <div class="Polaris-Card__SectionHeader">
            <h3 aria-label="Total Sales Breakdown" class="Polaris-Subheading">Product level</h3>
          </div>
          <div class="Polaris-ResourceList__ResourceListWrapper">
            <ul class="Polaris-ResourceList" aria-live="polite">
              <li>
                  <div class="Polaris-ResourceItem__Container">
                    <div class="Polaris-ResourceItem__Content">
                      <div class="Polaris-Stack">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill"><h3><span><i class="fa fa-percent" aria-hidden="true"></i>
                        </span>&nbsp;&nbsp;Percentage</h3></div>
                        <div class="Polaris-Stack__Item">
                        <div class="Polaris-ButtonGroup">
                          <button type="button" class="Polaris-Button" name="percentage" id="myBtn" value="percentage"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add</span></span></button>
                        </div>
                      </div>
                    </div>
                  </div>
              </li>
              <li>
                <div class="Polaris-ResourceItem__Container">
                  <div class="Polaris-ResourceItem__Content">
                    <div class="Polaris-Stack">
                      <div class="Polaris-Stack__Item Polaris-Stack__Item--fill"><h3> <span><i class="fa fa-dollar" aria-hidden="true"></i></span>&nbsp;&nbsp;Fixed amount</h3></div>
                      <div class="Polaris-Stack__Item"></div>
                      <div class="Polaris-ButtonGroup">
                        <div class="Polaris-ButtonGroup__Item Polaris-ButtonGroup__Item--plain"><button type="button" class="Polaris-Button" name="amount" id="myBtn1" value="fixed_amount"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add</span></span></button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
              <input type="hidden" name="title" value="{{ $title }}">
              <input type="hidden" name="description" value="{{ $desc }}">
          </div>
        </div>

      <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
<div class="Polaris-Card__SectionHeader">
        <h3 aria-label="Deactivated reports" class="Polaris-Subheading">Volume Requirements</h3>
      </div>
     <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList23" aria-invalid="false">
        <ul class="Polaris-ChoiceList__Choices">
          <li><label class="Polaris-Choice" for="amt1"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="amt1" name="quantity" type="radio" class="Polaris-RadioButton__Input" value="none" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">None</span></label></li>

         <li><label class="Polaris-Choice" for="PolarisRadioButton9"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton9" name="quantity" type="radio" class="Polaris-RadioButton__Input" value="quantity"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Minimum quantity of items</span></label></li>
         <div class="Polaris-Connected__Item Polaris-Connected__Item--primary" id="display" hidden="true">
         <div class="Polaris-TextField Polaris-TextField--error">
          <input type="number" min="1" max="100" class='Polaris-TextField__Input' id="r2" name="min_quantity" hidden="true" value="" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-multiline="false">
          <div class="Polaris-TextField__Backdrop"></div>
        </div>
          @if($errors->has('min_quantity'))
            <div id="myFieldIDError" class="Polaris-InlineError"></div>
          @endif
      </div>
        </ul>
      </fieldset>
    </div>
    </div>
    </div>
  </div>
    <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
      <div class="Polaris-Card">
        <div class="Polaris-Card__Header" style="background-color: #43467f; color: #fff;padding:1rem 4rem;">
          <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
              <h2 class="Polaris-Heading">Selected offer</h2>
            </div>
        
          </div>
        </div>
        <div class="Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--hasBottomShadow Polaris-Scrollable--verticalHasScrolling" data-polaris-scrollable="true" style="height: 300px;">
      <div class="Polaris-Card__Section">
        <div class="Polaris-Card__Section">
          <div class="Polaris-Card__SectionHeader">
            <p>Please select an offer from the catalog on the left.</p>
          </div>
          <div class="Polaris-ResourceList__ResourceListWrapper">
            <ul class="Polaris-ResourceList" aria-live="polite">
              <li class="Polaris-ResourceList__ItemWrapper">
                <input type="hidden" name="percantagee" value="" id="percantagee">
                <div class="append">
                  
                  <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__SectionHeader">
                    <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                      <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </li>
              <li class="Polaris-ResourceList__ItemWrapper">
                 <input type="hidden" name="percantagee" value="" id="amount">
                <div class="append2">
                  <div class="Polaris-Card__Section">
                    <div class="Polaris-Card__SectionHeader">
                      <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                               
                              </div>
                            </div>
                          </div>
                        </div>
                </div>
              </li>
           </ul>
           <div class="Polaris-FormLayout__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Configure selected offer</span></span></button></div>
    </div><span class="Polaris-VisuallyHidden"><button type="submit" aria-hidden="true" tabindex="-1">Submit</button></span>
          </div>
        </div>
      </div>
      </div>
    </div>
    
  </div>
</div>
</form>
</div>
      </body>
</html>

@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);

    </script>
    <script>
$(document).ready(function(){
    // Get value on button click and show alert
    $("#myBtn").click(function(){
        var str = $("#myBtn").val();
        if( str == "percentage"){
          $("input[name=percantagee]").val(str);
          $( ".append" ).show();
          $( ".append" ).html( "<h3><b>%</b>  Percentage</h3>");
          $( ".append2" ).hide();
        }
       
    });
     $("#myBtn1").click(function(){
        var str = $("#myBtn1").val();
        if( str == "fixed_amount"){
          $("input[name='percantagee']").val(str);
          $( ".append2" ).show();
        $( ".append2" ).html( "<h3><b>$</b>  Fixed amount</h3>");
        $( ".append" ).hide();

        }
        
    });
      $(function() {
        $('#amt1').click(function() {
            $('#display').attr('hidden',true);
        });           
        $('#PolarisRadioButton9').click(function() {
            $('#display').attr('hidden',false);
        });
    });

});
</script>
@endsection



