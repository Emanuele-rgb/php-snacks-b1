<?php $matches = [
  [
    'home' => 'Cantu',
    'away' => 'Monte Paschi Siena',
    'p_home' => 70,
    'p_away' => 110
  ],
  [
    'home' => 'Toronto Raptors',
    'away' => 'San Antonio Spurs',
    'p_home' => 89,
    'p_away' => 73
  ],
  [
    'home' => 'Phoenix Suns',
    'away' => 'Atlanta Hawks',
    'p_home' => 57,
    'p_away' => 93
  ],
  [
    'home' => 'Houston Rockets',
    'away' => 'Sacramento Kings',
    'p_home' => 87,
    'p_away' => 113
  ]

];
  ?>

  <h1>Risultati giornata #1</h1>

  <ul>
    <?php for ($i=0; $i < count($matches); $i++) { ?>
      <li>
        <?php echo $matches[$i]['home']; ?> - <?php echo $matches[$i]['away']; ?> | <?php echo $matches[$i]['p_home']; ?> - <?php echo $matches[$i]['p_away']; ?>
      </li>
  <?php  } ?>


  </ul>
