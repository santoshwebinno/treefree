<!DOCTYPE html>
<html>
<head>
  <title>Discount Form</title>
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>
  <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
/>

</head>
<body>
  
<div class="Polaris-Page">
    <div class="Polaris-Page-Header Polaris-Page-Header--mobileView">
      <div class="Polaris-Page-Header__MainContent">
         <div class="Polaris-Header-Title__TitleAndSubtitleWrapper">
              <div class="Polaris-Header-Title">
                  <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Discount Form</h1>
              </div>
          </div>
        </div>
    </div>
  <div class="Polaris-Card">
      <div class="Polaris-Card__Header">
         <form method="post" action="{{ route('discount') }}" enctype="multipart/form-data">
     {{ csrf_field() }}

      <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
            <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
          <div class="Polaris-FormLayout">
              <div class="Polaris-FormLayout__Item">
                  <div class="Polaris-Labelled__LabelWrapper">
                      <div class="Polaris-Label"><label id="PolarisTextField3Label" for="PolarisTextField3" class="Polaris-Label__Text">Product Id</label></div>
                  </div>
                  <div class="Polaris-Connected">
                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField"><input id="PolarisTextField3" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField3Label" aria-invalid="false" aria-multiline="false" name="id" value="{{ $product_id }}">
                          <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                      </div>
                  </div>
                <div class="Polaris-Labelled__LabelWrapper">
                    <div class="Polaris-Label"><label id="PolarisTextField4Label" for="PolarisTextField4" class="Polaris-Label__Text">Discount Code</label></div>
                </div>
              <div class="Polaris-Connected">
                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                  <div class="Polaris-TextField"><input id="PolarisTextField4" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField4Label" aria-invalid="false" aria-multiline="false" value="" name="code">
                    <div class="Polaris-TextField__Backdrop"></div>
                  </div>

                </div>
              </div>
            
            </div>
        </div>
          </div>
      </div>
  </div>
    <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
    <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList2" aria-invalid="false">
    <legend class="Polaris-ChoiceList__Title">Types</legend>
    <ul class="Polaris-ChoiceList__Choices">
      <li><label class="Polaris-Choice" for="PolarisRadioButton4"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton4" name="optradio" type="radio" class="Polaris-RadioButton__Input" value="percentage" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Percentage</span></label></li>

      <li><label class="Polaris-Choice" for="PolarisRadioButton5"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton5" name="optradio" type="radio" class="Polaris-RadioButton__Input" value="fixed_amount"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Fixed Amount</span></label></li>
    </ul>
  </fieldset>
    </div>
  <div class="Polaris-Card__Section">
      <div class="Polaris-Card__SectionHeader">
        <div class="Polaris-Labelled__LabelWrapper">
      <div class="Polaris-Label"><label id="PolarisTextField5Label" for="PolarisTextField5" class="Polaris-Label__Text">Discount Value</label></div>
          </div>
          <div class="Polaris-Connected">
              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">

                  <div class="Polaris-TextField"><input id="PolarisTextField5" placeholder="0.00" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField5Label" aria-invalid="false" aria-multiline="false" name="value" value="">
                    <div class="Polaris-TextField__Backdrop"></div>
                  </div>
                </div>
              </div>
          </div>
          </div>
          <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
     
        <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList23" aria-invalid="false">
        <legend class="Polaris-ChoiceList__Title">Minimum Requirement</legend>
        <ul class="Polaris-ChoiceList__Choices">
          <li><label class="Polaris-Choice" for="amt1"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="amt1" name="req" type="radio" class="Polaris-RadioButton__Input" value="none" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">None</span></label></li>

          <li><label class="Polaris-Choice" for="amt"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="amt" name="req" type="radio" class="Polaris-RadioButton__Input" value="amount"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Minimum Purchase Amount(₹)</span></label><br>
            <input type="text" class='txbx1' id="r1" name="req2" hidden="true" value=""></li>

          <li><label class="Polaris-Choice" for="PolarisRadioButton9"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton9" name="req" type="radio" class="Polaris-RadioButton__Input" value="quantity"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Minimum quantity of items</span></label></li>
          <input type="text" class='txbx' id="r2" name="req1" hidden="true" value="">
        </ul>
      </fieldset>
    </div>
    <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
      <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList0" aria-invalid="false">
      <legend class="Polaris-ChoiceList__Title">customer eligibility</legend>
      <ul class="Polaris-ChoiceList__Choices">
        <li><label class="Polaris-Choice" for="PolarisRadioButton41"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton41" name="customer" type="radio" class="Polaris-RadioButton__Input" value="all" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Everyone</span></label></li>

        <li><label class="Polaris-Choice" for="PolarisRadioButton51"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton51" name="customer" type="radio" class="Polaris-RadioButton__Input" value="all"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific groups of customer</span></label></li>

        <li><label class="Polaris-Choice" for="PolarisRadioButton61"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton61" name="customer" type="radio" class="Polaris-RadioButton__Input" value="all"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific customer</span></label></li>
    </ul>
      </fieldset>
  </div>
  <div class="Polaris-Card">
    <ul class="Polaris-OptionList">
      <li>
        <p class="Polaris-OptionList__Title">Usage limit</p>
        <ul class="Polaris-OptionList__Options" id="PolarisOptionList12-0" aria-multiselectable="true">
          <li class="Polaris-OptionList-Option" tabindex="-1"><label for="PolarisOptionList12-0-0" class="Polaris-OptionList-Option__Label">
              <div class="Polaris-OptionList-Option__Checkbox">
                <div class="Polaris-OptionList-Checkbox"><input id="PolarisOptionList12-0-0" type="checkbox" class="Polaris-OptionList-Checkbox__Input" aria-checked="false" value="TOTAL_USAGE_LIMIT" onclick="myFunction()" name="limitt[]">
                  <div class="Polaris-OptionList-Checkbox__Backdrop"></div>
                  <div class="Polaris-OptionList-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                      </svg></span></div>
                </div>
              </div>Limit number of times this discount can be used in total
            </label></li>
            <input type="text" id="text" style="display:none" value="" name="limit">
          <li class="Polaris-OptionList-Option" tabindex="-1"><label for="PolarisOptionList12-0-1" class="Polaris-OptionList-Option__Label">
              <div class="Polaris-OptionList-Option__Checkbox">
                <div class="Polaris-OptionList-Checkbox"><input id="PolarisOptionList12-0-1" type="checkbox" class="Polaris-OptionList-Checkbox__Input" aria-checked="false" name="limitt[]" value="ONCE_PER_CUSTOMER_LIMIT">
                  <div class="Polaris-OptionList-Checkbox__Backdrop"></div>
                  <div class="Polaris-OptionList-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                      </svg></span></div>
                </div>
              </div>Limit to one use per customer
            </label></li>
         </ul>
      </li>
    </ul>
  </div>
  <div class="Polaris-Card__Section">
      <div class="Polaris-Card__SectionHeader">
        <div class="Polaris-Labelled__LabelWrapper">
      <div class="Polaris-Label"><label id="PolarisTextField7Label1" for="PolarisTextField7" class="Polaris-Label__Text">start date and time</label></div>
          </div>
          <div class="Polaris-Connected">
              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                  <div class="Polaris-TextField"><input type="datetime-local" id="PolarisTextField7" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField7Label1" aria-invalid="false" aria-multiline="false" value="" name="start">
                    <div class="Polaris-TextField__Backdrop"></div>
                  </div>
                </div>
              </div>
          </div>
          </div>
          <div class="Polaris-Card__Section">
      <div class="Polaris-Card__SectionHeader">
        <div class="Polaris-Labelled__LabelWrapper">
      <div class="Polaris-Label"><label id="PolarisTextField8Label2" for="PolarisTextField35" class="Polaris-Label__Text">End date and time</label></div>
          </div>
          <div class="Polaris-Connected">
              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                  <div class="Polaris-TextField"><input type="datetime-local" id="PolarisTextField35" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField8Label2" aria-invalid="false" aria-multiline="false" value="" name="end">
                    <div class="Polaris-TextField__Backdrop"></div>
                  </div>
                </div>
              </div>
          </div>
          </div>
 <div class="Polaris-Card__Footer">
      <div class="Polaris-ButtonGroup">
        <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save</span></span></button></div>
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

<script>
function myFunction() {
  var checkBox = document.getElementById("PolarisOptionList12-0-0");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
$(function() {
        $('#PolarisRadioButton9').click(function() {
            $('.txbx').attr('hidden',false);
        });           
        $('#amt').click(function() {
            $('.txbx').attr('hidden',true);
        });
        $('#amt1').click(function() {
            $('.txbx').attr('hidden',true);
        });
    });

$(function() {
        $('#amt').click(function() {
            $('.txbx1').attr('hidden',false);
        });           
        $('#PolarisRadioButton9').click(function() {
            $('.txbx1').attr('hidden',true);
        });
        $('#amt1').click(function() {
            $('.txbx1').attr('hidden',true);
        });
    });

</script>
</html>

