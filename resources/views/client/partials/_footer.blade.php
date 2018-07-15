<style type="text/css">
   .flex-control-paging li a.flex-active{
        background-color: #fff ;
   }

</style>

<div class="container container_footer">
<footer class=" footer" style="margin-top: 0px" >
@if(isset($brands))
<<<<<<< HEAD
<div class=" flexslider2 carousel" style="left: 12%;width: 76%; height: 11em;top: 2em;background-color: #ffa7aa87;border-color: #d80f17   ;z-index: 1;margin-bottom: 5em">
=======
<div style="background-color: rgba(239, 239, 239,0.5);border-color: rgba(239, 239, 239,-0.5);margin-top: 2em;">
<div class=" flexslider2 carousel" style="left: 12%;width: 76%; height: 11em;z-index: 1;margin-bottom: 5em">
>>>>>>> e0ea1dae4f2e8f593a59848bcfcb13998f80c658
        <ul class="slides">
          @foreach($brands as $brand)
          <li>
              <div  style="margin-top: 1em;float: left;max-width: 100%;margin-bottom: 1em">
                  <div class="div_item" style="height: 12em;width: 10em;margin-left: 47px; background-color: #bb313100;box-shadow: 0px 0px 0px #fff;">
                     <a href="{{route('brandfilter',(string)$brand->id)}}"> <img src="{{$brand->image_path}}" class="img_item" style="height: 5.4em" />
                      <p class="item_name" style="width: 100%;text-align: center;color: #fff">{{$brand->english}}</p>
                     </a>
                  </div>
              </div>
          </li>
          @endforeach
          <!-- items mirrored twice, total of 12 -->
        </ul>
      </div>
</div>
      @endif


            <div class="col-md-12" style="float:left">
                <h2 class="title_footer">
                    <a href="{{route('about-us')}}" style="color: #fff;text-decoration: none; ">@lang('About Dukkangi')</a>
                </h2>
            </div>
            <div class="col-md-12 " style="text-align: center">
                <p class="text_footer">
                    @lang('All Rights Reserved') <br>
                    Dukkangi 2018
                </p>
            </div>
            <div class="col-md-7 div_icon_footer about" >
                <a href="https://www.instagram.com/"><i class="fa fa-instagram icon_footer icon_inst" ></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter icon_footer"></i> </a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook icon_footer icon_face"></i></a>
            </div>
</footer>
 </div>
<script src="/front-end/js/plugin/SimpleStarRating.js"></script>
<script src={{url("static/sweetalert/sweetalert2.all.js")}}></script>
<script >
   function showratemodal(){
    $('#rate-us-modal').css({'display':'block'});
   }
</script>
<script >
    var ratings = document.getElementsByClassName('rate-us');

    for (var i = 0; i < ratings.length; i++) {

        var r = new SimpleStarRating(ratings[i]);

    }
     $('.rate-us').click(function () {
        var num_star_active = 0;
        $(this).find('.star').each(function () {
            if ($(this).hasClass('active')) {
                num_star_active++;
            }
        });
        $('#rate-us').val(num_star_active);
    });
</script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script defer src="/js/jquery.flexslider.js"></script>

<script >
  inp = $('#nav-bar-search');
  inp.keypress(function() {
    // console.log(inp.val());

    text= inp.val();
    if(text.length < 1)
      return;

     $.ajax({
            type: "POST",
            url: `/search-auto`,
            data: { 'text': text },
            headers: {
                "x-csrf-token": $("[name=_token]").val()
            },
        }).done(response => {
            if (response == 0){
               var currentFocus;
                /*execute a function when someone writes in the text field:*/
                // inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");

                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                 b = document.createElement("DIV");
                    
                    b.innerHTML =  "No Matches" ;
                    // b.innerHTML += response[i]['english'].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    // b.innerHTML += "<input type='hidden' data-type='" + response[i]['type'] +"'  value='" + response[i]['id'] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    a.appendChild(b);
            }
            else if (response !=  null) {
               // console.log(response);
                 
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                // inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) { return false;}
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");

                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/

                counter = 0 ;
                
                //Products
                type = 'pr';
                for (i = 0; i < response.length; i++) {
                    if (response[i]['type'] != type) break;
                   /*create a DIV element for each matching element:*/
                    if(i == 0){
                      b = document.createElement("DIV");
                        b.innerHTML = "<label> Products </label>";                    
                        a.appendChild(b);
                      
                    }
                    b = document.createElement("DIV");
                    b.setAttribute('onclick', 'redirect(this);');
                   
                    b.innerHTML =  response[i]['english'] ;
                    // b.innerHTML += response[i]['english'].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' data-type='" + response[i]['type'] +"'  value='" + response[i]['id'] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    a.appendChild(b);
                    counter = i+1;
                }
                // console.log(response[counter]);
                x = 0;
                type = 'ca';
                // Categoeries
                for (i = counter; i < response.length; i++) {
                    
                    if (response[i]['type'] != type) break;
                    if (x== 0 ){
                        b = document.createElement("DIV");
                        b.innerHTML = "<label> Categories </label>";                    
                        a.appendChild(b);
                        x++;
                    }
                   /*create a DIV element for each matching element:*/
                    b = document.createElement("DIV");
                    b.setAttribute('onclick', 'redirect(this);');
                   
                    b.innerHTML =  response[i]['english'] ;
                    // b.innerHTML += response[i]['english'].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' data-type='" + response[i]['type'] +"'  value='" + response[i]['id'] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    a.appendChild(b);
                    counter = i +1;
                }
                x=1;
                type = 'sub';
                // Subategoeries
                for (i = counter; i < response.length; i++) {
                   /*create a DIV element for each matching element:*/
                    if (response[i]['type'] != type) break;
                    if (x== 1){
                        b = document.createElement("DIV");
                        b.innerHTML = "<label> Subcategories </label>";                    
                        a.appendChild(b);
                        x++;
                    }
                    b = document.createElement("DIV");
                    b.setAttribute('onclick', 'redirect(this);');
                   
                    b.innerHTML =  response[i]['english'] ;
                    // b.innerHTML += response[i]['english'].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' data-type='" + response[i]['type'] +"'  value='" + response[i]['id'] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    a.appendChild(b);
                    counter = i+1;
                }
                type = 'br';
                x=2;
                // Brands
                for (i = counter; i < response.length; i++) {
                   /*create a DIV element for each matching element:*/
                    if (response[i]['type'] != type) break;
                     if (x== 2){
                        b = document.createElement("DIV");
                        b.innerHTML = "<label> Brands </label>";                    
                        a.appendChild(b);
                        x++;
                    }
                    b = document.createElement("DIV");
                    b.setAttribute('onclick', 'redirect(this);');
                   
                    b.innerHTML =  response[i]['english'] ;
                    // b.innerHTML += response[i]['english'].substr(val.length);
                    /*insert a input field that will hold the current array item's value:*/
                    b.innerHTML += "<input type='hidden' data-type='" + response[i]['type'] +"'  value='" + response[i]['id'] + "'>";
                    /*execute a function when someone clicks on the item value (DIV element):*/
                    a.appendChild(b);
                    counter = i+1;
                }


                inp.keydown(function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                  /*If the arrow DOWN key is pressed,
                  increase the currentFocus variable:*/
                  currentFocus++;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 38) { //up
                  /*If the arrow UP key is pressed,
                  decrease the currentFocus variable:*/
                  currentFocus--;
                  /*and and make the current item more visible:*/
                  addActive(x);
                } else if (e.keyCode == 13) {
                  /*If the ENTER key is pressed, prevent the form from being submitted,*/
                  e.preventDefault();
                  if (currentFocus > -1) {
                    /*and simulate a click on the "active" item:*/
                    if (x) x[currentFocus].click();
                  }
                }
            }

            );
               
            }

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
              }
              function removeActive(x) {  
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                  x[i].classList.remove("autocomplete-active");
                }
              }
              function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                  if (elmnt != x[i] && elmnt != inp) {
                    x[i].parentNode.removeChild(x[i]);
                  }
                }
              }
              /*execute a function when someone clicks in the document:*/
              document.addEventListener("click", function (e) {
                  closeAllLists(e.target);
                  });
            
        });
  });
  function redirect(elmnt){ 
    id = $(elmnt).find('input').attr('value');
    type = $(elmnt).find('input').data('type');
    if (type == 'pr'){ //Product
      window.location.replace('/productview/'+id);
    }
    if(type == 'ca'){ // Category
      window.location.replace('/category/'+id);
    }
    if (type == 'sub' ){ //Subcategory
      window.location.replace('/subcategoryfilter/'+id);
    }
    if (type == 'br'){ //Brand
        window.location.replace('/brandfilter/'+id);   
    }
  }
</script>
<script >
  function addCartModal(src,id){
    console.log(id);
    $('#modal_one_item_details').attr('data-productId', id);
    $('#modal_one_item_details').data('data-qty', 1);
    $('#modal-img').attr('src' , src );
    console.log(src);
    showModal();
  }
    function showModal() {
        $('#modal_one_item_details').show();
        $('.background_modal').show();
        $('#header').css('filter', 'blur(5px)');
        $('#content_page').css('filter', 'blur(5px)');
        $('.footer').css('filter', 'blur(5px)');
    }

    function hideModal() {
        $('#modal_one_item_details').hide();
        $('.background_modal').hide();
        $('#header').css('filter', 'blur(0px)');
        $('#content_page').css('filter', 'blur(0px)');
        $('.footer').css('filter', 'blur(0px)');
    }
</script>
      @yield('scripts')
