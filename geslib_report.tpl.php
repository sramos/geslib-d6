
<table>
  <tr>
    <th><?php print t("Geslib File"); ?></th>
    <th><?php print t("Element"); ?></th>
    <th><?php print t("Starting Date"); ?></th>
    <th><?php print t("Ending Date"); ?></th>
    <th><?php print "#"; ?></th>
    <th><?php print t("Status"); ?></th>
    <th>&nbsp;</th>
  </tr>

<?php
  global $base_path;
  foreach($files as $record) {
    print '<tr id="geslib_file_' . $record->id . '">';
    print '  <td>' . $record->imported_file . '</td>';
    print '  <td>' . $record->component . '</td>';
    print '  <td>' . $record->start_date . '</td>';
    print '  <td>' . $record->end_date . '</td>';
    print '  <td>' . $record->count . '</td>';
    print '  <td>' . $record->status . '</td>';
    print '  <td><a href="' . $base_path . 'geslib/delete_log/' . $record->id . '">Delete</a></td>';
    print '</tr>';
  }
?>

</table>
