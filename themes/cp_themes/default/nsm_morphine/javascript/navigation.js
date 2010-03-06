$('.menu.tabs').each(function(index) {
    var target_selectors = [];
    var $triggers = $('a', $(this)).each(function(index) {
        target_selectors.push(this.hash);
    })
    .click(function() {
        $targets.hide();
        $triggers.removeClass("active");
        if((/show_all$/).test(this.hash))
        {
            $targets.fadeIn();
        }
        else
        {
            $(this).addClass("active");
            $targets.filter(this.hash).fadeIn();
        }
        return false;
    });
    var $targets = $(target_selectors.join(", ")).hide();
    $triggers.eq(0).click();
});