/*

This file is part of Ext JS 4

Copyright (c) 2011 Sencha Inc

Contact:  http://www.sencha.com/contact

GNU General Public License Usage
This file may be used under the terms of the GNU General Public License version 3.0 as published by the Free Software Foundation and appearing in the file LICENSE included in the packaging of this file.  Please review the following information to ensure the GNU General Public License version 3.0 requirements will be met: http://www.gnu.org/copyleft/gpl.html.

If you are unsure which license is appropriate for your use, please contact the sales department at http://www.sencha.com/contact.

*/
/**
 * @class Ext.org.ImageView
 * @extends Ext.view.View
 * @xtype imageview
 *
 * This class implements the "My Images" view (the images in the organizer). This class
 * incorporates {@link Ext.ux.DataView.Draggable Draggable} to enable dragging items as
 * well as {@link Ext.ux.DataView.DragSelector DragSelector} to allow multiple selection
 * by simply clicking and dragging the mouse.
 */
Ext.define('Ext.org.ImageView', {
    extend: 'Ext.view.View',
    alias : 'widget.imageview',
    requires: ['Ext.data.Store'],
    tpl: [
        '<tpl for=".">',
            '<div class="thumb-wrap">',
                '<div class="thumb">',
                    (!Ext.isIE6? '<img src="{normal}" height="128"/>' : 
                    '<div style="height:128px;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'{normal}\')"></div>'),
                '</div>',
                '<span>{name}</span>',
            '</div>',
        '</tpl>'
    ],
    itemSelector: 'div.thumb-wrap',
    multiSelect: false,
    singleSelect: false,
    cls: 'x-image-view',
    autoScroll: true,
	draggable: false,
	floating: false,
    initComponent: function() {
        this.store = Ext.create('Ext.data.Store', {
            autoLoad: false,
            fields: ['name', 'little', 'normal', 'big', 'fileSize', 'width', 'height', 'make', 'model', 'dateTime', {name: 'name', defaultValue: true}],
            proxy: {
                type: 'ajax',
				url : '../../coppermine/fm/files.php',
                reader: {
                    type: 'json',
                    root: ''
                }
            }
        });
        this.callParent();
    }
});
