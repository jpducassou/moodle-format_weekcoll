<?php
/**
 * Collapsed Weeks Information
 *
 * A week based format that solves the issue of the 'Scroll of Death' when a course has many weeks. All
 * weeks have a toggle that displays that week. The current week is displayed by default. One or more
 * weeks can be displayed at any given time. Toggles are persistent on a per browser session per course
 * basis but can be made to perist longer by a small code change. Full installation instructions, code
 * adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage weekcoll
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard weeks format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Weeks_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Portuguese Translation of Collapsed Weeks Course Format
// Tradução de português Semanas Fechado formato do curso

// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Usado pelo do Moodle para identificar os formatos e exibir na lista de formatos para um curso em suas configurações.
$string['nameweekcoll']='Semanas Fechado';
$string['formatweekcoll']='Semanas Fechado';

// Used in format.php
// Usado em format.php
$string['weekcolltoggle']='Toggle';
$string['weekcolltogglewidth']='width: 34px;';

// Toggle all - Moodle Tracker CONTRIB-3190
$string['weekcollall']='todas as alterna.';
$string['weekcollopened']='Abra';
$string['weekcollclosed']='Feche';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
// Moodle 2.0 Realce - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
$string['sectionname'] = 'Semana';
$string['pluginname'] = 'Semanas Fechado';
$string['section0name'] = 'Geral';
?>