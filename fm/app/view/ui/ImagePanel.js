Ext.define('ImageApp.view.ui.ImagePanel', {
    extend: 'Ext.panel.Panel',

    //height: 250,
    //width: 400,
    title: 'My Panel',

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            items: [
                {
                    xtype: 'datefield',
                    fieldLabel: 'Label'
                }
            ]
        });

        me.callParent(arguments);
    }
});