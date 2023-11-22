<?php
    require('fpdf/fpdf.php');
    require('assets/conexion.php');

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        // $this->Image('logo.png',10,8,33);
        // Arial bold 15
        $this->SetFont('Times','B',15);
        // Movernos a la derecha
        $this->Cell(43);
        // Título
        $this->Cell(110,10,utf8_decode('Historial de Clientes de iCar Plus'),0,0,'C');
        // Salto de línea
        $this->Ln(30);
        $this->Cell(10);
        $this->Cell(25,10, utf8_decode('Cédula'),1,0,'C',0);
        $this->Cell(30,10, 'Nombre',1,0,'C',0);
        $this->Cell(30,10, utf8_decode('Teléfono'),1,0,'C',0);
        $this->Cell(32,10, utf8_decode('Sexo'),1,0,'C',0);
        $this->Cell(60,10, 'Correo',1,1,'C',0);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Times','B',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }


    $query="SELECT * FROM cliente ORDER BY sexo";
    $resultado= mysqli_query($connect,$query) or die("error: ".mysqli_error($connect));

    // Creación del objeto de la clase heredada
    ob_start ();
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','',12);
    $pdf->Cell(10);
    $pdf->Image('assets/img/reporte.jpg',0,0,45);
    $pdf ->SetFillColor(233,229,255);
    $pdf -> SetDrawColor(61,61,61);

    while($row = $resultado->fetch_assoc()){
        $pdf->Cell(25,10, $row['cedula'],1,0,'C',1);
        $pdf->Cell(30,10, $row['nombre'],1,0,'C',1);
        $pdf->Cell(30,10, $row['telefono'],1,0,'C',1);
        $pdf->Cell(32,10, $row['sexo'],1,0,'C',1);
        $pdf->Cell(60,10, $row['correo'],1,1,'C',1);
        $pdf->Cell(10);
    }

    $pdf->Output();
    ob_end_flush();
?>