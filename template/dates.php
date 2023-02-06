<ul>
  <?php 
    date_default_timezone_set('UTC');
    $launch = $launch ?? strtotime("now");  
    if(strtotime("now") >= strtotime($launch)){
      for ($row = 0; $row < sizeof($dates); $row++) {
        // Date Column 
        echo '<li><span class="screen-reader-text">'.$dates[$row][1].' '.$dates[$row][2].' on '.date("j M", strtotime($dates[$row][0]."000000")).'</span><div aria-hidden="true"><div>';
          // Location 
          if(substr( $dates[$row][1], 0, 1 ) === "<"){
            echo $dates[$row][1];
          }else{
            echo $dates[$row][1];
          }
          // Venue 
          if(substr( $dates[$row][2], 0, 1 ) === "<"){
            echo $dates[$row][2];
          }else{
            echo $dates[$row][2];
          }
        echo '</div><div>';
        echo date("j", strtotime($dates[$row][0]."000000"))." ".date("M", strtotime($dates[$row][0]."000000"));
        // Location Column
        echo '</div></div>';
          if(substr( $dates[$row][3], 0, 4 ) === "http"){
            echo '<a href="'.$dates[$row][3].'" title="Visit Ticket Vender">Tickets</a>';
          }else{
            echo '<span>'.$dates[$row][3].'</span>';
          }
        echo "</li>";
      }
    }else{
      echo "<li>No Dates currently available yet</li>";
    }
  ?>
</ul>