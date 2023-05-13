<?php
if (isset($_POST['league'])) {
    $league_id = $_POST['league'];
    // API request to get standings
    $url = "https://api.football-data.org/v2/competitions/$league_id/standings";
    $options = array(
        'http' => array(
            'header'  => 'X-Auth-Token: 8259a7fcbe8946d4ac65a74d38564d5d',
            'method'  => 'GET'
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Convert JSON response to array
    $standings = json_decode($result, true);

    // Output standings table
    if (!empty($standings['standings'])) {
        $table = '<table style="border: 2px solid #f8f9fa;">';
        $table .= '<thead><tr style="color: #f8f9fa;"><th>Sıra</th><th>Takım</th><th>Oynadığı Maç</th><th>Galibiyet</th><th>Beraberlik</th><th>Mağlubiyet</th><th>Puan</th></tr></thead>';
        $table .= '<tbody>';
        foreach ($standings['standings'][0]['table'] as $row) {
            $table .= '<tr style="color: #f8f9fa;">';
            $table .= '<td>'.$row['position'].'</td>';
            $table .= '<td>'.$row['team']['name'].'</td>';
            $table .= '<td>'.$row['playedGames'].'</td>';
            $table .= '<td>'.$row['won'].'</td>';
            $table .= '<td>'.$row['draw'].'</td>';
            $table .= '<td>'.$row['lost'].'</td>';
            $table .= '<td>'.$row['points'].'</td>';
            $table .= '</tr>';
        }
        $table .= '</tbody></table>';
    } else {
        echo 'Puan durumu bu lig için mevcut değil.';
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>İlgi Alanlarım</title>
    <link rel="icon" type="image/x-icon" href="../img/receipt-cutoff.svg">
    <link rel="stylesheet" href="../css/ilgiAlanlarim.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form method="post" class="container-fluid">
                    <div class="row">
                    <div class="col-4 text-end">
                        <label class="text-light mt-2" for="league">Lütfen Lig Seçiniz:</label>
                    </div>
                    <div class="col-4">
                        <select class="form-select" name="league" id="league" aria-label="Default select example">
                            <option selected>Ligler</option>
                            <option value="PL">Premier League</option>
                            <option value="BL1">Bundesliga</option>
                            <option value="SA">Serie A</option>
                            <option value="FL1">Ligue 1</option>
                            <option value="PD">La Liga</option>
                        </select>
                    </div>
                    <div class="col-4">
                    <button type="submit" class="btn btn-light">Listele</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <?php if (isset($standings)) echo $table; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>