<?php
// Simula datos dinámicos (puedes reemplazarlos con datos obtenidos de una base de datos)
$receptor_nombre = "JORGE LUIS TORRES SANCHEZ";
$receptor_rfc = "TOSJ901115GX7";
$uso_cfdi = "D10 Pagos por servicios educativos";
$folio_sat = "7733D569-D3E7-4084-A167-51A5BB1337F6";
$certificado_emisor = "00001000000512666708";
$descripcion = "Pago por concepto de colegiatura del Instituto Hispanoamericano - Mexicano, correspondiente al mes de abril del 2024 del alumno: André Torres Vargas, que cursa el segundo grado de primaria.";
$curp = "TOVA161217HGRRNR7";
$clave_centro = "12PR0935H";
$total = 1710.00;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factura</title>
  <link rel="stylesheet" href="../styles.css">
</head>
<body>
  <div class="factura-container" id="factura">
    <!-- Encabezado -->
    <div class="header">
      <h1>SISTEMAS TECNOLOGICOS DE MEXICO</h1>
      <p><strong>RFC:</strong> AUHC670504QA1</p>
      <p><strong>Régimen fiscal:</strong> 612 Personas Físicas con Actividades Empresariales y Profesionales</p>
    </div>

    <!-- Información del Receptor -->
    <div class="section receptor">
      <h2>Receptor</h2>
      <p><strong>Nombre:</strong> <?= $receptor_nombre ?></p>
      <p><strong>RFC:</strong> <?= $receptor_rfc ?></p>
      <p><strong>Uso CFDI:</strong> <?= $uso_cfdi ?></p>
    </div>

    <!-- Datos fiscales -->
    <div class="section datos-fiscales">
      <h2>Datos fiscales</h2>
      <p><strong>Folio SAT:</strong> <?= $folio_sat ?></p>
      <p><strong>Número de serie certificado emisor:</strong> <?= $certificado_emisor ?></p>
    </div>

    <!-- Concepto -->
    <div class="section concepto">
      <h2>Concepto</h2>
      <p><strong>Descripción:</strong> <?= $descripcion ?></p>
      <p><strong>CURP:</strong> <?= $curp ?></p>
      <p><strong>Clave de centro de trabajo:</strong> <?= $clave_centro ?></p>
    </div>

    <!-- Total -->
    <div class="section total">
      <p><strong>Total:</strong> $<?= number_format($total, 2) ?></p>
    </div>
  </div>

  <!-- Botón para imprimir -->
  <div class="print-button-container">
    <button onclick="printFactura()">Imprimir Factura</button>
  </div>

  <script>
    function printFactura() {
      window.print();
    }
  </script>
</body>
</html>
