<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information_personal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            text-align: center;
            background-color: rgb(148, 16, 16);
            font-family: Arial, sans-serif;
        }

        .main-content {
            margin-top: 20px;
        }

        .img-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-center img {
            max-width: 100%;
            max-height: 300px;
            height: auto;
        }

        h2 {
            font-weight: bold;
            color: white;
        }

        .custom-table {
            background-color: white;
            border: 1px solid #dee2e6;
            font-size: 0.9rem;
        }
        .custom-table th, .custom-table td {
            text-align: center;
            vertical-align: middle;
            padding: 0.5rem;
        }
        .table-header {
            background-color: #e64e4e;
            color: #fff;
        }
        .total-row {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .table-container {
            max-width: 600px;
            margin: auto;
        }

        .btn-outline-light {
            font-size: 1rem;
            font-weight: bold;
            margin: 0.3rem;
        }
        .btn-outline-light:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <main class="main-content">
       
<!-- Additional Content -->
<div class="container mt-5">
    <h2 style="color: aliceblue;">ยอดผู้ต้องขัง</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped custom-table">
            <thead>
                <tr>
                    <th>ประเภท</th>
                    <th>จำนวน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>ข้าราชการ</td>
                <td>51</td>
                </tr>
                <tr>
                <td>พนักงานราชการ</td>
                <td>14</td>
                </tr>
                <tr>
                <td>พนักงานจ้างเหมา</td>
                <td>2</td>
                </tr>
                <tr>
                <td>พนักงานรักษาความปลอดภัย</td>
                                <td>2</td>
                </tr>
                <tr class="total-row">
                                <td>รวม</td>
                                <td>71</td>
                            </tr>
            </tbody>
        </table>
    </div>
    <div class="text-center">
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายผู้บริหาร</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายบริหารทั่วไป</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายทัณฑปฎิบัติ</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายฝึกวิชาชีพ</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายควบคุมเเละรักษาการณ์</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายสวัสดิการผู้ต้องขังเเละสงเคราะห์ผู้ต้องขัง</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายการศึกษา</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายสภานพยาบาลเรือนจำ</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายควบคุมเเดนหญิง</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายรักษาการณ์</a>
                    <a href="staff_information.php" class="btn btn-outline-light btn-sm">ฝ่ายควบคุม</a>
                </div>
</div>

<style>
    .custom-table {
        max-width: 600px;
        margin: 0 auto;
        background-color: white;
    }

    .custom-table th, .custom-table td {
        text-align: center;
        vertical-align: middle;
    }

    .custom-table thead th {
        background-color: #d9534f;
        color: white;
    }

    .custom-table tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #ffffff;
    }

    .custom-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .custom-table tbody td {
        padding: 10px;
    }
</style>

    </main>
</body>
</html>
