$("#id").on('click', function(e) {
    if($(this).is(':checked'))
        $(".id").show();
    else
        $(".id").hide();
})

$("#path").on('click', function(e) {
    if($(this).is(':checked'))
        $(".path").show();
    else
        $(".path").hide();
})

$("#sku").on('click', function(e) {
    if($(this).is(':checked'))
        $(".sku").show();
    else
        $(".sku").hide();
})

$("#title").on('click', function(e) {
    if($(this).is(':checked'))
        $(".title").show();
    else
        $(".title").hide();
})

$("#count").on('click', function(e) {
    if($(this).is(':checked'))
        $(".count").show();
    else
        $(".count").hide();
})

$("#type").on('click', function(e) {
    if($(this).is(':checked'))
        $(".type").show();
    else
        $(".type").hide();
})

$("#delete").on('click', function(e) {
    if($(this).is(':checked'))
        $(".delete").show();
    else
        $(".delete").hide();
})

$("#button").on('click', function(e) {
    if($(this).is(':checked'))
        $(".button").show();
    else
        $(".button").hide();
})