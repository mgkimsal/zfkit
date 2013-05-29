//<![CDATA[ 
$(window).load(function(){
$("body").tooltip({
selector: "a[rel=tooltip]",
placement: "top"
});
$("body").popover({
selector: ".popover-test",
placement: "right"
});
});//]]>  