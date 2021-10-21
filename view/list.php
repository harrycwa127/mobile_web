<table style="width:100%" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
  <thead>
    <tr>
      <th class="mdl-data-table__cell">VideoID</th>
      <th>Icon</th>
      <th>Email</th>
	  <th>Marks</th>
      <th>VideoName</th>
	  <th>DateTimes</th>
	  <th>Comments</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include('../public/php/routing.php');
  $result = getList();

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '
      <tr>
        <td class="mdl-data-table__cell">' . $row["videoID"] . '</td>
        <td><img src="../public/images/dog.png" class="demo-avatar"></td>
        <td>' . $row["email"] . '</td>
        <td>' . $row["mark"] . '</td>
        <td>' . $row["videoName"] . '</td>
        <td>' . $row["dateTimes"] .'</td>
        <td>' . $row["comments"] . '</td>
        <td>
          <button class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">edit</i>
          </button>
          <button class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">delete</i>
          </button>
        </td>
      </tr>
      ';
    }
  } else {
    echo "0 results";
  }
  ?>
  </tbody>
</table>

<dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Allow data collection?</h4>
    <div class="mdl-dialog__content">
      <p>
        Allowing us to collect data will let us get you the information you want faster.
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button">Agree</button>
      <button type="button" class="mdl-button close">Disagree</button>
    </div>
  </dialog>