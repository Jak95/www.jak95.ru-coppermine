Ext.Loader.setConfig({
    enabled: true
});

Ext.application({
    name: 'ImageApp',

    launch: function() {
        Ext.QuickTips.init();

        var cmp1 = Ext.create('ImageApp.view.ImagePanel', {
            renderTo: Ext.getBody()
        });
        cmp1.show();
    }
});
