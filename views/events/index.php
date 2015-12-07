<?php
$this->setLayoutVar('pageTitle', 'Kogu');
?>
<div class="row">
    <div class="col-md-1"></div>
    <!-- Large column -->
    <div class="col-md-10">
        <!-- Main Content goes here -->
      <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Start Date</th>
          <th>Location</th>
      </thead>
      <?php
        foreach($data as $value) {
          echo '<tr><td>' . $value['id'] . '</td>';
          echo '<td>' . $value['ev_name'] . '</td>';
          echo '<td>' . $value['ev_date'] . '</td>';
          echo '<td>' . $value['ev_city'] . ' ' . $value['ev_address'] . '</td></tr>';
          // foreach($value as $key => $value2) {
          //   echo $key . ': ' . $value2 . "<br />";
          // }
        }
       ?>
      </table>
    <div class="col-md-1"></div>
</div>
