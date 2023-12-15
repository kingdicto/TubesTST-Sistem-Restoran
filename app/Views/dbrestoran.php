<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TST Italiano Resto - Menu</title>
    <style>

        section {
            text-align: center;
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .db-menu-item {
            width: 300px;
            margin: 15px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            flex: 0 0 calc(33.333% - 30px); 
            box-sizing: border-box;
            text-align: center;
        }

        .db-menu-item:hover {
            transform: scale(1.05);
        }

        .db-menu-item h3 {
            color: #000000; 
        }

        .db-menu-item span {
            display: block;
            margin-top: 10px;
            color: #777777; 
        }
    </style>
</head>

<body>

    <section>
        <h2>Our Italian Menu</h2>
        <div class="menu-container">
            <?php if (!empty($dbrestoran) && is_array($dbrestoran)): ?>
                <?php foreach ($dbrestoran as $dbrestoran_item): ?>
                    <div class="db-menu-item">
                        <h3><?= esc($dbrestoran_item['nama']) ?></h3>
                        <span>Price: Rp <?= esc($dbrestoran_item['harga']) ?> </span>
                    </div>
                <?php endforeach ?>
            <?php else: ?>
                <h3>No Data</h3>
                <p>Unable to find any data for you.</p>
            <?php endif ?>
        </div>
    </section>
</body>

</html>
