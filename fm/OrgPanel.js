/*

This file is part of Ext JS 4

Copyright (c) 2011 Sencha Inc

Contact:  http://www.sencha.com/contact

GNU General Public License Usage
This file may be used under the terms of the GNU General Public License version 3.0 as published by the Free Software Foundation and appearing in the file LICENSE included in the packaging of this file.  Please review the following information to ensure the GNU General Public License version 3.0 requirements will be met: http://www.gnu.org/copyleft/gpl.html.

If you are unsure which license is appropriate for your use, please contact the sales department at http://www.sencha.com/contact.

*/
/**
 * @class Ext.org.OrgPanel
 * @extends Ext.panel.Panel
 *
 * This class combines the {@link Ext.org.AlbumTree AlbumTree} and {@link Ext.org.ImageView ImageView}
 * components into a {@link Ext.layout.container.Border Border} layout.
 */
Ext.define('Ext.org.OrgPanel', {
    extend: 'Ext.panel.Panel',
	alias: 'widget.orgpanel',
    requires: 'Ext.layout.container.Border',
    layout: 'border',
	id: 'orgpanel',
    initComponent: function() {
        this.items = [
            {
				id: 'tree',
                xtype: 'albumtree',
                region: 'west',
				collapsible: true,
				split: true,
                padding: 5,
                width: '10%',
				listeners: {
                        itemclick: function (view, record, item) {
							var imageview = Ext.ComponentManager.get('imageview');
							var thumbs = Ext.ComponentManager.get('thumbs');
							imageview.store.load({ params: { fullpath: record.data.fullpath, filtered: thumbs.checked} });
						}
				}
            },
            {
                region: 'center',
				xtype: 'panel',
				layout: 'border',
				split: true,
                padding: '5 5 5 0',
                items: {
                    xtype: 'imageview',
					layout: 'border',
					id: 'imageview',
					region: 'center',
					listeners: {
                        itemclick: function (view, record) {
                            //Ext.log('ct', e.type);
							var label = Ext.ComponentManager.get('imageLabel');
							label.update(record.data);
							label = Ext.ComponentManager.get('imageInfoLabel');
							label.update(record.data);
							
							var image = Ext.ComponentManager.get('image');
							image.setWidth(image.ownerCt.width);
							image.setSrc(record.data.big);
							image.setAutoScroll(true);
                        },
						itemdblclick: function (view, record, item, index, e, eOpts ) {
							window.open (record.data.big, "Image detail"); 
						}
					},
                    /*  (add a '/' at the front of this line to turn this on)
                    listeners: {
                        containermouseout: function (view, e) {
                            Ext.log('ct', e.type);
                        },
                        containermouseover: function (view, e) {
                            Ext.log('ct', e.type);
                        },
                        itemmouseleave: function (view, record, item, index, e) {
                            Ext.log('item', e.type, ' id=', record.id);
                        },
                        itemmouseenter: function (view, record, item, index, e) {
                            Ext.log('item', e.type, ' id=', record.id);
                        }
                    },/**/
                    trackOver: true
                }
            },
			{
				xtype: 'panel',
				region: 'east',
				collapsible: true,
				split: true,
				padding: '5 5 5 0',
				width: '25%',
				listeners: {
					resize: function( component, adjWidth, adjHeight, eOpts) {
						var image = Ext.ComponentManager.get('image');
						image.setWidth(adjWidth);
					}
				},
                items: 
				[{
					xtype: 'image',
					dock: 'right',
					id: 'image',
					autoScroll: true//,
                    //src: 'http://www.sencha.com/img/sencha-large.png'
				},
				{
					id: 'imageInfoLabel',
					xtype: 'label',
					tpl: '<p><div>Size: {fileSize}</div><div>Dimentions(HxW): {height}x{width}</div><div>Date: {dateTime}</div><div>Camera: {make} {model}</div></p>'
				}]
			},
			{
				xtype: 'panel',
				region: 'south',
				//collapsible: true,
				//split: true,
				padding: '0 5 5 5',
				height: 30,
                dockedItems: [{
					id: 'imageLabel',
					xtype: 'label',
					tpl: '<p>  Big: <a href="{big}" target="_blank">{big}</a>&nbsp;Normal: <a href="{normal}" target="_blank">{normal}</a>&nbsp;Little: <a href="{little}" target="_blank">{little}</a></p>',
					dock: 'left'
				},
				{
					id: 'thumbs',
					xtype: 'checkboxfield',
					fieldLabel: '&nbsp;&nbsp;Thumbs',
					checked: true,
					dock: 'right',
					listeners: {
						change: function (scope, newValue, oldValue, eOpts ) {
							if (newValue != oldValue) {
								var tree = Ext.ComponentManager.get('tree');
								var selected = tree.selModel.selected;
								if (selected != null) {
									var record = selected.items[0];
									var imageview = Ext.ComponentManager.get('imageview');
									var thumbs = Ext.ComponentManager.get('thumbs');
									imageview.store.load({ params: { fullpath: record.data.fullpath, filtered: thumbs.checked} });
								}
								
								//var imageview = Ext.ComponentManager.get('imageview');
								//var thumbs = Ext.ComponentManager.get('thumbs');
								//imageview.store.load({ params: { fullpath: record.data.fullpath, filtered: thumbs.checked} });

							}
						}
					}
				}
				]
			}
        ];
        
        this.callParent(arguments);
    }
});
