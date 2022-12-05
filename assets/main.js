console.warn("hello people!");

jQuery(document).ready(function($){

$('.cat-list_item').on('change', function() {
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
    var output = "";
    $('.cat-list_item.active').each(function(i, obj) {
        if(i==0){
            output = $(this).val();  
        }
        else{
            output = output + "+"+ $(this).val();
        }
        
        console.log(output);
    });
    
     return output;
}


function ajaxCall(){
    var keyword = $('#keyword').val();
    var category = getCategoryKeywords();
    console.log("keyword:"+ keyword+ " category:"+category);


    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_projects',
        category: category,
        keyword: keyword 
       
      },
      success: function(res) {
        $('.project-tiles').html(res);
      }
    });
  }
});