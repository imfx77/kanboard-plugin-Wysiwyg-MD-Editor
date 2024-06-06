$(".fieldset-WysiwygMDEditor legend").click(function() {
    $(this).parent().find(".fieldset-WysiwygMDEditor-container").toggleClass('fieldset-accordion-show');
    $(this).parent().find(".fieldset-WysiwygMDEditor-container").toggleClass('fieldset-accordion-hide');
    $(this).find("i").toggleClass('fa fa-chevron-down');
    $(this).find("i").toggleClass('fa fa-chevron-up');
});
