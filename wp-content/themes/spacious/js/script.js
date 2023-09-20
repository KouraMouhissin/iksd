jQuery("#menu-menu").append('<div class="dropdownBackground"></div>');

jQuery("#menu-menu > li.menu-item").mouseover(
    function(){
        var li = jQuery(this);
        var sub_menu = li.children("ul.sub-menu");
        var height = sub_menu.length == 1 ? sub_menu.height() : 0;

        jQuery(".dropdownBackground").css("height", height +"px");

        var sub_menu_position = (-102.625 + (78 * li.index()));

        jQuery(".dropdownBackground").css("transform", "translate("+sub_menu_position+"px, 0px)");
        jQuery(".dropdownBackground").addClass('active');   
    }
);
jQuery("#menu-menu").mouseleave(function(){
    jQuery(".dropdownBackground").removeClass('active');
    jQuery(".dropdownBackground").css("height", "0px");
});