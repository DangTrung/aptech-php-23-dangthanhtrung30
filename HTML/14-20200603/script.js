$( document).ready(function(){
    $("#bar").click(function(){
        if(($("#nav").css("display")=="none")){
            $("#nav").addClass("d-md-block-max")
            $("#carousel-item").addClass("d-md-block-max")
           
            $("#ul").addClass("d-md-block-max")
           
            $("#prev").addClass("d-md-block-max")
           
            $("#prev").addClass("d-md-block-max")
        }
        else{
                $("#nav").removeClass("d-md-block");
                $("#carousel-item").removeClass("d-md-block");
                $("#ul").removeClass("d-md-block");
                $("#prev").removeClass("d-md-block");
                $("#next").removeClass("d-md-block");
            }
        }
    }
}  