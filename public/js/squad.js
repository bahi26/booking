$(".nextbtn").click(function () {

    var text = $(".pager").attr("showingpage");
    if (text==1 && (document.getElementById('Estgmam').checked || document.getElementById('Eqama').checked || document.getElementById('Dayuse').checked)) {


        $(".pager").attr("showingpage", "2");
        $(".FirstSection").fadeOut();

        $(".nextbtn").fadeOut();
        $("#previous").fadeIn("2000");
        $(".submitbtn").fadeIn("2000");
        $(".SecondSection").fadeIn("2000");


        popdown();

    }else{
        popUp();
    }
    /* else if (text==2 && (document.getElementById('Single').checked || document.getElementById('Double').checked|| document.getElementById('Triple').checked|| document.getElementById('Quad').checked)) {

         if (text == 1) {
         } else if (text == 2) {
             $(".pager").attr("showingpage", "3");
             $(".SecondSection").fadeOut();
             $(".ThirdSection").fadeIn("2000");
             $(".nextbtn").fadeOut();
             $(".submitbtn").fadeIn("2000");
              popdown();
         } else if(text==3){

         }
     }*/
});

$(".Previousbtn").click(function () {
    var text = $(".pager").attr("showingpage");
    if (text == 2) {
        $(".pager").attr("showingpage", "1");
        $(".SecondSection").fadeOut("500");
        $(".nextbtn").fadeIn();
        $(".submitbtn").fadeOut("");
        $("#previous").fadeOut("");
        $(".FirstSection").fadeIn("2000");
        popdown();
    }

});

$( ".submitbtn" ).click(function() {
    if((document.getElementById('Single').checked || document.getElementById('Double').checked ||  document.getElementById('Quad').checked || document.getElementById('Dayuse').checked)){
        $( "#Form" ).submit();
    }else{
        popUp();
    }

});

$( "#Doubleimg" ).click(function() {
    $("#bathType").css("display","block");


});

$( "#Singleimg" ).click(function() {
    $("#bathType").css("display","none");


});

$( "#Quadimg" ).click(function() {
    $("#bathType").css("display","none");

});


if(document.getElementById('weekly').checked){
    $("#numWeek").css("display","block");
}
else{
    $("#numWeek").css("display","none");
}

$( ".weekly" ).click(function() {
    $("#numWeek").css("display","block");


});

$( ".weekend" ).click(function() {
    $("#numWeek").css("display","none");


});

