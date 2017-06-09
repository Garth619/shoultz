<?php

/*
  Plugin Name: Find and Replace All
  Description: A wordpress plugin to find and replace from all the tables and all the fields
  Version: 1.1
  Author: Taraprasad Swain
  Author URI: http://www.taraprasad.com

  Copyright 2016 by Taraprasad.com (email : swain.tara@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

add_action('after_setup_theme', 'init_fr_functions');

function init_fr_functions() {
    add_action('admin_menu', 'fr_plugin_settings');
}

function fr_plugin_settings() {
    add_menu_page('Find Replace All', 'Find Replace All', 'administrator', 'frasettings', 'fra_display_settings');
}

function fra_display_settings() {
    include('frform.php');
}

if (!function_exists('replace_recursive')) {

    function replace_recursive(Array $array, $key, $value) {
        array_walk_recursive($array, function(&$v, $k) use ($key, $value) {
            $k == $key && $v = $value;
        });
        return $array;
    }

}

if (!function_exists('backup_database')) {

    function backup_database($tables = '*') {

        $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

        mysql_select_db(DB_NAME, $link);

        if ($tables == '*') {
            $tables = array();
            $result = mysql_query('SHOW TABLES');
            while ($row = mysql_fetch_row($result)) {
                $tables[] = $row[0];
            }
        } else {
            $tables = is_array($tables) ? $tables : explode(',', $tables);
        }

        foreach ($tables as $table) {
            $result = mysql_query('SELECT * FROM ' . $table);
            $num_fields = mysql_num_fields($result);

            $return .= "DROP TABLE IF EXISTS `{$table}`;";

            $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE ' . $table));
            $return.= "\n\n" . $row2 [1] . ";\n\n";

            for ($i = 0; $i < $num_fields; $i++) {
                while ($row = mysql_fetch_row($result)) {
                    $return.= 'INSERT INTO ' . $table . ' VALUES(';

                    for ($j = 0; $j < $num_fields; $j++) {
                        $row[$j] = addslashes($row[$j]);
                        $row[$j] = ereg_replace("\n", "\\n", $row[$j]);
                        if (isset($row[$j])) {
                            $return.= '"' . $row[$j] . '"';
                        } else {
                            $return.= '""';
                        }
                        if ($j < ($num_fields - 1)) {
                            $return.= ',';
                        }
                    }
                    $return.= ");\n";
                }
            }
            $return.="\n\n\n";
        }

        $filename = '/backups/db-backup-' . date('Y-m-d-His') . '.sql';

        $file_path = WP_CONTENT_DIR . $filename;

        if (!file_exists(WP_CONTENT_DIR . '/backups')) {
            mkdir(WP_CONTENT_DIR . '/backups', 0755, true);
            file_put_contents(WP_CONTENT_DIR . '/backups/index.html', '');
        }

        file_put_contents($file_path, $return);

        return WP_CONTENT_URL . $filename;
    }

}