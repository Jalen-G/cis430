<?php require_once 'config.php'; ?>
<html class="has-navbar-fixed-top">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>
        <script src="/js/scripts.js" charset="utf-8" defer></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.css" integrity="sha512-GQSxWe9Cj4o4EduO7zO9HjULmD4olIjiQqZ7VJuwBxZlkWaUFGCxRkn39jYnD2xZBtEilm0m4WBG7YEmQuMs5Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Load d3.js and c3.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.16.0/d3.min.js" integrity="sha512-FHsFVKQ/T1KWJDGSbrUhTJyS1ph3eRrxI228ND0EGaEp6v4a/vGwPWd3Dtd/+9cI7ccofZvl/wulICEurHN1pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.7.20/c3.min.js" integrity="sha512-+IpCthlNahOuERYUSnKFjzjdKXIbJ/7Dd6xvUp+7bEw0Jp2dg6tluyxLs+zq9BMzZgrLv8886T4cBSqnKiVgUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
      <nav class="navbar is-transparent p-3 is-fixed-top">
        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-start">
          <h2 class="navbar-item">
              ID:
            </h2>
            <h2 class="navbar-item">
              Name:
            </h2>
            <h2 class="navbar-item">
              IP:
            </h2>
            <h2 class="navbar-item">
              Last Communication:
            </h2>
            <span class="material-icons navbar-item">
              battery_6_bar
            </span>
          </div>

          <div class="navbar-end">
            <div class="select">
              <select name="device" id="device">
                  <option value=''>Select Device</option>
                  <?php
                  $sql = mysqli_query($conn, "SELECT Device_ID FROM iot_data.devices");
                  while ($row = mysqli_fetch_array($sql)) {
                      $id = $row['Device_ID'];
                      ?>
                      <option value='<?php echo $id; ?>'><?php echo $id; ?></option>
                  <?php } ?>
              </select>
            </div>
          </div>
        </div>
      </nav>
        <section class="hero is-fullheight-with-navbar">
            <div class="hero-body">
                <div class="parent">
                    <div class="columns">
                        <div class="column m-2">
                            <div id="temp1-chart"></div>
                        </div>
                        <div class="column m-2">
                            <div id="temp2-chart"></div>
                        </div>
                        <div class="column m-2">
                            <div id="temp3-chart"></div>
                        </div>
                        <div class="column m-2">
                          <div id="humid-chart"></div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column m-2">
                            <div id="temp-line-chart"></div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column m-2">
                          <div id="humid-line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
