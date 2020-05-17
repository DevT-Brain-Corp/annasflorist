
$(document).ready(function(){
    $('select').formSelect();
  });
  // count row
  $(document).ready(function(){
    var countdiv = $("#detail #row").length;

    document.getElementById("showcart").innerHTML=countdiv;
    document.getElementById("showcart2").innerHTML=countdiv;
  });
  // end count row
// $(document).ready(function(){
//   $('select').formSelect();
// });

// // count row
// $(document).ready(function(){
//   var countdiv = $("#detail #row").length;

//   document.getElementById("showcart").innerHTML=countdiv;
//   document.getElementById("showcart2").innerHTML=countdiv;
// });
// // end count row
