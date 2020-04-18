<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID19</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .t-li::first-letter {
            color: red;
            font-size: 55px;
            font-weight: 700;
        }

        th {
            color: #020202;
            font-weight: 700;
            font-size: 20px;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    <h4 style="text-align: center;padding:20px;font-weight:700" class="t-li">COVID19 LIVE UPDATED STATUS IN INDIA</h4>
    <div class="table-responsive" style="padding: 10px">
        <table class="table table-bordered table-dark" style="text-align: center">
            <thead style="text-transform:uppercase;background:#eee;color:#010101;">
                <tr>
                    <th>lastupdatedtime</th>
                    <th>State</th>
                    <th>Confirmed</th>
                    <th>Active</th>
                    <th>Recovered</th>
                    <th>Deaths</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $data = file_get_contents('https://api.covid19india.org/data.json');
                $corona = json_decode($data, true);

                $statecount = count($corona['statewise']);

                $i = 1;
                while ($i < $statecount) {
                ?>
                    <tr>
                        <td><?php echo $corona['statewise'][$i]['lastupdatedtime']; ?></td>
                        <td><?php echo $corona['statewise'][$i]['state']; ?></td>
                        <td><?php echo $corona['statewise'][$i]['confirmed']; ?></td>
                        <td><?php echo $corona['statewise'][$i]['active']; ?></td>
                        <td><?php echo $corona['statewise'][$i]['recovered']; ?></td>
                        <td><?php echo $corona['statewise'][$i]['deaths']; ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>