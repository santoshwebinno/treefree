@extends('shopify-app::layouts.default')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div id="app">
        @include('flash-message')
    </div>
  <form method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
  <input type="hidden" name="collections1[]" value="">
  <input type="hidden" name="collections2[]" value=""> 
  <div class="Polaris-Layout__AnnotatedSection">
    <div class="Polaris-Card">
      <div>
        <div class="Polaris-Tabs__Wrapper" style="margin-left: 30%;">
          <div class="Polaris-SettingAction">
            <div class="Polaris-SettingAction__Setting">
              <ul role="tablist" class="Polaris-Tabs" id="progressbar">
                <li class="active"><button id="title" role="tab" type="button" tabindex="0" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected" aria-selected="true" aria-controls="all-customers-content" aria-label="title"><span class="Polaris-Tabs__Title">Name</span></button></li>

                <li><button id="offer" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="accepts-marketing-content"><span class="Polaris-Tabs__Title">Offer</span></button></li>

                <li><button id="requirements" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="repeat-customers-content"><span class="Polaris-Tabs__Title">Volume requirements</span></button></li>

                <li><button id="tab_products" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="repeat-customers-content"><span class="Polaris-Tabs__Title">Products</span></button></li>

                <li><button id="schedule" role="tab" type="button" tabindex="-1" class="Polaris-Tabs__Tab" aria-selected="false" aria-controls="repeat-customers-content"><span class="Polaris-Tabs__Title">Schedule</span></button></li>
              </ul>
            </div>
            <div class="Polaris-SettingAction__Action">  
              <a type="button" href="{{ url('/delete',$discounts->price_rule_id) }}" style="text-align: right;" class="Polaris-Button Polaris-Button--primary" onclick="return confirm('Are you sure you want to Delete?');" class="Polaris-Button__Content"><span ><span class="Polaris-Button__Text">Delete</span></span></a>

              <button type="submit" style="text-align: right;" class="Polaris-Button Polaris-Button--primary" class="Polaris-Button__Content"><span ><span class="Polaris-Button__Text">Save</span></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <fieldset id="first" class="Polaris-ChoiceList" aria-invalid="false">
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
                          <p>The internal name of the discount.
                            <br>The name and description of the discount are never displayed to visitors of your store.</p>
                        </div>
                      </div>
                      <div class="Polaris-Layout__AnnotationContent">
                        <div class="Polaris-Card">
                          <div class="Polaris-Card__Section">
                            <div class="Polaris-Card__Header">
                              <h1 class="Polaris-Heading">Give your discount a name</h1>
                            </div>
                          </div>
                          <div class="Polaris-Card__Section">
                            <div class="">
                              <div class="Polaris-Connected">
                                <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                  <div class="Polaris-TextField"><input id="title" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-invalid="true" aria-multiline="false" value="{{ $discounts->discount_title }}" name="title" placeholder="New discount" required>
                                    <div class="Polaris-TextField__Backdrop"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="Polaris-Card__Section">
                            <div class="Polaris-Card__Subsection">Optionally, provide further information related to this discount.</div>
                            <div class="Polaris-Connected">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField"><textarea id="description" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="true" style="height: 80px;" name="description" value="{{ $discounts->description }}">{{ $discounts->description }}</textarea>
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
    </fieldset>
    <fieldset id="second" class="Polaris-ChoiceList" aria-invalid="false">
      <div class="Polaris-Page__Content">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Section">
            <div class="Polaris-Layout__AnnotatedSection">
              <div class="">
                <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                    <div class="Polaris-TextContainer">
                      <h2 class="Polaris-Heading">Product Types
                      </h2>
                    </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                    <div class="Polaris-Card">
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                          <div class="Polaris-Card__Header">
                            <h2 class="Polaris-Heading">Please select product types</h2>
                          </div>
                          <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
                            <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList01" aria-invalid="false">
                              <ul class="Polaris-ChoiceList__Choices">
                                <li><label class="Polaris-Choice" for="percentage"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="percentage" name="type" type="radio" class="Polaris-RadioButton__Input" value="percentage"'.@if($discounts->value_type == 'percentage') checked @endif".'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Percentage</span></label></li>

                                <li><label class="Polaris-Choice" for="fixed_amount"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="fixed_amount" name="type" type="radio" class="Polaris-RadioButton__Input" value="fixed_amount"'.@if($discounts->value_type == 'fixed_amount') checked @endif".'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Fixed Amount</span></label></li>
                              </ul>
                            </fieldset>
                          </div>
                        </div>
                      </div>
                      <div class="Polaris-Card__Section">
                        <div class="Polaris-Connected" id="primary">
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary" id="primary1">
                            <!-- <input type="range" class="custom-range" id="customRange" name="value" value="{{ $discounts->value}}"> -->
                            <input id="ex13" type="text" data-slider-ticks="[1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100]" data-slider-ticks-snap-bounds="1" data-slider-ticks-labels='["$1", "$10", "$20", "$30", "$40", "$50", "$60", "$70", "$80", "$90", "$100"]' name="value" data-slider-value="{{ $discounts->value}}"/>

                           </div>
                          <div class="Polaris-Connected__Item Polaris-Connected__Item--primary" id="primary2">
                            <div class="Polaris-TextField Polaris-TextField--hasValue" id="fix">
                              <div class="Polaris-TextField__Prefix" id="PolarisTextField28Prefix">$</div><input id="PolarisTextField28" class="Polaris-TextField__Input" type="number" aria-labelledby="PolarisTextField28Label PolarisTextField28Prefix" aria-invalid="false" aria-multiline="false" value="{{ $discounts->value}}" name="fixed_value" required>
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
    </fieldset>

  <fieldset id="third" class="Polaris-ChoiceList" aria-invalid="false">
    <div class="Polaris-Page__Content">
      <div class="Polaris-Card">
        <div class="Polaris-Card__Section">
          <div class="Polaris-Layout__AnnotatedSection">
            <div class="">
              <div class="Polaris-Layout__AnnotationWrapper">
                <div class="Polaris-Layout__Annotation">
                  <div class="Polaris-TextContainer">
                    <h2 class="Polaris-Heading">Volume Requirements
                    </h2>
                  </div>
                </div>
                <div class="Polaris-Layout__AnnotationContent">
                  <div class="Polaris-Card">
                    <div class="Polaris-Card__Section">
                      <div class="Polaris-FormLayout">
                        <div class="Polaris-Card__Header">
                          <h2 class="Polaris-Heading">Please select product requirements</h2>
                        </div>
                        <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
                          <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList23" aria-invalid="false">
                            <ul class="Polaris-ChoiceList__Choices">
                              <li><label class="Polaris-Choice" for="amt1"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="amt1" name="quantity" type="radio" class="Polaris-RadioButton__Input" value="none" '.@if($discounts->quantity_range == null) checked @endif".'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">None</span></label></li>

                              <li><label class="Polaris-Choice" for="PolarisRadioButton9"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="PolarisRadioButton9" name="quantity" type="radio" class="Polaris-RadioButton__Input" value="qty" '.@if($discounts->quantity_range !== null) checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Minimum quantity of items</span></label></li>

                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary" id="display2" hidden="true">
                                <div class="Polaris-TextField">
                                  <input type="text" class='Polaris-TextField__Input' id="r" name="min_quantity" value="{{ $discounts->quantity_range}}" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-multiline="false" >
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
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
        </fieldset>
  <fieldset id="forth" class="Polaris-ChoiceList" aria-invalid="false"> 
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
                        <h2 class="Polaris-Heading">Products
                        </h2>
                        <p>Select the products that are discounted in this offer. You can select all products, a number of collections or a number of products.</p>
                      </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Section">
                          <div class="Polaris-FormLayout">
                            <div class="Polaris-Card__Header">
                              <h2 class="Polaris-Heading">Please select product requirements</h2>
                            </div>
                            <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
                              <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList03" aria-invalid="false">
                                <ul class="Polaris-ChoiceList__Choices">
                                  <li><label class="Polaris-Choice" for="allProduct"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="allProduct" name="product" type="radio" class="Polaris-RadioButton__Input" value="all"'.@if($discounts->product_type == 'all') checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">All products</span></label></li>

                                  <li><label class="Polaris-Choice" for="collection"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="collection" name="product" type="radio" class="Polaris-RadioButton__Input" value="collection"'.@if($discounts->product_type == 'collection') checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific collection(s)</span></label></li>

                                  <li><label class="Polaris-Choice" for="specific"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="specific" name="product" type="radio" class="Polaris-RadioButton__Input" value="specific"'.@if($discounts->product_type == 'specific') checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific products</span></label></li>
                                </ul>
                              </fieldset>
                            </div>
                            <div class="Polaris-Card__Section" id="showw" hidden="true">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--focused Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error">
                                  <div class="Polaris-TextField__Prefix" id="PolarisTextField11Prefix"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                                  </svg></span></div><input id="search" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextFieldLabel PolarisTextField11Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover" aria-owns="Polarispopover" aria-expanded="true" data-toggle="modal" data-target="#myModal" value="{{ $get_product_name }}" placeholder="Search products">
                                  <input type="hidden" name="hidden[]" id="hidden" value="{{ $get_product_name }}">
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                            </div>
                            <div class="Polaris-Card__Section" id="show_collection" hidden="true">
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--focused Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error2">
                                  <div class="Polaris-TextField__Prefix" id="PolarisTextField11Prefix2"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                  <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                                  </svg></span></div><input id="search3" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextFieldLabel PolarisTextField11Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover" aria-owns="Polarispopover" aria-expanded="true" data-toggle="modal" data-target="#myModal" value="{{ $discounts->collection_id}}" placeholder="Search collections">
                                  <input type="hidden" name="hidden1[]" id="hidden1" value="{{ $ex_coll }}">
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
  </fieldset>
  <fieldset id="fifth" class="Polaris-ChoiceList" aria-invalid="false">
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
                        <h2 class="Polaris-Heading">Start Date
                        </h2>
                        <p>Configure when your discount starts.</p>
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
                              @if($discounts->starts_at !== null)
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error"><input type="datetime-local" id="PolarisTextField3" min="" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-invalid="true" aria-multiline="false" value="{{ $curr_date_value}}T{{$curr_time_value}}" name="start" required>
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                              @else
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error"><input type="datetime-local" id="PolarisTextField3" min="{{ $curr_date}}T00:00" class="Polaris-TextField__Input" aria-describedby="PolarisTextField4Error" aria-labelledby="PolarisTextField4Label" aria-invalid="true" aria-multiline="false" value="" name="start" required>
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                              @endif
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
                        <p>Configure when your promotion ends.</p>
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
                                    <li><label class="Polaris-Choice" for="never"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="never" name="end" type="radio" class="Polaris-RadioButton__Input" value="never" '.@if($discounts->ends_at == null) checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Never</span></label></li>

                                    <li><label class="Polaris-Choice" for="end"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="end" name="end" type="radio" class="Polaris-RadioButton__Input" value="select" '.@if($discounts->ends_at !== null) checked @endif .'><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">On a fixed date</span></label></li>
                                  </ul>
                                </fieldset>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="Polaris-Card__Section" id="display" hidden="true">
                          <div class="">
                            <div class="Polaris-Connected">
                              @if($discounts->ends_at !== null)
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error"><input type="datetime-local" min="" id="PolarisTextField" class="Polaris-TextField__Input" aria-describedby="PolarisTextFieldError" aria-labelledby="PolarisTextFieldLabel" aria-invalid="true" aria-multiline="false" value="{{ $end_date_value}}T{{$end_time_value}}" name="end2">
                                  <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                              </div>
                              @else
                              <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                <div class="Polaris-TextField" id="error"><input type="datetime-local" min="{{ $curr_date}}T00:00" id="PolarisTextField" class="Polaris-TextField__Input" aria-describedby="PolarisTextFieldError" aria-labelledby="PolarisTextFieldLabel" aria-invalid="true" aria-multiline="false" value="" name="end2">
                                  <div class="Polaris-TextField__Backdrop"></div>
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
        </div>
      </div>
      </div>
    </div>
  </fieldset>
  </div>
</form>

<!-- The Modal -->
        <div id="myModal" class="modal">
          <div>
            <div class="Polaris-Modal-Dialog__Container"  data-polaris-layer="true" data-polaris-overlay="true">
              <div>
                <div role="dialog" tabindex="-1" aria-labelledby="Polarismodal-header16" class="Polaris-Modal-Dialog">
                  <div class="Polaris-Modal-Dialog__Modal">
                  <div class="Polaris-Modal-Header">
                    <div id="Polarismodal-header16" class="Polaris-Modal-Header__Title">
                      <h2 class="Polaris-DisplayText Polaris-DisplayText--sizeSmall" id="header"> </h2>
                    </div><button class="Polaris-Modal-CloseButton" aria-label="Close"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="close" focusable="false" aria-hidden="true">
                          <path d="M11.414 10l6.293-6.293a.999.999 0 1 0-1.414-1.414L10 8.586 3.707 2.293a.999.999 0 1 0-1.414 1.414L8.586 10l-6.293 6.293a.999.999 0 1 0 1.414 1.414L10 11.414l6.293 6.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z" fill-rule="evenodd"></path>
                        </svg></span></button>
                  </div>
                   <div class="Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--hasBottomShadow Polaris-Scrollable--verticalHasScrolling" data-polaris-scrollable="true" style="height: 300px;">
                  <div class="Polaris-Modal__BodyWrapper">
                    <div class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical" data-polaris-scrollable="true">
                       <section class="Polaris-Modal-Section">
                        <div class="Polaris-Stack Polaris-Stack--vertical">
                          <div class="Polaris-Stack__Item">
                            
                            <div class="Polaris-Connected__Item Polaris-Connected__Item--focused Polaris-Connected__Item--primary">
                            <div class="Polaris-Card__Section">
                              <div class="Polaris-TextField Polaris-TextField--focus">
                                <div class="Polaris-TextField__Prefix" id="PolarisTextField18Prefix"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                                    </svg></span></div><input id="search2" autocomplete="off" class="Polaris-TextField__Input search" aria-labelledby="PolarisTextField18Label PolarisTextField18Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover18" aria-owns="Polarispopover18" aria-expanded="true" hidden="true">
                                <div class="Polaris-TextField__Backdrop"></div>
                              </div>
                             </div>
                             <div class="products" hidden="true">
                               @if($all_products)  
                             @forelse($all_products as $product)

                             <div class="Polaris-Card__Section">
                                  <div class="Polaris-TextContainer">
                                     <fieldset class="Polaris-ChoiceList Polaris-ChoiceList--titleHidden" id="salesChannelsList[]" aria-invalid="false">
                            
                                  <ul class="Polaris-ChoiceList__Choices">
                                    <li><label class="Polaris-Choice"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="collection[]" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" id="collect" role="checkbox" aria-checked="false" value="{{ $product->product_id }}" title="{{ $product->title }}"'.@if(strpos($get_product_id, $product->product_id) !== false) checked @endif.'><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                  </svg></span></span></span></span><span class="Polaris-Choice__Label"> <label for="collect">{{ $product->title }}</label>
                            </span></label></li>
                               </ul>
                          </fieldset>
                                  </div>
                                </div>
                            @endforeach
                            @else 
                             <div class="Polaris-Card__Section">
                                 <div class="Polaris-Card__Header">
                                  <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                     <p>There are already discounts available on all products.</p>
                                    </div>
                                    <div class="Polaris-Stack__Item">
                                      <div class="Polaris-ButtonGroup">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                            @endif
                          </div>
                          <div class="collections" hidden="true">
                             @if($get_collection_name)
                             @foreach($get_collection_name as $collection)
                             <div class="Polaris-Card__Section">
                                  <div class="Polaris-TextContainer">
                                     <fieldset class="Polaris-ChoiceList Polaris-ChoiceList--titleHidden" id="salesChannelsList1[]" aria-invalid="false">
                            
                    <ul class="Polaris-ChoiceList__Choices">
                      <li><label class="Polaris-Choice"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="all_collection[]" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" id="all_collection" role="checkbox" aria-checked="false" value="{{ $collection->id }}" title="{{ $collection->title }}"'.@if(strpos($ex_coll, strval($collection->id)) !== false) checked @endif.'><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                    <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                  </svg></span></span></span></span><span class="Polaris-Choice__Label"> <label for="collect">{{ $collection->title }}</label>
                            </span></label></li>
                               </ul>
                          </fieldset>
                                </div>
                              </div>
                              @endforeach
                           @else 
                            <div class="Polaris-Card__Section">
                                 <div class="Polaris-Card__Header">
                                  <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                     <p>There are already discounts available on all collection products.</p>
                                    </div>
                                    <div class="Polaris-Stack__Item">
                                      <div class="Polaris-ButtonGroup">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                            @endif
                            </div>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  </div>
                  <div class="Polaris-Modal-Footer">
                    <div class="Polaris-Modal-Footer__FooterContent">
                      <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill"><p style="text-align: left;" id="count"></p></div>
                        <div class="Polaris-Stack__Item">
                          
                          <div class="Polaris-ButtonGroup">
                            <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button" focusable="false" aria-hidden="true" data-dismiss="modal"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text" id="cancle">Cancel</span></span></button></div>
                            <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary" id="submit" onclick="addRecords()"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add</span></span></button></div>
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
        <div class="Polaris-Backdrop"></div>  
      </div>
      <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("search");
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
          modal.style.display = "none";
          $('#showw').attr('hidden',false);
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>
    </body>
  </html>

@section('scripts')
  
<script type="text/javascript">
 // With JQuery
$("#ex13").slider({
    ticks: [1, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
    ticks_labels: ['$1', '$10', '$20', '$30', '$40', '$50', '$60', '$70', '$80', '$90', '$100'],
    ticks_snap_bounds: 1
});

  var second = $('#second').css("display","none");
  var third = $('#third').css("display","none");
  var forth = $('#forth').css("display","none");
  var fifth = $('#fifth').css("display","none");
/*---------------------------------------------------------*/
  $('#title').click(function() {
    var first = $('#first').css("display","block");
    var second1 = $('#second').css("display","none");
    var third1 = $('#third').css("display","none");
    var forth1 = $('#forth').css("display","none");
    var fifth = $('#fifth').css("display","none");
    $("#title").addClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected');
    $("#offer").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#requirements").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#tab_products").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#schedule").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
  });

  $('#offer').click(function() {
    var first = $('#first').css("display","none");
    var second1 = $('#second').css("display","block");
    var third1 = $('#third').css("display","none");
    var forth1 = $('#forth').css("display","none");
    var fifth = $('#fifth').css("display","none");
    $("#offer").addClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected');
    $("#title").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#requirements").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#tab_products").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#schedule").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');

    if($("#percentage").is(':checked')){
      $('#primary2').css("display","none");
      $('#primary1').css("display","block");
    }else if($("#fixed_amount").is(':checked')) {
      $('#primary1').css("display","none");
      $('#primary2').css("display","block");
    }

    $('#percentage').click(function() {
      $('#primary2').css("display","none");
      $('#primary1').css("display","block");
    });
    $('#fixed_amount').click(function() {
      $('#primary1').css("display","none");
      $('#primary2').css("display","block");
    });
  });

  $('#requirements').click(function() {
    var first = $('#first').css("display","none");
    var second1 = $('#second').css("display","none");
    var third1 = $('#third').css("display","block");
    var forth1 = $('#forth').css("display","none");
    var fifth = $('#fifth').css("display","none");
    $("#requirements").addClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected');
    $("#title").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#offer").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#tab_products").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#schedule").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');

    if($("#PolarisRadioButton9").is(':checked')){
      $('#display2').attr('hidden',false);
    }else if($("#amt1").is(':checked')) {
      $('#display2').attr('hidden',true);
    }

    $('#amt1').click(function() {
      $('#display2').attr('hidden',true);
    });
    $('#PolarisRadioButton9').click(function() {
      $('#display2').attr('hidden',false);
    });  
  });

  $('#tab_products').click(function() {
    var first = $('#first').css("display","none");
    var second1 = $('#second').css("display","none");
    var third1 = $('#third').css("display","none");
    var forth1 = $('#forth').css("display","block");
    var fifth = $('#fifth').css("display","none");
    $("#tab_products").addClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected');
    $("#title").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#offer").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#requirements").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#schedule").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
 

    if($("#allProduct").is(':checked')){
      $('#showw').attr('hidden',true);
      $('#show_collection').attr('hidden',true);
    }
    if($("#specific").is(':checked')){
      $('#showw').attr('hidden',false);
      $('#show_collection').attr('hidden',true);
      var value_hidden =  $("#hidden").val();
      console.log(value_hidden);
      $('#search').val(value_hidden);
      

      $("#search").click(function() {
        $('#showw').attr('hidden',true);
          modal.style.display = "block";
          $('#show_collection').attr('hidden',true);
          $( "#header" ).html( "Add products");
          $("#search2").attr("placeholder", "Search products");
          $('.products').attr('hidden',false);
          $('.collections').attr('hidden',true);
      });
    }
    if($("#collection").is(':checked')){
      $('#show_collection').attr('hidden',false);
      $('#showw').attr('hidden',true);
      var value_hiddend = $("#hidden1").val();
      console.log(value_hiddend);
      $('#search3').val(value_hiddend);
      $('#search3').attr('hidden',false);

      $("#search3").click(function() {
        $('#show_collection').attr('hidden',true);
          modal.style.display = "block";
          $('#showw').attr('hidden',true);
          $( "#header" ).html( "Add collections");
          $("#search2").attr("placeholder", "Search collections");
          $('.products').attr('hidden',true);
          $('.collections').attr('hidden',false);
      });
    }
     }); 
    $(function() {
        $('#allProduct').click(function() {
            $('#showw').attr('hidden',true);
            $('#show_collection').attr('hidden',true);
        });           
        $('#specific').click(function() {
            $('#showw').attr('hidden',false);
            $('#show_collection').attr('hidden',true);
             var product = $("#search").attr("placeholder", "Click the search icon to select one or more products...");
            $('#search').click(function() {
                $('#showw').attr('hidden',true);
                modal.style.display = "block";
                $('#show_collection').attr('hidden',true);
                $( "#header" ).html( "Add products");
                $("#search2").attr("placeholder", "Search products");
                $('.products').attr('hidden',false);
                $('.collections').attr('hidden',true);
            }); 
      });
        $('#collection').click(function() {
            $('#show_collection').attr('hidden',false);
            $('#showw').attr('hidden',true);
            $("#search3").attr("placeholder", "Click the search icon to select one or more collections...");
            $('#search3').click(function() {
                $('#show_collection').attr('hidden',true);
                modal.style.display = "block";
                $('#showw').attr('hidden',true);
                $( "#header" ).html( "Add collections");
                $("#search2").attr("placeholder", "Search collections");
                $('.products').attr('hidden',true);
                $('.collections').attr('hidden',false);
              }); 
          });
    });

     $(function() {
        $('#cancle').click(function() {
            modal.style.display = "none";
            $('#showw').attr('hidden',false);
            $('#show_collection').attr('hidden',false);
        });           
    });
      function addRecords() {
     var type = $("input[name='product']:checked").val();
     if( type == 'specific'){
          $('#show_collection').attr('hidden',true);
          $('#search3').attr('hidden',true);
            var favorite = [];
            var favorites = [];
            $('#collect:checked').each(function(i){
                favorite[i] = $(this).val();
                favorites[i] = $(this).attr( "title");
              });
            console.log(favorite);
            console.log(favorites);
            $("input[name='hidden[]']").val(favorite);
            
            $("input[id='search']").val(favorites);
            if(favorite == ''){
              modal.style.display = "block";
              $("#error").addClass('Polaris-TextField--error');
              $('#show_collection').attr('hidden',true);
             $('#search3').attr('hidden',true);

           }else{
            modal.style.display = "none";
            $("#error").addClass('Polaris-TextField--focus').removeClass('Polaris-TextField--error');
            $('#showw').attr('hidden',false);
            $('#show_collection').attr('hidden',true);
             $('#search3').attr('hidden',true);
          }
     }else if(type == 'collection'){
            $('#showw').attr('hidden',true);
            $('#search').attr('hidden',true);
              var favorite1 = [];
              var favorites2 = [];
              $('#all_collection:checked').each(function(i){
                  favorite1[i] = parseInt($(this).val());
                  favorites2[i] = $(this).attr( "title");
                });
              console.log(favorite1);
                console.log(favorites2);
              $("input[name='collections2[]']").val(favorite1);
              $("input[id='search3']").val(favorites2);
                $("#check_product").html('<b>'+ favorites2 +'</b>');
            
              if(favorite1 == ''){
               // modal.style.display = "block";
                $("#error2").attr('hidden',false);
                $("#error2").addClass('Polaris-TextField--error');
                $("#error").attr('hidden',true);
                $('#showw').attr('hidden',true);
                $('#search').attr('hidden',true);


             }else{
              modal.style.display = "none";
              $("#error2").addClass('Polaris-TextField--focus').removeClass('Polaris-TextField--error');
              $('#show_collection').attr('hidden',false);
              $('#showw').attr('hidden',true);
              $('#search').attr('hidden',true);
            }
        }
   }
 

  $('#schedule').click(function() {
    var first = $('#first').css("display","none");
    var second1 = $('#second').css("display","none");
    var third1 = $('#third').css("display","none");
    var forth1 = $('#forth').css("display","none");
    var fifth = $('#fifth').css("display","block");
    $("#schedule").addClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected');
    $("#title").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#offer").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#requirements").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');
    $("#tab_products").removeClass('Polaris-Tabs__Tab Polaris-Tabs__Tab--selected').addClass('Polaris-Tabs__Tab');

    var start_date = $('#PolarisTextField3').val();
    $('#PolarisTextField3').on('change', function() {
      start_date = $(this).val();
    });  
    console.log(start_date);
    $('#display').attr('hidden',true);
      
    $(function() {
      if($("#never").is(':checked')){
        $('#display').attr('hidden',true);
      }else{
        $('#display').attr('hidden',false);
        var min = $('#PolarisTextField').attr('min',start_date);
      }
      $('#end').click(function() {
        $('#display').attr('hidden',false);
        var min = $('#PolarisTextField').attr('min',start_date);
      });  
      $('#never').click(function() {
        $('#display').attr('hidden',true);
      });
    });
  });

 
</script>
@endsection
