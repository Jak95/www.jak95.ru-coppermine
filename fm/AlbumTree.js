/*

This file is part of Ext JS 4

Copyright (c) 2011 Sencha Inc

Contact:  http://www.sencha.com/contact

GNU General Public License Usage
This file may be used under the terms of the GNU General Public License version 3.0 as published by the Free Software Foundation and appearing in the file LICENSE included in the packaging of this file.  Please review the following information to ensure the GNU General Public License version 3.0 requirements will be met: http://www.gnu.org/copyleft/gpl.html.

If you are unsure which license is appropriate for your use, please contact the sales department at http://www.sencha.com/contact.

*/
/**
 * @class Ext.org.AlbumTree
 * @extends Ext.tree.Panel
 * @xtype albumtree
 *
 * This class implements the "My Albums" tree. In addition, this class provides the ability
 * to add new albums and accept dropped items from the {@link Ext.org.ImageView}.
 */
 
Ext.define('Ext.org.AlbumTree', {
    extend: 'Ext.tree.Panel',
    alias : 'widget.albumtree',
    title: 'Folders',
    animate: true,
    rootVisible: false,
    displayField: 'name',
	//id: 'treeFolder',
	//minHeight: 120,
    initComponent: function() {
		this.store = this._getTreeStore(this);
        this.callParent();
    },
	//listeners: {
	//	show: function (tree, eOpts) {
	//		treeStore.El = this.getEl();
	//	}
	//},
	_getTreeStore: function(panel) {
		var result =  Ext.create('Ext.data.TreeStore', {
		fields: ['name', 'fullpath'],
		proxy: {
			type: 'ajax',
			url : '../../coppermine/fm/directory.php',
			loadMask: true,
			reader: {
				type: 'json',
				root: ''
			}
		},
		treePanel : panel,
		autoSync: true,
		autoLoad: true,
		listeners: {
				beforeload: function (store, node, records, successful, eOpts ) {
					this.waitMask = new Ext.LoadMask(Ext.getBody());
					this.waitMask.show();
				},
				load: function (store, node, records, successful, eOpts ) {
					this.waitMask.hide();
					if (records.length > 0)
					{
						var root = store.treePanel.getRootNode();
						child = root.findChild('name', 'Jak95', true);
						child.parentNode.parentNode.expand(true);
						store.treePanel.getSelectionModel( ).select(child);
					}
				}
			}
		});
		return result;
	}
});