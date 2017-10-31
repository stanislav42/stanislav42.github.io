$(document).ready(function() {

    $('#one').click(function() {
        $("#two").slideToggle(800);
        $("#one").slideToggle(800);
    });

    $('#two').click(function() {
    	$("#one").slideToggle(800);
        $("#two").slideToggle(800);
    });
});