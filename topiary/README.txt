TOPIARY

 * This module allows you to restrict what pages (Page content type) users can edit based on menus.
 *
 * For each user role you can create 1 or more trees. This is called a roleforest.
 * Each tree is based on a menu and a node.
 * You can include the children of that node, forming a tree.
 * You can exclude nodes from the children of the root node, which is like pruning the tree.
 *
 * Keep in mind that a role can have more than one tree,
 * and a user can have more than one role.
 * A user can have 1 little tree, or a forest.


You need to create the following tables:

CREATE TABLE IF NOT EXISTS `topiary` (
  `topiary_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topiary_role` int(10) unsigned NOT NULL,
  PRIMARY KEY (`topiary_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

CREATE TABLE IF NOT EXISTS `topiary_tree` (
  `topiary_tree_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topiary_id` int(10) unsigned NOT NULL,
  `topiary_tree_menu` varchar(64) NOT NULL,
  `topiary_tree_nid` int(10) unsigned NOT NULL,
  `topiary_tree_children` tinyint(1) NOT NULL,
  `topiary_tree_exclude` text NOT NULL,
  PRIMARY KEY (`topiary_tree_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;


Install, enable, go to Admin > Site Configuration > Topiary
http://www.example.com/admin/settings/topiary