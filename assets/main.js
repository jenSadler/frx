console.warn("hello people!");

jQuery(document).ready(function($){

$('.cat-list_item').on('click', function() {
    $('.cat-list_item').removeClass('active');
    $(this).addClass('active');
    console.log("inside"+$(this).data('slug'));
   
    ajaxCall();   
});

$('#keyword').on('keyup', function(){
    
    ajaxCall();
});


function ajaxCall(){
    var keyword = $('#keyword').val();
    var category = $('.cat-list_item.active').data('slug');
    
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