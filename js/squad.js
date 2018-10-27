$(".nextbtn").click(function () {
   
    var text = $(".pager").attr("showingpage");
    if (text==1 && (document.getElementById('Estgmam').checked || document.getElementById('Eqama').checked)) {
        
        if (text == 1) {
            $(".pager").attr("showingpage", "2");
            $(".FirstSection").fadeOut();
            $(".SecondSection").fadeIn("2000");
            popdown();
        } else if (text == 2) {
            $(".pager").attr("showingpage", "3");
            $(".SecondSection").fadeOut();
            $(".ThirdSection").fadeIn("2000");
            $(".nextbtn").fadeOut();
            $(".submitbtn").fadeIn("2000");
             popdown();
        } else if(text==3){
        }
    }
    else if (text==2 && (document.getElementById('Single').checked || document.getElementById('Double').checked|| document.getElementById('Triple').checked|| document.getElementById('Quad').checked)) {
        
        if (text == 1) {
            $(".pager").attr("showingpage", "2");
            $(".FirstSection").fadeOut();
            $(".SecondSection").fadeIn("2000");
             popdown();
        } else if (text == 2) {
            $(".pager").attr("showingpage", "3");
            $(".SecondSection").fadeOut();
            $(".ThirdSection").fadeIn("2000");
            $(".nextbtn").fadeOut();
            $(".submitbtn").fadeIn("2000");
             popdown();
        } else if(text==3){
            
        }
    }else{
        popUp();
    }
});

$(".Previousbtn").click(function () {
    var text = $(".pager").attr("showingpage");
    if (text == 2) {
        $(".pager").attr("showingpage", "1");
        $(".SecondSection").fadeOut();
        $(".FirstSection").fadeIn("2000");
    } else if (text == 3) {
        $(".pager").attr("showingpage", "2");
        $(".nextbtn").fadeIn();
        $(".submitbtn").fadeOut("2000");
        $(".ThirdSection").fadeOut();
        $(".SecondSection").fadeIn("2000");
        popdown();
    } else {
    }
    
});

$( ".submitbtn" ).click(function() {
  $( "#Form" ).submit();
});