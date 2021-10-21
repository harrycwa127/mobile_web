<table style="width:100%" class="mdl-data-table mdl-js-data-table mdl-data-table--selectable">
  <thead>
    <tr>
      <th class="mdl-data-table__cell">VideoID</th>
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
      // echo "VideoID: " . $row["videoID"]. " - Email: " . $row["email"]. " - Mark: " . $row["mark"]. " - VideoName: " . $row["videoName"]. " - DateTime: " . $row["dateTimes"]. " - Comments: " . $row["comments"].  "<br>";
      echo '
      <tr>
        <td class="mdl-data-table__cell">' . $row["videoID"] . '</td>
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