(function(api) {

    api.sectionConstructor['architect-construction-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const architect_construction_section_lists = ['banner', 'service'];
    architect_construction_section_lists.forEach(architect_construction_homepage_scroll);

    function architect_construction_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('architect_construction_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);