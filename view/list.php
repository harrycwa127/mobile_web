<table style="width:100%" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
  <thead>
    <tr>
      <th class="mdl-data-table__cell">VideoID</th>
      <th>Email</th>
	  <th>Marks</th>
      <th>VideoName</th>
	  <th>DateTimes</th>
	  <th>Comments</th>
	  <th>
	  <!-- Colored mini FAB button -->
		<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
			<i class="material-icons">add</i>
		</button>
	  </th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td class="mdl-data-table__cell">1</td>
      <td>kelvin</td>
      <td>50</td>
	  <td>chan</td>
	  <td>chn</td>
	  <td>excellent</td>
   </tr>
  <tr>
      <td class="mdl-data-table__cell">2</td>
      <td>kkkk</td>
      <td>0</td>
	  <td>he</td>
	  <td>890000</td>
	  <td>good</td>
   </tr>

  </tbody>
</table>
  <?php 
  include('../public/php/routing.php');
  getList();
  ?>
