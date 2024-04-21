// $('a#fav').on('click', function(){
//     var childSpan = $(this).find('i');
//     if(childSpan.hasClass('far fa-heart')){
//       childSpan.removeClass('far fa-heart');
//       childSpan.addClass('bx bxs-heart');
//     }
//     else if(childSpan.hasClass('bx bxs-heart')){
//      childSpan.removeClass('bx bxs-heart');
//      childSpan.addClass('far fa-heart');
//     }});


myfunction($this);{
    // ...

    if ($($this).next('span').hasClass("far fa-heart")) {
        $($this).next('span').removeClass("far fa-heart");
        $($this).next('span').addClass("bx bxs-heart");
    }
    else {
        $($this).next('span').addClass("bx bxs-heart");
        $($this).next('span').addClass("far fa-heart");
    }

    // ...
}