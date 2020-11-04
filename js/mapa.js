
$(document).ready(function(){
    $("#toggleB_A").click(function(){
        $(".blocoA").slideToggle();
        $(".blocoB").hide();
    });
    $("#toggleB_B").click(function(){
        $(".blocoB").slideToggle();
        $(".blocoA").hide();
    });
});