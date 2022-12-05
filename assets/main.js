console.warn("hello people!");

jQuery(document).ready(function($){
    console.warn(jQuery.fn.jquery);
ajaxCall(); 

$('#cat-additive').on('change', function() {
    ajaxCall();
});
$('#tag-additive').on('change', function() {
    ajaxCall();
});

$('.cat-list-item').on('change', function() {
        if ($(this).prop("checked")) {
            $(this).addClass('active');
            
        }
        else{
            $(this).removeClass('active')
        }
    console.log("inside"+$(this).val());
   
    ajaxCall();   
});

$('.tag-list-item').on('change', function() {
    if ($(this).prop("checked")) {
        $(this).addClass('active');
        
    }
    else{
        $(this).removeClass('active')
    }
console.log("inside"+$(this).val());

ajaxCall();   
});

$('#keyword').on('keyup', function(){
    
    ajaxCall();
});

function getCategoryKeywords(){

    var divider = "+";
    if ($("#cat-additive").prop("checked")) {
        divider=","  
    }
    else{
        divider="+" 
    }
    

    var output = "";
    $('.cat-list-item.active').each(function(i, obj) {
        if(i==0){
            output = $(this).val();  
        }
        else{
            output = output + divider + $(this).val();
        }
        
        console.log(output);
    });
    
     return output;
}

function getTagKeywords(){

    var divider = "+";
    if ($("#tag-additive").prop("checked")) {
        divider=","  
    }
    else{
        divider="+" 
    }
    

    var output = "";
    $('.tag-list-item.active').each(function(i, obj) {
        if(i==0){
            output = $(this).val();  
        }
        else{
            output = output + divider + $(this).val();
        }
        
        console.log(output);
    });
    
     return output;
}


function ajaxCall(){
    var keyword = $('#keyword').val();
    var category = getCategoryKeywords();
    var tag = getTagKeywords();
    console.log("keyword:"+ keyword+ " category:"+category+" tag:"+tag);


    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_projects',
        category: category,
        keyword: keyword,
        tag: tag
       
      },
      success: function(res) {
        $('.project-tiles').html(res);
      }
    });
  }
});