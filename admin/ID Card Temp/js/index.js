$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $(".navbar").css({
              "box-shadow": "rgba(0, 0, 0, 0.24) 0px 3px 8px",
             
            });
        }
       
        else{
            $("nav.navbar").css(
                "box-shadow", "none",
                
               
            )}	

    })
  });

  /*********view more********* */
  $(document).ready(function(){
    $(".team-card").slice(0, 3).fadeIn();
    $("#viewall").click(function(){
        $(".team-card").slice(0, 11).fadeIn();
        $(this).fadeOut();
    });
  });