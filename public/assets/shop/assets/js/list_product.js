const rangeInput = document.querySelectorAll(".range_input input"),
priceInput = document.querySelectorAll(".pricer_input input"),
progress = document.querySelector(".slider .progress");
let pricegap = 100;
priceInput.forEach(input => {
    input.addEventListener("input", e=>{
        let minval = parseInt(priceInput[0].value), 
        maxval = parseInt(priceInput[1].value);
        if((maxval - minval >= pricegap) && maxval <= 1000){
            if(e.target.className === "ip_min"){
                rangeInput[0].value = minval;
                progress.style.left = (minval / rangeInput[0].max)*100 + "%";
            }else{
                rangeInput[1].value = maxval;
                progress.style.right = 100 - (maxval / rangeInput[1].max)*100 + "%";
            }
           
        }
       
    })
})
rangeInput.forEach(input => {
    input.addEventListener("input", e=>{
        let minval = parseInt(rangeInput[0].value), 
        maxval = parseInt(rangeInput[1].value);
        if(maxval - minval < pricegap){
            if(e.target.className === "range_min"){
                rangeInput[0].value = maxval - pricegap;
            }else{
                rangeInput[1].value = minval + pricegap;
            }  
        }else{
            priceInput[0].value = minval;
            priceInput[1].value = maxval;
            progress.style.left = (minval / rangeInput[0].max)*100 + "%";
            progress.style.right = 100 - (maxval / rangeInput[1].max)*100 + "%";
        }
       
    })
})



$(".sort_select").click(function() {
    $('.sort_option').toggleClass('hidden');
})

$('.option').click(function(){
    let $selected_option = $(this).html();
    let $option = $('.option_title').html();
    if($selected_option != $option){
        $('.option_title').html($selected_option);
    }
})

$(document).on('click','.f_category',function() {
    $('.f_category').removeClass('f_category-active');
    $(this).addClass('f_category-active');
})

$(document).on('click','.item_color',function() {
    $('.item_color').removeClass('item_color-selected');
    $(this).addClass('item_color-selected');
})
$(document).on('click','.item_size',function() {
    $('.item_size').removeClass('item_size-selected');
    $(this).addClass('item_size-selected');
})