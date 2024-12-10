<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar por RFC o CURP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 500px;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        .search-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .search {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .search input {
            margin-bottom: 10px;
            padding: 5px;
            width: 200px;
        }
        .search button {
            padding: 5px 10px;
        }
        .result-section {
            width: 30%;
            text-align: left;
        }
        .result-section p {
            margin: 5px 0;
        }
        .table-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 5px;
        }
        .concept-table, .totals-table {
            border: 1px solid black;
            padding: 5px;
        }
        .concept-table input, .totals-table input {
            margin-bottom: 10px;
            width: 150px;
        }
        .totals-table {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }
        button.generate {
            margin-top: 10px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Search Section -->
        <h1>Buscar por RFC o CURP</h1>
        <div class="search-section">
            <div class="search">
                <label for="curp">Ingresa el valor:</label>
                <input type="text" id="curp" placeholder="Ingresa RFC o CURP">
                <button onclick="buscarCurp()">Buscar</button>
            </div>
            <div class="search">
                <label for="rfc">Ingresa el valor:</label>
                <input type="text" id="rfc" placeholder="Ingresa RFC o CURP">
                <button onclick="buscarRfc()">Buscar</button>
            </div>
        </div>

        <!-- Result Section -->

        <div class="result-container">
    <div class="left-column">
        <h2>Resultado</h2>
        <p><strong>Nombre del Padre:</strong></p>
        <p>Dirección:</p>
        <p><strong>RFC:</strong></p>
        <p>Régimen Fiscal:</p>
    </div>
    
    <div class="right-column">
        <p><strong>Nombre del Hijo:</strong></p>
        <p>Nivel y grado Educativo:</p>
        <p>CURP:</p>
    </div>
</div>

        </>

        <!-- Tables Section -->
        <div class="table-section">
            <!-- Concept Table -->
            
            <div class="concept-table">
    <div class="row">
        <label for="concept1">Concepto</label>
        <input type="text" id="concept1">
        <label for="quantity1">Cantidad</label>
        <input type="number" id="quantity1">
    </div>
    <div class="row">
        <label for="concept2">Concepto</label>
        <input type="text" id="concept2">
        <label for="quantity2">Cantidad</label>
        <input type="number" id="quantity2">
    </div>
    <div class="row">
        <label for="concept3">Concepto</label>
        <input type="text" id="concept3">
        <label for="quantity3">Cantidad</label>
        <input type="number" id="quantity3">
    </div>
</div>

            </div>

            <!-- Totals Table -->
            <div class="totals-table">
    <div class="row">
        <label for="subtotal">Subtotal</label>
        <input type="number" id="subtotal" readonly>
    </div>
    <div class="row">
        <label for="iva">IVA</label>
        <input type="number" id="iva" readonly>
    </div>
    <div class="row">
        <label for="isr">ISR</label>
        <input type="number" id="isr" readonly>
    </div>
    <div class="row">
        <label for="total">Total</label>
        <input type="number" id="total" readonly>
    </div>
</div>

        </div>

        <!-- Generate Invoice Button -->
        <button class="generate" onclick="generateInvoice()">Generar Factura</button>


    <script>
        function buscarCurp() {
            alert("Buscar por CURP");
        }
        function buscarRfc() {
            alert("Buscar por RFC");
        }
        function generateInvoice() {
            alert("Generar factura");
        }
    </script>
</body>
</html>
