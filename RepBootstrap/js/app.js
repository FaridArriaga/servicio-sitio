$(function () {
    $('#materiales').multiselect();
    $('#dimension').multiselect();
    $('.yearpicker').yearpicker(); 
});

$(function () {
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore").click(function(){
        if($('body').find('.fieldGroup').length < maxGroup){
            var fieldHTML = '<div class="col-lg-4 align-self-center form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
            $('body').find('.fieldGroup:last').after(fieldHTML);
        }else{
            alert('Maximo '+maxGroup+' pasos permitidos.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});

$(function () {
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore2").click(function(){
        if($('body').find('.fieldGroup2').length < maxGroup){
            var fieldHTML = '<div class="col-lg-4 align-self-center form-group fieldGroup2">'+$(".fieldGroupCopy2").html()+'</div>';
            $('body').find('.fieldGroup2:last').after(fieldHTML);
        }else{
            alert('Maximo '+maxGroup+' materiales permitidos.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove2",function(){ 
        $(this).parents(".fieldGroup2").remove();
    });
});

$(function () {
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore3").click(function(){
        if($('body').find('.fieldGroup3').length < maxGroup){
            var fieldHTML = '<div class="col-lg-4 align-self-center form-group fieldGroup3">'+$(".fieldGroupCopy3").html()+'</div>';
            $('body').find('.fieldGroup3:last').after(fieldHTML);
        }else{
            alert('Maximo '+maxGroup+' imagenes permitidas.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove3",function(){ 
        $(this).parents(".fieldGroup3").remove();
    });
});

$(function () {
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore4").click(function(){
        if($('body').find('.fieldGroup4').length < maxGroup){
            var fieldHTML = '<div class="col-lg-4  fieldGroup4 my-auto">'+$(".fieldGroupCopy4").html()+'</div>';
            $('body').find('.fieldGroup4:last').after(fieldHTML);
        }else{
            alert('Maximo '+maxGroup+' ventajas permitidas.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove4",function(){ 
        $(this).parents(".fieldGroup4").remove();
    });
});

$(function () {
    var maxGroup = 10;
    
    //add more fields group
    $(".addMore5").click(function(){
        if($('body').find('.fieldGroup5').length < maxGroup){
            var fieldHTML = '<div class="col-lg-4  fieldGroup5 my-auto">'+$(".fieldGroupCopy5").html()+'</div>';
            $('body').find('.fieldGroup5:last').after(fieldHTML);
        }else{
            alert('Maximo '+maxGroup+' desventajas permitidas.');
        }
    });
    
    //remove fields group
    $("body").on("click",".remove5",function(){ 
        $(this).parents(".fieldGroup5").remove();
    });
});



$(function() {

  $("#inputSelect").on('change', function() {

    var selectValue = $(this).val();
    switch (selectValue) {

      case "1":
      $("#div1").show();
      $("#div2").hide();
      $("#div3").hide();
      break;

      case "2":
      $("#div1").hide();
      $("#div2").show();
      $("#div3").hide();
      break;

  }

}).change();

});






