<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscar por RFC o CURP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 0;
      background-color: #f5f5f5;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    h1 {
      color: #333;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin-bottom: 5px;
      font-weight: bold;
    }

    select, input[type="text"] {
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .btn {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .result {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Buscar por RFC o CURP</h1>
    <form action="/buscar" method="get">
      <label for="criterio">Selecciona un criterio:</label>
      <select id="criterio" name="criterio" required>
        <option value="rfc">RFC del Padre</option>
        <option value="curp">CURP del Hijo</option>
      </select>

      <label for="valor">Ingresa el valor:</label>
      <input type="text" id="valor" name="valor" placeholder="Ingresa RFC o CURP" required>

      <button type="submit" class="btn">Buscar</button>
    </form>

      <p style="color: red;"> </p>

      <div class="result">
        <h2>Resultado</h2> 
        <form action="/buscar" method="get">
      <label for="criterio"> seleccione el regimen fiscal</label>
      <select id="criterio" name="criterio" required>
        <option value="regimen"> Simplificado de Confianza </option>
        <option value="regimen"> Sueldos y salarios e ingresos asimilados a salarios </option>
        <option value="regimen"> Incorporación Fiscal </option>
        <option value="regimen"> Enajenación de bienes </option>
        <option value="regimen"> Actividades Empresariales con ingresos a través de Plataformas Tecnológicas </option>
        <option value="regimen"> Arrendamiento </option>
      </select>

          <p><strong>Nombre del Padre:</strong> </p>
          <p><strong>RFC:</strong> <form action="/buscar" method="get">
      <label for="criterio"> </label>
      <select id="criterio" name="criterio" required>
      <option value="rfc">CONCEPTO</option>
      <option value="curp">CANTIDAD</option>
      </select> </p>
    
          <p><strong>Nombre del Hijo:</strong> </p>
          <p><strong>CURP:</strong> </p>

        <!-- Botón único para generar la factura -->
        <form action="/generar-factura" method="get">
    
            <input type="hidden" name="tipo" value="padre">
            <input type="hidden" name="id" value="<%= padre.id %>">
          
            <input type="hidden" name="tipo" value="hijo">
            <input type="hidden" name="id" value="<%= hijo.id %>">
          
          <button type="submit" class="btn">Generar Factura</button>
        </form>
      </div>
    
  </div>
</body>
</html>
