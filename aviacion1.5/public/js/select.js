$(document).ready(function(){
  $(".selectMenu").click(function(){
    $(this).toggleClass("flip");
  });
  $(".back ul li").click(function(){
    var option = $(this).html();
    $(".front span").html(option);
  });
});