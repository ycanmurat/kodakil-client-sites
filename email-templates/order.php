<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Template</title>
</head>
<body>
    <div class="area">
        <thead>
            <tr>
                <th style="border-bottom:1px solid black;"><img style="padding: 10px;margin:auto;display: block;" width="250" src="https://tr.hakaanyildirim.com/assets/Front/images/logo.svg" alt=""></th>
            </tr>
        </thead>
        <div class="head">
            <h2>Sipariş No :<b> #<?=$order_id?></b></h2>
            <div class="ownerInfo">
                <p><b>Ad Soyad</b> <?=$name?> <?=$surname?></p>
                <p><b>Gsm</b> <?=$phone?></p>
                <p><b>E-Posta</b> <?=$email?></p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ürün Adı</th>
                    <th>Adet</th>
                    <th>Tutar</th>
                    <th>Toplam</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $key => $val) { ?>
                    <tr>
                        <td>#<?=$val->product_id?></td>
                        <td><?=$val->name?></td>
                        <td><?=$val->qty?></td>
                        <td><?=number_format($val->price,2,',','.')?> €</td>
                        <td><?=number_format($val->price*$val->qty,2,',','.')?> €</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="footer">
            <div class="adress">
                <p><?=$address?></p>
                <p><?=$city_name?> / <?=$town_name?></p>
            </div>
            <div class="addition">
                <p>Tutar : <?=number_format(($price-$cargo)-(($price-$cargo)/1.18),2,',','.')?> €</p>
                <p>KDV : <?=number_format(($price-$cargo)-(($price-$cargo)/1.18),2,',','.')?> €</p>
                <p>Kargo : <?=number_format($cargo,2,',','.')?>  €</p>
                <p>TOPLAM : <?=number_format($val->price,2,',','.')?> €</p>
            </div>
        </div>
    </div>
    <style>
        div.area {max-width: 500px;border: 1px solid;padding: 10px;margin: auto;}
        .adress {font-size: 14px;font-weight: 600}
        .addition {font-size: 14px;}
        .addition p {margin: 0;text-align: right;}
        table {margin-top: 10px;width: 100%;text-align: center;border: 1px solid #dadada;margin-bottom: 10px;}
        table thead th {}
        body {font-family: sans-serif;}
        div.head {display: flex;}
        div.head h2 {font-size: 15px;margin: 0;padding-top: 5px;}
        div.head h2 b {display: block;}
        .ownerInfo {margin-left: auto;text-align: right;font-size: 13px;}
        .ownerInfo p {margin: 0;font-size:14px;margin-bottom: 6px;}
        .ownerInfo p b {display: block;color: gray;font-size: 12px;}
        .addition p {margin-bottom: 4px;}
        table th {font-size: 11px;}
        table td {font-size: 14px;}
        table tbody td {padding: 7px 3px;}
        .addition {border: 1px solid gainsboro;padding: 10px;margin-left: auto;}
        .footer {
            display: flex;
            align-items: center;
        }
        .addition p {
            font-weight: bold;
        }
    </style>
</body>
</html>