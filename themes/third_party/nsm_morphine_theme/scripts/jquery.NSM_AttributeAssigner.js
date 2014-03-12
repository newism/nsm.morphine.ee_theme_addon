(function ($) {

    $.fn.NSM_AttributeAssigner = function (options) {
        var options = options;
        return this.each(function () {
            var $container = $(this).parents(".tg:eq(0)");
            var obj = {
                dom: {
                    $container: $container,
                    $trigger: $(this),
                    $targets: $("select[id^='" + options.prefix + "_']:not(#" + this.id + ")", $container)
                },
                cf_data: options.cf_data
            };

            obj.dom.$trigger.change(function () {
                NSM_AttributeAssigner.update(obj);
            }).trigger("change");

        });
    }

    var NSM_AttributeAssigner = {

        update: function (obj) {

            var channel_id = obj.dom.$trigger.val(),
                channel_fields = obj.cf_data[channel_id];

            $(".no-custom-field-group-error", obj.dom.$container).toggle(!channel_fields);

            if (channel_fields) {

                obj.dom.$targets.each(function () {

                    var $select = $(this).empty().hide(),
                        $parentRow = $select.parents("tr:eq(0)"),
                        isMatrix = $parentRow.data('ismatrix') || 0,
                        options = [],
                        optionCount = 0;
                    ;

                    if(false == isMatrix) {
                        options[optionCount] = document.createElement("OPTION");
                        options[optionCount].value = "";
                        options[optionCount].text = "Entry title";
                        optionCount++;
                    }

                    $(channel_fields).each(function (index) {

                        var channel_field = channel_fields[index];

                        if (
                            // Only allow non grid fields for non matrix fields
                            (!isMatrix && "grid" != channel_field['field_type'])
                            // Only allow grid fields for matrix fields
                            || (isMatrix && "grid" == channel_field['field_type'])
                        ) {

                            options[optionCount] = document.createElement("OPTION");
                            options[optionCount].value = channel_field['field_id'];
                            options[optionCount].text = channel_field['field_label'];
                            options[optionCount].setAttribute("data-field-id", channel_field['field_id']);
                            options[optionCount].setAttribute("data-field-type", channel_field['field_type']);
                            optionCount++;
                        }
                    });

                    $select.html(options).fadeIn();
                });
            }

        }
    }

})(jQuery);
