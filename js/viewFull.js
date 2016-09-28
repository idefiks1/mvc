$(document).ready(function() 
{
    $("a.btn").click(function()
        {
            if ($(this).next().is(":hidden"))
            {
                $(this).next().slideDown("slow").show();
                $(this).prev().toggle();
                $(this).text("hide...");
            } 
            else
            {
                $(this).next().slideUp("slow").hide("slow");
                $(this).prev().toggle();
                $(this).text("View full...");
            }
        });
});