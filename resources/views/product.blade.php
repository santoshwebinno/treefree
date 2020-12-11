@extends('shopify-app::layouts.default')
    
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.2.0/dist/styles.css"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js'></script>


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
                    <p><b>Summary:</b> Offer <b>@if($percentage == 'percentage') {{ $value }}% @else ${{ $value }} @endif  off </b> on <b id="check_product">all </b></p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="Polaris-Page__Content">
        <div class="Polaris-Card">
          <form method="post" action="{{ route('product') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="type" value="{{ $percentage }}">
            <input type="hidden" name="title" value="{{ $title }}">
            <input type="hidden" name="description" value="{{ $description }}">
            <input type="hidden" name="value" value="{{ $value }}">
            <input type="hidden" name="quantity" value="{{ $quantity }}">
            <input type="hidden" name="start" value="{{ $start }}">
            <input type="hidden" name="end" value="{{ $end }}">
            <input type="hidden" name="collections1[]" value="">
            <input type="hidden" name="collections2[]" value=""> 
            <div class="Polaris-Card__Header">
              <h2 class="Polaris-Heading"><div class="Polaris-ButtonGroup">
                <div class="Polaris-ButtonGroup__Item"><button type="button" class="Polaris-Button Polaris-Button--disabled"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Previous</span></span></button></div>
                <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary Polaris-Button"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Save Offer</span></span></button></div>
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
                            <h2 class="Polaris-Heading">Products
                            </h2>
                            <div class="Polaris-Layout__AnnotationDescription">
                              <p>
                              Select the products that are discounted in this offer. You can select all products, a number of collections or a number of products.</p>
                            </div>
                          </div>
                        </div>
                        <div class="Polaris-Layout__AnnotationContent">
                          <div class="Polaris-Layout">
                            <div class="Polaris-Layout__Section Polaris-Layout__Section--oneThird">
                              <div class="Polaris-Card">
                                <div class="Polaris-Card__Header">
                                  <div class="Polaris-Stack Polaris-Stack--alignmentBaseline">
                                    <div class="Polaris-Stack__Item Polaris-Stack__Item--fill">
                                      <h2 class="Polaris-Heading">Which products are discounted in this offer?</h2>
                                    </div>
                                    <div class="Polaris-Stack__Item">
                                      <div class="Polaris-ButtonGroup">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="Polaris-Card__Section Polaris-Card__Section--subdued">
                                  <fieldset class="Polaris-ChoiceList" id="PolarisChoiceList0" aria-invalid="false">
                                    <ul class="Polaris-ChoiceList__Choices">
                                      <li><label class="Polaris-Choice" for="allProduct"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="allProduct" name="product" type="radio" class="Polaris-RadioButton__Input" value="all" checked=""><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">All products</span></label></li>

                                      <li><label class="Polaris-Choice" for="collection"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="collection" name="product" type="radio" class="Polaris-RadioButton__Input" value="collection"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific collection(s)</span></label></li>

                                      <li><label class="Polaris-Choice" for="specific"><span class="Polaris-Choice__Control"><span class="Polaris-RadioButton"><input id="specific" name="product" type="radio" class="Polaris-RadioButton__Input" value="specific"><span class="Polaris-RadioButton__Backdrop"></span><span class="Polaris-RadioButton__Icon"></span></span></span><span class="Polaris-Choice__Label">Specific products</span></label></li>
                                    </ul>
                                  </fieldset>
                                </div>
                                <div class="Polaris-Card__Section" id="showw" hidden="true">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--focused Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--error" id="error">
                                      <div class="Polaris-TextField__Prefix" id="PolarisTextField11Prefix"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                          <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                                          </svg></span></div><input id="search" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextFieldLabel PolarisTextField11Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover" aria-owns="Polarispopover" aria-expanded="true" data-toggle="modal" data-target="#myModal" value="">
                                        <div class="Polaris-TextField__Backdrop"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="Polaris-Card__Section" id="show_collection" hidden="true">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--focused Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--error" id="error2">
                                      <div class="Polaris-TextField__Prefix" id="PolarisTextField11Prefix2"><span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                          <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                                          </svg></span></div><input id="search3" autocomplete="off" class="Polaris-TextField__Input" aria-labelledby="PolarisTextFieldLabel PolarisTextField11Prefix" aria-invalid="false" aria-autocomplete="list" aria-multiline="false" value="" tabindex="0" aria-controls="Polarispopover" aria-owns="Polarispopover" aria-expanded="true" data-toggle="modal" data-target="#myModal" name="col_title">
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
            </form>
          </div>
        </div>
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
                      <li><label class="Polaris-Choice"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="collection[]" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" id="collect" role="checkbox" aria-checked="false" value="{{ $product->product_id }}" title="{{ $product->title }}"><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
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
                            @if($collections)
                             @foreach($collections as $collection)

                             <div class="Polaris-Card__Section">
                                  <div class="Polaris-TextContainer">
                                     <fieldset class="Polaris-ChoiceList Polaris-ChoiceList--titleHidden" id="salesChannelsList1[]" aria-invalid="false">
                            
                    <ul class="Polaris-ChoiceList__Choices">
                      <li><label class="Polaris-Choice"><span class="Polaris-Choice__Control"><span class="Polaris-Checkbox"><input name="all_collection[]" type="checkbox" class="Polaris-Checkbox__Input" aria-invalid="false" id="all_collection" role="checkbox" aria-checked="false" value="{{ $collection->id }}" title="{{ $collection->title }}"><span class="Polaris-Checkbox__Backdrop"></span><span class="Polaris-Checkbox__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
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
                            <div class="Polaris-ButtonGroup__Item"><button type="submit" class="Polaris-Button Polaris-Button--primary" id="submit" onclick="addRecord()"><span class="Polaris-Button__Content"><span class="Polaris-Button__Text">Add</span></span></button></div>
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
        // btn.onclick = function() {
        //   modal.style.display = "block";

        // }
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
@endsection
@section('scripts')

    <script type="text/javascript">
      $(function() {
        $('#allProduct').click(function() {
            $('#showw').attr('hidden',true);
            $('#show_collection').attr('hidden',true);
            $("#check_product").html('<b>all products.</b>');
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


    function addRecord() {
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
            console.log(favorites.length);
            $("input[name='collections1[]']").val(favorite);
            
            $("input[id='search']").val(favorites);
            $("#check_product").html('<b>'+ favorites.length +' products</b>');
       
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
                $("#check_product").html('<b>'+ favorites2.length +' collections</b>');
            
              if(favorite1 == ''){
                modal.style.display = "block";
                $("#error2").addClass('Polaris-TextField--error');
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

    $(function() {
        $('#cancle').click(function() {
            modal.style.display = "none";
            $('#showw').attr('hidden',false);
            $('#show_collection').attr('hidden',false);
        });           
       
    });

</script>

@endsection



