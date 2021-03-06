<?php
/* Smarty version 3.1.38, created on 2021-05-07 11:03:44
  from 'C:\xampp\htdocs\shop\admin\opc\tpl\config\config.filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_60950270c6c997_62792443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '037962d3f36518ab5179ee8ab7238c1712280ff2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\admin\\opc\\tpl\\config\\config.filter.tpl',
      1 => 1612177965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60950270c6c997_62792443 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="filter-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" class="product-filter-config">
    <input type="hidden" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" value="" data-prop-type="json">

    <div class="active-filters">
        <label><?php echo __('activeFilters');?>
</label>
        <div class="filters-enabled"></div>
    </div>

    <div>
        <div class="available-filters"></div>
    </div>

    <?php echo '<script'; ?>
>
        $(() => {
            let root          = $('#filter-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
            let configInput   = $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
            let activeSection = root.find('.active-filters');
            let enabledList   = root.find('.filters-enabled');
            let availableList = root.find('.available-filters');
            let searcherInput = $('#config-<?php echo $_smarty_tpl->tpl_vars['propdesc']->value['searcher'];?>
');
            let filters       = <?php echo json_encode($_smarty_tpl->tpl_vars['propval']->value);?>
;
            let lastRequest   = null;

            searcherInput.on('input', () => {
                let searchTerm = searcherInput.val().toLowerCase();
                root.find('.filters-section').each((i, sectionItem) => {
                    let count = 0;
                    sectionItem = $(sectionItem);
                    sectionItem.find('.filter-option').each((i, item) => {
                        item = $(item);
                        let text = item.text().toLowerCase();
                        if (text.indexOf(searchTerm) === -1) {
                            item.hide();
                        } else {
                            item.show();
                            count++;
                        }
                    });
                    if(count === 0) {
                        sectionItem.find('.no-options').show()
                    } else {
                        sectionItem.find('.no-options').hide()
                    }
                });
            }).on('keydown', e => {
                if (e.key === 'Escape') {
                    e.stopPropagation();
                }
            });

            updateFilterList();

            function updateFilterList()
            {
                configInput.val(JSON.stringify(filters));
                enabledList.empty();
                searcherInput.val('');

                filters.forEach(filter => {
                    enabledList.append(
                        $('<button type="button">' + filter.name + ' <i class="fas fa-trash-alt"></i></button>')
                            .on('click', () => unselectFilter(filter))
                    );
                });

                if (filters.length === 0) {
                    activeSection.hide();
                } else {
                    if (filters.length > 1) {
                        enabledList.prepend(
                            $(
                                '<button type="button" class="restore-all">' +
                                'Alle zur??cksetzen <i class="fas fa-trash-alt"></i></button>'
                            ).on('click', resetAll)
                        );
                    }

                    activeSection.show();
                }

                if (lastRequest) {
                    lastRequest.jqxhr.abort();
                }

                root.find('button').prop('disabled', true);
                lastRequest = opc.io.getFilterList('<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
', filters);

                lastRequest.then(html => {
                    availableList.html(html);
                    root.find('.filter-option').each((i, optionBtn) => {
                        optionBtn = $(optionBtn);
                        optionBtn.on('click', () => selectFilter(optionBtn.data('filter')));
                    });
                    root.find('button').prop('disabled', false);
                });
            }

            function selectFilter(filter)
            {
                filters.push(filter);
                updateFilterList();
            }

            function unselectFilter(filter)
            {
                filters = filters.filter(elm => elm !== filter);
                updateFilterList();
            }

            function resetAll()
            {
                filters = [];
                updateFilterList();
            }
        });
    <?php echo '</script'; ?>
>
</div>
<?php }
}
