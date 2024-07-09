<!DOCTYPE html>
<html>
<head>
    <title>SIMPLE CALCULATOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h2>CALCULATOR</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="resultPage.php">  
                <div class="form-group">
                    <input class="form-control" type="number" name="firstNumber" placeholder="First Number" required>
                </div>

                <hr />
                <div class="form-group">
                    <label>Select the operator</label>
                    <select class="form-control" name='operator'>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <hr />

                <div class="form-group">
                    <input class="form-control" type="number" name="secondNumber" placeholder="Second Number" required>
                </div>

                <br />
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
